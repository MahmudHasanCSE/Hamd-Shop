<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    //

    protected $subcategory;
    protected $subcategories;

    public function index()
    {
        return view('admin.subcategory.add', ['categories' => Category::all()]);
    }

    public function create(Request $request)
    {
        SubCategory::newSubCategory($request);
        return redirect()->back()->with('message', 'SubCategory created successfully!');
    }

    public function manage()
    {
        $this->subcategories = SubCategory::orderBy('id', 'DESC')->get();
        return view('admin.subcategory.manage', ['subcategories' => $this->subcategories]);
    }

    public function edit($id)
    {
        return view('admin.subcategory.edit', [
            'subcategory' => SubCategory::find($id),
            'categories' => Category::all(),
        ]);
    }

    public function update(Request $request, $id)
    {
        SubCategory::updateSubCategory($request, $id);
        return redirect('/manage-subcategory')->with('message', 'SubCategory updated successfully!');
    }

    public function delete($id)
    {
        $this->subcategory = SubCategory::find($id);
        if (file_exists($this->subcategory->image))
        {
            unlink($this->subcategory->image);
        }
        $this->subcategory->delete();
        return redirect('/manage-subcategory')->with('message', 'SubCategory deleted successfully!');
    }
}
