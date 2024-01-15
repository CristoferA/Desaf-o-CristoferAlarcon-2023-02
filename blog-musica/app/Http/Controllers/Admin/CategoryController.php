<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\CategoryFormRequest;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::all();
        return view('admin.category.index', compact('category'));
    }
    public function create()
    {
        return view('admin.category.create');
    }
    public function store(CategoryFormRequest $request)
    {
        $data = $request->validated();

        $category = new Category;
        $category->artist = $data['artist'];
        $category->title_song = $data['title_song'];
        $category->title_album = $data['title_album'];
        $category->year = $data['year'];
        $category->genre = $data['genre'];
        $category->duration = $data['duration'];
        //si hay archivo se guarda en una variable

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/category/images/', $filename);
            $category->image = $filename;
        }

        if ($request->hasfile('song')) {
            $file = $request->file('song');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/category/songs/', $filename);
            $category->song = $filename;
        }


        $category->navbar_status = $request->navbar_status == true ? '1' : '0';
        $category->status = $request->status == true ? '1' : '0';
        $category->created_by = Auth::user()->id;
        $category->save();

        return redirect('admin/category')->with('message', 'Successfully Added');
    }

    public function edit($category_id)
    {
        $category = Category::find($category_id);
        return view('admin.category.edit', compact('category'));
    }

    public function update(CategoryFormRequest $request, $category_id)
    {
        $data = $request->validated();
        //encontrar lo ya creado en store
        $category = Category::find($category_id);
        $category->artist = $data['artist'];
        $category->title_song = $data['title_song'];
        $category->title_album = $data['title_album'];
        $category->year = $data['year'];
        $category->genre = $data['genre'];
        $category->duration = $data['duration'];
        //si hay archivo se guarda en una variable

        if ($request->hasfile('image')) {

            $destination = 'uploads/category/images/' . $category->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/category/images/', $filename);
            $category->image = $filename;
        }

        if ($request->hasfile('song')) {

            $destination = 'uploads/category/songs/' . $category->song;
            if (File::exists($destination)) {
                File::delete($destination);
            }

            $file = $request->file('song');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/category/songs/', $filename);
            $category->song = $filename;
        }

        if ($request->hasfile('image_artist')) {

            $destination = 'uploads/category/images/' . $category->image_artist;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('image_artist');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/category/images/', $filename);
            $category->image_artist = $filename;
        }

        if ($request->hasfile('image_concert')) {

            $destination = 'uploads/category/images/' . $category->image_concert;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('image_concert');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/category/images/', $filename);
            $category->image_concert = $filename;
        }

        $category->navbar_status = $request->navbar_status == true ? '1' : '0';
        $category->status = $request->status == true ? '1' : '0';
        $category->created_by = Auth::user()->id;
        $category->update();

        return redirect('admin/category')->with('message', 'Successfully Updated');
    }

    public function destroy($category_id)
    {

        $category = Category::find($category_id);
        if ($category) {
            $destination = 'uploads/category/images/' . $category->image;
            $destination2 = 'uploads/category/songs/' . $category->song;
            $destination3 = 'uploads/category/songs/' . $category->image_artist;
            $destination4 = 'uploads/category/songs/' . $category->image_concert;
            if (File::exists($destination) && File::exists($destination2) && File::exists($destination3) && File::exists($destination4)) {
                File::delete($destination);
                File::delete($destination2);
                File::delete($destination3);
                File::delete($destination4);
            }
            $category->delete();
            return redirect('admin/category')->with('message', 'Successfully Deleted');
        } else {
            return redirect('admin/category')->with('message', 'No Id found');
        }
    }
}
