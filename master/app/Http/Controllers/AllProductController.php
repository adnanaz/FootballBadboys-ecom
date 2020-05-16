<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContentPromotion;
use App\Product;
use App\Category;
use App\Size;
use App\Color;

use DB;

class AllProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contentpromotion = ContentPromotion::findOrFail(1);

        if(request()->category){
            $categories = Category::whereNotIn('id', [10, 12])->orderBy('id', 'DESC')->get();
            $sizes = Size::orderBy('id', 'DESC')->get();
            $products = Product::where('category_id',request()->category)->orderBy('id', 'DESC')->paginate(24);

            $totalRow = DB::table('categories')->count();
            $categoriesfooter = DB::table('categories')->offset(0)->limit($totalRow/2)->whereNotIn('id', [10, 12])->orderBy('id', 'DESC')->get();
            $categoriesfooter2 = DB::table('categories')->offset(0)->limit($totalRow/2)->whereNotIn('id', [10, 12])->orderBy('id', 'ASC')->get();
        } else {
            $categories = Category::whereNotIn('id', [10, 12])->orderBy('id', 'DESC')->get();
            $sizes = Size::orderBy('id', 'DESC')->get();
            $products = Product::whereNotIn('category_id', [10, 12])->orderBy('id', 'DESC')->paginate(24);

            $totalRow = DB::table('categories')->count();
            $categoriesfooter = DB::table('categories')->offset(0)->limit($totalRow/2)->whereNotIn('id', [10, 12])->orderBy('id', 'DESC')->get();
            $categoriesfooter2 = DB::table('categories')->offset(0)->limit($totalRow/2)->whereNotIn('id', [10, 12])->orderBy('id', 'ASC')->get();
        }

        return view('customer.allproduct', compact('contentpromotion', 'categories', 'sizes', 'products', 'categoriesfooter', 'categoriesfooter2'));
    }

    public function search(Request $request)
    {
        $cari = $request->search;
        
        $contentpromotion = ContentPromotion::findOrFail(1);
        $categories = Category::whereNotIn('id', [10, 12])->orderBy('id', 'DESC')->get();
        $sizes = Size::orderBy('id', 'DESC')->get();
        $products = Product::search($cari)->orderBy('id', 'DESC')->paginate(12);
        $products->appends($request->only('search'));

        $totalRow = DB::table('categories')->count();
        $categoriesfooter = DB::table('categories')->offset(0)->limit($totalRow/2)->whereNotIn('id', [10, 12])->orderBy('id', 'DESC')->get();
        $categoriesfooter2 = DB::table('categories')->offset(0)->limit($totalRow/2)->whereNotIn('id', [10, 12])->orderBy('id', 'ASC')->get();

        return view('customer.allproduct', compact('categories', 'sizes', 'products', 'contentpromotion', 'categoriesfooter', 'categoriesfooter2'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $categories = Category::whereNotIn('id', [10, 12])->orderBy('id', 'DESC')->get();
        $contentpromotion = ContentPromotion::findOrFail(1);

        $product = Product::where('slug', $slug)->firstOrFail();
        
        $rekomendasi = Product::where('slug', '!=', $slug)->whereNotIn('category_id', [10, 12])->inRandomOrder()->take(4)->get();

        $totalRow = DB::table('categories')->count();
        $categoriesfooter = DB::table('categories')->offset(0)->limit($totalRow/2)->whereNotIn('id', [10, 12])->orderBy('id', 'DESC')->get();
        $categoriesfooter2 = DB::table('categories')->offset(0)->limit($totalRow/2)->whereNotIn('id', [10, 12])->orderBy('id', 'ASC')->get();

        return view('customer.detailproduct', compact('categories', 'contentpromotion', 'product', 'rekomendasi', 'categoriesfooter', 'categoriesfooter2'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
