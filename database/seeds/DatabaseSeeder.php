<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ad;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);
         $this->call(AdsSeeder::class);

        Model::reguard();
    }
}

class AdsSeeder extends Seeder{

    public function run()
    {
        DB::table('Ads')->delete();
        Ad::create([

            'title' => 'First Ad',
            'slug' => 'first-ad',
            'description' => '<b>Descripnion First Ad Body</b>',
            'author_name' => 'Petro',
            'created_at_datetime' => DB::raw('CURRENT_TIMESTAMP'),
        ]);

        Ad::create([
            'title' => 'Second Ad',
            'slug' => 'second-ad',
            'description' => '<b>Descripnion Second Ad Body</b>',
            'author_name' => 'Alexander',
            'created_at_datetime' => DB::raw('CURRENT_TIMESTAMP'),
        ]);

        Ad::create([
            'title' => 'Third Ad',
            'slug' => 'third-ad',
            'description' => '<b>Descripnion Third Ad Body</b>',
            'author_name' => 'Ivan',
            'created_at_datetime' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
    }
}
