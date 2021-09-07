<?php


namespace App\Services;

use App\Http\Resources\Product as ProductResource;
use App\Models\Product;

/**
 * Trait ProductService
 * Helpers for Product
 *
 * @package App\Services
 */
trait ProductService
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showListProductsInCategory($id)
    {
        $user = auth()->user();
        $products = Product::whereIn('user_id',[0,$user->id])->where('cat_id',$id)->get();

        if (is_null($products) || !count($products)) {
            return $this->sendError('Products not found.');
        }

        return $products;
    }
}
