<?php

namespace App\Http\models;

use Illuminate\Database\Eloquent\Model;

use App;

use DB;

class content extends Model {

protected $table = 'content';

protected $primaryKey = 'content_id';

public $timestamps = false;

protected $fillable = [

'content_name',
'content_noidung',


];

public function get_content(){

$content = self::all();

return $content;

}


}

