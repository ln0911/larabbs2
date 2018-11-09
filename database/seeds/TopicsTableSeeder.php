<?php

use Illuminate\Database\Seeder;
use App\Models\Topic;

class TopicsTableSeeder extends Seeder
{
    public function run()
    {


        $user_ids = \App\Models\User::all()->pluck('id')->toArray();

        $category_ids = \App\Models\Category::all()->pluck('id')->toArray();

        // 获取 Faker 实例
        $facker = app(\Faker\Generator::class);

        $topics = factory(Topic::class)->times(100)->make()->each(function ($topic, $index) use ($user_ids, $category_ids , $facker) {

            $topic->user_id     = $facker->randomElement($user_ids);

            $topic->category_id = $facker->randomElement($category_ids);

        });

        Topic::insert($topics->toArray());
    }

}

