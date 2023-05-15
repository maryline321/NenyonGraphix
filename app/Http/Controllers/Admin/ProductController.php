<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function index()
    {
        $products =Product::all();
        return view('admin.product.index', compact(('products')));
    }

    public function addproduct()
    {
        $cate_gory=Category::all();
        return view('admin.product.addproduct', compact(('cate_gory')));
    }

    public function insertproduct(Request $request)
    {
        $product= new product();
        if($request->hasFile('image'))
        {
            $file=$request->file('image');
            $ext=$file->getClientOriginalExtension();
            $filename =time().'.'.$ext;
            $file->move('images/uploads/product',$filename);
            $product->image = $filename;
        }

        $product->category_id =$request->input('category_id');
        $product->name =$request->input('name');
        $product->small_descrription =$request->input('small_descrription');
        $product->description =$request->input('description');
        $product->original_price =$request->input('original_price');
        $product->selling_price =$request->input('selling_price');
        $product->quantity =$request->input('quantity');
        $product->tax =$request->input('tax');
        $product->status =$request->input('status') == TRUE ? '1':'0';
        $product->trending =$request->input('trending') == TRUE ? '1':'0';
        $product->meta_title =$request->input('meta_title');
        $product->meta_description =$request->input('meta_description');
        $product->meta_keywords =$request->input('meta_keywords');
        $product->save();
        return redirect('/products')->with('status', "Product Added Successfully");

    }

    public function editproduct($id)
    {
        $product =Product::find($id);
        return view('admin.product.editproduct', compact('product'));
    }

    public function updateproduct(Request $request, $id)
    {
        $product =product::find($id);
        if($request->hasFile('image'))
        {
            $path= 'images/uploads/product/'.$product->image;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $file=$request->file('image');
            $ext=$file->getClientOriginalExtension();
            $filename =time().'.'.$ext;
            $file->move('images/uploads/product',$filename);
            $product->image = $filename;
        }
    
        $product->name =$request->input('name');
        $product->small_descrription =$request->input('small_descrription');
        $product->description =$request->input('description');
        $product->original_price =$request->input('original_price');
        $product->selling_price =$request->input('selling_price');
        $product->quantity =$request->input('quantity');
        $product->tax =$request->input('tax');
        $product->status =$request->input('status') == TRUE ? '1':'0';
        $product->trending =$request->input('trending') == TRUE ? '1':'0';
        $product->meta_title =$request->input('meta_title');
        $product->meta_description =$request->input('meta_description');
        $product->meta_keywords =$request->input('meta_keywords');
        $product->update();
        return redirect('/products')->with('status', "Product Updated Successfully");
    }

    public function deleteproduct($id)
    {
        $product =Product::find($id);
        if($product->image)
        {
            $path= 'images/uploads/product/'.$product->image;
            if(File::exists($path))
            {
                File::delete($path);
            }
            
        }
        $product->delete();
        return redirect('/categories')->with('status', "Product Deleted Successfully");


    }

}
