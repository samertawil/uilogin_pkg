<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RecoveryQuestion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RecoveryQuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $QuestionsData = [
            ['ar_question' => 'ما هي المدينة التي ولدت فيها؟','en_question'=>'What city were you born in?'],
            ['ar_question' => 'ما هي المدينة التي تزوج والديك فيها؟','en_question'=>'In what city or town did your parents meet?'],
            ['ar_question' => 'ما هو لون اول سيارة تملكتها؟','en_question'=>'What was the color of your first car?'],
            ['ar_question' => 'ما هو اسم عائلة جيرانك؟','en_question'=>"What is your neighbor's last name?"],
            ['ar_question' => 'كم عدد الحيوانات الأليفة التي كنت تمتلكها عندما كنت في العاشرة من عمرك؟','en_question'=>'How many pets did you have at 10 years old?'],
            ['ar_question' => 'في أي شهر تزوجت؟','en_question'=>"What month did you get married?"],
        ];
        RecoveryQuestion::insert($QuestionsData);
    }
}

// php artisan make:seeder RecoveryQuestionsSeeder
// php artisan db:seed RecoveryQuestionsSeeder


