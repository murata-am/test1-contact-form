<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;use Illuminate\Support\Facades\DB;


class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $timestamp = now();

        $param = [
            'content' => '商品のお届けについて',
            'created_at' => $timestamp,
            'updated_at' => $timestamp,
        ];
        DB::table('categories')->insert($param);

        $param = [
            'content' => '商品の交換について',
            'created_at' => $timestamp,
            'updated_at' => $timestamp,
        ];
        DB::table('categories')->insert($param);

        $param = [
            'content' => '商品トラブル',
            'created_at' => $timestamp,
            'updated_at' => $timestamp,
        ];
        DB::table('categories')->insert($param);

        $param = [
            'content' => 'ショップへのお問い合わせ',
            'created_at' => $timestamp,
            'updated_at' => $timestamp,
        ];
        DB::table('categories')->insert($param);

        $param = [
            'content' => 'その他',
            'created_at' => $timestamp,
            'updated_at' => $timestamp,
        ];
        DB::table('categories')->insert($param);
    }
}