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
            'email' => 'info@tveloper.id',
            'address'  => 'Jln. Kopo 330 Bandung, Indonesia',
            'phone' => '0895606173288',
            'is_active' => true,
        ]);
    }
}
