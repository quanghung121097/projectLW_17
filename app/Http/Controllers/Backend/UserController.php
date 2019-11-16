<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\UserInfo;
use App\User;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreUserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Access\AuthorizationException;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userlogin=Auth::user();
        $users = User::orderBy('updated_at','desc')->paginate(15);
        // $users = User::simplePaginate(15);
        return view('backend.users.index')->with([
            'users' => $users,
            'userlogin' => $userlogin
            
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user=Auth::user();

        if ($user->can('create',$user)) {
            return view('backend.users.create');
        }else {
            return view('backend.users.error');
        }
        
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
        dd($request);
        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $namefile=$avatar->getClientOriginalName();
            $url='storage/avatar/'.$namefile;
            Storage::disk('public')->putFileAs('avatar',$avatar,$namefile);
        } else {
            echo 'Lỗi';
        }
        $user =new User();
        $user->avatar=$url;
        $user->name=$request->get('name');
        $user->email=$request->get('email');
        $user->phone=$request->get('phone');
        $user->password=bcrypt($request->get('password'));
        $user->is_admin=$request->get('is_admin');
        $save=$user->save();
        if ($save) {
            $request->session()->flash('success','Thêm mới thành công');

        } else {
            $request->session()->flash('error','Thêm mới không thành công');

        }
        return redirect()->route('backend.user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $user = User::find($id);
        // $userInfo = $user->userInfo;
        // dd($userInfo);
        $userInfo=UserInfo::find($id);
        $user=$userInfo->user;
        dd($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $userlogin=Auth::user();
        $user = User::find($id);

        if ($user->can('update',$userlogin)) {
            return view('backend.users.edit')->with([
             'user'=>$user,
             'userlogin'=>$userlogin,
         ]);
        }else {
            return view('backend.users.error');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user=user::find($id);
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        $data['avatar'] = $request->avatar;
        $data['password'] = $request->password;
        $data['is_admin'] = $request->is_admin;
        $validator = Validator::make($data,
            [
                'name'         => 'required|max:255|min:5',
                'password'   =>  'required|min:8',
                'phone' => 'required|numeric',
                'avatar' => 'required|image|max:2000',
                'email'         => 'required|email|unique:users,email,'.$user->id,
            ]
            
        );

        if ($validator->fails()){
            return back()
            ->withErrors($validator)
            ->withInput();
        }

        $avatar = $request->file('avatar');
        $namefile=$avatar->getClientOriginalName();
        $url='storage/avatar/'.$namefile;
        Storage::disk('public')->putFileAs('avatar',$avatar,$namefile);
        
        $user->avatar=$url;
        $user->name=$request->get('name');
        $user->email=$request->get('email');
        $user->is_admin=$request->get('is_admin');
        $user->password=bcrypt($request->get('password'));
        $user->phone=$request->get('phone');
        $user->updated_at=\Carbon\Carbon::now('Asia/Ho_Chi_Minh');
        $save=$user->save();
        if ($save) {
            $request->session()->flash('update_success','edit thành công');
        } else {
            $request->session()->flash('update_error','edit không thành công');
        }
        return redirect()->route('backend.user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     user::destroy($id);
        // Xoá với id tương ứng 
        // Chuyển hướng về trang danh sách
     return redirect()->route('backend.user.index');
 }
}
