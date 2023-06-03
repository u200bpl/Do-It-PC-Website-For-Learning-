<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Gamingpc;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gamingpcs = Gamingpc::take(5)->get();
        return view('welcome', [
            'gamingpcs' => $gamingpcs
        ]);
    }

    public function tos()
    {
        return view('pages/info/tos', [

        ]);
    }

    public function privacy()
    {
        return view('pages/info/privacy', [

        ]);
    }

    public function complaint()
    {
        return view('pages/info/complaint', [

        ]);
    }

    public function contact()
    {
        return view('pages/info/contact', [

        ]);
    }

    public function aboutus()
    {
        return view('pages/info/aboutus', [

        ]);
    }

    public function faq()
    {
        return view('pages/info/faq', [

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
