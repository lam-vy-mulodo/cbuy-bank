<?php
use Fuel\Core\Security;
use Fuel\Core\Debug;
use Fuel\Core\Controller_Template;
use Fuel\Core\View;
use Fuel\Core\Uri;
use Parser\View_Smarty;
use \Model\Validate;
use Fuel\Core\Input;
use Fuel\Core\Response;
use Fuel\Core\Pagination;
use Dwoo\Template\String;
/**
 * Fuel is a fast, lightweight, community driven PHP5 framework.
 *
 * @package    Fuel
 * @version    1.7
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2014 Fuel Development Team
 * @link       http://fuelphp.com
 */

/**
 * The Users Controller.
 *
 * @author	 lam vy
 * @package  app
 * @extends  Controller
 */
 Class Controller_Users extends Controller_Base {
 	
 	public $template = 'user_template.tpl';
 	
	public function before()
	{
		parent::before();
	}

	/**
	 * Constructor
	 * @param Request $request
	 */
	public function __construct(Request $request)
	{
		parent::__construct($request);
	}
	
	/**
	 * Default action of Controller_user
	 *
	 * @author Lam Vy 
	 * @return string
	 */
	public function action_index()
	{
		$this->template->content = View_Smarty::forge('users/index.tpl');
		return mb_convert_encoding($this->template, 'utf-8', 'utf-8');
	}
	
	/**
	 * action add money for account
	 * 
	 * @author Lam Vy
	 * @return String
	 */
	public function action_naptien() {
		$this->template->content = View_Smarty::forge('users/naptien.tpl');
		return mb_convert_encoding($this->template, 'utf-8','utf-8');
	}
	
	public function action_timkiemgiaodich() {
		$this->template->content = View_Smarty::forge('users/timkiemgiaodich.tpl');
		return mb_convert_encoding($this->template, 'utf-8', 'utf-8');
	}
	/**
	 * sao ke tai khoan
	 */
	public function action_saokhetaikhoan() {
		$this->template->content = View_Smarty::forge('users/saokhetaikhoan.tpl');
		return mb_convert_encoding($this->template, 'utf-8', 'utf-8');
	}
	// Thanh toan tab
	/**
	 * function thanh toan content page template
	 */
	public function action_cacgiaodichchoxacnhan() {
		$this->template->content = View_Smarty::forge('users/giaodichchoxacnhan.tpl');
		return mb_convert_encoding($this->template, 'utf-8', 'utf-8');
	}
	public function action_thanhtoanindex() {
		$this->template->content = View_Smarty::forge('users/hoadon.tpl');
		return mb_convert_encoding($this->template, 'utf-8', 'utf-8');
	}
	//ho-tro-tb
	/**
	 * function update thong tin ca nhan
	 * thong tin nhat ky truy cap
	 */
	public function action_hotro() {
		$this->template->content = View_Smarty::forge('users/nhatkytruycap.tpl');
		return mb_convert_encoding($this->template,'utf-8', 'utf-8');
	}
	public function action_userinfo() {
		$this->template->content = View_Smarty::forge('users/userinfo.tpl');
		return mb_convert_encoding($this->template,'utf-8', 'utf-8');
	}
	public function action_change_password() {
		$this->template->content = View_Smarty::forge('users/changepassword.tpl');
		return mb_convert_encoding($this->template,'utf-8', 'utf-8');
	}
	public function action_login(){
		$phone = Input::post('phone');
		$pass = Input::post('password');
		return 1;
	}
 }