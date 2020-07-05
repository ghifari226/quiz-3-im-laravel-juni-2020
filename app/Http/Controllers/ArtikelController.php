<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\ArtikelModel;

class ArtikelController extends Controller
{
    public function index() {
        $articles = ArtikelModel::get_all();
        return view('articles.index', compact('articles'));
    }

    public function create() {
        return view('articles.form');
    }

    public function store(Request $request) {
        $data = $request->all();
        unset($data["_token"]);
        $data["slug"] = Str::slug($data["judul"], '-');
        $article = ArtikelModel::add($data);
        if($article) {
            return redirect('/artikel');
        }
    }

    public function show($id) {
        $article = ArtikelModel::find_byid($id);
        return view('articles.show', compact('article'));
    }

    public function edit($id) {
        $article = ArtikelModel::find_byid($id);
        return view('articles.edit', compact('article', 'id'));
    }

    public function update(Request $request) {
        $data = $request->all();
        unset($data["_token"]);
        unset($data["_method"]);
        $article = ArtikelModel::update($data);
        return redirect('/artikel');
    }

    public function destroy($id) {
        $delete = ArtikelModel::destroy($id);
        return redirect('/artikel');
    }
}
