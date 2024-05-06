<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    public function index(){
        $category = Category::where('status','0')->get(); //kalo 0 diambil
        $posts = Post::where('status','0')->orderBy('created_at', 'asc')->get();
        
        return view ('frontend.index' , compact('category' , 'posts'));
    }

    public function viewCategoryPost(string $category_slug){
        $category = Category::where('slug',$category_slug)->where('status','0')->first();
        if($category){
            $post = Post::where('category_id',$category->id)->where('status','0')->paginate(15);
            return view ('frontend.post.index' , compact('post','category'));
        }else{
            return redirect('/');
        }
    }


    public function viewPost(string $category_slug, string $post_slug){
        $category = Category::where('slug',$category_slug)->where('status','0')->first();
        if($category){
            $post = Post::where('category_id',$category->id)->where('slug',$post_slug)->where('status','0')->first();
            $latest_posts = Post::where('category_id',$category->id)->where('status','0')->orderBy('created_at','DESC')->get()->take(3);
            return view ('frontend.post.view' , compact('post' , 'category' , 'latest_posts'));
        }else{
            return redirect('/');
        } 
    }

    public function productlistajax(){
        $products = Post::select('name')->where('status','0')->get();
        $data = [];

        foreach($products as $item){
            $data[] = $item['name'];
        }
        return $data;
    }

    public function searchproductajax(Request $request){
        $searched_product = $request->product_name;

        if($searched_product != ""){
            $product = Post::where("name","LIKE","%$searched_product%")->first();
            if($product){
                return redirect('category/'.$product->category->slug.'/'.$product->slug);
            }else{
                return redirect()->back()->with('status','No Products matched');
            }
        }
        else{
            return redirect()->back();
        }
    }
}
