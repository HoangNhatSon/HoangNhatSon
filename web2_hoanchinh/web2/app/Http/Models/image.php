<?php

namespace App\Http\models;

use Illuminate\Database\Eloquent\Model;

use App;

use DB;

class image extends Model {

protected $table = 'images';

protected $primaryKey = 'image_id';

public $timestamps = false;

protected $fillable = [

'image_name',
'image_data',

];

public function get_image(){

$image = self::all();

return $image;

}


}

