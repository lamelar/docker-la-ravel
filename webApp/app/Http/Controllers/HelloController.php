<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class HelloController extends Controller
{
    function __invoke(Request $request, Response $response){
        $items = DB::select('select * from people');
        return view('hello.index',['items' => $items]);
    
    }

    function post(Request $request, Response $response){
        $id = $request->id;
        $data = ['request'=>$id, 
                 'msg' => $request->msg
                ];
            return view('hello.index',$data);
    
    }

    function index(){
        return '<html><body>Hello!!!<p>controller</p></body></html>';
    }
}
