<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.3.0.0 SourceGuardian (31.08.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B34DE09EEDAAQAAAAXAAAABHAAAACABAAAAAAAAAD/hZ2L6yLTRV4ZkcgBSrDjiqekfY8N2e3KCyQQma4t8W2Bc3Z4oERt1Pjy84SVwrgrFz/5iBJOFU3p3TFMyH0cVuKvmVaw4GUUOQxW2jYS2yszp8Ptd0a0dwRl7FCtQv6ujaIaBeRFoM2QLCt6D0o6WwgAAABgAQAAmCO8in3sYsqfSXmmzg1IzkjTnhHVNAykSoR0jAM1Pt+j33ntDkwPq7YJFNqXhqJby5KEaE+B20+YixsmWrDU5xASxcW3Hw7l+pgAIqbX570GM9c8pnftqlfYKjCm65lfDbS7AgkiNheTFaXYAbzBCMik4m84RtS+x3XuKLN1vvSWj7s7Of57yIi4sJKxTxwPRFZyJUVCYsrjDxEituMSvS5UdknmoIQdSuLl4RGZEKZLdenXJKIfoemcllvQMjj7kSS5V4x9IFEjLT2muQm9/gP39MtJJVieI7BqfE4AkkTN+l+ebM6LlX7uXSeZeFsysM7kTkXhSvCCOJZ0NTxn7ciIWtEqVEtm0jX+9LM/Clf4Zdb7f82I/0aBjhP6tkSZYRTrKXNCzBP5lGvedLHocDi8PLCVWMFhV5syyzvCbA0XdR7clMdVimfOXORFTKKG1FCj0kFqd1/rpnWaJIVwKFEAAABYAQAAh/2qGMS+sI6xqdrQvzfFvInW0w3lRFE8VQmL4DcgtDWKTLr8GB2WJAiw6x5z5E07bJ0q73rbcjLaf6AUcyIAOL/gVHhTgWV304XWkg7yOeb+zGxYLjAjfvooi2FiLsGHxukKsW4M72lGq28EcB0enWvMOKT6RQH51LsThoipi3jrGu0D8iYrgo/jT6jeG3CaDHhMuABr2RzL/CTmBCajTSJox56KcXLzdoAR3yQDkEJBx0cq4t4ZxY3nLX2DcQxqQXjPAoS1jCcCpp77fGKbTkNKlgUWA9bsBFw5iRNY2h5rHhNTXoz6iiS37+6U/QgcGHGXGQS6shQaYnRaQ9TrqRm8PqxK7up3xwA0i0er0aRyFK8RDpysTZ17SjodBW7R6YGrIgA2KvyEpkJLXk78sJd0GFdZjwxum2+b+Htpis/gg4PxTy7yEUH804ypfsDK9OPeF6CxJ/EAAAAA');