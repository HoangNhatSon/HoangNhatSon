<?php

namespace App\Http\models;

use Illuminate\Database\Eloquent\Model;

use App;

use DB;

class menu extends Model {

protected $table = 'menu';

protected $primaryKey = 'menu_id';

public $timestamps = false;

protected $fillable = [

'menu_noidung',

];

public function get_menu(){

$menu = self::all();

return $menu;

}


}

