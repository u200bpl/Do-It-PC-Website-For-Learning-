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
        return view('welcome', [
            'gamingpcs' => Gamingpc::orderBy('price','asc')->get(),            
        ]);
    }

    public function tos()
    {
        return view('pages.info.tos', [
            'gamingpcs' => Gamingpc::orderBy('price','asc')->get(),
        ]);
    }

    public function privacy()
    {   
        return view('pages.info.privacy', [
            'gamingpcs' => Gamingpc::orderBy('price','asc')->get(),
        ]);
    }

    public function complaint()
    {   
        return view('pages.info.complaint', [
            'gamingpcs' => Gamingpc::orderBy('price','asc')->get(),
        ]);
    }

    public function contact()
    {   
        return view('pages.info.contact', [
            'gamingpcs' => Gamingpc::orderBy('price','asc')->get(),
        ]);
    }

    public function aboutus()
    {   
        return view('pages.info.aboutus', [
            'gamingpcs' => Gamingpc::orderBy('price','asc')->get(),
        ]);
    }

    public function faq()
    {   
        return view('pages.info.faq', [
            'gamingpcs' => Gamingpc::orderBy('price','asc')->get(),
        ]);
    }

    public function repair()
    {   
        return view('pages.info.repair', [
            'gamingpcs' => Gamingpc::orderBy('price','asc')->get(),
        ]);
    }

    public function custompc()
    {   
        return view('pages.custom-pc.index', [
            'gamingpcs' => Gamingpc::orderBy('price','asc')->get(),
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
