<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class ArtikelModel {
    public static function get_all() {
        $articles = DB::table('articles')->get();
        return $articles;
    }

    public static function add($data) {
        $new_article = DB::table('articles')->insert($data);
        return $new_article;
    }

    public static function find_byid($id) {
        $article = DB::table('articles')->where('id', $id)->first();
        return $article;
    }

    public static function update($data) {
        $update = DB::table('articles')->where('id', $data['id'])->update($data);
        return $update;
    }

    public static function destroy($id) {
        $delete = DB::table('articles')->where('id', $id)->delete();
        return $delete;
    }
}