<?php
namespace App\Http\Controllers;

class DrinksController extends Controller
{
    public function index()
    {
        // echo "indexページです";
        // $drinks = $this->getDrinks();

        // echo "<pre>";
        // var_dump($drinks);
        // echo "</pre>";
        $hello = "Hellow world";
        $goodbye = "Good Bye";
        return view("index", array(
            "message1" => $hello,
            "message2" => $goodbye
        ));
    
    }

    public function getDrinks()
    {
       
        $drinks = [
            [
                "name" => "water",
                "price" => 100,
                "stock" => 50,
                "maker" => ["name" => "A社"]
            ],
            [
                "name"  => "tea",
                "price" => 120,
                "stock" => 80,
                "maker" => ["name" => "株式会社 B社"]
            ],
            [
                "name"  => "soda",
                "price" => 147,
                "stock" => 100,
                "maker" => ["name" => "株式会社 C社"]
            ]
            ];
            return $drinks;
    }
    
}
