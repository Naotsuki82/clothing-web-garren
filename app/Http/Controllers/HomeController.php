<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class HomeController extends Controller
{
    public function index()
    {
        // Simple mock data for home page
        $products = [
            ['name' => 'Juul Blazer Cream', 'image' => 'https://images.unsplash.com/photo-1591047139829-d91aecb6caea?q=80&w=1000', 'old_price' => '€149,95', 'price' => '€89,95', 'badge' => 'Sale'],
            ['name' => 'Bobbie Trousers', 'image' => 'https://images.unsplash.com/photo-1583846783214-7229a91b20ed?q=80&w=1000', 'old_price' => '€109,95', 'price' => '€65,95', 'badge' => 'Sale'],
            ['name' => 'Benna Beanie', 'image' => 'https://images.unsplash.com/photo-1576871337632-b9aef4c17ab9?q=80&w=1000', 'old_price' => '€39,95', 'price' => '€23,95', 'badge' => 'Hot'],
            ['name' => 'Linen Dress', 'image' => 'https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?q=80&w=1000', 'old_price' => '€129,95', 'price' => '€79,95', 'badge' => 'New']
        ];
        return view('home', compact('products'));
    }

    public function hydrocarbon()
    {
        return view('hydrocarbon');
    }

    public function shop(Request $request)
    {
        // 1. Define Categories
        $categories = [
            'Dresses & Jumpsuits',
            'Tops & Blouses',
            'Blazers & Jackets',
            'Sweaters & Cardigans',
            'Pants'
        ];

        // 2. Detailed Mock Data with Unique Items and Colors
        $catalog = [
            'Dresses & Jumpsuits' => [
                ['name' => 'Linen Summer Dress', 'image' => 'https://images.unsplash.com/photo-1595777457583-95e059d581b8?q=80&w=1000', 'price' => '€129,95', 'old' => null, 'badge' => 'New', 'color' => 'Beige'],
                ['name' => 'Elegant Silk Jumpsuit', 'image' => 'https://images.unsplash.com/photo-1542295669297-4d352b042bca?q=80&w=1000', 'price' => '€149,95', 'old' => '€189,95', 'badge' => 'Sale', 'color' => 'Black'],
                ['name' => 'Velvet Midi Dress', 'image' => 'https://images.unsplash.com/photo-1572804013309-59a88b7e92f1?q=80&w=1000', 'price' => '€89,95', 'old' => null, 'badge' => null, 'color' => 'Burgundy'],
                ['name' => 'Cotton Wrap Dress', 'image' => 'https://images.unsplash.com/photo-1496747611176-843222e1e57c?q=80&w=1000', 'price' => '€79,95', 'old' => '€109,95', 'badge' => 'Sale', 'color' => 'White'],
                ['name' => 'Evening Flow Gown', 'image' => 'https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?q=80&w=1000', 'price' => '€199,95', 'old' => null, 'badge' => null, 'color' => 'Blue'],
            ],
            'Tops & Blouses' => [
                ['name' => 'Zubi Blouse Cream', 'image' => 'https://images.unsplash.com/photo-1564257631407-4deb1f99d992?q=80&w=1000', 'price' => '€69,95', 'old' => null, 'badge' => null, 'color' => 'Beige'],
                ['name' => 'Thalia Top Black', 'image' => 'https://images.unsplash.com/photo-1534126511673-b6899657816a?q=80&w=1000', 'price' => '€39,95', 'old' => '€59,95', 'badge' => 'Sale', 'color' => 'Black'],
                ['name' => 'South Top Burgundy', 'image' => 'https://images.unsplash.com/photo-1551163943-3f6a29e39426?q=80&w=1000', 'price' => '€45,95', 'old' => null, 'badge' => 'New', 'color' => 'Burgundy'],
                ['name' => 'Classic White Shirt', 'image' => 'https://images.unsplash.com/photo-1485968579580-b6d095142e6e?q=80&w=1000', 'price' => '€89,95', 'old' => null, 'badge' => null, 'color' => 'White'],
                ['name' => 'Zalith Top Grey', 'image' => 'https://images.unsplash.com/photo-1503341504253-dff4815485f1?q=80&w=1000', 'price' => '€55,95', 'old' => '€75,95', 'badge' => 'Sale', 'color' => 'Grey'],
            ],
            'Blazers & Jackets' => [
                ['name' => 'Juul Blazer Cream', 'image' => 'https://images.unsplash.com/photo-1591047139829-d91aecb6caea?q=80&w=1000', 'price' => '€169,95', 'old' => null, 'badge' => 'Hot', 'color' => 'Beige'],
                ['name' => 'Suus Jacket Black', 'image' => 'https://images.unsplash.com/photo-1552374196-1ab2a1c593e8?q=80&w=1000', 'price' => '€149,95', 'old' => '€199,95', 'badge' => 'Sale', 'color' => 'Black'],
                ['name' => 'Zilda Wool Coat', 'image' => 'https://images.unsplash.com/photo-1585487000160-6ebcfceb0d03?q=80&w=1000', 'price' => '€229,95', 'old' => null, 'badge' => null, 'color' => 'Grey'],
                ['name' => 'Modern Blazer', 'image' => 'https://images.unsplash.com/photo-1548624149-f9cafd91a182?q=80&w=1000', 'price' => '€129,95', 'old' => null, 'badge' => null, 'color' => 'Blue'],
                ['name' => 'Oversized Jacket', 'image' => 'https://images.unsplash.com/photo-1525507119028-ed4c629a60a3?q=80&w=1000', 'price' => '€110,95', 'old' => '€140,95', 'badge' => 'Sale', 'color' => 'Green'],
            ],
            'Sweaters & Cardigans' => [
                ['name' => 'Deux Sweater Grey', 'image' => 'https://images.unsplash.com/photo-1576566588028-4147f3842f27?q=80&w=1000', 'price' => '€109,95', 'old' => null, 'badge' => 'New', 'color' => 'Grey'],
                ['name' => 'Aria Sweater Beige', 'image' => 'https://images.unsplash.com/photo-1620799140408-ed5341cd2431?q=80&w=1000', 'price' => '€99,95', 'old' => '€129,95', 'badge' => 'Sale', 'color' => 'Beige'],
                ['name' => 'Chunky Knit Cardigan', 'image' => 'https://images.unsplash.com/photo-1608234807905-4466023792f5?q=80&w=1000', 'price' => '€119,95', 'old' => null, 'badge' => null, 'color' => 'White'],
                ['name' => 'Soft Cashmere Blend', 'image' => 'https://images.unsplash.com/photo-1583743814966-8936f5b7be1a?q=80&w=1000', 'price' => '€149,95', 'old' => null, 'badge' => 'Sold Out', 'color' => 'Brown'],
                ['name' => 'Zargyle Pattern Knit', 'image' => 'https://images.unsplash.com/photo-1516762689617-e1cffcef479d?q=80&w=1000', 'price' => '€89,95', 'old' => null, 'badge' => null, 'color' => 'Multi'],
            ],
            'Pants' => [
                ['name' => 'Bobbie Trousers', 'image' => 'https://images.unsplash.com/photo-1583846783214-7229a91b20ed?q=80&w=1000', 'price' => '€119,95', 'old' => null, 'badge' => null, 'color' => 'Beige'],
                ['name' => 'Zunn Washed Jeans', 'image' => 'https://images.unsplash.com/photo-1506619216599-9d930bed3100?q=80&w=1000', 'price' => '€99,95', 'old' => '€129,95', 'badge' => 'Sale', 'color' => 'Blue'],
                ['name' => 'Malmo Pants Black', 'image' => 'https://images.unsplash.com/photo-1552902865-b72c031ac5ea?q=80&w=1000', 'price' => '€109,95', 'old' => null, 'badge' => 'New', 'color' => 'Black'],
                ['name' => 'Wide Leg Linen', 'image' => 'https://images.unsplash.com/photo-1594633312681-425c7b97ccd1?q=80&w=1000', 'price' => '€89,95', 'old' => null, 'badge' => null, 'color' => 'White'],
                ['name' => 'Tailored Slacks', 'image' => 'https://images.unsplash.com/photo-1624378439575-d8705ad7ae80?q=80&w=1000', 'price' => '€129,95', 'old' => '€159,95', 'badge' => 'Sale', 'color' => 'Grey'],
            ]
        ];

        // 3. Flatten the catalog into a single products list
        $allProducts = [];
        $idCounter = 1;

        foreach ($categories as $cat) {
            if (isset($catalog[$cat])) {
                foreach ($catalog[$cat] as $item) {
                    $allProducts[] = [
                        'id' => $idCounter++,
                        'category' => $cat,
                        'name' => $item['name'],
                        'image' => $item['image'],
                        'price' => $item['price'],
                        'old_price' => $item['old'],
                        'badge' => $item['badge'],
                        'color' => $item['color'],
                    ];
                }
            }
        }

        $collection = collect($allProducts);

        // 4. Filter Logic
        
        // Filter by Product Type (Category)
        if ($request->has('types')) {
            $selectedTypes = $request->input('types');
            $collection = $collection->whereIn('category', $selectedTypes);
        }

        // Filter by Price Range
        if ($request->filled('min_price')) {
            $min = (float) $request->input('min_price');
            $collection = $collection->filter(function ($item) use ($min) {
                // Remove € symbol and convert comma to dot for parsing
                $price = (float) str_replace(['€', ','], ['', '.'], $item['price']);
                return $price >= $min;
            });
        }

        if ($request->filled('max_price')) {
            $max = (float) $request->input('max_price');
            $collection = $collection->filter(function ($item) use ($max) {
                // Remove € symbol and convert comma to dot for parsing
                $price = (float) str_replace(['€', ','], ['', '.'], $item['price']);
                return $price <= $max;
            });
        }

        // Filter by Color
        if ($request->has('colors')) {
            $selectedColors = (array) $request->input('colors');
            $collection = $collection->whereIn('color', $selectedColors);
        }

        // 5. Sorting
        if ($request->filled('sort')) {
            $sort = $request->input('sort');
            if ($sort === 'price_asc') {
                $collection = $collection->sortBy(function ($item) {
                    return (float) str_replace(['€', ','], ['', '.'], $item['price']);
                });
            } elseif ($sort === 'price_desc') {
                $collection = $collection->sortByDesc(function ($item) {
                    return (float) str_replace(['€', ','], ['', '.'], $item['price']);
                });
            }
        }

        // 6. Pagination (8 per page)
        $page = $request->input('page', 1);
        $perPage = 8;
        
        $products = new LengthAwarePaginator(
            $collection->forPage($page, $perPage),
            $collection->count(),
            $perPage,
            $page,
            ['path' => $request->url(), 'query' => $request->query()]
        );

        return view('shop', compact('products', 'categories'));
    }
}