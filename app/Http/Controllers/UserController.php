<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $list_product = Product::all();
        $list_category = Category::all();

        return view('user.list')->with('list_product', $list_product)->with('list_category', $list_category);
    }

    public function show($id)
    {
        $obj = Product::find($id);
        if ($obj == null) {
            return view('404');
        }
        return view('user.list')
            ->with('obj', $obj);
    }
}
