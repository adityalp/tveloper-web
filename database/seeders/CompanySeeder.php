<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::create([
            'name'  =>  'PT TEKNOLOGI TUNTAS TERPERCAYA',
            'location'  => 'Jln. Kopo 330 Bandung, Indonesia',
            'email' => 'info@tveloper.id',
            'phone' => '0895606173288',
        ]);
    }
}
