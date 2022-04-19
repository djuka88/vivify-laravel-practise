<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct(){
        $this->middleware('age')->only('sensitive');
    }

    public function index(){
        return view('welcome',[
            'first_name' => 'Milan Djukic'
        ]);
    }

    public function sensitive(){
        return view('sensitivePage');
    }

    public function token(){
        return csrf_token();
    }

    public function store(Request $request){
        //$param1 =  $request->input('param1');
        $param1 = $request->param1;
        $param2 =  $request->input('param2');

        return $param1." ".$param2;
    }

    public function update(Request $request, $id){
        $param1 = $request->get('param1');

        return "Updating resource with id = ".$id." with new value: ".$param1;
    }

    public function destroy($id){
        return "Deleted resource with id: ".$id;
    }

    public function edit(Request $request, $id){
        $param1 = $request->get("param1");
        return "Patching resource with id:".$id." with value: ".$param1;
    }
}
