<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    //

    protected $unit;
    protected $units;

    public function index()
    {
        return view('admin.unit.add');
    }

    public function create(Request $request)
    {
        Unit::newUnit($request);
        return redirect()->back()->with('message', 'Unit created successfully!');
    }

    public function manage()
    {
        $this->units = Unit::orderBy('id', 'DESC')->get();
        return view('admin.unit.manage', ['units' => $this->units]);
    }

    public function edit($id)
    {
        return view('admin.unit.edit', ['unit' => Unit::find($id)]);
    }

    public function update(Request $request, $id)
    {
        Unit::updateUnit($request, $id);
        return redirect('/manage-unit')->with('message', 'Unit updated successfully!');
    }

    public function delete($id)
    {
        $this->unit = Unit::find($id);
        $this->unit->delete();
        return redirect('/manage-unit')->with('message', 'Unit deleted successfully!');
    }
}
