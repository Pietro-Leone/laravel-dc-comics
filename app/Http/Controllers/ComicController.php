<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    public function index() {
        $data=[
            "comics" => Comic::all(),
        ];
		return view("comic.index", $data);
	}
    public function show($id){
        $comic = Comic::findOrFail($id);
        return view("comic.show", ["comic" => $comic]);
    }
    public function create() {
        return view("comic.create");
    }
    public function store(Request $request) {
        $data = $request->validate([
            "title" => "required|string",
            "description" => "required|string",
            "thumb" => "nullable|string",
            "price" => "nullable|decimal:0,2",
            "series" => "nullable|string",
            "sale_date" => "nullable|date",
            "type" => "nullable|string",
            "artists" => "nullable|string",
            "writers" => "nullable|string",
        ]);

        $data["artists"] = json_encode([$data["artists"]]);
        $data["writers"] = json_encode([$data["writers"]]);

        $newComic = new Comic();

        $newComic->fill($data);

        $newComic->save();

        return redirect()->route('home.index', $newComic);
    }

    public function edit($id){
        $comic = Comic::findOrFail($id);
        return view("comic.edit", ["comic" => $comic]);
    }
    public function update(Request $request, $id) {
        $comic = Comic::findOrFail($id);
        $data = $request->validate([
            "title" => "required|string",
            "description" => "required|string",
            "thumb" => "nullable|string",
            "price" => "nullable|decimal:0,2",
            "series" => "nullable|string",
            "sale_date" => "nullable|date",
            "type" => "nullable|string",
            "artists" => "nullable|string",
            "writers" => "nullable|string",
        ]);

        $data["artists"] = json_encode([$data["artists"]]);
        $data["writers"] = json_encode([$data["writers"]]);

        $comic->update($data);

        return redirect()->route('comic.show', $comic->id);
    }
    public function destroy($id){
        $comic = Comic::findOrFail($id);

        $comic->delete();
        return redirect()->route("home.index");
    }
}
