<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Gamingpc;
use App\Models\Processor;
use App\Models\Graphicscard;
use App\Models\Ram;
use App\Models\Ssd;
use App\Models\Hdd;
use App\Models\Motherboard;
use App\Models\Powersuply;
use App\Models\Pccase;
use App\Models\Cooler;

class GamingpcController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.gaming-pc.index', [
            'gamingpcs' => Gamingpc::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('pages.gaming-pc.create', [
            'gamingpcs' => Gamingpc::all(),
            'processors' => Processor::all(),
            'graphicscards' => Graphicscard::all(),
            'rams' => Ram::all(),
            'ssds' => Ssd::all(),
            'hdds' => Hdd::all(),
            'motherboards' => Motherboard::all(),
            'powersuplies' => Powersuply::all(),
            'cases' => Pccase::all(),
            'coolers' => Cooler::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        // dd($request->all());
        $request->validate([
            'name' => 'required|max:255|min:3|unique:gamingpcs',
            // 'img' => 'required',
            'processor_id' => 'required',
            'motherboard_id' => 'required',
            'graphicscard_id' => 'required',
            'ram_id' => 'required',
            'ssd_id' => 'required',
            'hdd_id' => 'required',
            'cooler_id' => 'required',
            'powersuply_id' => 'required',
            'case_id' => 'required',
            'price' => 'required',
        ]);

        Gamingpc::create($request->except('_token'));
        return redirect()->route('admin.index')->with('success', 'Gaming PC created successfully!');
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
    public function destroy($id) {
        Gamingpc::destroy($id);
        return redirect()->route('admin.index');
    }
}
