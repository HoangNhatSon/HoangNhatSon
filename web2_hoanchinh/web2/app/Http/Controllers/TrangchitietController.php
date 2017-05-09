<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\models\title;
use App\Http\models\content;
use App\Http\models\footer;
use App\Http\models\menu;
use App\Http\models\pabulum;

class TrangchitietController extends BaseController
{
	public function index1()
	{
		$objcontent = new content();
		$content = $objcontent->get_content();

		$objtitle = new title();
		$title = $objtitle->get_title();

		$objfooter = new footer();
		$footer = $objfooter->get_footer();

		$objmenu = new menu();
		$menu = $objmenu->get_menu();

		$objpabulum = new pabulum();
		$pabulum = $objpabulum->get_pabulum();

		$data = array(
			'content'=>$content,
			'title'=>$title,
			'footer'=>$footer,
			'menu'=>$menu,
			'pabulum'=>$pabulum
			);
		return view('Trangchitiet.index1',$data);
	}

	public function index2()
	{
		$objcontent = new content();
		$content = $objcontent->get_content();

		$objtitle = new title();
		$title = $objtitle->get_title();

		$objfooter = new footer();
		$footer = $objfooter->get_footer();

		$objmenu = new menu();
		$menu = $objmenu->get_menu();

		$objpabulum = new pabulum();
		$pabulum = $objpabulum->get_pabulum();

		$data = array(
			'content'=>$content,
			'title'=>$title,
			'footer'=>$footer,
			'menu'=>$menu,
			'pabulum'=>$pabulum
			);
		return view('Trangchitiet.index2',$data);
	}
	
	public function index3()
	{
		$objcontent = new content();
		$content = $objcontent->get_content();

		$objtitle = new title();
		$title = $objtitle->get_title();

		$objfooter = new footer();
		$footer = $objfooter->get_footer();

		$objmenu = new menu();
		$menu = $objmenu->get_menu();

		$objpabulum = new pabulum();
		$pabulum = $objpabulum->get_pabulum();

		$data = array(
			'content'=>$content,
			'title'=>$title,
			'footer'=>$footer,
			'menu'=>$menu,
			'pabulum'=>$pabulum
			);
		return view('Trangchitiet.index3',$data);
	}
	public function index4()
	{
		$objcontent = new content();
		$content = $objcontent->get_content();

		$objtitle = new title();
		$title = $objtitle->get_title();

		$objfooter = new footer();
		$footer = $objfooter->get_footer();

		$objmenu = new menu();
		$menu = $objmenu->get_menu();

		$objpabulum = new pabulum();
		$pabulum = $objpabulum->get_pabulum();

		$data = array(
			'content'=>$content,
			'title'=>$title,
			'footer'=>$footer,
			'menu'=>$menu,
			'pabulum'=>$pabulum
			);
		return view('Trangchitiet.index4',$data);
	}
	public function index5()
	{
		$objcontent = new content();
		$content = $objcontent->get_content();

		$objtitle = new title();
		$title = $objtitle->get_title();

		$objfooter = new footer();
		$footer = $objfooter->get_footer();

		$objmenu = new menu();
		$menu = $objmenu->get_menu();

		$objpabulum = new pabulum();
		$pabulum = $objpabulum->get_pabulum();

		$data = array(
			'content'=>$content,
			'title'=>$title,
			'footer'=>$footer,
			'menu'=>$menu,
			'pabulum'=>$pabulum
			);
		return view('Trangchitiet.index5',$data);
	}
	public function index6()
	{
		$objcontent = new content();
		$content = $objcontent->get_content();

		$objtitle = new title();
		$title = $objtitle->get_title();

		$objfooter = new footer();
		$footer = $objfooter->get_footer();

		$objmenu = new menu();
		$menu = $objmenu->get_menu();

		$objpabulum = new pabulum();
		$pabulum = $objpabulum->get_pabulum();

		$data = array(
			'content'=>$content,
			'title'=>$title,
			'footer'=>$footer,
			'menu'=>$menu,
			'pabulum'=>$pabulum
			);
		return view('Trangchitiet.index6',$data);
	}
	public function index7()
	{
		$objcontent = new content();
		$content = $objcontent->get_content();

		$objtitle = new title();
		$title = $objtitle->get_title();

		$objfooter = new footer();
		$footer = $objfooter->get_footer();

		$objmenu = new menu();
		$menu = $objmenu->get_menu();

		$objpabulum = new pabulum();
		$pabulum = $objpabulum->get_pabulum();

		$data = array(
			'content'=>$content,
			'title'=>$title,
			'footer'=>$footer,
			'menu'=>$menu,
			'pabulum'=>$pabulum
			);
		return view('Trangchitiet.index7',$data);
	}
	public function index8()
	{
		$objcontent = new content();
		$content = $objcontent->get_content();

		$objtitle = new title();
		$title = $objtitle->get_title();

		$objfooter = new footer();
		$footer = $objfooter->get_footer();

		$objmenu = new menu();
		$menu = $objmenu->get_menu();

		$objpabulum = new pabulum();
		$pabulum = $objpabulum->get_pabulum();

		$data = array(
			'content'=>$content,
			'title'=>$title,
			'footer'=>$footer,
			'menu'=>$menu,
			'pabulum'=>$pabulum
			);
		return view('Trangchitiet.index8',$data);
	}
	public function index9()
	{
		$objcontent = new content();
		$content = $objcontent->get_content();

		$objtitle = new title();
		$title = $objtitle->get_title();

		$objfooter = new footer();
		$footer = $objfooter->get_footer();

		$objmenu = new menu();
		$menu = $objmenu->get_menu();

		$objpabulum = new pabulum();
		$pabulum = $objpabulum->get_pabulum();

		$data = array(
			'content'=>$content,
			'title'=>$title,
			'footer'=>$footer,
			'menu'=>$menu,
			'pabulum'=>$pabulum
			);
		return view('Trangchitiet.index9',$data);
	}
}
