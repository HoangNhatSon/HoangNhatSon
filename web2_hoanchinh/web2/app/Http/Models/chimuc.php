<?php

namespace App\Http\models;

use Illuminate\Database\Eloquent\Model;

use App;

use DB;

class chimuc extends Model {

protected $table = 'chimuc';

protected $primaryKey = 'chimuc_id';

public $timestamps = false;

protected $fillable = [

'chimuc_name',


];

public function get_chimuc(){

$chimuc = self::all();

return $chimuc;

}


}

