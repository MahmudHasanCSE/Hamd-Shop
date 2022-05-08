<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    //

    protected $brand;
    protected $brands;

    public function index()
    {
        return view('admin.brand.add');
    }

    public function create(Request $request)
    {
        Brand::newBrand($request);
        return redirect()->back()->with('message', 'Brand created successfully!');
    }

    public function manage()
    {
        $this->brands = Brand::orderBy('id', 'DESC')->get();
        return view('admin.brand.manage', ['brands' => $this->brands]);
    }

    public function edit($id)
    {
        return view('admin.brand.edit', ['brand' => Brand::find($id)]);
    }

    public function update(Request $request, $id)
    {
        Brand::updateBrand($request, $id);
        return redirect('/manage-brand')->with('message', 'Brand updated successfully!');
    }

    public function delete($id)
    {
        $this->brand = Brand::find($id);
        if (file_exists($this->brand->image))
        {
            unlink($this->brand->image);
        }
        $this->brand->delete();
        return redirect('/manage-brand')->with('message', 'Brand deleted successfully!');
    }
}
