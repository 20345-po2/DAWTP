<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Recipe;
use App\Models\User;
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

        User::truncate();
        Category::truncate();
        Recipe::truncate();

        $user = User::factory()->create();

        Category::create([
            'name' => 'Bolos e Tortas Doces',
            'slug' => 'bolos-tortas-doces'
        ]);

        Category::create([
            'name' => 'Carnes',
            'slug' => 'carnes'
        ]);

        Category::create([
            'name' => 'Aves',
            'slug' => 'aves'
        ]);

        Category::create([
            'name' => 'Peixes e Frutos do Mar',
            'slug' => 'peixes-frutos-do-mar'
        ]);

        Category::create([
            'name' => 'Saladas, Molhos e Acompanhamentos',
            'slug' => 'saladas-molhos-acompanhamentos'
        ]);

        $sopas = Category::create([
            'name' => 'Sopas',
            'slug' => 'sopas'
        ]);

        $massas = Category::create([
            'name' => 'Massas',
            'slug' => 'massas'
        ]);

        Category::create([
            'name' => 'Bebidas',
            'slug' => 'bebidas'
        ]);

        Category::create([
            'name' => 'Doces e Sobremesas',
            'slug' => 'doces-sobremesas'
        ]);

        $lanches = Category::create([
            'name' => 'Lanches',
            'slug' => 'lanches'
        ]);

        Category::create([
            'name' => 'Prato Único',
            'slug' => 'prato-unico'
        ]);

        $light = Category::create([
            'name' => 'Light',
            'slug' => 'light'
        ]);

        Category::create([
            'name' => 'Alimentação Saudável',
            'slug' => 'alimentacao-saudavel'
        ]);

        Recipe::create([
            'user_id' => $user->id,
            'category_id' => $massas->id,
            'name' => 'Pizza de frigideira com atum',
            'slug' => 'pizza-de-frigideira-com-atum-' . $user->id,
            'servings' => 3,
            'preparationTime' => 30,
            'instructions' => 'Em uma frigideira antiaderente, coloque a massa de pizza, cubra com o molho de tomate, espalhe o atum e o queijo. Tempere com sal, pimenta e orégano. Tampe e leve ao fogo baixo por 3 minutos. Retire do fogo, espalhe a rúcula, regue com azeite e sirva em seguida.',

        ]);

        Recipe::create([
            'user_id' => $user->id,
            'category_id' => $sopas->id,
            'name' => 'Frigideira de legumes ao creme',
            'slug' => 'frigideira-de-legumes-ao-creme-' . $user->id,
            'servings' => 3,
            'preparationTime' => 30,
            'instructions' => 'Em uma frigideira antiaderente, coloque a massa de pizza, cubra com o molho de tomate, espalhe o atum e o queijo. Tempere com sal, pimenta e orégano. Tampe e leve ao fogo baixo por 3 minutos. Retire do fogo, espalhe a rúcula, regue com azeite e sirva em seguida.',


        ]);

        Recipe::create([
            'user_id' => $user->id,
            'category_id' => $light->id,
            'name' => 'Frigideira de arroz com salsicha',
            'slug' => 'frigideira-de-arroz-com-salsicha-'. $user->id,
            'servings' => 3,
            'preparationTime' => 30,
            'instructions' => 'Em uma frigideira antiaderente, coloque a massa de pizza, cubra com o molho de tomate, espalhe o atum e o queijo. Tempere com sal, pimenta e orégano. Tampe e leve ao fogo baixo por 3 minutos. Retire do fogo, espalhe a rúcula, regue com azeite e sirva em seguida.',


        ]);

        Recipe::create([
            'user_id' => $user->id,
            'category_id' => $lanches->id,
            'name' => 'Torta de frango na frigideira',
            'slug' => 'torta-de-frango-na-frigideira-' . $user->id,
            'servings' => 3,
            'preparationTime' => 30,
            'instructions' => 'Em uma frigideira antiaderente, coloque a massa de pizza, cubra com o molho de tomate, espalhe o atum e o queijo. Tempere com sal, pimenta e orégano. Tampe e leve ao fogo baixo por 3 minutos. Retire do fogo, espalhe a rúcula, regue com azeite e sirva em seguida.',
        ]);

    }
}
