<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news_posts')->insert([
            'created_at' => "2022-04-06 17:00:00",
            'updated_at' => "2022-04-06 17:00:00",
            'published_at' => "2022-04-06 17:00:00",
            'title' => "Мы открылись",
            'content' => "Наша больница начала свою работу, всех ждем",
        ]);
        DB::table('news_posts')->insert([
            'created_at' => "2022-04-06 17:00:00",
            'updated_at' => "2022-04-06 17:00:00",
            'published_at' => "2022-04-06 20:00:00",
            'title' => "Ывыв",
            'content' => "ПКПВКпрапонпалоролбдмпрдлсро аервсапено ерсаропнро ерспмр ернаечерречрми ореарспраерсапр реарргдсо",
        ]);
        DB::table('news_posts')->insert([
            'created_at' => "2022-04-06 17:00:00",
            'updated_at' => "2022-04-06 17:00:00",
            'published_at' => "2022-04-06 20:00:00",
            'title' => "ЫЫЫЫ",
            'content' => "ПКПВКпрапонпалоролбдмпрдлсро рпкерчаепрыае ртаенгорвнаеог ыероавчеры ва
                          аервсапено ерсаропнро ерспмр ернаечерречрми ореарспраерсапр реарргдсо
                            уаыкупевырианпот ерваервкачсонвпенро унрыаеричваепрн ыукпапквпвпауука",
        ]);
    }
}
