<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'id' => (String) Uuid::uuid4(),
            'title'  =>  'Website',
            'slug' => 'website',
            'description'  => '-',
            'is_active' => true,
        ]);

        Category::create([
            'id' => (String) Uuid::uuid4(),
            'title'  =>  'Android Mobile',
            'slug' => 'android-mobile',
            'description'  => '-',
            'is_active' => true,
        ]);

        Category::create([
            'id' => (String) Uuid::uuid4(),
            'title'  =>  'IOS Mobile',
            'slug' => 'ios-mobile',
            'description'  => '-',
            'is_active' => true,
        ]);

        Category::create([
            'id' => (String) Uuid::uuid4(),
            'title'  =>  'Android/IOS Mobile',
            'slug' => 'android-ios-mobile',
            'description'  => '-',
            'is_active' => true,
        ]);

        Category::create([
            'id' => (String) Uuid::uuid4(),
            'title'  =>  'Card',
            'slug' => 'card',
            'description'  => '-',
            'is_active' => true,
        ]);
    }
}
