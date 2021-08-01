<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'hello';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.items.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'company' => 'required',
            'type' => 'required',
            'butta' => 'required',
            'machinery' => 'required',
            'details' => 'required',
            'image' => 'required',
            ]);
        if ($request->hasFile('image'))
        {
            $this->validate($request,[
                'image'=>'image|mimes:jpeg,png,jpg,svg|max:5120',
            ]);
            $filename = fileUpload($request->file('image'),'assets/img/');
           Item::create([
                'name' => $request['name'],
            'company' => $request['company'],
                'type' => $request['type'],
                'butta' => $request['butta'],
                'machinery' => $request['machinery'],
                'image' => $filename??'',
                ]);
        }else{
            Item::create($request->all());
        }
        return redirect('items')->with('message','Item Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
