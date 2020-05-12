<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Product;
use App\Category;
use App\Size;
use App\Color;

use Image;
use DB;

class AdminProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->category){
            $categories = Category::whereNotIn('id', [10, 12])->orderBy('id', 'DESC')->get();
            $sizes = Size::orderBy('id', 'DESC')->get();
            $products = Product::where('category_id',request()->category)->orderBy('id', 'DESC')->paginate(12);
        } elseif (request()->size){
            $categories = Category::whereNotIn('id', [10, 12])->orderBy('id', 'DESC')->get();
            $sizes = Size::orderBy('id', 'DESC')->get();
            $products = Product::with('sizes')->whereHas('sizes', function ($query){
                $query->where('slug', request()->size);
            })->whereNotIn('category_id', [10, 12])->orderBy('id', 'DESC')->paginate(12);
        } else {
            $categories = Category::whereNotIn('id', [10, 12])->orderBy('id', 'DESC')->get();
            $sizes = Size::orderBy('id', 'DESC')->get();
            $products = Product::whereNotIn('category_id', [10, 12])->orderBy('id', 'DESC')->paginate(12);
        }

        return view('admin.allproduct', compact('categories', 'sizes', 'products'));
    }

    public function search(Request $request)
    {
        $cari = $request->search;
        $categories = Category::whereNotIn('id', [10, 12])->orderBy('id', 'DESC')->get();
        $sizes = Size::orderBy('id', 'DESC')->get();
        $products = Product::search($cari)->orderBy('id', 'DESC')->paginate(12);
        $products->appends($request->only('search'));

        return view('admin.allproduct', compact('categories', 'sizes', 'products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('id', 'DESC')->get();
        $sizes = Size::orderBy('id', 'ASC')->get();
        $colors = Color::orderBy('id', 'ASC')->get();
        return view('admin.addproduct', compact('categories', 'sizes', 'colors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'kode_product' => 'required|max:4',
            'name' => 'required|max:255',
            'description' => 'required',
            'material' => 'required',
            'link_video' => 'max:255',
            'price' => 'required|max:11',
            'price_discount' => 'max:11',
            'uploadFile' => 'required',
            'uploadFile.*' => 'image|mimes:jpeg,png,jpg,gif,svg'
        ]);      
        
        if ($image = $request->file('uploadFile')) {
            foreach ($image as $files) {
            $dates = date('YmdHis');
            $random = str_random(10);
            $destinationPath = storage_path('app/public/products'); // upload path
            $profileImage = $dates . $random . "." . $files->getClientOriginalExtension();

            if($files->getClientOriginalExtension() != 'svg'){
                $resize_image = Image::make($files->getRealPath());

                $resize_image->resize(1500, 1500, function($constraint){
                    $constraint->aspectRatio();
                })->save($destinationPath . '/' . $profileImage);
            } else {
                $files->move($destinationPath, $profileImage);
            }

            $insert[] = $profileImage;
            }
        }


        $product = new Product;
        $product->kode_product = $request->kode_product;
        $product->name = $request->name;
        $product->slug = Str::slug($request->name);
        $product->description = $request->description;
        $product->material = $request->material;
        $product->link_video = $request->link_video;
        $product->price = $request->price;
        $product->price_discount = $request->price_discount;
        $product->image = json_encode($insert);
        $product->category_id = $request->category_id;

        $product->save();

        $sizes = $request->input('size');
        foreach($sizes as $size){
            Size::find($request->has(['size_id']));
            $product->sizes()->attach($size);
        }
        
        $colors = $request->input('color');
        foreach($colors as $color){
            Color::find($request->has(['color_id']));
            $product->colors()->attach($color);
        }

        return redirect()->route('admin.product')->with('success', 'Product Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = Product::find($id);

        $categories = Category::orderBy('id', 'DESC')->get();
        $sizes = Size::orderBy('id', 'ASC')->get();
        $colors = Color::orderBy('id', 'ASC')->get();
        $associated_itens = DB::table('product_size')->where('product_id','=',$id)->pluck('size_id')->toArray();
        $associated_itenscolor = DB::table('color_product')->where('product_id','=',$id)->pluck('color_id')->toArray();

        return view('admin.editproduct', compact('products', 'categories', 'sizes', 'colors', 'associated_itens', 'associated_itenscolor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $products = Product::find($id);

        $this->validate($request, [
            'kode_product' => 'required|max:4',
            'name' => 'required|max:255',
            'description' => 'required',
            'material' => 'required',
            'link_video' => 'max:255',
            'price' => 'required|max:11',
            'price_discount' => 'max:11',
            'uploadFile.*' => 'image|mimes:jpeg,png,jpg,gif,svg'
        ]);      
        
        if ($image = $request->file('uploadFile')) {
            foreach ($image as $files) {
            $dates = date('YmdHis');
            $random = str_random(10);
            $destinationPath = storage_path('app/public/products'); // upload path
            $profileImage = $dates . $random . "." . $files->getClientOriginalExtension();

            if($files->getClientOriginalExtension() != 'svg'){
                $resize_image = Image::make($files->getRealPath());

                $resize_image->resize(1500, 1500, function($constraint){
                    $constraint->aspectRatio();
                })->save($destinationPath . '/' . $profileImage);
            } else {
                $files->move($destinationPath, $profileImage);
            }
            

            $insert[] = $profileImage;
            }

            $images = json_decode($products->image);
            if (is_array($images) || is_object($images))
            {
                foreach ($images as $image) {
                    $path = storage_path("app/public/products/{$image}");
                    if (file_exists($path)) {
                        unlink($path);
                    }
                }
            }

        }

        $products->kode_product = $request->kode_product?$request->kode_product : $products->kode_product;
        $products->name = $request->name?$request->name : $products->name;
        $products->slug = Str::slug($request->name);
        $products->description = $request->description?$request->description : $products->description;
        $products->material = $request->material?$request->material : $products->material;
        $products->link_video = $request->link_video?$request->link_video : $products->link_video;
        $products->price = $request->price?$request->price : $products->price;
        $products->price_discount = $request->price_discount?$request->price_discount : null;
        $products->image = $request->file('uploadFile')?$insert : $products->image;
        $products->category_id = $request->category_id?$request->category_id : $products->category_id;

        $products->update();

        $sizes = $request->input('size');
        $products->sizes()->sync($sizes);
        
        $colors = $request->input('color');
        $products->colors()->sync($colors);

        return redirect()->route('admin.product')->with('success', 'Product Berhasil Di Edit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        $product->sizes()->detach();
        $product->colors()->detach();

        $images = json_decode($product->image);
        if (is_array($images) || is_object($images))
        {
            foreach ($images as $image) {
                $path = storage_path("app/public/products/{$image}");
                if (file_exists($path)) {
                    unlink($path);
                }
            }
        }


        $colors = $product->colors;
        $sizes = $product->sizes;

        if(!$product->delete()) {
            foreach ($colors as $color) {
                $product->colors()->attach($color);
            }
            foreach ($sizes as $size) {
                $product->sizes()->attach($size);
            }
            return redirect()->route('admin.product')->with('success', 'Product Tidak Berhasil Di Hapus!');
        }

        return back()->with('success', 'Product Berhasil Di Hapus!');
    }
}
