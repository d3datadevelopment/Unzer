<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.3.1 SourceGuardian (07.05.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B30FE09ED6AAQAAAAhAAAABKgAAACABAAAAAAAAAD/3A9RU/j03p9oZ+O4NT+Xg+qStwbNOq6BiT5FGLdhT9bvf1npL5KqrXATp/EK9scYjZ+e7UOKspEyVOCLWj+04y+q4CmzYe4grkYO+1elefRjyLoIKp7fw2iIW9/rCFsXPMReq6tARqfGPLUwb16ZKlsyRudgK81XQNXET04czoqj8WSWceLSWT3Effms0KBCLljwge3Yu72qTzAIQTD4bNaGHL8kEXNRCAAAAJgBAAC4nz8KSIpt1pRvicFFOppVlIEo86DZtOfD1q6zxIs+v7HBkuunmt/dJw4IPeI4GDfObzQzQBn00BbvMX0+0qT021b3W2WZe1nLrjv59i3js7O0oOEorKYU3QQtisgydNZAhRw1l5iqvkIkZh6kZ860IVaH/zexGF52PHchHWvTZ0wMy2L3uWx/oSl6pX+DTVVzOMijxeyFEFm8+KDMbGBVdkCTpuwOJPsVeTeOM6kLv4qYvRpgKM2H6yHkMm5ik3FNNH2WY/M7monDLJ7S8Tsp3AbJORf3Dv8J1aL3MN8jBmyQHiX2l62d4biJ0seG5bBqqq2GQvwbstFg//eZFBlOmOA/N2XesgvNqnikafovTqBM5Ek4oJtxqZFBDeuMtnTsKThNAFaLhsVpqLUbL0EJxIX1YIkGWom8hgaeYeIWtBQKdKxSClVUHOiICd1xBWHlHIR65mVriN44etNmULBe/iqELG4jqorIuDF4mMZBA2SYqCB7lBCiT9m2gFuH51KnYpGctSLhnQMVhRLX3jazQR8F4Kxj1HdRAAAAkAEAAIKZ4AKMrUlfwo7dK+mbgKx/vSHe9oAFkCaNiSgCZt0E1Z0p/niDgVRTikHcKx6T665SzsVi9ZLlKFTJ9YeQOO2JBmEITauxnfe2ZdfLBfvsc6NBSiYw05C05ajzH2p3bNwW2bCjv0sGc2SkPF6lqnUfmW36AkdCuBzsLqkk4NtyFn3UIZcrO3D34irDLPc+ZwtYC0rtJcX4HGpKxaGViBDZ8BQYPjPIu0DHaqdM6o3adWAPZBJwr+QiHldT5QdLk5OCQ+cnhVM0EEAu+loq+7MFsQiQduAovWQfoEgqG8fd86bmUGw63LMoIbTcxr/kXsbTfVXLLuM9soOK/2kYWS+LotQfw/yo+uOyyC5iHVfgk8RvACkVSJUJr3r+1UGOzbnMetEGiZIc6CmZWTOYkL0NNs89Vqu+cyVw7vxWjj3Fd/Z3Rc0Uws3wS/XhJlOs66FrwDbhNrrlhAHfbjIVgVsFYDX1kYsUbqvsyeW/BxD3oiNlaavBvuTUJ+sTrwqw8V31knUKI2Ixk/o6FUr9vHhSAAAAkAEAAIM7MSJeRgcgNqCzXhJQQ7P90J9vSynUkjDaMDnD5dciONZhnqq9A8WOiwDEJItGzkYeoIGKtkn9vIkqUv9H8y6rHhlZpW4yGSaZ+i4rk0JrGuIvrJ0eAdODHay67+HWwQ3oyQlovSSoP2TsDSQCBcDeJ56PowuTmZoFBzmyOHe0HW2GZ5l8JCip/TPTL+Dfx4sdkEwyzXk/f0gJE7aV7LmlrEFJWwsjeP8dTGsATJARm9MBlLrkSproChT/LMBTFHrJ4VkQEHkoAAGNfZ61hUTnfIJp3U7rYDknUB4/9WkFhqdOVfBOdrd4oIpa3FtvIhaI1lIgY8TRSBi6Ba9Z2hpB0TlnEg2n/w6VmWsbmuwvQXA8U0ZdRKqohDCXxWXbTvl5xdhpCtpZ3RIdRR543h4cyuPhltGU3PAhHsNdtd5Og84snhYIj9MuJm8NUoC9sH1OdzUiXT+kWEzVooyVoYXs/FQjCc/uAivC749wWZaKK1bQ5EOIWewIqdFI/2mY7UzNvCJlM8GDwg10715vKiEAAAAA');
