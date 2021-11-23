<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str as Str;

class CategoryController extends Controller
{
    public function __construct()
    {
        // depronto falta el show
        $this->middleware('auth');
        $this->middleware('verified');
        $this->middleware('can:category.index')->only('index');
        $this->middleware('can:category.create')->only('create', 'store');
        $this->middleware('can:category.edit')->only('edit', 'update');
        $this->middleware('can:category.destroy')->only('destroy');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categorie::all();
        return view('categories.index', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create', ['category' => new Categorie()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dump($request);
        // dump($request->file('image'));
        // die();
        $validate = $this->validate($request, [
            'name' => ['required', 'string', 'unique:categories'],
            'image' => ['image']
        ]);

        $category = new Categorie();
        $category->name = $request->input('name');
        $category->slug = Str::slug($request->input('name'));

        $category->save();

        $image = $request->file('image');
        // guarda la imagen de los modelos de una sola imagen
        \Helper::WorkOneImage('save', $image, 'categories', $category);

        return redirect()->route('category.index')->with('message', 'Categoria creada correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $categorie = Categorie::where('slug','=', $slug)->firstOrFail();
        return view('categories.show', ['categorie' => $categorie]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Categorie::find($id);
        return view('categories.edit', ['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validate = $this->validate($request, [
            'name' => ['required', 'string', "unique:categories,name,{$id}"],
            'image' => ['image']
        ]);

        $category = Categorie::find($id);
        $category->name = $request->input('name');
        $category->slug = Str::slug($request->input('name'));
        $category->update();

        $image = $request->file('image');

        // a los modelos se les actualiza la unica imagen que tiene
        \Helper::WorkOneImage('update', $image, 'categories', $category);

        return redirect()->route('category.index')->with('message', 'Categoria Actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
