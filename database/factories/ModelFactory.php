<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});



/*
 當然，手動為每一個 seed 模型一一指定屬性是很麻煩的。作為替代方案，你可以使用 模型工廠 幫你便利地生成大量的資料庫數據。首先，閱讀 模型工廠的文件 來學習如何定義你的工廠。
 一旦你定義了你的工廠，你就可以使用 factory 這個輔助方法函式來新增數據到資料庫中。
 */
$factory->define(App\tblstudent::class, function ($faker) {//为App\tblstudent定义一个工厂方法，这个方法以一个Faker实例对象作为参数
  return [//工厂方法返回一个列值数组
    'name' => $faker->sentence(mt_rand(3, 10)), //我们使用3-10个字符的随机句子作为标题 
  ];
});
