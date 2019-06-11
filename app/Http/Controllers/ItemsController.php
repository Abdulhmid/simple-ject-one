<?php

namespace App\Http\Controllers;
use App\Items;

use Illuminate\Http\Request;

class ItemsController extends Controller
{
    public function index() {
        return Items::all();
    }
    
    public function show(Items $post) {
        return $post;
    }
    public function store(Request $request) {
        $post = Items::create($request->all());
        return response()->json($post, 200);
    }
    public function update(Request $request, Items $post) {
        $post->update($request->all());
        return response()->json($post);
    }
    public function delete(Items $post) {
        $post->delete();
        return response()->json(null, 204);
    }
}
