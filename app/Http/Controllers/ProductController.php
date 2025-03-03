<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            ['name' => 'Naruto Figure', 'price' => 1499.99, 'image' => 'naruto_figure.jpg'],
            ['name' => 'One Piece Manga Set', 'price' => 2599.50, 'image' => 'onepiece_manga.jpg'],
            ['name' => 'Attack on Titan Poster', 'price' => 799.99, 'image' => 'aot_poster.jpg'],
            ['name' => 'Demon Slayer Keychain', 'price' => 299.99, 'image' => 'demon_slayer_keychain.jpg'],
            ['name' => 'Jujutsu Kaisen Hoodie', 'price' => 1999.00, 'image' => 'jjk_hoodie.jpg'],
        ];

        return view('products.index', compact('products'));
    }
}
