<?php

namespace Database\Seeders\V1;

use App\Models\V1\Vendor;
use Illuminate\Database\Seeder;

class VendorSeeder extends Seeder
{
    public function run(): void
    {
        Vendor::factory()->create([
            'name' => 'bikoplus',
            'external_id' => '3'
        ]);
    }
}
