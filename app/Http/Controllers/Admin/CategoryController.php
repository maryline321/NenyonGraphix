<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    public function index()
    {
        $category =Category::all();

        return view('admin.category.index', compact('category'));
    }

    public function addcategory()
    {
        return view('admin.category.addcategory');
    }

    public function insertcategory(Request $request)

    {
        $category= new Category();
        if($request->hasFile('image'))
        {
            $file=$request->file('image');
            $ext=$file->getClientOriginalExtension();
            $filename =time().'.'.$ext;
            $file->move('images/uploads/category',$filename);
            $category->image = $filename;
        }
        $category->name =$request->input('name');
        $category->slug =$request->input('slug');
        $category->description =$request->input('description');
        $category->status =$request->input('status') == TRUE ? '1':'0';
        $category->popular =$request->input('popular') == TRUE ? '1':'0';
        $category->meta_title =$request->input('meta_title');
        $category->meta_descrip =$request->input('meta_descrip');
        $category->meta_keywords =$request->input('meta_keywords');
        $category->save();
        return redirect('/categories')->with('status', "Category Added Successfully");

    }

    public function editcategory($id)
    {
        $category =Category::find($id);
        return view('admin.category.editcategory', compact('category'));
    }

    public function updatecategory(Request $request, $id)
    {
        $category =Category::find($id);
        if($request->hasFile('image'))
        {
            $path= 'images/uploads/category/'.$category->image;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $file=$request->file('image');
            $ext=$file->getClientOriginalExtension();
            $filename =time().'.'.$ext;
            $file->move('images/uploads/category',$filename);
            $category->image = $filename;
        }
        $category->name =$request->input('name');
        $category->slug =$request->input('slug');
        $category->description =$request->input('description');
        $category->status =$request->input('status') == TRUE ? '1':'0';
        $category->popular =$request->input('popular') == TRUE ? '1':'0';
        $category->meta_title =$request->input('meta_title');
        $category->meta_descrip =$request->input('meta_descrip');
        $category->meta_keywords =$request->input('meta_keywords');
        $category->update();
        return redirect('/categories')->with('status', "Category Updated Successfully");
    }

    
    public function deletecategory($id)
    {
        $category =Category::find($id);
        if($category->image)
        {
            $path= 'images/uploads/category/'.$category->image;
            if(File::exists($path))
            {
                File::delete($path);
            }
            
        }
        $category->delete();
        return redirect('/categories')->with('status', "Product Category Deleted Successfully");


    }
}
