<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Images\Images;
use Illuminate\Contracts\Filesystem\FileExistsException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ImagesController extends Controller
{
    public function create()
    {
       return view('admin.images.create');
    }

    public function index()
    {
        $imgs = Images::all();
        return view('admin.images.index', compact('imgs'));
    }

    public function store(Request $request)
    {
        $request->validate([
           'name' => 'required',
           'target' => 'required'
        ]);

        $target = $request->get('target');

        if ($request->hasFile('file')) {

            $image = $request->file('file');

            // open an image file

            $fileName = date('Y-m-d-H:i:s')."-".$image->getClientOriginalName();

            $relPath = 'app/public/home/';
            if (!file_exists(storage_path($relPath))) {
                mkdir(storage_path($relPath), 777, true);
            }
            if ($target == 'Header' || $target == 'About') {

                Image::make($image->getRealPath())->resize(600, 400)->save(storage_path($relPath.$request->get('name')),60);
            }

            Images::create([
                'name' => $request->get('name'),
                'target' => $target,
            ]);

            return back();
        }
        return 'c est bon';
    }

    public function destroy($images)
    {

        $img = Images::find($images);

        if(Storage::delete('/public/Home/'.$img->name)) {

            $img->delete();

        }

        return back();
    }
}
