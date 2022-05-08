<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubImage;
use Illuminate\Http\Request;

class HamdController extends Controller
{
    //
    protected $product;
    protected $products;
    protected $relatedProducts;

    public function index()
    {
        $this->products = Product::where('status', 1)->take(8)->get();
        return view ('front.home.home', [
            'products' => $this->products,
        ]);
    }

    public function shop($id)
    {
        $this->products = Product::where('category_id', $id)->get();
        return view('front.shop.shop', [
            'products' => $this->products,
            'category' => Category::find($id),
        ]);
    }

    public function details($id)
    {
        $this->product = Product::find($id);
        $this->relatedProducts = Product::where('category_id', $this->product->category_id)->take(4)->get();
        return view('front.product.details', [
            'product'         => $this->product,
            'relatedProducts' => $this->relatedProducts,
            'subImages'       => SubImage::where('product_id', $this->product->id)->get(),
        ]);
    }

    public function getProductDataForModal()
    {
        $this->product = Product::find($_GET['id']);
        $this->product->hit_count = $this->product->hit_count + 1;
        $this->product->save();
        return json_encode($this->product);
    }
}
