<?php

use Illuminate\Database\Seeder;
use App\ProductServiceUnit;
class Units extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductServiceUnit::create(
            ['name' => 'KG']
        );
        ProductServiceUnit::create(
            ['name' => 'm']
        );
        ProductServiceUnit::create(
            ['name' => 'm2']
        );
        ProductServiceUnit::create(
            ['name' => 'm3']
        );
        ProductServiceUnit::create(
            ['name' => 'Ton']
        );
        ProductServiceUnit::create(
            ['name' => 'piece']
        );
    }
}
