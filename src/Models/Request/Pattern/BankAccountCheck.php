<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.3.0.0 SourceGuardian (31.08.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B34DE09EEDAAQAAAAXAAAABHAAAACABAAAAAAAAAD/hZ2L6yLTRV4ZkcgBSrDjiqekfY8N2e3KCyQQma4t8W2Bc3Z4oERt1Pjy84SVwrgrFz/5iBJOFU3p3TFMyH0cVuKvmVaw4GUUOQxW2jYS2yszp8Ptd0a0dwRl7FCtQv6ujaIaBeRFoM2QLCt6D0o6WwgAAAAYAgAAWB/eUGfSrx19/mFHxfp78aWt4Geea4zYargsQk4T/JOEyR0b0Dk9bm1nMNSUQS7/ql2sjrm+V4DYxfZK0RjwBPpJHnfVBbX1THqcFIMhg/euhr350DlaNp/I5sb5MKdRb6b6/0UsqPaDMZxErrjtEobDFlL+LE3rhdf7kYI/rX+vFMqUTI8ZABYbhTQc5kVedLv1hLJe/FVrDIxqnu7xL3CkBtIJkFCPM6XPqJ5u2LL6nIsEVC4dMCneESetd6dfX9b09QR+eTJoHqfkPPgAlcOMvCwIWQ5z8qmlf8tq8OUbPAYR8EviUXouYJIIFap68LuW6R17uHF7rPRKXO0QNs7vfLgwxAOX24j228i4bQVpPZHsWqGwkkDH0aNgQExn1MSGn5YDJ3AFTjU6WaYT/J7/2c63gs9ZqHI3zHpPZnH48+qNTfNBMcBdqo7CCo1+sUtTJvZLZxQ8hD3w112/QPL+3JZZ36frVVwdBuOa48MFesVoIG+IeJ0HAbzGG8oR+gmuOXnKi1R4fBMn7Vg0zLCmiF6L+IvnRduFMDjgqeD2vtfByJ3HV6rf7ILcfmLiS60xA0dScJ4ohisrPDT+sb9vXieF87IGfjOIn1KbeyI7Vo/yClo5XshOfLJft9z9VA7GXw6+dLEz3bG2pJPkBcszyYnmS6Zc+z25PhrQvpE+b7O4oXLUFxZF3/ulz+/oldrfXVAIB8pRAAAAEAIAAKGSjVmSBsftQchbKOwvOUDf7RZFQVENza+SEMJwXtZCHrG09X6D4BVc4bsniltzNYUTj+nGFLATsRAls2E7vJMp+nH1BJRNliJh7frGO3Gv4+YqVyYYAslLomq4hyjPvEM31shQI9+Gkf2qKH+tdTgDhnK1Zh/+FPcIxpB72ps5ytAIe66Wutl+UEgx2F12xhU3aMxKNFW0Q1408Fo/d5sPHUiyPoUoLY97cWuP661anKgg9sOcJsz5aoLXEEuPUEJOnEhzXarNdK3VS3+0agU94Inh8x3p565aqvpz1dhKKJejcrV72K1EOgGMEFD65YEcj2983c7KzxGz7O2/Qv3U/byOYdHfCsdgJDbwgvjxdrHxs87zqDu4YCNhGDdxwQTosfC5t092ZeNou+4TbB0f+yCcyLExv8z4YwcjxSFP8BabvUQTWGZCPnmUx8KR+HAF1saDyMpImRU+tHFcgW51Gmn+BAWebBUEda6TgnLhGwD7HKpTq8L/aC3SPwkbgDeXbxQD7ZfcJFOfENX9vnleRr+bxHWlUgZxSOkQNJg5FToiMHPWZJDN7fGafkR89SD8ZLGHxtDaueVvbzc9xpJ2wGPCG/tb9Ug+YczcFMEUrrxIYJwwJnc8B7aSY/Ad8eltHRoe07vZZC4n+pFhmA6n1R8caZOdzcm2C52usK0UMxUyJ8eBa/sSVatkWMC1QgAAAAA=');
