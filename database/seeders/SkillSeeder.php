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
            [ 'name' => 'C#', 'category_id' => 2 ],
            [ 'name' => 'Java', 'category_id' => 2 ],
            [ 'name' => 'JavaScript', 'category_id' => 2 ],
            [ 'name' => 'TypeScript', 'category_id' => 2 ],
            [ 'name' => 'C#', 'category_id' => 2 ],
            [ 'name' => 'SQL', 'category_id' => 3 ],
            [ 'name' => 'Stored Procedures', 'category_id' => 3 ],
            [ 'name' => 'Transact-SQL', 'category_id' => 3 ],
            [ 'name' => 'Relational Databases', 'category_id' => 3 ],
            [ 'name' => 'Microsoft SQL Server', 'category_id' => 3 ],
            [ 'name' => 'MySql', 'category_id' => 3 ],
            [ 'name' => 'Programming', 'category_id' => 4 ],
            [ 'name' => '.NET', 'category_id' => 4 ],
            [ 'name' => 'Object-Oriented Programing', 'category_id' => 4 ],
            [ 'name' => 'Software Design', 'category_id' => 4 ],
            [ 'name' => 'Design Patterns', 'category_id' => 4 ],
            [ 'name' => 'Build Tools', 'category_id' => 4 ],
            [ 'name' => 'Automated Testing', 'category_id' => 4 ],
            [ 'name' => 'Version Control', 'category_id' => 4 ],
            [ 'name' => 'HTML', 'category_id' => 5 ],
            [ 'name' => 'CSS', 'category_id' => 5 ],
            [ 'name' => 'jQuery', 'category_id' => 5 ],   
            [ 'name' => 'Web Services', 'category_id' => 5 ],
            [ 'name' => 'ASP.NET', 'category_id' => 5 ],
            [ 'name' => 'Laravel', 'category_id' => 5 ],
            [ 'name' => 'Node.js', 'category_id' => 5 ],
            [ 'name' => 'Angular', 'category_id' => 5 ],
            [ 'name' => 'React.js', 'category_id' => 5 ],
            [ 'name' => 'Windows Forms', 'category_id' => 6 ],
            [ 'name' => 'WPF', 'category_id' => 6 ],
            [ 'name' => 'Android', 'category_id' => 7 ],
            [ 'name' => 'Ionic', 'category_id' => 7 ],
            [ 'name' => 'WordPress Theme Development', 'category_id' => 8 ],
            [ 'name' => 'WordPress Plugin Development', 'category_id' => 8 ],
            [ 'name' => 'Divi Development', 'category_id' => 8 ],
            [ 'name' => 'Visual Studio', 'category_id' => 9 ],
            [ 'name' => 'VS Code', 'category_id' => 9 ],
            [ 'name' => 'Eclipse', 'category_id' => 9 ],
            [ 'name' => 'Git', 'category_id' => 10 ],
            [ 'name' => 'GitHub', 'category_id' => 10 ],
            [ 'name' => 'Subversion', 'category_id' => 10 ],
            [ 'name' => 'Desktop Development', 'category_id' => 1 ],
            [ 'name' => 'Redux', 'category_id' => 1 ],
            [ 'name' => 'Software Development', 'category_id' => 1 ],
            [ 'name' => 'Software Development Life Cycle', 'category_id' => 1 ], 
            [ 'name' => 'TailWind CSS', 'category_id' => 1 ],
            [ 'name' => 'Web Development', 'category_id' => 1 ],
            [ 'name' => 'WordPress', 'category_id' => 1 ],
        ];

        foreach ($skills as $key => $skill) {    
            DB::table('skills')->insert([
                'name' => $skill['name'],
                'category_id' => $skill['category_id'],
            ]);
        }
    }
}
