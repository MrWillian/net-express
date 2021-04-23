<?php

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
        DB::table('roles')->truncate();
        DB::table('companies')->truncate();
        DB::table('users')->truncate();
        DB::table('tags')->truncate();
        DB::table('item_tag')->truncate();
        DB::table('categories')->truncate();
        DB::table('items')->truncate();

        $this->call([RolesTableSeeder::class, CompanySeeder::class, UsersTableSeeder::class]);
        $this->call([TagsTableSeeder::class, CategoriesTableSeeder::class, ItemsTableSeeder::class]);
    }
}
