<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $movies=[
            [
                "title"=>"C'era una volta in America",
                "director"=>"Sergio Leone",
                "brief_description"=>"la pellicola narra, nell'arco di più di quarant'anni (dagli anni 1920 agli anni 1960),
                 le drammatiche vicissitudini del criminale David 'Noodles' Aaronson e dei suoi amici .",
             

            ],
            [
                'title' => 'Pulp Fiction',
                'director' => 'Quentin Tarantino',
                'brief_description' => 'The lives of two mob hitmen, a boxer, and others intertwine in a series of incidents.',
                
            ],
            [
                'title' => 'Forrest Gump',
                'director' => 'Robert Zemeckis',
                'brief_description' => 'The story of Forrest Gump, a man with a low IQ who witnesses and unwittingly influences history.',
                
            ],
        ];
            foreach ($movies as $movie) {
                Movie::create($movie);
            }
    }
}
