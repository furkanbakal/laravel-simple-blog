<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pages=['Hakkımda','Kariyer','Vizyon'];
        $count=0;
        foreach($pages as $page){
            $count++;
            DB::table('pages')->insert([
                'title'=>$page,
                'slug'=>str_slug($page),
                'image'=>'https://tr1.cbsistatic.com/hub/i/r/2019/09/26/e6277104-dbda-4308-b8cc-d72c54cfa29b/thumbnail/770x578/a62da842393592616446328c580dcb9f/developer-at-work-coding.jpg',
                'content'=>'Merhabalar,ismim Furkan Bakal.23 yaşındayım.
                Bilgisayar mühendisi ve yazılım alanında kendini geliştiriyorum.',
                'order'=>$count,
                'created_at'=>now(),
                'updated_at'=>now()
                ]);

        }
    }
}
