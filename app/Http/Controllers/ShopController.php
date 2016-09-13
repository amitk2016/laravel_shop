<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Intervention\Image\ImageManager;
use App\Products;

class ShopController extends Controller
{
    public function index(){
    	return view('shop.index');
    }

    public function add(){
    	return view('shop.add');
    }

    public function submit(Request $request){

    	$this->validate($request,[

    		'product_title' => 'required|min:1|max:255',
    		'product_description' => 'required|min:10',
            'amount' => 'required|numeric',
            'quantity' =>'required|number',
            'image' =>'required|image',


    	]);

        $newProduct = new Products();
        $newProduct->title = $request->product_title;
        $newProduct->description = $request->product_description;
        $newProduct->price = $request->price;
        $newProduct->quantity = $request->quantity;


        $manager = new ImageManager();

        $folder="./images/products";
        $imagename = preg_replace("/[^0-9a-zA-Z]/", "", $request->product_title);

        $productImage = $manager->make($request->image);
        $productImage->fit(100,100);
        $productImage->save($folder.'/'.$imagename.'.jpg',100);

        // $newProduct->save(); 
        return redirect('/shop');

        // var_dump($newProduct);
        // die();
    }
}
