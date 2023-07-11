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
use App\Models\Performance;
use App\Models\Game;

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
            'gamingpcs' => Gamingpc::orderBy('price','asc')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('pages.gaming-pc.create', [
            'gamingpcs' => Gamingpc::orderBy('price','asc')->get(),
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
        $request->validate([
            'name' => 'required|max:255|min:3|unique:gamingpcs',
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
        return view('pages.gaming-pc.show', [
            'gamingpcs' => Gamingpc::orderBy('price','asc')->get(),
            'gamingpc' => Gamingpc::findorfail($id),
            'performances' => Performance::where('gamingpc_id', $id)->get(),
            'games' => Game::all()
        ]);                 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $gamingpc = Gamingpc::findOrFail($id);
        return view('pages.gaming-pc.edit', [
            'gamingpcs' => Gamingpc::orderBy('price','asc')->get(),
            'processors' => Processor::all(),
            'graphicscards' => Graphicscard::all(),
            'rams' => Ram::all(),
            'ssds' => Ssd::all(),
            'hdds' => Hdd::all(),
            'motherboards' => Motherboard::all(),
            'powersuplies' => Powersuply::all(),
            'cases' => Pccase::all(),
            'coolers' => Cooler::all()
            ])->with(['gamingpc' => $gamingpc]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)  {
        $this->validate($request, [
            'name' => 'required|max:255|min:3|unique:gamingpcs',
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

        $gamingpc = Gamingpc::findOrFail($id);

        $gamingpc->name = $request->name;
        $gamingpc->processor_id = $request->processor_id;
        $gamingpc->motherboard_id = $request->motherboard_id;
        $gamingpc->graphicscard_id = $request->graphicscard_id;
        $gamingpc->ram_id = $request->ram_id;
        $gamingpc->ssd_id = $request->ssd_id;
        $gamingpc->hdd_id = $request->hdd_id;
        $gamingpc->cooler_id = $request->cooler_id;
        $gamingpc->powersuply_id = $request->powersuply_id;
        $gamingpc->case_id = $request->case_id;
        $gamingpc->price = $request->price;
        $gamingpc->save();

        return redirect()->route('admin.index');
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

    public function admin() {
        return view('pages.admin.gaming-pc.index', [
            'gamingpcs' => Gamingpc::all()
        ]);
    }
}
