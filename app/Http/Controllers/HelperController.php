<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HelperController extends Controller
{
    // obtiene la imagen de culaquier modelo y en cualquier disco del filesystem
    public function getFile($disk, $filename){

        $file = Storage::disk($disk)->path('/' . $filename);
        return response()->file($file);
    }

    public function deleteFile($disk, $filename){
        Storage::disk($disk)->delete($filename);

        // $uploads = Upload::where('path', '=', $filename)->get();
        foreach($uploads as $upload){
            $upload->delete();
        }

        return back();
    }
}
