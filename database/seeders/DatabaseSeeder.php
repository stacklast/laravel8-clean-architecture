<?php
declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run():void
    {
        // if( App::environment('local') ){
        //     $this->call(
        //         class: DefaultUserSeeder::class,
        //     );
        // }
        
        Post::factory(20)->for(
            User::factory()->create([
                'first_name' => 'Edwin',
                'last_name' => 'Benalcazar',
                'email'=>'desarrollo@pervolare.com'
            ])
        )->create();
        // \App\Models\User::factory(10)->create();
    }
}
