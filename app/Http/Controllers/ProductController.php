<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{


    public $products = [
        [
            'id' => 1,
            'name' => 'Product 1',
            'price' => 100
        ],
        [
            'id' => 2,
            'name' => 'Product 2',
            'price' => 200
        ],
        [
            'id' => 3,
            'name' => 'Product 3',
            'price' => 300
        ],
        [
            'id' => 4,
            'name' => 'Product 4',
            'price' => 400
        ],
        [
            'id' => 5,
            'name' => 'Product 5',
            'price' => 500
        ],
        [
            'id' => 6,
            'name' => 'Product 6',
            'price' => 600
        ],
        [
            'id' => 7,
            'name' => 'Product 7',
            'price' => 700
        ],
        [
            'id' => 8,
            'name' => 'Product 8',
            'price' => 800
        ],
        [
            'id' => 9,
            'name' => 'Product 9',
            'price' => 900
        ],
        [
            'id' => 10,
            'name' => 'Product 10',
            'price' => 1000
        ],
    ];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return response()->json([
            "message" => "Display your all products"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return response()->json([
            "message" => "Product created successfully"
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $productId = (int) $id; 
    
        if ($productId < 1 || $productId > 10) {
            return response()->json(['message' => 'Requested product ID is out of range. There are only 10 product IDs available.'], 404);
        }
    
        return response()->json(["message" => "Product ID: " . $productId]);
    }
    
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $productId = (int) $id;
        
        if ($productId < 1 || $productId > 10) {
            return response()->json(['message' => 'Requested product ID is out of range. There are only 10 product IDs available.'], 404);
        }
        return response()->json([
            "message" => "Product " .$id. " has been updated"
        ]); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $productId = (int) $id;

        if ($productId < 1 || $productId > 10) {
            return response()->json(['message' => 'Requested product ID is out of range. There are only 10 product IDs available.'], 404);
        }

        return response()->json(['message' =>
        "Product ". $id. " has been deleted"
        ]);
    }
}
