<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\models\chimuc;
use App\Http\models\title;
use App\Http\models\content;
use App\Http\models\footer;
use App\Http\models\button;
use App\Http\models\slideshow;
use App\Http\models\menu;
use App\Http\models\pabulum;
use App\Http\models\image;

class TrangdanhsachController extends BaseController
{
    public function index()
    {

	    $objchimuc = new chimuc();
	    $chimuc = $objchimuc->get_chimuc();

	    $objcontent = new content();
	    $content = $objcontent->get_content();

	    $objtitle = new title();
	    $title = $objtitle->get_title();

	    $objfooter = new footer();
	    $footer = $objfooter->get_footer();

	    $objbutton = new button();
	    $button = $objbutton->get_button();

	    $objslideshow = new slideshow();
	    $slideshow = $objslideshow->get_slideshow();

	    $objmenu = new menu();
	    $menu = $objmenu->get_menu();

	    $objpabulum = new pabulum();
	    $pabulum = $objpabulum->get_pabulum();
	    
	    $image = new image();
	    $image = $image->get_image();

	    $data = array(
	     		'chimuc'=>$chimuc,
	     		'content'=>$content,
	     		'title'=>$title,
	     		'footer'=>$footer,
	     		'button'=>$button,
	     		'slideshow'=>$slideshow,
	     		'menu'=>$menu,
	     		'pabulum'=>$pabulum,
	     		'image'=>$image
	     	);
	    
        return view('Trangdanhsach.index',$data);

    }
    
}
