<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Models\User;
use App\Models\Order;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){
        $categories = Category::count();
        $posts = Post::count();
        $orderspending = Order::where('status','0')->count();
        $orderscompleted = Order::where('status','1')->count();
        $users = User::where('role_as','0')->count();
        $admins = User::where('role_as','1')->count();

        return view ('admin.dashboard' , compact('categories','posts','users','admins','orderspending','orderscompleted'));
    }
}
