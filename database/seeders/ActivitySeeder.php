<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Activity;

class ActivitySeeder extends Seeder
{
    public function run()
    {
        // Activities for Petra (ID: 1)
        Activity::create([
            'name' => 'Exploring the Treasury (Al-Khazneh) and its intricate façade',
            'description' => 'Explore the famous Treasury of Petra.',
            'landmark_id' => 1,
        ]);
        Activity::create([
            'name' => 'Hiking up to the Monastery (Ad-Deir) for panoramic views',
            'description' => 'Hike to the Monastery for stunning views of Petra.',
            'landmark_id' => 1,
        ]);
        Activity::create([
            'name' => 'Wandering through the Siq, a dramatic sandstone gorge',
            'description' => 'Walk through the Siq to reach the heart of Petra.',
            'landmark_id' => 1,
        ]);

        // Activities for Wadi Rum (ID: 2)
        Activity::create([
            'name' => 'Jeep safari through the desert landscape',
            'description' => 'Experience a thrilling Jeep safari in Wadi Rum.',
            'landmark_id' => 2,
        ]);
        Activity::create([
            'name' => 'Camel trekking to explore the dunes',
            'description' => 'Explore the desert dunes on a camel trek.',
            'landmark_id' => 2,
        ]);
        Activity::create([
            'name' => 'Climbing and hiking in the rock formations',
            'description' => 'Enjoy climbing and hiking in Wadi Rum’s unique rock formations.',
            'landmark_id' => 2,
        ]);

        // Activities for Aqaba (ID: 3)
        Activity::create([
            'name' => 'Snorkeling and diving in the Red Sea',
            'description' => 'Discover the underwater world with snorkeling and diving.',
            'landmark_id' => 3,
        ]);
        Activity::create([
            'name' => 'Relaxing on the sandy beaches',
            'description' => 'Enjoy a relaxing day on Aqaba’s beautiful beaches.',
            'landmark_id' => 3,
        ]);
        Activity::create([
            'name' => 'Water sports such as jet skiing and kite surfing',
            'description' => 'Participate in exciting water sports in Aqaba.',
            'landmark_id' => 3,
        ]);

        // Activities for Dead Sea (ID: 4)
        Activity::create([
            'name' => 'Floating in the mineral-rich waters',
            'description' => 'Experience floating in the Dead Sea’s unique mineral-rich waters.',
            'landmark_id' => 4,
        ]);
        Activity::create([
            'name' => 'Applying Dead Sea mud for skincare treatments',
            'description' => 'Use Dead Sea mud for relaxing skincare treatments.',
            'landmark_id' => 4,
        ]);
        Activity::create([
            'name' => 'Relaxing on the unique salt beaches',
            'description' => 'Relax on the Dead Sea’s distinctive salt beaches.',
            'landmark_id' => 4,
        ]);

        // Activities for Roman Theater (ID: 5)
        Activity::create([
            'name' => 'Exploring the ancient theater and its ruins',
            'description' => 'Explore the well-preserved Roman Theater in Amman.',
            'landmark_id' => 5,
        ]);
        Activity::create([
            'name' => 'Attending performances and cultural events',
            'description' => 'Attend various performances and cultural events at the Roman Theater.',
            'landmark_id' => 5,
        ]);
        Activity::create([
            'name' => 'Learning about the history of Roman architecture',
            'description' => 'Learn about Roman architectural techniques and history.',
            'landmark_id' => 5,
        ]);
    }
}
