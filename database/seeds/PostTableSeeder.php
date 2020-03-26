<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $titles = ['First Blog Title','Second Blog Title','Third Blog Title','Fourth Blog Title'];
        $images =['https://wallpapercave.com/wp/wp2062229.jpg','https://wallpaperaccess.com/full/25483.jpg',
        'https://wallpaperaccess.com/full/25484.jpg',
        'https://wallpapercave.com/wp/wp2049353.jpg'
    ];
        for ($i=0; $i <count($titles) ; $i++) { 
            DB::table('posts')->insert([
                'title'=>$titles[$i],
                'slug' => Str::slug($titles[$i]),
                'content' =>'  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cupiditate voluptas quisquam autem tempora sapiente incidunt minus nihil dicta, accusamus beatae quaerat suscipit error impedit voluptatibus! Blanditiis animi dolorem quo vero.  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cupiditate voluptas quisquam autem tempora sapiente incidunt minus nihil dicta, accusamus beatae quaerat suscipit error impedit voluptatibus! Blanditiis animi dolorem quo vero.',
                'img'=>$images[$i]

            ]);
        }
    }
}
