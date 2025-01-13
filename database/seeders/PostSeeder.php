<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $judul = [
            'Indonesia Tanah Air Beta'
        ];

        foreach ($judul as $item) {
            $slug = str::slug($item);
            $slugOri = $slug;
            $count = 1;
            while(Post::where('slug', $slug)->exists()){
                $slug = $slugOri . '-' . $count;
                $count++;
            }

            Post::create([
                'title' => $item,
                'slug' => $slug,
                'description' => 'Deskripsi untuk' . $item,
                'content' => 'Konten untuk' . $item,
                'status' => 'publish',
                'user_id' => '1'
            ]);

        }

    }
}
