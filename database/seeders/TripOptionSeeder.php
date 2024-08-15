<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TripOption;

class TripOptionSeeder extends Seeder
{
    public function run()
    {
        // Trip options for Petra (ID: 1)
        TripOption::create([
            'title' => 'Option 1: $30',
            'details' => json_encode([
                'Entrance fee to Petra',
                'Breakfast',
                'Lunch',
                'Water',
                'Transportation',
            ]),
            'description' => 'This package includes everything needed for a day trip to Petra.',
            'landmark_id' => 1,
        ]);
        TripOption::create([
            'title' => 'Option 2: $150 for Two Days',
            'details' => json_encode([
                'Breakfast, Lunch, and Dinner on the first day',
                'Party on the first evening',
                'Entrance fees and transportation',
                '5-star hotel accommodation for one night',
                'Breakfast and hiking on the second day',
            ]),
            'description' => 'This two-day package includes more extensive amenities and experiences.',
            'landmark_id' => 1,
        ]);

        // Trip options for Wadi Rum (ID: 2)
        TripOption::create([
            'title' => 'Option 1: $50',
            'details' => json_encode([
                'Jeep tour of the major sites',
                'Traditional Bedouin lunch',
                'Camel ride experience',
                'Bottled water',
            ]),
            'description' => 'A comprehensive tour of Wadi Rum with a traditional Bedouin lunch.',
            'landmark_id' => 2,
        ]);
        TripOption::create([
            'title' => 'Option 2: $200 for Two Days',
            'details' => json_encode([
                'Two-day guided tour including jeep and camel rides',
                'Overnight camping with Bedouin hospitality',
                'All meals included',
                'Guided hikes and exploration of major sites',
            ]),
            'description' => 'An immersive two-day experience with guided activities and overnight camping.',
            'landmark_id' => 2,
        ]);

        // Trip options for Aqaba (ID: 3)
        TripOption::create([
            'title' => 'Option 1: $70',
            'details' => json_encode([
                'Snorkeling gear rental',
                'Half-day boat tour',
                'Refreshments and snacks',
            ]),
            'description' => 'A half-day snorkeling experience with all necessary gear and refreshments.',
            'landmark_id' => 3,
        ]);
        TripOption::create([
            'title' => 'Option 2: $180 for Three Days',
            'details' => json_encode([
                'Three days of water sports including snorkeling and diving',
                'Accommodation in a beachside hotel',
                'All meals and transportation included',
                'Excursions to local attractions',
            ]),
            'description' => 'A comprehensive three-day package with a range of water activities and full accommodations.',
            'landmark_id' => 3,
        ]);

        // Trip options for Dead Sea (ID: 4)
        TripOption::create([
            'title' => 'Option 1: $30',
            'details' => json_encode([
                'Day pass to a beach resort',
                'Access to mud and mineral baths',
                'Towel and locker rental',
            ]),
            'description' => 'A day pass to a beach resort with access to mud and mineral baths.',
            'landmark_id' => 4,
        ]);
        TripOption::create([
            'title' => 'Option 2: $170 for Two Days',
            'details' => json_encode([
                'Two-day stay at a Dead Sea resort',
                'All meals included',
                'Daily access to spa and wellness facilities',
                'Transportation to and from the resort',
            ]),
            'description' => 'A relaxing two-day stay with full amenities and wellness treatments.',
            'landmark_id' => 4,
        ]);

        // Trip options for Roman Theater (ID: 5)
        TripOption::create([
            'title' => 'Option 1: $15',
            'details' => json_encode([
                'Entrance fee to the theater',
                'Guided tour',
                'Refreshments included',
            ]),
            'description' => 'A guided tour of the Roman Theater with entrance fee and refreshments.',
            'landmark_id' => 5,
        ]);
        TripOption::create([
            'title' => 'Option 2: $50 for a Half-Day Tour',
            'details' => json_encode([
                'Extended guided tour',
                'Visit to additional historical sites',
                'Transportation included',
            ]),
            'description' => 'A half-day tour including transportation and visits to additional historical sites.',
            'landmark_id' => 5,
        ]);
    }
}
