<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
     public function index()
     {
         return view('home.index');

     }


     public function test($id,$name)
     {
         echo "Parameter 1:", $id;
         echo "<br>Parameter 2:", $name;
         echo "<br>Id Number:", $id;
         echo "<br> Name:", $name;

         for ($i = 1; $i <= $id; $i++) {
             echo "<br> $i - $name";
         }
     }


     /*    public function param ($id,$number)
     {
         /*echo "Parameter 1 :", $id;
         echo "<br>Parameter 2 :", $number;
         echo "<br>Sum Parameters :", $id+$number ;


         return view('home.test2',
         [
              'id' => $id,
            'number' => $number
              ]);
*/
     }







