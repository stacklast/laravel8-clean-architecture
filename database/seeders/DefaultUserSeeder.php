<?php
declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DefaultUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        User::factory()->create([
            'first_name' => 'Edwin',
            'last_name' => 'Benalcazar',
            'email'=>'desarrollo@pervolare.com'
        ]);
    }
}
