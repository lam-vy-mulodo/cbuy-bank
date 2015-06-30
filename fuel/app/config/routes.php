<?php
return array(
	'_root_'  => 'welcome/index',  // The default route
	'_404_'   => 'welcome/404',    // The main 404 route
	
	'hello(/:name)?' => array('welcome/hello', 'name' => 'hello'),
	'ca-nhan' => 'users/index', //the user home page function	
	'nap-tien' => 'users/naptien',//action nap tien
	'tim-kiem-giao-dich' => 'users/timkiemgiaodich',//action nap tien
	'sao-khe-tai-khoan' => 'users/saokhetaikhoan', // sao khe tai khoan 
	'thanh-toan' => 'users/thanhtoanindex', //action thanh toan tab
	'cac-giao-dich-cho-xac-nhan' => 'users/cacgiaodichchoxacnhan',
	'ho-tro' => 'users/hotro',//trang nhat ky truy cap
	'thong-tin-ca-nhan' => 'users/userinfo',//trang thong tin ca nhan
	'thay-doi-mat-khau' => 'users/change_password',//thay doi mk
);