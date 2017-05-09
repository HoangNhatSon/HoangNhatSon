<?php

namespace App\Http\models;

use Illuminate\Database\Eloquent\Model;

use App;

use DB;

class slideshow extends Model {

protected $table = 'slideshow';

protected $primaryKey = 'slideshow_id';

public $timestamps = false;

protected $fillable = [

'slideshow_name',
'slideshow_content',

];

public function get_slideshow(){

$slideshow = self::all();

return $slideshow;

}


}

