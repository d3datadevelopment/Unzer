<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.0.0.2 SourceGuardian (10.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B3F9E09D8DAAQAAAAhAAAABKgAAACABAAAAAAAAAD/gKC7Jpxv2c+cSGHWNUFgOjLQGfzK6AqnMboVeXvVECdxRRQeunBLt2mWZ8L7q0yj98rvzEIuxShTj7Utz+fNmOfG6wFbb3JciqygXJEc1rGjZBAyDFCsdV0eNkv22kYsmtJVcOq7G4E0DeG2gsZhtcrcW/wd3xwrF/v89rLsFEy2GEzvfx4Qk/hrm88FiXofAt50Kp8HmzWT6mUOaszSV2493xnkkcriCAAAAHgBAACtXlyNKRc9LzzpNA955IMj7ELwjg9VvSa/eN6koC57NphcHpv3qFrGx1Eo4CZkJZLsg6mgf2Vovk0zw0cmlGfpF9bv3Mg7SEiFXhAxQO5IJgK68VkLRLy/+qj1amG2eLt6C+AnPMTrEx11u59oo4B1JWFewfxBWQsZBq8ob30CgiTdwKxfaS6CcnyZvCxR9EPrvdfVYeJB/ex/CU/RtjBq1AsuBFDhWo9u8uTUS3Td0F0xd5RIqD9dm3eoCezx4KqLVcmBnNA8U8iea9gDPHtvhmyqAsMxRmPWESVI50w6HMEG13FV7B2bKcVJygziHTqlrfzNrFeP0JhZKCrZ655b//7Qul4nP6VOlus+eAvghnxPi2BOOBXFsiXfMg2ObD+sM3pzeZK8ydDy9JF5NUaoF7wtOCULNhtSq8lg7SRJw0cZlL8/59x+iMqG6sxMKnGlGDYCoE7rKfVNBV8Uw5XfGJuffwSYRyRZj+9JynnQ9HEKxEBYcXfGUQAAAHABAACEZtWR1CBB5rj3kH6EY/hhWHKVKkeza9b4Kyt8WzfE9UvLq7SUR+t0KnlsYbIfpGXUmPU0CqGw1+Jxt3AqDq/mgDEwGgk9uLsI3z9dRDbA7Nat9fCx9V9YBwhN+NhoEC6PPp6luvFXnHxpOEUdQtpLtL8GYDanSdohLKGmR8hDoMpgtkw3gWGZQhiqO2NAEIuglrnNJOANyjbEsW5k9hx1ImX2xX/0X7N5wyjmhvAnf1FxCIs8YAFmG9Y7qPUZLNy3e8LkH6xNqBkbXV4s/uifDDbGrrto5wSh3UPxIceLh/xXgilTSFkPDwih90dWmfY4XUXiOH2UzS2J1Eat3vJMN3NB1/qQr0AWuz/fT1PnQFT/JvSlXB5/m1ptzLqHlEP+LonMmWnDQmOcxurUzhpSHHvvymIAoUzEss67ueb67LRf5VvZ8UdPqY7OaFfVJ2MuW58mN+321ArcanZKIxTiLfZHrZpXmOw2BbACBUhQXFIAAABwAQAA/hABQxBUepsJky70Mk+aKF8DR4GlTM/6csbxh2U28Of1+IE6qpJgYQvUPczyBICbd5DtPZRMiDcLMQWW64VmMrpDR77HyTymSVqhpYBkA0LwEjLv/spwayUYLKsSvkJjfdXExO4ekPwXscgIVcv0pUD0GnSSWbLys1V6xr7k9O0hB8gJ7p/kIDxSbutYkeokJ23iNhGCG5d1Kex4INj7/SP4Yi1JnPU1U/ammbCySnVK9IagK+ZkZAuyIRHEnEdqa8mQVv38KWK13J/RN6W4iuXGfvzLkDCHIrRDsa3+KjbpYXvY38T2VCPLpbxIzu2I8vXjDa26r1OtCHGVD0YYPFBLTOe27N+tn2r4M/F9fe4GI8K4hvCO3+QgUnwtEDOMdonuYmLWHxQQCP3qKbMB2/McccYuXv4F6aYrNU1l3hm9F+YCNn3I7lb2xYcLlV/HhyF4v5QM+3Bq1dvANV+a7Rwlcfmod165TwuM/t87n2oAAAAA');
