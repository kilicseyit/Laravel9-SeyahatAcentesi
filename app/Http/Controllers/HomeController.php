<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\Setting;
use Hamcrest\Core\Set;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public static function maincategorlist()
    {

    }


     public function index()
     {

         $page='home';
         $sliderdata=Package::limit(4)->get();
         $packagelist1=Package::limit(4)->get();
         $setting= Setting::first();
         return view('home.index',[
             'page'=>$page,
             'setting'=>$setting,
             'sliderdata'=>$sliderdata,
             'packagelist1'=>$packagelist1,


         ]);
       }
    public function categories()
    {

        $categories=Category::all();
        return view('home.categories',[

            'categories'=>$categories,


        ]);

    }

    public function categorypackages($id)
    {

        $category=Category::find($id);
        return view('home.categorypackages',[

            'category'=>$category,


        ]);

    }



    public function package($id)
    {
        $images = DB::table('images')->where('package_id', $id)->get();
        $data=Package::find($id);

        return view('home.package',[
            'data'=>$data,
            'images'=>$images,
        ]);
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







