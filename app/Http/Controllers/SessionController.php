<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    
    public function set()
    {
    	session([
    		'user_id'=>'123',
    		'name'=>'hung'
    	]);
    	
    }
    public function get()
    {
    	$value=session()->get('user_id');
    	$name=session()->get('name');
    	$phone=session()->get('phone','123456789');
    	if (session()->has('name')) {
    		echo 'có';
    	} else {
    		echo 'không';
    	}
    	dd(session()->all());
    	echo 'id: '.$value;
    	echo '<br>';
    	echo 'Name:'.$name;
    	echo '<br>';
    	echo 'phone: '.$phone;
    }
    public function get2()
    {
    	session()->pull('user_id');
    	$value=session()->get('user_id');
    	echo 'id: '.$value;
    	
    }
}
