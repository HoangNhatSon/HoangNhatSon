<?php

namespace App\Http\models;

use Illuminate\Database\Eloquent\Model;

use App;

use DB;

class button extends Model {

protected $table = 'button';

protected $primaryKey = 'button_id';

public $timestamps = false;

protected $fillable = [

'button_name',
'button_content',

];

public function get_button(){

$button = self::all();

return $button;

}


}

