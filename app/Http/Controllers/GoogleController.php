<?php

namespace App\Http\Controllers;


use Illuminate\Http\Response;
use App\Product;

class GoogleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function googleMerchant()
    {

            $results = Product::where('status',1 )
                                ->select('product_id','price', 'weight','model','image','quantity','tax_class_id')
                                ->with('data')
                                ->with('images')
                                ->with('tax')
                                ->with('discount')
                                ->orderBy('date_modified','DESC')
                                ->get();

                return (new Response(view('merchant', ['results' => $results]), '202'))
                        ->header('Content-Type', 'application/xml','Cache-Control', 'max-age=36000, public');
            //return response()->view('merchant', ['results' => $results ])->header('Content-Type', 'application/xml');
    }

    public function facebookMerchant()
    {
                    $results = Product::where('status',1 )
                    ->select('product_id','price', 'weight','model','image','quantity','tax_class_id')
                    ->with('data')
                    ->with('images')
                    ->with('tax')
                    ->with('discount')
                    ->orderBy('date_modified','DESC')
                    ->get();

            return (new Response(view('facebook', ['results' => $results]), '202'))
            ->header('Content-Type', 'application/xml','Cache-Control', 'max-age=36000, public');
    }
    //
}
