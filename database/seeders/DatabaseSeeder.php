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
            'name' => 'Bolos e Tortas Doces'
        ]);

        Category::create([
            'name' => 'Carnes'
        ]);

        Category::create([
            'name' => 'Aves'
        ]);

        Category::create([
            'name' => 'Peixes e Frutos do Mar'
        ]);

        Category::create([
            'name' => 'Saladas, Molhos e Acompanhamentos'
        ]);

        $sopas = Category::create([
            'name' => 'Sopas'
        ]);

        $massas = Category::create([
            'name' => 'Massas'
        ]);

        Category::create([
            'name' => 'Bebidas'
        ]);

        Category::create([
            'name' => 'Doces e Sobremesas'
        ]);

        $lanches = Category::create([
            'name' => 'Lanches'
        ]);

        Category::create([
            'name' => 'Prato Único'
        ]);

        $light = Category::create([
            'name' => 'Light'
        ]);

        Category::create([
            'name' => 'Alimentação Saudável'
        ]);

        Recipe::create([
            'user_id' => $user->id,
            'category_id' => $massas->id,
            'name' => 'Pizza de frigideira com atum',
            'servings' => 3,
            'preparationTime' => 30,
            'instructions' => 'Em uma frigideira antiaderente, coloque a massa de pizza, cubra com o molho de tomate, espalhe o atum e o queijo. Tempere com sal, pimenta e orégano. Tampe e leve ao fogo baixo por 3 minutos. Retire do fogo, espalhe a rúcula, regue com azeite e sirva em seguida.',

        ]);

        Recipe::create([
            'user_id' => $user->id,
            'category_id' => $sopas->id,
            'name' => 'Frigideira de legumes ao creme',
            'servings' => 3,
            'preparationTime' => 30,
            'instructions' => 'Em uma frigideira antiaderente, coloque a massa de pizza, cubra com o molho de tomate, espalhe o atum e o queijo. Tempere com sal, pimenta e orégano. Tampe e leve ao fogo baixo por 3 minutos. Retire do fogo, espalhe a rúcula, regue com azeite e sirva em seguida.',


        ]);

        Recipe::create([
            'user_id' => $user->id,
            'slug' => '',
            'category_id' => $light->id,
            'name' => 'Frigideira de arroz com salsicha',
            'servings' => 3,
            'preparationTime' => 30,
            'instructions' => 'Em uma frigideira antiaderente, coloque a massa de pizza, cubra com o molho de tomate, espalhe o atum e o queijo. Tempere com sal, pimenta e orégano. Tampe e leve ao fogo baixo por 3 minutos. Retire do fogo, espalhe a rúcula, regue com azeite e sirva em seguida.',


        ]);

        Recipe::create([
            'user_id' => $user->id,
            'category_id' => $lanches->id,
            'name' => 'Torta de frango na frigideira',
            'servings' => 3,
            'preparationTime' => 30,
            'instructions' => 'Em uma frigideira antiaderente, coloque a massa de pizza, cubra com o molho de tomate, espalhe o atum e o queijo. Tempere com sal, pimenta e orégano. Tampe e leve ao fogo baixo por 3 minutos. Retire do fogo, espalhe a rúcula, regue com azeite e sirva em seguida.',
        ]);

    }
}
