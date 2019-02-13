<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Subcategory;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function mostrarCategoria($category)
    {
        $categoryId = Category::where('name', $category)->first()->id;
        $arrayProductos = Product::where('category_id', $categoryId)->where('active', 1)->get();

        //$products = Category::find($categoryId)->products;
        //$nombreCategoria = Product::find($id)->category()->name;

        return view('category.index', array('arrayProductos' => $arrayProductos, 'category' => $category));
    }
    public function mostrarSubcategoria($category, $subCategory)
    {
        $categoryId = Category::where('name', $category)->first()->id;
        $subcategoryId = Subcategory::where('name', $subCategory)->first()->id;
        $arrayProductos = Product::where('category_id', $categoryId)->where('subcategory_id', $subcategoryId)->where('active', 1)->get();
        return view('category.index', array('arrayProductos' => $arrayProductos, 'category' => $category, 'subCategory' => $subCategory));
    }
}
