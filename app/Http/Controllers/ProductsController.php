<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function execute()
    {
        $title = ["Products"];
        $shampoo = $this->allProducts('shampoo');
        $moist_oil = $this->allProducts('oil');
        $conditioner = $this->allProducts('conditioner');

        $products = [$shampoo, $moist_oil, $conditioner];

        return view('products', compact('title', 'products'));
    }

    /* In the future all of these product values will be pulled from the database */

    public function allProducts($prodName)
    {
        switch ($prodName){
            case "shampoo":
                $prod = array(
                    "prod_name" => "Pre-Shampoo",
                    "prod_img" => "pre_shampoo.jpeg",
                    "short_name" => "shampoo",
                );
                break;
            case "oil":
                $prod = array(
                    "prod_name" => "Moisturizing Oil",
                    "prod_img" => "moisturizing_oil.jpeg",
                    "short_name" => "oil",
                );
                break;
            case "conditioner":
                $prod = array(
                    "prod_name" => "Leave-In Conditioner",
                    "prod_img" => "leave_in_conditioner.jpeg",
                    "short_name" => "conditioner",
                );
                break;
        }

        return $prod;
    }

    public function productView($prodName)
    {
        switch ($prodName){
            case "shampoo":
                $item = array(
                    "prod_img" => "pre_shampoo.jpeg",
                    "prod_name" => "Pre-Shampoo",
                    "prod_description" => "Our pre-shampoo is made up of ingredients to help to promote hair growth, elasticity and strength. It makes your hair softer and more manageable. Also, it reduces the need for excess products.
                                          This pre-poo can be used in your daily grease as well as a moisturizer for those of you who may rather use it that way.",
                    "prod_price" => 12.00,
                    "prod_size" => array(
                        1 => "4oz",
                    ),
                );
                break;
            case "oil":
                $item = array(
                    "prod_img" => "moisturizing_oil.jpeg",
                    "prod_name" => "Moisturizing Oil",
                    "prod_description" => "Do you need an oil to use in your hair to help add shine, work on your scalp and lock in moisture? Well good news!! Lynnali's Hair Care's Moisturizing oil is back!! ",
                    "prod_price" => 16.00,
                    "prod_size" => array(
                        1 => "4oz",
                    ),
                );
                break;
            case "conditioner":
                $item = array(
                    "prod_img" => "leave_in_conditioner.jpeg",
                    "prod_name" => "Leave-In Conditioner",
                    "prod_description" => "Bring a new intense moisture and hydration to your hair with Lynnalis Haircare.
                                          We have a brand new Leave in Conditioner to treat your hair. ",
                    "prod_price" => 18.00,
                    "prod_size" => array(
                        1 => "8oz",
                    ),
                );
                break;
            default:
                
                break;
        }

        $title = ["Name"];

        return view('products', compact('title', 'item'));
    }
}
