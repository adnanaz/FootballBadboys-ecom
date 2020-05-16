<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
use App\ContentPromotion;
use App\Product;
use App\Category;

use DB;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banner = Banner::findOrFail(1);
        $contentpromotion = ContentPromotion::findOrFail(1);
        $products = Product::whereNotIn('category_id', [10, 12])->orderBy('id', 'DESC')->take(4)->get();
        $categories = Category::whereNotIn('id', [10, 12])->orderBy('id', 'DESC')->get();

        $totalRow = DB::table('categories')->count();
        $categoriesfooter = DB::table('categories')->offset(0)->limit($totalRow/2)->whereNotIn('id', [10, 12])->orderBy('id', 'DESC')->get();
        $categoriesfooter2 = DB::table('categories')->offset(0)->limit($totalRow/2)->whereNotIn('id', [10, 12])->orderBy('id', 'ASC')->get();

        return view('customer.index', compact('banner', 'contentpromotion', 'products', 'categories', 'categoriesfooter', 'categoriesfooter2'));
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
