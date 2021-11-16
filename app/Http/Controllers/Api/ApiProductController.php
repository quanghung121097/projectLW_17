<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\ProductService;
use Illuminate\Http\Request;
use App\User;
use JWTAuth;
use JWTAuthException;
use Illuminate\Support\Facades\Hash;

class ApiProductController extends Controller
{
    private $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function search(Request $request)
    {
        $data['page'] = $request->page ?? 1;
        $data['select'] = $request->select ?? [];
        $data['sortBy'] =  $request->sortBy ?? 'created_at';
        $data['conditions'] = [] ;
        $errors = [];
        if(isset($request->name)){
            $data['conditions'][] = [
                'key' => 'name',
                'value' => $request->name,
                'operation' => 'like',
            ];
        } 
        if(isset($request->category_id)){
            $data['conditions'][] = [
                'key' => 'category_id',
                'value' => $request->category_id
            ];
        }
        if(isset($request->status)){
            $data['conditions'][] = [
                'key' => 'status',
                'value' => $request->status,
                
            ];
        } 
        $conditionFieldInt = $request->only(['view_count','origin_price','sale_price']);
        foreach($conditionFieldInt as $key => $condition){
                $operation = $condition['operation'] ?? '=';
                switch ($operation) {
                    case 'between':
                        if(!isset($condition['value']['start']) || !isset($condition['value']['end']) || ( (int) $condition['value']['start'] >= (int) $condition['value']['end'] )){
                            $errors[] = 'Khoảng giá trị '.$key.' không đúng định dạng ';
                        }
                        break;
                    
                    default:
                        if(!is_numeric($condition['value'])){
                            $errors[] = 'Khoảng giá trị '.$key.' không đúng định dạng ';
                        }
                        break;
                }
                $data['conditions'][] = [
                    'key' => $key,
                    'value' => $condition['value'] ?? 0,
                    'operation' => $operation,
                ];
        }
        
        if(empty($errors)){
            $products = $this->productService->search($data);
            return response(['success' => true, 'data' => $products]);
        }else{
            return response(['success' => false, 'message' => $errors ?? 'Có lỗi xảy ra vui lòng thử lại']);
        }
    }
}
