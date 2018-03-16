<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;

class MyController extends Controller
{
    public function XinChao()
    {
    	echo "hoc lap trinh laravel kho khong ban";
    }
    public function KhoaHoc($ten)
    {
    	echo "Khoa hoc:".$ten;
    }
    public function GetURL(Request $request)
    {
    	//return $request->url();
    	//if ($request->isMethod('post')) {
    	//	echo "Phuong thuc POST";
    	//}else{
    	//	echo "Khong phai phuong thuc post";
    	//}
    	if($request->is('My*')) {
    		echo "Co My";
    	}else{
    		echo "No co My";
    	}
    	/*gui nhan tham so tren Request vao views laravel tao file postf.blade.php*/
    }
    public function postForm(Request $request)
    {
    	echo "ten cua ban la:";
    	echo $request->input('HoTen');
    	/*if ($request->has('Tuoi')) {
    		echo "co tham so";
    	}else{
    		echo "khong co tham so";
    	}*/
    }
    public function setCookie()
    {
     $response = new Response();
     $response->withCookie('KhoaHoc','nguyen quyet');
     echo "setcookie";
     return $response;
    }

    public function getCookie(Request $request)
    {
    	echo "getcookie";
     	return $request->cookie('KhoaHoc');
    } //Mycontroller
}
