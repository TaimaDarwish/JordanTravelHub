<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index( )
    {

        $places = [
            [
                'route' => 'petra',
                'image' => 'images/petra2.png',
                'title' => 'Petra - $30',
                'description' => 'One of the New Seven Wonders of the World'
            ],
            [
                'route' => 'wadirum',
                'image' => 'images/WadiRum.png',
                'title' => 'Wadi Rum - $50',
                'description' => 'Known as the Valley of the Moon, Wadi Rum is a protected desert wilderness with dramatic sandstone mountains and ancient rock carvings'
            ],
            [
                'route' => 'romantheater',
                'image' => 'images/RomanTheater.png',
                'title' => 'Roman Theater - $30',
                'description' => 'The Roman Theater in Amman is a well-preserved amphitheater from the 2nd century AD, capable of seating 6,000 spectators and showcasing Roman architectural prowess'
            ],
            [
                'route' => 'deadsea',
                'image' => 'images/DeadSea.png',
                'title' => 'Dead Sea - $40',
                'description' => 'At the lowest spot on Earth, the Dead Sea is famous for its float-friendly waters and mineral-rich mud, offering a unique and refreshing experience'
            ],
            [
                'route' => 'aqaba',
                'image' => 'images/Aqaba.png',
                'title' => 'Aqaba - $70',
                'description' => 'Located by the Red Sea, Aqaba offers beautiful beaches and clear waters, making it an ideal spot for swimming and diving. It’s a perfect place to enjoy the sun and coastal charm'
            ]
        ];
        return view('home', compact('places'));
    }
}
