<?php
namespace App\Http\Controllers;

class StudentController
{
    function info($name, $age)
    {
        return view('home')->with('name', $name)->with('age', $age);
    }
function answer($ans){
    if($ans == 'a'){
        $msg = "Your answer is correct";
        $type = "success";
    }else{
        $msg = "Your answer is not correct";
        $type = "danger";
    }
    return view('answer',compact('msg','type'));
}
    // function home()
    // {
    //     // $name = "Abdullah";
    //     // $age = 20;
    //     return view('home')->with('name', $name)->with('age', $age);
    // }

    // function about()
    // {
    //     return 'about';
    // }
 


}