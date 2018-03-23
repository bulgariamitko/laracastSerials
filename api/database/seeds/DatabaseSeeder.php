<?php

use App\Tag;
use App\Lesson;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    protected $tables = ['lessons', 'tags', 'lesson_tag'];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->cleanDatabase();
    	// fill with seeders
        $this->call(LessonsTableSeeder::class);
        $this->call(TagsTableSeeder::class);
        $this->call(LessonTagTableSeeder::class);
    }

    private function cleanDatabase()
    {
        // to remove error 1701 in sql
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        // trancate first the table
        foreach ($this->tables as $tableName) {
            DB::table($tableName)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
