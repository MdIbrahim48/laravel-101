<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController 
{
    public function home(){
        $name = 'Joni';
        $age = 22;
        $students=[
            [
                'name'=>'Ibrahim',
                'age'=>22,
                'section'=>1,
                'status'=>1
            ],
            [
                'name'=>'Rahim',
                'age'=>21,
                'section'=>2,
                'status'=>0
            ],
            [
                'name'=>'Karim',
                'age'=>25,
                'section'=>5,
                'status'=>1
            ]
        ];
        //return view('about',compact('name'));
        return view('about',[
            'name'=>ucfirst($name),
            'age'=>$age,
            'students'=>$students
        ]);
       // return view('about')->with('name',$name);
    }
}
