<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\blog;

class abhyController extends Controller
{
    //
    public function index(){

        $blogs = blog::all();
        

    	return view ('blogGw/abhy', ['blogs' => $blogs]);

    }
    public function show($id){
/*    	$nilai = 'Ini adalah link nya ' . $id;
    	$user = 'saya habibie alnino';

        DB::table('users')->insert([
            ['nama' => 'markonah', 'pasword' => '654']
        ]);

    	$users = DB::table('users')->get();

        // dd($users);

       

        $unescaped = '<script> alert("Hallo!") </script>';*/

        $blogs = blog::find($id);
        dd($blogs);

    	return view ('blogGw/web1', ['blogGw' => $nilai, 'users' => $users, 'unescaped' => $unescaped, 'blog' => $blog]);
    }
}
