<?php

namespace Modules\Front\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Request as FacadesRequest;
use Modules\Front\Entities\Cart;
use Modules\Front\Entities\Category;
use Modules\Front\Entities\location as EntitiesLocation;
use Modules\Front\Entities\Locationsec;
use Modules\Front\Entities\Product;
use phpDocumentor\Reflection\Location;

class FrontController extends Controller
{
    
    public function index()
    {
       
        return view('front::index');
    }
    public function allcategory()
    {

        $product = Product::all();
        return view('front::category',compact('product'));
    }
    public function login(Request $request)
    {
        $name = $request->input('name');
        $pass = md5($request->input('password'));
        //password==img
        $result = User::all();
        foreach ($result as $row){
            if($row->name==$name and $row->img==$pass){
                return redirect()->route('homepage',
                [
                    'name'=>$request->session()->put('name',$row->name),
                    'phone'=>$request->session()->put('phone',$row->phone),
                    'addresse'=>$request->session()->put('addresse',$row->addresse),
                    'password'=>$request->session()->put('password',$pass),
                    'id'=>$request->session()->put('id',$row->id)
                ]);
            }
        }
        return redirect()->route('ui');
    }
    public function register(Request $request)
    {
        User::create([
            'name'=>$request->input('name'),
            'img'=>md5($request->input('password')),
            'phone'=>$request->input('phone'),
            'addresse'=>$request->input('addresse'),

        ]);
       
        return redirect()->route('ui');
    }
    
    public function registerUI(Request $request)
    {
        return view('front::login_register_modal');
    }
    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect()->route('homepage');
    }
    public function profile(){
        $Category = Category::with('cart')->with('user')->get();
        $admin = Category::with('cart')->with('user')->get();
        
        return view('front::profile_user',compact('Category','admin'));
    }
    public function update_user(Request $request,$id)
    {

       $dat =  User::find($id)->update(
            [
            'name'=>$request->input('name'),
            'img'=>md5($request->input('new_pass'))
            ]
        );
        return redirect()->route('ui');
    }

    public function additem($name,$section,$id){
        Category::create([
            'section'=>$section,
            'name'=>$name,
            'user_id'=>$id,
        ]);
        return redirect()->route('allcategory')->with(['message'=>'كمل عملية التسوق && اذهب الى الصفحة الشخصية && تمت الاضافة']);
    }
    public function pay($cat_id,$name,$section,$sm,$md,$lg,$leter,$leterhalf,$fiveleter){
        $loc = Locationsec::all();
        
        return view('front::cart_form',compact('loc','cat_id','name','section','sm','md','lg','leter','leterhalf','fiveleter'));   
    }

    public function add_cart(Request $request)
    {
        $price_type = $request->input('type_price');
        $price_type = str_replace('[',"",$price_type);
        $price_type = str_replace(']',"",$price_type);
        $price_type = explode(",",$price_type);
        $price = (int)$price_type[0];
        $type = $price_type[1];
        $quantity =$request->input('quantity');
        $final_price = $price * $quantity;
        Cart::create(
            [
                
                'section'=>$request->input('section'),
                'name'=>$request->input('name'),
                'type'=>$type,
                'price'=>$final_price,
                'quantity'=>$request->input('quantity'),
                'sector'=>$request->input('sector'),//الفرع
                'track'=>$request->input('track'),//حى
                'category_id'=>$request->input('cat_id'),
            ]
            );
           
        return redirect()->route('profile')->with(['message'=>'تم التسوق']);
    }
    public function delete_request($id)
    {
       $deleted = Category::find($id);
       $deleted->delete();
       return redirect()->route('profile');
    }
    public function contactus()
    {
       return view('front::contact');
    }
}
