<?php

define('_USE_MULTI_SELECT_', 1);
define("_BASE_ENC_",        'SJIS');   // 基本となるエンコード
define("_TEMPLATE_ENC_",    'SJIS');    // テンプレートのエンコード
define("_GROONGA_ENC_",     'UTF-8');   // groongaのエンコード
define("_LOCALE_", 'ja');
define('_USE_STUB_DATA_', true);

define('_GROONGA_HOST_', 'mmvip:8080');
define("_LOG_BATCH_", 0);   // バッチのログ指定
define("_LOG_FRONT_", 1);   // フロントのログ指定

$path_arr = array(
    VENDORPATH.'PEAR',
);

$path = implode(PATH_SEPARATOR, $path_arr);
set_include_path(get_include_path() . PATH_SEPARATOR . $path);

/**
 * Define Pathes call ARI+Hotel API
 */
define('_ARI_HOTEL_API_URL_TEST_', "http://tour.his-j.com.local/hawaii/stubapi/ari_hotel_stub.xml");
define('_URL_SEARCH_AIR_HOTEL_PAGE_', 'http://e.his-j.com/air-hotel/search/search.aspx');
define('_URL_TOP_HAWAII_PAGE_', '/welcome');
define('_URL_TOP_HAWAII_PAGE_SP_', '/sp/welcome');
define('_PREFIX_CACHE_HAWAII_', 'hawaii');
define('_PREFIX_CACHE_BASIC_HOTEL_HAWAII_', 'basic_hotel_hawaii');
define('_CIAO_EXTERNAL_URL_KENSHO_', "https://e-kensho.his-j.com/trip/ciao/external_voyage.aspx?mediacd=@mediacd&url=");
define('_CIAO_EXTERNAL_URL_', "https://e.his-j.com/trip/ciao/external_voyage.aspx?mediacd=@mediacd&url=");

if(Fuel::$env == \Fuel::DEVELOPMENT) {
    // TESTING ENV
    define('_ARI_HOTEL_API_URL_', "http://e-kensho.his-j.com/api/air-hotel/ah_interface.aspx");
    define('_VACATION_M_HOTEL_TABLE_', "vacation_m_hotel_test");
    define('_URL_C2_SEARCH_PC_', "http://dev-tour.his-j.com:18085/ct/search/02A_10/");
    define('_CIAO_C2_URL_SP_', "http://dev-tour.his-j.com:18085/ct/sp/search.php");
} else {
    define('_ARI_HOTEL_API_URL_', "http://e.his-j.com/api/air-hotel/ah_interface.aspx");
    define('_VACATION_M_HOTEL_TABLE_', "vacation_m_hotel");
    define('_URL_C2_SEARCH_PC_', "http://tour.his-j.com/ct/search/02A_10/");
    define('_CIAO_C2_URL_SP_', "http://tour.his-j.com/ct/sp/search.php");
}

if (isset($_SERVER['HTTP_HOST'])) {

    switch($_SERVER["HTTP_HOST"])
    {
    	default:
    	    define("_SITE_DOMAIN_",    "tour.his-j.com");
    	    break;
    }
    /*
     * $_SERVER が取れなかったらココに設定を書く
    */
} else {
    define("_SITE_DOMAIN_",    "tour.his-j.com");
    //      etc...
}

/**
 * Define Pathes for Assets: image, javascript, css
 */
define('_ASSSET_IMG_PATH_', 'assets/img');
define('_ASSSET_JS_PATH_', 'assets/js');
define('_ASSSET_CSS_PATH_', 'assets/css');
// in seconds
define('_TIME_CACHED_SEARCH_CIAO_PRODUCTS_HAWAII_', 60*10); // 10 minutes
define('_TIME_CACHED_SEARCH_BASIC_HOTELS_HAWAII_', 60*10); // 10 minutes

/**
 * Define code for devices: PC, SP
 */
define('_PC_DEVICE_', 1);
define('_SP_DEVICE_', 2);

/**
 * Define template URL
 */
define('_PC_BASIC_HOTEL_INFO_TEMPLATE_URL_', 'search/basic_hotel_info.tpl');
define('_PC_AIR_HOTEL_INFO_TEMPLATE_URL_', 'search/air_hotel_info.tpl');
define('_PC_CIAO_INFO_TEMPLATE_URL_', 'search/ciao_hotel_info.tpl');
define('_SP_BASIC_HOTEL_INFO_TEMPLATE_URL_', 'sp/search/basic_hotel_info.tpl');
define('_SP_AIR_HOTEL_INFO_TEMPLATE_URL_', 'sp/search/air_hotel_info.tpl');
define('_SP_CIAO_INFO_TEMPLATE_URL_', 'sp/search/ciao_hotel_info.tpl');

define('_BASIC_HOTEL_TEMPLATE_NAME_', 'basic_hotel_template');
define('_AIR_HOTEL_TEMPLATE_NAME_', 'air_hotel_template');
define('_CIAO_TEMPLATE_NAME_', 'ciao_template');