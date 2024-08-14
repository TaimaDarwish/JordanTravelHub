<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LandmarkApiTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test the API endpoint for fetching landmarks.
     *
     * @return void
     */
    public function testApiEndpoint()
    {
        // Optional: Seed the database with test data if needed
        $this->seed(\Database\Seeders\LandmarkSeeder::class);

        // Perform a GET request to the API endpoint
        $response = $this->get('/api/v1/landmarks');

        // Assert that the status code is 200 OK
        $response->assertStatus(200);

        // Assert that the response has the correct JSON structure
        $response->assertJsonStructure([
            'landmarks' => [
                '*' => [
                    'id',
                    'landmarkName',
                    'description',
                    'image',
                    'activities',
                    'tripOptions',
                ],
            ],
        ]);
    }
}
