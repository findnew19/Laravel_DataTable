<?php
/*參考資料:
https://laravel.tw/docs/5.2/seeding#using-model-factories
http://www.zhangxihai.cn/archives/120
http://laravelacademy.org/post/133.html
http://www.slideshare.net/shengyou/8-modelseeding
 */
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(tblstudentSeeder::class);
    }
}

class tblstudentSeeder extends Seeder
{
  public function run()
  {
    App\tblstudent::truncate();
    factory(App\tblstudent::class, 20)->create();
  }
}
