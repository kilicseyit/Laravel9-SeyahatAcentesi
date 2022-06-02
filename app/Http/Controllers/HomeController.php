<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Faq;
use App\Models\Message;
use App\Models\Package;
use App\Models\Setting;
use Hamcrest\Core\Set;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
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
    public function about()
    {

        $setting= Setting::first();
        return view('home.about',[
            'setting'=>$setting,


        ]);
    }
    public function references()
    {
        $setting= Setting::first();
        return view('home.references',[
            'setting'=>$setting,


        ]);
    }
    public function contact()
    {
        $setting= Setting::first();
        return view('home.contact',[
            'setting'=>$setting,


        ]);
    }
    public function faq()
    {
        $setting= Setting::first();
        $datalist= Faq::all();
        return view('home.faq',[
            'setting'=>$setting,
            'datalist'=>$datalist,


        ]);
    }
    public function storemessage(Request $request)
    {
        //dd($request);
      $data=new Message();
      $data->name = $request->input('name');
      $data->email = $request->input('email');
      $data->phone = $request->input('phone');
      $data->subject = $request->input('subject');
      $data->message = $request->input('message');
      $data->ip=request()->ip();
      $data->save();
      return redirect()->route('contact')->with('info','Your message has been sent , Thank You');
    }

    public function storecomment(Request $request)
    {
        //dd($request); //Check your values

        $data=new Comment();
        $data->user_id =  Auth::id(); //logged in user id
        $data->package_id = $request->input('package_id');
        $data->subject = $request->input('subject');
        $data->review = $request->input('review');
        $data->rate = $request->input('rate');
        $data->ip=request()->ip();
        $data->save();
        return redirect()->route('package',['id'=>$request->input('package_id')])->with('info','Your comment has been sent , Thank You');
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
        $data=Package::find($id);
        $images = DB::table('images')->where('package_id', $id)->get();
        $reviews = Comment::where('package_id',$id)->get();
        return view('home.package',[
            'data'=>$data,
            'images'=>$images,
            'reviews'=>$reviews,

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







