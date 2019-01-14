<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Provider;
use DB;

class ProvidersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prov = Provider::all();
        $prov = Provider::orderBy('created_at', 'desc')->get();
        $prov = Provider::orderBy('title','desc')->take(1)->get();
        $prov = DB::select('SELECT * FROM providers WHERE id=3'); // return to see query result

        $prov = Provider::orderBy('created_at', 'desc')->paginate(5);

        //return Provider::where('title', 'hakinson')->get();
        return view('providers.index')->with('providers', $prov);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('providers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
          //array of rules
          'title'   => 'required',
          'address' => 'required',
          'bio'     => 'required'
        ]);

        // create Provider - similar to tinker, but fetching data from $request
        $provider = new Provider();
        $provider->title   = $request->input('title');
        $provider->address = $request->input('address');
        $provider->bio     = $request->input('bio');
        $provider->save();
        
        // the redirect to list, with message success, recognised as a session variable
        // reference in includes.messages
        return redirect('/providers')->with('success', 'Post created successfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prov = Provider::find($id);
        return view('providers.show')->with('details', $prov);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $provider = Provider::find($id);
        return view('providers.edit')->with('provider', $provider);
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
        $this->validate($request, [
            'title'   => 'required',
            'address' => 'required',
            'bio'     => 'required',
        ]);

        $provider = Provider::find($id);
        $provider->title   = $request->input('title');
        $provider->address = $request->input('address');
        $provider->bio     = $request->input('bio');
        $provider->save();

        return redirect('/providers')->with('success', 'Provider updated successfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $provider = Provider::find($id);
        $provider->delete();

        return redirect('/providers')->with('success', "Post of \"$provider->title\" with id: $provider->id successfuly removed.");
    }
}
