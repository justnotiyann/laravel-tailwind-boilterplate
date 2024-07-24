<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   */
  public function run(): void
  {
    // \App\Models\User::factory(10)->create();

    \App\Models\User::factory()->create([
      'name' => 'admin',
      'email' => 'test@example.com',
      'password' => bcrypt('root')
    ]);

    // collect([
    //   ['name' => 'Software Engineer'],
    //   ['name' => 'Hr Manager'],
    //   ['name' => 'Finance Analyst'],
    //   ['name' => 'Marketing Manager'],
    //   ['name' => 'Operations Manager'],
    // ])->each(fn ($data) => \App\Models\Position::factory()->create($data));


  }
}
