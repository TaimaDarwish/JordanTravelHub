<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Landmark;

class LandmarkSeeder extends Seeder
{
    public function run()
    {
        Landmark::create([
            'landmarkName' => 'Petra',
            'image' => 'images/petra2.png',
            'description' => 'Petra, the ancient city carved into the rose-red cliffs of southern Jordan, is a breathtaking testament to the ingenuity of the Nabataean civilization. This UNESCO World Heritage site, often referred to as the "Rose City," is renowned for its stunning rock-cut architecture and intricate water conduit system. Visitors to Petra can explore its magnificent structures, including the iconic Treasury and the Monastery, as they navigate through the narrow Siq canyon.',
            'activities' => [
                'Exploring the Treasury (Al-Khazneh) and its intricate façade',
                'Hiking up to the Monastery (Ad-Deir) for panoramic views',
                'Wandering through the Siq, a dramatic sandstone gorge leading to the city',
                'Enjoying a camel or horseback ride through the historical trails',
                'Discovering the Petra Archaeological Museum to learn more about the site\'s history',
            ],
            'tripOptions' => [
                [
                    'title' => 'Option 1: $30',
                    'details' => [
                        'Entrance fee to Petra',
                        'Breakfast',
                        'Lunch',
                        'Water',
                        'Transportation',
                    ],
                    'description' => 'This package includes everything needed for a day trip to Petra.',
                ],
                [
                    'title' => 'Option 2: $150 for Two Days',
                    'details' => [
                        'Breakfast, Lunch, and Dinner on the first day',
                        'Party on the first evening',
                        'Entrance fees and transportation',
                        '5-star hotel accommodation for one night',
                        'Breakfast and hiking on the second day',
                    ],
                    'description' => 'This two-day package includes more extensive amenities and experiences.',
                ],
            ],
        ]);

        Landmark::create([
            'landmarkName' => 'Wadi Rum',
            'image' => 'images/WadiRum.png',
            'description' => 'Wadi Rum, also known as the Valley of the Moon, is a protected desert wilderness in southern Jordan. Known for its dramatic sandstone mountains and stunning rock formations, Wadi Rum offers a unique landscape that has been the backdrop for many films. Visitors can experience the vast desert expanse, enjoy traditional Bedouin hospitality, and explore the rich cultural heritage of the area.',
            'activities' => [
                'Jeep safari through the desert landscape',
                'Camel trekking to explore the dunes',
                'Climbing and hiking in the rock formations',
                'Camping under the stars in a Bedouin-style tent',
                'Exploring ancient petroglyphs and archaeological sites',
            ],
            'tripOptions' => [
                [
                    'title' => 'Option 1: $50',
                    'details' => [
                        'Jeep tour of the major sites',
                        'Traditional Bedouin lunch',
                        'Camel ride experience',
                        'Bottled water',
                    ],
                    'description' => 'A comprehensive tour of Wadi Rum with a traditional Bedouin lunch.',
                ],
                [
                    'title' => 'Option 2: $200 for Two Days',
                    'details' => [
                        'Two-day guided tour including jeep and camel rides',
                        'Overnight camping with Bedouin hospitality',
                        'All meals included',
                        'Guided hikes and exploration of major sites',
                    ],
                    'description' => 'An immersive two-day experience with guided activities and overnight camping.',
                ],
            ],
        ]);

        Landmark::create([
            'landmarkName' => 'Aqaba',
            'image' => 'images/Aqaba.png',
            'description' => 'Aqaba is Jordan’s only coastal city located on the Red Sea. It is known for its beautiful beaches, vibrant marine life, and excellent diving opportunities. Aqaba offers a range of water sports and activities, from snorkeling to kite surfing, and provides a gateway to explore the underwater world of the Red Sea.',
            'activities' => [
                'Snorkeling and diving in the Red Sea',
                'Relaxing on the sandy beaches',
                'Exploring marine life in the coral reefs',
                'Water sports such as jet skiing and kite surfing',
                'Visiting the Aqaba Fort and local markets',
            ],
            'tripOptions' => [
                [
                    'title' => 'Option 1: $70',
                    'details' => [
                        'Snorkeling gear rental',
                        'Half-day boat tour',
                        'Refreshments and snacks',
                    ],
                    'description' => 'A half-day snorkeling experience with all necessary gear and refreshments.',
                ],
                [
                    'title' => 'Option 2: $180 for Three Days',
                    'details' => [
                        'Three days of water sports including snorkeling and diving',
                        'Accommodation in a beachside hotel',
                        'All meals and transportation included',
                        'Excursions to local attractions',
                    ],
                    'description' => 'A comprehensive three-day package with a range of water activities and full accommodations.',
                ],
            ],
        ]);

        Landmark::create([
            'landmarkName' => 'Dead Sea',
            'image' => 'images/DeadSea.png',
            'description' => 'The Dead Sea is a salt lake bordered by Jordan to the east and Israel and Palestine to the west. It is known for its extremely high salt content and is the lowest point on earth. The therapeutic properties of the mineral-rich waters and the surrounding mud make it a popular destination for relaxation and wellness treatments.',
            'activities' => [
                'Floating in the mineral-rich waters',
                'Applying Dead Sea mud for skincare treatments',
                'Relaxing on the unique salt beaches',
                'Visiting nearby spa and wellness centers',
                'Exploring the surrounding desert landscapes',
            ],
            'tripOptions' => [
                [
                    'title' => 'Option 1: $30',
                    'details' => [
                        'Day pass to a beach resort',
                        'Access to mud and mineral baths',
                        'Towel and locker rental',
                    ],
                    'description' => 'A day pass to a beach resort with access to mud and mineral baths.',
                ],
                [
                    'title' => 'Option 2: $170 for Two Days',
                    'details' => [
                        'Two-day stay at a Dead Sea resort',
                        'All meals included',
                        'Daily access to spa and wellness facilities',
                        'Transportation to and from the resort',
                    ],
                    'description' => 'A relaxing two-day stay with full amenities and wellness treatments.',
                ],
            ],
        ]);

        Landmark::create([
            'landmarkName' => 'Roman Theater',
            'image' => 'images/RomanTheater.png',
            'description' => 'The Roman Theater in Amman is a well-preserved ancient Roman theater located in the heart of the city. Built during the reign of Emperor Antonius Pius, it is one of the largest and most significant Roman theaters in the region. Visitors can explore the impressive architecture and learn about the history of the Roman period in Jordan.',
            'activities' => [
                'Exploring the ancient theater and its ruins',
                'Attending performances and cultural events',
                'Learning about the history of Roman architecture',
                'Visiting the on-site museum',
            ],
            'tripOptions' => [
                [
                    'title' => 'Option 1: $15',
                    'details' => [
                        'Entrance fee to the theater',
                        'Guided tour',
                        'Refreshments included',
                    ],
                    'description' => 'A guided tour of the Roman Theater with entrance fee and refreshments.',
                ],
                [
                    'title' => 'Option 2: $50 for a Half-Day Tour',
                    'details' => [
                        'Extended guided tour',
                        'Visit to additional historical sites',
                        'Transportation included',
                    ],
                    'description' => 'A half-day tour including transportation and visits to additional historical sites.',
                ],
            ],
        ]);
    }
}
