<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.2.6.1 SourceGuardian (18.07.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B35FE09FA5AAQAAAAXAAAABHAAAACABAAAAAAAAAD/RvilLstExDzttRCb4ojWacLGLuMpeJpPNUA8aWrqmDLKMkzBlhTv2Rv6+3ceI4b4PvRjIzARFynHLkrXQXOHVQeoKLjSSdUb0VTWxvcFGvEGaIrHcewAUTM01F7WFDtD7qXf87MGj3FvU5SOQskCZQgAAADAAQAA0MLOyzKU8HLKf7DGN8uYuBRheS7bgPwsN/wLPqqfeQql1vTfSAQUn37n2TpTcUhZEeN7y1m479O9QepuUOIkZASnIumszrtdSXP6acQb5lNpXHTQGVBZBd8lEVeGEJwAldaqYvBt+UNm+XqX3BfLezsEZkH/4epAdZe8UI6wKhLvVK3lAS+5Rf5l88UTcsqUsqPYeuDXQzJOFVU7ugGK49zSIIRtPrx7BukGoXXlrt+1JwZHPrs3Kbhm1ZieA59FiTC1SuaaCs03SSD8yg9LOL+BRklNn4PgzP52ihE7EYNwyA6moguM96bRuUEy/S718I4P6VapIjqXmBOwdapgUttC4M4oT/KboPVGLI+qyYAscI5BbO9cJAsiTsXy0TwrT1QW25MAfKvmn2wsGiArdsvwe98Xxsxc/SpHVZcXCXTpXNtVJdm4jmRK1Y8yvEWb3qGEiUFsXQbeEsScqo9EZ+QmePufgy7W1+xYaFH7sLvuoWtPppQCY7MV+dDCqqtQhxB9xvayXM+arsSvq+tD1/+IClLlfU23Nx1zXcMQejaE+EO4AGPtFc31FBKQ/HEY50aXvH0+n5HA9qM2ExTmm1EAAACwAQAAKvPw8sB7vPCr9is/TwmjJvO3JZz1fJaAVLJMtNuyLa0OhLlsRJJ4JA/uvPSiIKqp2YW6CjPfqzu2qgayJNMQVRsxAHzkCYI2o7eH6+ZUKwrqM8+V2Y9UdfOwnHrjEXbYS+vUBg/BGYMHfvR8jF/82I1rYJQ06oHOjB7bdY+6kGR7Y+qUnbUVHiTBMBXeqykVxecYa8GpV9Ny8TmnKi0NeF5W6elW/7YEF3NsdGqHlne+SA1kVi7g/49QMnqrn2a9vBTNfl/NgOoL5EY9pK5T/6xoDWqXB+fc39DeT5mrvl6GqnHFklGCRWckbl+fTAbFcvi6ZR8hBluvsO5ow/fify7AgNYK3CyXhVyznTKqi8foHYAAiZ+mdVTl2F4oy2WIl4neB+4oIb7hCEi39UO2zVw5iikFBbwj8qiHycU4hp2BVR6AzK7nusiUQlu4yj/7DqUSLzcJF8XjDxolmfHzlB5BVC4L1Mh38aov/+Gex8bThEGvjii2Pjuy5FksNKmxRTEELNFqBWzhkBtOqxKGdRRWEN8I6ycQ8+obCuHCAGZlwR2SQ1GKysxNddLJH9VFAAAAAA==');
