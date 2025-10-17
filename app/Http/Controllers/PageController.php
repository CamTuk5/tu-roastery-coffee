<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Collection;

class PageController extends Controller
{
    
    private $drinks = [
        'Cà phê nóng' => [
            [
                'id' => 1,
                'name' => 'Tinh Vân Latte',
                'price' => 55000,
                'description' => 'Latte ngọt ngào với lớp bọt sữa mịn màng như mây trời.',
                'image' => 'images/latte.jpg'
            ],
            [
                'id' => 2,
                'name' => 'Hố Đen Americano',
                'price' => 45000,
                'description' => 'Americano đậm đà, mạnh mẽ đánh thức mọi giác quan.',
                'image' => 'images/americano.jpg'
            ],
        ],
        'Cà phê lạnh' => [
            [
                'id' => 3,
                'name' => 'Vũ Trụ Cold Brew',
                'price' => 60000,
                'description' => 'Cold brew ủ lạnh 24 giờ, mang hương vị vũ trụ trong từng ngụm.',
                'image' => 'images/coldbrew.jpg'
            ],
            [
                'id' => 4,
                'name' => 'Dải Ngân Hà Macchiato',
                'price' => 58000,
                'description' => 'Espresso hòa quyện với vệt sữa trắng mịn như dải ngân hà.',
                'image' => 'images/macchiato.jpg'
            ],
        ],
    ];

    
    private $beans = [
        [
            'id' => 1,
            'name' => 'Hạt Sao Chổi (Ethiopia)',
            'origin' => 'Yirgacheffe, Ethiopia',
            'notes' => 'Hương hoa nhài thoang thoảng, vị chua thanh của quả mọng chín.',
            'image' => 'images/ethiopia.jpg'
        ],
        [
            'id' => 2,
            'name' => 'Hạt Thiên Thạch (Colombia)',
            'origin' => 'Huila, Colombia',
            'notes' => 'Vị ngọt caramel đậm đà, sô cô la hòa quyện với chút hương cam quýt.',
            'image' => 'images/colombia.jpg'
        ],
    ];

    
    public function index()
    {
        $featuredDrinks = collect($this->drinks)
            ->flatten(1)
            ->take(3)
            ->toArray();
        
        return view('pages.home', compact('featuredDrinks'));
    }

    
    public function about()
    {
        return view('pages.about');
    }

    
    public function menu()
    {
        return view('pages.menu', ['drinks' => $this->drinks]);
    }

    
    public function beansStory()
    {
        return view('pages.beans-story', ['beans' => $this->beans]);
    }

    
    public function contact()
    {
        return view('pages.contact');
    }

    
    public function showDrink($id)
    {
        $drink = collect($this->drinks)
            ->flatten(1)
            ->firstWhere('id', $id);
            
        if (!$drink) {
            abort(404, 'Món nước không tồn tại');
        }
        
        return view('pages.drink-detail', compact('drink'));
    }
}