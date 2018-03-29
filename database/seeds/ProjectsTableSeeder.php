<?php

use App\Models\Category;
use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Category::class, 5)->create()->each( function($c) {
            for($i=0;$i<5;$i++)
            {
                $c->project()->save(factory(Project::class)->make());
            }
        });

    }
}
