<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Subject::factory()->create([
            'name_th' => 'การออมและการลงทุน',
            'name_en' => 'Saving and Investment',
            'code' => 'GE64303',
            'published_at' => Carbon::today(),
            'description' => 'ความรู้เบื้องต้นและการนำแนวคิดด้านการออมไปประยุกต์ใช้ในชีวิต บทบาท หน้าที่และความรับผิดชอบในการเสียภาษี รวมถึงสิทธิ์ประโยชน์ทางภาษีตามแนวนโยบายของภาครัฐบาล ความรู้ ความเข้าใจเกี่ยวกับการลงทุนในสินทรัพย์ทางการเงิน และการสร้างผลตอบแทนของเงินออมในการลงทุนในตลาดเงินและตลาดทุน การวางแผนทางการเงินให้สอดคล้องในสภาวะเศรษฐกิจ สู่การเกษียณอายุอย่างยั่งยืน'
        ]);
        Subject::factory()->count(20)->create();
    }
}
