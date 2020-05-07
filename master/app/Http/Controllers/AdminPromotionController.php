<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContentPromotion;
use App\Banner;

use File;

class AdminPromotionController extends Controller
{
    public function banner()
    {
        $banners = Banner::findOrFail(1);

        return view('admin.banner', compact('banners'));
    }

    public function bannerupdate(Request $request, $id)
    {
        $banners = Banner::findOrFail($id);

        $this->validate($request, [
            'year' => 'required|max:4',
            'text1' => 'required|max:255',
            'text2' => 'required|max:255',
            'text3' => 'required|max:255',
            'model' => 'image|mimes:jpeg,png,jpg,gif,svg'
        ]);

        $files = $request->file('model');

        if($request->hasFile('model'))
            {
                $nama_file1 = time()."_".$files->getClientOriginalName();
                $usersImage = storage_path("app/public/banner/{$banners->model}"); // get previous image from folder
                if (File::exists($usersImage)) { // unlink or remove previous image from folder
                    unlink($usersImage);
                }
                $destinationPath = storage_path('app/public/banner'); // upload path
                $files->move($destinationPath, $nama_file1);
            }

        $banners->year = $request->year?$request->year : $banners->year;
        $banners->text1 = $request->text1?$request->text1 : $banners->text1;
        $banners->text2 = $request->text2?$request->text2 : $banners->text2;
        $banners->text3 = $request->text3?$request->text3 : $banners->text3;
        $banners->model = $request->file('model')?$nama_file1 : $banners->model;
        
        $banners->update();

        return redirect()->route('admin.banner')->with('success', 'Banner Berhasil Di Edit!');
    }

    public function ContentPromotion()
    {
        $contentpromotion = ContentPromotion::findOrFail(1);

        return view('admin.contentpromotion', compact('contentpromotion'));
    }

    public function update(Request $request, $id)
    {
        $contentpromotions = ContentPromotion::findOrFail($id);

        $this->validate($request, [
            'image1' => 'image|mimes:jpeg,png,jpg,gif,svg|max:7048',
            'image2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:7048'
        ]);


        // menyimpan data file yang diupload ke variabel $file
        
        
        if ($file1 = $request->file('image1') and $file2 = $request->file('image2')) {
            $nama_file1 = time()."_".$file1->getClientOriginalName();
            $nama_file2 = time()."_".$file2->getClientOriginalName();

            if($request->hasFile('image1'))
            {
                $usersImage = storage_path("app/public/contentpromotion/{$contentpromotions->image1}"); // get previous image from folder
                if (File::exists($usersImage)) { // unlink or remove previous image from folder
                    unlink($usersImage);
                }
            }

            if($request->hasFile('image2'))
            {
                $usersImage = storage_path("app/public/contentpromotion/{$contentpromotions->image2}"); // get previous image from folder
                if (File::exists($usersImage)) { // unlink or remove previous image from folder
                    unlink($usersImage);
                }
            }

            // isi dengan nama folder tempat kemana file diupload
            $destinationPath = storage_path('app/public/contentpromotion'); // upload path
            $file1->move($destinationPath, $nama_file1);
            $file2->move($destinationPath, $nama_file2);

            $contentpromotions->image1 = $request->file('image1')?$nama_file1 : $contentpromotions->image1;
            $contentpromotions->image2 = $request->file('image2')?$nama_file2 : $contentpromotions->image2;

            $contentpromotions->update();

            return redirect()->route('admin.contentpromotion')->with('success', 'Content Promotion Berhasil Di Edit!');
        } elseif ($file1 = $request->file('image1')){
            $nama_file1 = time()."_".$file1->getClientOriginalName();

            if($request->hasFile('image1'))
            {
                $usersImage = storage_path("app/public/contentpromotion/{$contentpromotions->image1}"); // get previous image from folder
                if (File::exists($usersImage)) { // unlink or remove previous image from folder
                    unlink($usersImage);
                }
            }

            $destinationPath = storage_path('app/public/contentpromotion'); // upload path
            $file1->move($destinationPath, $nama_file1);

            $contentpromotions->image1 = $request->file('image1')?$nama_file1 : $contentpromotions->image1;
            $contentpromotions->update();

            return redirect()->route('admin.contentpromotion')->with('success', 'Content Promotion Berhasil Di Edit!');
        } elseif ($file2 = $request->file('image2')) {
            $nama_file2 = time()."_".$file2->getClientOriginalName();

            if($request->hasFile('image2'))
            {
                $usersImage = storage_path("app/public/contentpromotion/{$contentpromotions->image2}"); // get previous image from folder
                if (File::exists($usersImage)) { // unlink or remove previous image from folder
                    unlink($usersImage);
                }
            }

            $destinationPath = storage_path('app/public/contentpromotion'); // upload path
            $file2->move($destinationPath, $nama_file2);

            $contentpromotions->image2 = $request->file('image2')?$nama_file2 : $contentpromotions->image2;

            $contentpromotions->update();
            return redirect()->route('admin.contentpromotion')->with('success', 'Content Promotion Berhasil Di Edit!');
        } else {
            return redirect()->route('admin.contentpromotion')->with('danger', 'Silahkan input file Content Promotion!');
        }
    }
}
