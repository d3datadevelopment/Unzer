<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.0.0 SourceGuardian (28.10.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B36DE09FFDAAQAAAAXAAAABHAAAACABAAAAAAAAAD/3Tz/0jjkIPsukRP3/GMcUNTgJmmRhJyZErNf0fQ8bfJ4U3Ptsulg4ON5KKO2XDrv4/GSUL7P5H5iV1CsQdmjBwYueUyhHycrwNFbn2MsOmv/LPZVh1WbiUGWQ0PRUb/84E7W19CNbh7eva3reS6xkggAAADYAQAAYY1OK9OqgzPx4EhUosO8rM+4d7UMEgJutaEgeO4O+rZvSl696BwX4HP6mVxoWbc7PBtCmFstmmTT0lYRtL1SbRmB7Ufgktg+d2CMI2lGvhWAgSBdAbQYWcNjJ5ymZ2Uxc3Cc+XXkK7Sa23EKhSylM2Ndts+Xlz7v/b7alPYbwNtkH7XcEr4OchyTCc42yt2hQysNAJq7ZwDYhfg/Yff2fSizBxY9Pmb9O/duzJlzfjVm+qOAh0nkKvjfSUh0YVHd09ft0uz+nb0lQT9/ubgtBjjUue+noarJwhZiONrY6DTMpThpRCFjjZWftnTPiIxTs/dpbBR2qL6MJyjfZCF+a1BOnAtw/UB7kdgHDN0WP60t7j1IqjaWDDINMoWkqUQtXg2EV+LRwNGxDjDe8PuCXM3SsnIlL2iDZgudPuEVT9oV2QpnhevZUb9BmBF4y9Ytkou+P+oEWBL29+WoXR2A5ZZBCP5hXtlYvMPIfkeDYOycs7GRAWC9K0Kl7MeE1J1ZQVWsrlHv7RpS3pZ4jj5+fbZRrLSkgKKiY7qirv0XnBuIGYYOYi8M46ZPhVyrS/rYWcj6oH6Q/hYKQ9rlcsoyF6TwGZexyN2XVf/Xg6i7sjZYJXUeXobS41EAAADQAQAAO8puBOE7/TUlQlz1VaguaxsmlfpDitoaoG19j8u3YtM2JWAMR7cbRJ1OWIsCr1I0pT7iRzShpQ378B2dGGSBSvKRNXKvDNpr5dxHU53/ACLegPOvuoNhezO2RkOB6u8yYI68Ru3A6geuXImBo0u7Cj9x0Fny96uZvMmKhWPvLih3GM6NOSSvEqIooO0eqD+v7URl/yLV2C3EYLA7PZ3R2rf9fTp20xaUUS1KwcI5f0YyhF8q+cSUXz8m5VyBZeYGX/EZUv14k0vSXua7gMHuruEpQs89btes0c98lYMB3/IsTAUTDGpQRZo6fUFApLgERrCJ3YIFo8TlfLOeLnln/LJA/vTbm8GJJajRDe0v0s+7Xbb6KJxmJP/cvjYojA4hvO8D9Fwp3vEUrcQ/YSI2jC9cy8YAMlC6QMGMzkFUWZB5ogwLlbmGW11VEbGEeztgvdh3wEZlgq04z8T8GdroCq5/yy1MPP17uROvFNtBvexDz/zPE4k+2UzagDNkwZT4YI+HOqX0wVokLsd9q4yfYs77nDd3QgkryuyUazLkw95xiyq6fEEUSytm4wY3gV8+HLHP/JT2OcgzfkZ470t1BFXJfge4HRwHN/yjeTjcMVsAAAAA');
