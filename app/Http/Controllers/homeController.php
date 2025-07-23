<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class homeController extends Controller
{


   
    
    function Home() {
        //fetch products from the Products model
        $products_details = Products::all();
        return view('welcome',
        [
            'products' => $products_details
        ]
    );
    }
}
