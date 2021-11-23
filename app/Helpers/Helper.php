<?php 

namespace App\Helpers;

// modelos con los que se trabaja con imagenes
use App\Models\Categorie;
use App\Models\Image;
use App\Models\User;
// 
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

Class Helper{

    // este metodo es para saber si alguien no puede ---- y no --- si si puede
    public static function Usercan($id,$permission){

        $userAuth = auth()->user();
        // no es la misma persona y no tiene permiso
        //  no tiene el permiso y si los id son diferentes que confirme que no se puede
        if(!($userAuth->hasPermissionTo($permission)) && $id != $userAuth->id ){
            // osea no pasó, no puede seguir
            return false;
        }else{
            return true;
        }
    }

    public static function AllCategories(){
        return $categories = Categorie::all();
    }

    public static function WorkOneImage($accion, $image, $disk, $model){
        if ($image) {

            if($accion == 'save'){
                //poner un nombre unico a la imagen subida
                $image_path_name = time() . $image->getClientOriginalName();
                //guardarlo en el disco de imagenes
                Storage::disk($disk)->put($image_path_name, File::get($image));
                //seterar el image_path el nombre unico

                // para el tema de los uploads
                $image = new Image(["image_path" => $image_path_name]);
                $model->images()->save($image);
            }elseif ($accion == 'update') {
                // dump(isset($seller->images[0]));
                // die();
                // eliminar archivo anterior
                if (isset($model->images[0])) {
                    Storage::disk($disk)->delete($model->images[0]['image_path']);
                }
    
                //poner un nombre unico a la imagen subida
                $image_path_name = time() . $image->getClientOriginalName();
                //guardarlo en el disco de imagenes
                Storage::disk($disk)->put($image_path_name, File::get($image));
                //seterar el image_path el nombre unico
    
                // para el tema de los uploads
                if (isset($model->images[0])) {
                    $image2 = Image::find($model->images[0]['id']);
                    $image2->image_path = $image_path_name;
                    $image2->update();
                } else {
                    // para el tema de los uploads
                    $images = new Image(["image_path" => $image_path_name]);
                    $model->images()->save($images);
                }
            }
        
        }
    }

    public static function LongTimeFilter($date) {
        if ($date == null) {
            return "Sin fecha";
        }
 
        $start_date = $date;
        $since_start = $start_date->diff(new \DateTime(date("Y-m-d") . " " . date("H:i:s")));
 
        if ($since_start->y == 0) {
            if ($since_start->m == 0) {
                if ($since_start->d == 0) {
                    if ($since_start->h == 0) {
                        if ($since_start->i == 0) {
                            if ($since_start->s == 0) {
                                $result = $since_start->s . ' segundos';
                            } else {
                                if ($since_start->s == 1) {
                                    $result = $since_start->s . ' segundo';
                                } else {
                                    $result = $since_start->s . ' segundos';
                                }
                            }
                        } else {
                            if ($since_start->i == 1) {
                                $result = $since_start->i . ' minuto';
                            } else {
                                $result = $since_start->i . ' minutos';
                            }
                        }
                    } else {
                        if ($since_start->h == 1) {
                            $result = $since_start->h . ' hora';
                        } else {
                            $result = $since_start->h . ' horas';
                        }
                    }
                } else {
                    if ($since_start->d == 1) {
                        $result = $since_start->d . ' día';
                    } else {
                        $result = $since_start->d . ' días';
                    }
                }
            } else {
                if ($since_start->m == 1) {
                    $result = $since_start->m . ' mes';
                } else {
                    $result = $since_start->m . ' meses';
                }
            }
        } else {
            if ($since_start->y == 1) {
                $result = $since_start->y . ' año';
            } else {
                $result = $since_start->y . ' años';
            }
        }
 
        return "Hace " . $result;
    }

}