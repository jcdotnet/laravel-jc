<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillSeeder extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $skills = [ 
            '.NET',
            'C#',
            'CSS',
            'Design Patterns',
            'Desktop Development',
            'Divi Development',
            'Git',
            'Java',
            'JavaScript',
            'jQuery',
            'Laravel',            
            'PHP',
            'OOP',
            'Programming',
            'React',
            'Redux',
            'Relational Databases',
            'Software Development',
            'SQL',
            'TailWind CSS',
            'TypeScript',
            'Web Development',
            'Web Services',
            'WordPress',
            'WPF'
        ];

        foreach ($skills as $skill) {     
            DB::table('skills')->insert([
                'name' => $skill,
            ]);
        }
    }
}
