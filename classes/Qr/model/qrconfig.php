<?php
/*
 * PHP QR Code encoder
 *
 * Config file, feel free to modify
 */

$strTempFolder = App_Application::getInstance()->getConfig()->cache_dir;

$objQrConfig = App_Application::getInstance()->getConfig()->qr;
if ( is_object( $objQrConfig ) ){ 
	// TODO: there can be definition of constants from webapps application config...
}
     
    define('QR_CACHEABLE', true);                         // use cache - more disk reads but less CPU power, masks and format templates are stored there
    define('QR_CACHE_DIR', $strTempFolder.'/qr-cache' );  // used when QR_CACHEABLE === true
    define('QR_LOG_DIR',   $strTempFolder.'/qr-log' );    // default error logs dir   
    
    define('QR_FIND_BEST_MASK', true);                    // if true, estimates best mask (spec. default, but extremally slow; set to false to significant performance boost but (propably) worst quality code
    define('QR_FIND_FROM_RANDOM', false);                 // if false, checks all masks available, otherwise value tells count of masks need to be checked, mask id are got randomly
    define('QR_DEFAULT_MASK', 2);                         // when QR_FIND_BEST_MASK === false
                                                  
    define('QR_PNG_MAXIMUM_SIZE',  1024);                 // maximum allowed png image width (in pixels), tune to make sure GD and PHP can handle such big images
                                                  