<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.3.1.0 SourceGuardian (13.06.2023) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2023, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B399E09E5DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/OQ0LXIvr/SI0AS2HdVcaQS7qmjU4oLmUZi7fXzwrUgMLXgVz0LVFNFPs40HrGUWTeRSvaKs1rbPTj2QKCBjHJWBhvUaNJHwwFW0gQui6FQ1/i2dKtWlKC+ej8uOsHlJ9SkMMv88k3oAvH5RDX+dV0ggAAABYAgAAEEFRYIEWEBRGCSLMffU0+e7xsvNbLfSnTf58jcYYBeuCoNOWbyryPN7ztoJ6ooxrBoul/ZGFyJwSpE+amN/mm7FaOwe3vvMlRDYmFxVbPMa+jMoWbJ7c3foFLLFWZ4qkaPwrkdb9RP2liRTEaEaDtU2PKVMI+lxvmWq8VZ6pUPIPl5BANPauD0EcNmsl+WbUja9Pm4swY+zE71DkRsMseI+1XqpvHHbpkHUCLUaYyGuInQP6qbJKQTvvIWtLG9hkuolbNYMDh8xz5yVYHg8U4X192VqG1ZaCP4nKEjoJJgA+IuevmdWMELW0Qr8CMLtYi+dKWmxbROYYOmMZUMQTc6tiAkd0ruCC+VXnee2xFO91v/mF9RwvavOvbK7C2S6/Ht2dURLrrRPcOMi+81Gszc/6KBVin+3da11mBFNqbTGjvScQcuIeoiaRSIGlhgKFSapVkMbDtwiLX58jTMuJjdYSPgdyUYQ0k/cEdKjSmoKz9RCsB9pRbYAu/AEAM6IvVfdT25P9rSW8/FXPrHmbwPwd9mvamfC/AKlYLzPrZR5LkGHmE7V4uGWqnxS8hCZCXj+6L55w3EaUibUmfqV8I+paHoJNIZQM7nCs0dO8wDA5mPvt+YISY2KyXQvsQKSRz362YPlsnnvXR+76t81w0mq0jyInx82T0ICkAM8UwN3KBJ5JUiwUsHvKsVahycMteAgOe6OlWaIIvI3MHP93vzlyo9UjB22Jrdjh0rm/+OoIfxeSWROfHlqqrg5iBUpWc+o5GOpL7BK3iuDcbsGRx5JebOhoqPwwUQAAAFACAABBPzsOkHTBJ2v4iDjSD68WzR4vybdz3OZh9N1E2v+OpGsdzXnBN6UiGBzOJoy4q1rYrlH/BnWmGdSpxvySrJDLSaoZgAnVwH+jB9GF4Y1m7+xtYMl/La8XhsXI+PCamMwlidq1DO5Y2SyH8kGiE6nzsAzKg8t2DKrACc5oRtAwhKCFUNySxpqNqJx1yT1rzMxj6fNPdqWD47cNnOQJUiOlO/+9fIlx0RrGNIRj+kyR68UboOWglkQQhUjY2okzW4GN4z6J/Gp3Mub8s8gjCGYXWAtZzK7G0aPAR3zTxVJ2B0k3VU8Zn6QILot+LMtH36+RiEIingTB6Kyjm/MNMYDqq1rLb0XR5qO6MzjWYH8164rOWDtkDZuMD9PWRbU8cQkeGLAEBkWtRLuIxgepNvlO/ENxXtFoc79nKggFsBg914sk21FQ2bqMXZxlWE8m6QAiIlCQ7591gt4zGDTX8qtr+B3cS4ZKKvhGjQwln3RH8pw81bd8VZY6Qx3e+l3AxsjPEgu1ARC4I/7RiQKNetR4lAg42yk5ynezsdF1a7FUq8y7GXo95R3qnoCR0KoLQLCwZBULDybCBdxiiFQuMudl47KiirKB/blqH5eUMm1+fkFsrKJ40dTn/Z8NvajCVOKHfjg7Fa8sLEphANOcRuvWHPhfWcX/nIgkc5lS1XZwzOBIkKM2kr8Gv7fQoQUneMXBqh3gkuQaGKOc5fEuYw2DNsfjmX0bM1Nha/EGujV6BMTfQ2FOuWh8+hsVO6OQ0x1ImcI7DbajH8DANkY2RX0sAAAAAA==');
