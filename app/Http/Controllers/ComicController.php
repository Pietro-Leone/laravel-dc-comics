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
}
