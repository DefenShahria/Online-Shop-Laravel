<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Intervention\Image\Laravel\Facades\Image;
use Illuminate\Http\Request;

class PostController extends Controller
{
    Public function datastore(Request $request){

            $request->validate([
                'product_name' => 'required|string|max:255',
                'product_description' => 'required|string',
                'product_price' => 'required|numeric',
                'product_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048' 
                 ]);

      //  $imageName= time().'.'.$request->product_image->extension();
       // $request->product_image->move(public_path('images'),$imageName);
        $post = new Post;


        $avatar = $request->file('product_image');
        $filename = time() . '.' . $avatar->getClientOriginalExtension();
        $image = Image::read($avatar);
        // Resize image
        $image->resize(300, 300, function ($constraint) {
            $constraint->aspectRatio();
        })->save(public_path('images/' . $filename));
        $post->image = $filename;


        $post->name = $request->product_name;
        $post->details= $request->product_description;
        $post->price= $request->product_price;
        //$post->image = $request->product_image;

        $post ->save();
        return redirect()->back()->with('success','Product Creared !');
        
    }
}
