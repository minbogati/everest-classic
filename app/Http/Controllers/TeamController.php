<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::all();
        return view('backend.pages.teams.index',compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.teams.create');
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
            'name' => ['required'],
            'contact' => ['required'],
            'position' => ['required'],
            'address' => ['required'],
            'facebook' => ['required'],
            'img' => ['required'],
        ]);
        if ($request->hasFile('img')) {
            $this->validate($request, [
                'img' => 'image|mimes:jpeg,png,jpg,svg|max:5120',
            ]);
            $filename = fileUpload($request->file('img'),'images/teams/');
            Team::create([
                'name' => $request['name'],
                'contact' => $request['contact'],
                'position' => $request['position'],
                'address' => $request['address'],
                'facebook' => $request['facebook'],
                'img' => $filename??'',
            ]);
        }else{
            Team::create($request->all());
        }
        return Redirect::to('teams')->with('message','Team member Added Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return 'hello';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $team = Team::findOrfail($id);
        return view('backend.pages.teams.edit', compact('team'));
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
        $team = Team::findOrafail($id);
       $this->validate($request,[
        'name' => ['required'],
        'contact' => ['required'],
        'position' => ['required'],
        'address' => ['required'],
        'facebook' => ['required'],
        'img' => ['required'],
       ]);
       if ($request->hasFile('img')) {
        $this->validate($request, [
            'img' => 'image|mimes:jpeg,png,jpg,svg|max:5120',
        ]);
        $filename = fileUpload($request->file('img'),'images/teams/');
        $team->update([
            'name' => $request['name'],
            'contact' => $request['contact'],
            'position' => $request['position'],
            'address' => $request['address'],
            'facebook' => $request['facebook'],
            'img' => $filename??'',
        ]);
    }else{
       $team->update($request->all());
    }
    return Redirect::to('teams')->with('message','Team member Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $teams = Team::findOrfail($id);
       $teams->delete();
       return redirect('teams')->with('message','Team Deleted Successfully');
    }
}
