<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    //

    public function hello3()
    {
    	return "Hola desde el controlador"; 
    }
   	public function hello4()
    {
    	return  view('hello4'); 
    }   
    public function hello5($firstname, $lastname)
    {
    	echo $firstname;
    	echo $lastname;
    	return  view('hello5', ['firstname' => $firstname],['lastname' => $lastname] ); 
    }  
    public function prueba(){
        return view('prueba1');
    } 
}
