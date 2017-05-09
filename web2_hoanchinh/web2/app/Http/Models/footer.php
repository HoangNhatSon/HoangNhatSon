<?php

namespace App\Http\models;

use Illuminate\Database\Eloquent\Model;

use App;

use DB;

class footer extends Model {

protected $table = 'footer';

protected $primaryKey = 'footer_id';

public $timestamps = false;

protected $fillable = [

'footer_name',
'footer_content',

];

public function get_footer(){

$footer = self::all();

return $footer;

}


}

