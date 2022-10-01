<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

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
            'id' => (String) Uuid::uuid4(),
            'name'  =>  'PT TEKNOLOGI TUNTAS TERPERCAYA',
            'email' => 'info@tveloper.id',
            'address'  => 'Jln. Kopo 330 Bandung, Indonesia',
            'phone' => '0895606173288',
            'is_active' => true,
        ]);
    }
}
