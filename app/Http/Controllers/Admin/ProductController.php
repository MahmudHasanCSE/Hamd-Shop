<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\SubImage;
use App\Models\Unit;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    protected $product;
    protected $products;
    protected $subcategories;

    public function index()
    {
        return view('admin.product.add', [
            'categories' => Category::all(),
            'subcategories' => SubCategory::all(),
            'brands' => Brand::all(),
            'units' => Unit::all(),
        ]);
    }

    public function create(Request $request)
    {
        $this->product = Product::newProduct($request);
        SubImage::newSubImage($request, $this->product);
        return redirect()->back()->with('message', 'Product created successfully!');
    }

    public function manage()
    {
        $this->products = Product::orderBy('id', 'DESC')->get();
        return view('admin.product.manage', ['products' => $this->products]);
    }

    public function edit($id)
    {
        return view('admin.product.edit', ['product' => Product::find($id)]);
    }

    public function update(Request $request, $id)
    {
        Product::updateProduct($request, $id);
        return redirect('/manage-product')->with('message', 'Product updated successfully!');
    }

    public function delete($id)
    {
        $this->product = Product::find($id);
        if (file_exists($this->product->image))
        {
            unlink($this->product->image);
        }
        $this->product->delete();
        return redirect('/manage-product')->with('message', 'Product deleted successfully!');
    }

    public function getSubCategory($id)
    {
        $this->subcategories = SubCategory::where('category_id', $id)->get();
        return json_encode($this->subcategories);
    }
}
