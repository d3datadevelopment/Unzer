<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.0.0 SourceGuardian (28.10.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B36DE09FFDAAQAAAAXAAAABHAAAACABAAAAAAAAAD/3Tz/0jjkIPsukRP3/GMcUNTgJmmRhJyZErNf0fQ8bfJ4U3Ptsulg4ON5KKO2XDrv4/GSUL7P5H5iV1CsQdmjBwYueUyhHycrwNFbn2MsOmv/LPZVh1WbiUGWQ0PRUb/84E7W19CNbh7eva3reS6xkggAAADgAQAAU3WJXS8gFwsGVZ8hLTYBVrFvhCTKl1qEdtgVJvv9iU93pBtn+VfByTf50x7JDTuvHp0SesEOsQnn0bpn3sMeXYlZvTIZkTJfqzEx4+Wsz5rcyYQ0zL2E0zoKrOmoUoUUeNTxxvg6qtRItoOdp5dILEv7MhALQux+WzU3sxtTdPTu+3MZhpVOD6SOlK9kthCtajftxgDyniBxv9BE+q9yvsuwOAyK4bAoSvtTKfCy8BAevnP6WnPKgCsFD/QdCDDKNgctBL9OCobBXf2Kf7sMRwF4u/I7do2ZaGTL//zDB6AftFlU5O8SwchNx65/vIAWoxudIvX7lKt/2YfscWfzgKk3S92JQR5aCeO4JGgVVhTwyMp0VWO1wY2ydhf0vt33/qabv7larK+GrFPX8YFrR8Dthhh7Eibx4DZvURzllAdxnk3tvo1hmPO/nCJwkeqd1hikIZ8j17dA9BF0rhhzPhk+xMiZfYfSq7Y967QX3DZco4Yjqcwnl+mWztt+rbKAWq2aYxyVtDRpH+xBNVfGC4pC91hmSnDC8qVL4Mh8qhTyO2wAHoGraoEqX2bYBgsN9cA4+0kIXjL09ni8wz17lF83GuZ3v0pl2hNWz0Ywvc/G+cXzjM98+E3dIJv37OyBUQAAANABAACgLKYHAzL1d3hQ2RBjrqxCkZoyMSPCtrUObXs52X2CwXNVsgsva4uP5g1lPnn+T5sVb8hqXCs1NMS3bZdbnesAsDbrceOmG0/AfSUgVNBC4SLa2cvueSFgwqTSXmC/Ra9iR8pdCR9hnvtnjL7JYwlCfy9HVw1RMI1blPpBrCyclVcMVvDyFN7hXoNIZ28pbUqupMZHIfVVZztirKSkB1Xnxy261cHgpReAsBczrQgl5Vtnmo6mZ1MJGBGxbZhyYIsYKyZru4BEfY+KTGEGx9Xu874zj/I7YGHRuix6ulX8mfApeZ047exlXO6VmjPbOJPi3EDeuhev9xNODi336xOA5UXl+4z+mYpXBgDLRQF2UwmQlJu4tBrhVuAL34JDC9ldHO6zz5r0evcU8z4OK3zLBkde0euTO2qrhyNdEMh8L1dQPPT49C5tktQA+dnvm3E4VK34nFcl/J9PjpNZmudMF5WCuJUu5xiVu3kQ2/BUe4i1PbdcrGf8tdfrKLsyK3q9ILuUJTLai5gkN+0diLCi60U28GxtOAIXlE1KwdiA8jp7nkBNqpQtbQlInClO/G69FhiTG8fUI9Gw23hl46MrVAAVpWZ6NORsYDteSBtTVQAAAAA=');
