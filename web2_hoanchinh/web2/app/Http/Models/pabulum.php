<?php

namespace App\Http\models;

use Illuminate\Database\Eloquent\Model;

use App;

use DB;

class pabulum extends Model {

protected $table = 'pabulum';

protected $primaryKey = 'pabulum_id';

public $timestamps = false;

protected $fillable = [

'pabulum_name',
'pabulum_price',
'pabulum_introduce',
'pabulum_category',
'pabulum_tags',
'pabulum_description',
'pabulum_reviews',

];

public function get_pabulum(){

$pabulum= self::all();

return $pabulum;

}


}

