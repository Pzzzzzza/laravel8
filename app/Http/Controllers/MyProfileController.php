<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyProfileController extends Controller
{
    public function create(Request $request )
	{
          $name = $request->get('name');
        $lastname = $request->get('lastname');

        $fullname = $name . " " . $lastname;
        $sensor_name = str_replace("a","*",$fullname);
        echo $sensor_name;

		return view("myprofile/create");
	}
    public function edit($id)
    {   
        $profile = (object)[
            "id" => $id,
            "name" => "James" ,
            "lastname" =>  "Mars",
            "email" => "james@vru.ac.th",
        ];
        $others = "hello world";
        return view("myprofile/edit" , compact('profile','others') );
    }

    public function show($id)
    {   
        $profile = (object)[
            "id" => $id,
            "name" => "James" ,
            "lastname" =>  "Mars",
            "email" => "james@vru.ac.th",
        ];
        $others = "hello world";
        return view("myprofile/show" , compact('profile','others') );
    }
    



}


   
