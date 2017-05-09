<?php

namespace App\Http\models;

use Illuminate\Database\Eloquent\Model;

use App;

use DB;

class title extends Model {

protected $table = 'title';

protected $primaryKey = 'title_id';

public $timestamps = false;

protected $fillable = [

'title_name',


];

public function get_title(){

$title = self::all();

return $title;

}


}

