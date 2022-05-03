<?php

namespace Database\Seeders;

use App\Models\Movie;
use App\Models\Quote;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Movie::truncate();
        Quote::truncate();
        Movie::create([
            'movie'=> [
                'en' => 'The Godfather',
                'ka' => 'ნათლია'
            ]
        ]);

        Quote::create([
            'movie_id' => '1',
            'quote'=>[
                'en' => "I'm gonna make him an offer he can't refuse.",
                'ka' => "მე მას შეთავაზებას გავუკეთებ, რომელზეც უარს ვერ იტყვის"
            ],
            'thumbnail' => 'thumbnails/thegodfather.jpg'
        ]);

        Quote::create([
            'movie_id' => '1',
            'quote'=>[
                'en' => "I Know It Was You, Fredo. You Broke My Heart. You Broke My Heart!",
                'ka' => "ვიცი, რომ შენ იყავი, ფრედო. გული გამიტეხე. გული გამიტეხე!"
            ],
            'thumbnail' => 'thumbnails/the-godfather-part-II.webp'
        ]);

        Quote::create([
            'movie_id' => '1',
            'quote'=>[
                'en' => "Time erodes gratitude more quickly than it does beauty!",
                'ka' => "დრო უფრო სწრაფად ანადგურებს მადლიერებას, ვიდრე სილამაზეს!"
            ],
            'thumbnail' => 'thumbnails/godfatherofficial.jpg'
        ]);
    }
}
