<?php

namespace Database\Seeders;

use App\Models\Tour;
use Illuminate\Database\Seeder;

class TourSeeder extends Seeder
{
    public function run(): void
    {
        $tours = [
            [
                'title' => 'Kashmir - Paradise on Earth',
                'slug' => 'kashmir-paradise',
                'destination' => 'Kashmir, India',
                'duration' => '7 Days / 6 Nights',
                'price' => 24999,
                'image_url' => 'https://images.unsplash.com/photo-1605640840605-14ac1855827b?w=1200',
                'description' => 'Experience the breathtaking beauty of Kashmir with visits to Srinagar, Gulmarg, Pahalgam, and Sonamarg. Enjoy Dal Lake shikara rides, snow activities, and stunning mountain views.',
                'overview' => 'Explore the paradise on earth with our comprehensive Kashmir tour package.',
                'category' => 'adventure',
                'rating' => 4.7,
                'reviews' => 234,
                'status' => 'active',
            ],
            [
                'title' => 'Kerala Backwaters & Hills',
                'slug' => 'kerala-backwaters',
                'destination' => 'Kerala, India',
                'duration' => '6 Days / 5 Nights',
                'price' => 21999,
                'image_url' => 'https://images.unsplash.com/photo-1602216056096-3b40cc0c9944?w=1200',
                'description' => 'Experience God\'s Own Country with serene backwaters, lush tea gardens, wildlife, and beaches. Includes houseboat stay, Munnar tea plantations, Thekkady wildlife, and Cochin heritage.',
                'overview' => 'Discover the beauty of Kerala from backwaters to hill stations.',
                'category' => 'nature',
                'rating' => 4.6,
                'reviews' => 189,
                'status' => 'active',
            ],
            [
                'title' => 'Andaman Island Paradise',
                'slug' => 'andaman-paradise',
                'destination' => 'Andaman & Nicobar Islands, India',
                'duration' => '7 Days / 6 Nights',
                'price' => 25999,
                'image_url' => 'https://images.unsplash.com/photo-1582719471384-894fbb16e074?w=1200',
                'description' => 'Experience pristine beaches, crystal-clear waters, and rich marine life. Visit Port Blair, Havelock Island, and Neil Island with water sports, scuba diving, and island hopping adventures.',
                'overview' => 'Explore the tropical paradise of Andaman Islands.',
                'category' => 'beach',
                'rating' => 4.8,
                'reviews' => 156,
                'status' => 'active',
            ],
            [
                'title' => 'Complete Himachal Tour',
                'slug' => 'himachal-complete',
                'destination' => 'Himachal Pradesh, India',
                'duration' => '10 Days / 9 Nights',
                'price' => 28999,
                'image_url' => 'https://images.unsplash.com/photo-1626621341517-bbf3d9990a23?w=1200',
                'description' => 'Comprehensive tour covering Shimla, Manali, Dharamshala, and Dalhousie. Experience mountains, valleys, temples, adventure sports including paragliding, rafting, and trekking.',
                'overview' => 'Complete Himachal experience from Shimla to Dalhousie.',
                'category' => 'adventure',
                'rating' => 4.8,
                'reviews' => 267,
                'status' => 'active',
            ],
            [
                'title' => 'Magical Bhutan',
                'slug' => 'bhutan-magical',
                'destination' => 'Bhutan',
                'duration' => '9 Days / 8 Nights',
                'price' => 45999,
                'image_url' => 'https://images.unsplash.com/photo-1609137144813-7d9921338f24?w=1200',
                'description' => 'Explore the Land of Thunder Dragon with visits to Paro, Thimphu, and Punakha. Experience ancient monasteries, Tiger\'s Nest trek, stunning landscapes, and unique Bhutanese culture.',
                'overview' => 'Discover the magical kingdom of Bhutan.',
                'category' => 'culture',
                'rating' => 4.9,
                'reviews' => 156,
                'status' => 'active',
            ],
        ];

        foreach ($tours as $tour) {
            Tour::create($tour);
        }
    }
}
