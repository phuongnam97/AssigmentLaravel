<?php

namespace App\Http\Controllers;

use App\Comestic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ComesticController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_obj = Comestic::all();
        return view('admin.comestic.list')->with('list_obj', $list_obj);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.comestic.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $obj = new Comestic();
        $obj->name = Input::get('name');
        $obj->description = Input::get('description');
        $obj->price = Input::get('price');
        $obj->category = Input::get('category');
        $obj->images = Input::get('images');
        $obj->content = Input::get('content');
        $obj->note = Input::get('note');
        $obj->save();
        return redirect('admin/comestic');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $obj = Comestic::find($id);
        if ($obj == null) {
            return view('404');
        }
        return view('admin.comestic.list')
            ->with('obj', $obj);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $obj = Comestic::find($id);
        if ($obj == null) {
            return view('404');
        }
        return view('admin.comestic.edit')
            ->with('obj', $obj);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $obj = Comestic::find($id);
        if ($obj == null) {
            return view('404');
        }
        $obj->name = Input::get('name');
        $obj->description = Input::get('description');
        $obj->price = Input::get('price');
        $obj->category = Input::get('category');
        $obj->images = Input::get('images');
        $obj->content = Input::get('content');
        $obj->note = Input::get('note');
        $obj->save();
        return redirect('/admin/comestic');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obj = Comestic::find($id);
        if ($obj == null) {
            return response('Product not found or has been deleted!', 404);
        }
        $obj->delete();
        return response('Deleted', 200);
    }
}
