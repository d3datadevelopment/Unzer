<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.3.1.0 SourceGuardian (13.06.2023) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2023, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B399E09E5DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/OQ0LXIvr/SI0AS2HdVcaQS7qmjU4oLmUZi7fXzwrUgMLXgVz0LVFNFPs40HrGUWTeRSvaKs1rbPTj2QKCBjHJWBhvUaNJHwwFW0gQui6FQ1/i2dKtWlKC+ej8uOsHlJ9SkMMv88k3oAvH5RDX+dV0ggAAACYAQAAT5715t2QIv+PXOxschc3fZRab9lLKY9yHBlSTCtCjMdgTzf02VfNd5apbxoo+AE/1YwFCXego7KSE4PcMwvN1qrH32cJxLV5DdetKCdvzDdJR5hJw5DvIrfwi66EfKPigFX88lFzC5D1IrPzPjTaQ1YakqiX1LR8ZTMUzJQvzlBRdbSHlb4ipUiVprhD2tGVtOG63VEDOzvmt5U6n4xg36irzVPoXJ48K5RGoByWsv32dzYLSn+u+U00uhpggS6Zdf/7xYhVffHP/XE2nSJAis8SYes60CJscK2VhXufQJYOIxQaSaTzQTtwHx12a3TOKPm4Qa8ZEcQOFNP0S2YhY/SJaRsWcmfbv875zu0pwCV9yUn9Vwj/jlM/gBWy2KMEkaWqUl+ua6zHzOSYsAzLa3n8FwSHpI+LHMdNXs7yT9jkeq6w7lwNs5zdMk8O82q8HTauuwgnhKSMevrpQIQWDIwKCUE1mRD7DaaV/2SCXf/rZ6Bn8pjAQc6728IoLEzZXgO0xQMlqDfOYhW9aw5FeFxeYlebwbUFUQAAAJABAACs/QUfqTFuRwR+s4p12pdHFlo14/cV9GIdHj7UawGhdxE6JX+9i5bV+DIyYjiE9GLPG/jLJG5KpByVsesCc04XavujnyxRBNOxm/sn0ln9CDzRI3vy3T0ez/S87FJMwhWVIGGFSsZdgNuBpJWJpHTTfgdm8sClXoBM+R8uMYG0GJ0aU3cbwvhS91MBppISqbrYtOrO5SK8RYn6qtCm04N/uLMh5xZZuCEC7lrN0GTAl0r1/WuApGn18NhNKik3YyMjRoWRgHTD+oJqrVCxrQdugJsxb3nPx+UTecdN298UyDDxvYnOgD6cCm1inN0uLyT+8oKRI61q2XcYgprYoZHJ5wohLA4E4AG+XJdGuGBLUYLq8hiacHxvHQ1u72n50TIHIU+2BW5GTulg+7W0rfEBTOxjBcFjasA7ZSbvS6izev5WM/nYCLZrldugBSIH5r2/41iDRzZkQBWgYqFXkHBTZKkIoUmqGlWcJWKdMt+Hhzk2ejnHiQUT4jxoEZuXIQMzAjLOc0iydWUuQrUPrflgAAAAAA==');
