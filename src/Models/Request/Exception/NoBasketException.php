<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.2.7.0 SourceGuardian (13.06.2023) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2023, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B3A9E09E5DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/O8yHRYhtT6Pd6RNV2KheWvsM9SGJj53Ky/yF6yzdh/j6wqydtjwCHmtunaZbIN148FFWJ2Sukv42P2K3/khaMWnmtgmubOwp5SSmiLTkmDTndXwcibVW0/To2z70F4+1IetgnlPP2ToaVtz6XgJ1EQgAAABoAwAANtt2m6qfZXiAJ4mEctanQZmCLUKTX5fLZo5ZGbpYpeloCfFcwJ0bmzaPe3qe9P0NyW2HfzAeuCSV1zp71amDeN5PhN5eFH2dWjBz0qUnoXj8ile2LGXzxXk4lahZpv+ziqgALlO9pE4bGZz1+D0QaQDjXo9Rbfej82wnFiOkCmG7iYiMBQ2IC72a8WphHcDSvhLwXqkRhV6cKBUNrspUsTfckhvUhImDoNoWw/WmrAwCqzK/y0oJ2jj2PiWBgTKIE7ksrxCMPigA4x4pIZi3zLdH9ndFfA5zl6npNunHx9LmCMvYXdS0C+JEngC1fPDhljr8kSNWE6UNHoxzKJN31pw/KWcIhjrYcFeB89QU+me4hXJjXBLlTRI6AyYO9L7ZmPA0PWIAy9bd2pg6yjE+G8dJRMotX+81nT9CKjxM8dpZSDnMVMF0AJuWShTHcFoRkcsCyh4cFQP8j4zxTD1/+kE1HOvvi3IjUO6c3SyA3JsELTJomx1Idv520jwsfiPFpx48alFcPEtAp8hv1ywCnYQMt1erqvQQPlyaBqqHyypcrAEd1/8Kqna3NhYzfT3oq8HPbyBavpCP2TF9EbeSkv5BsCVYhgIA1oyqoHXOmTaWVZvKc4rNiV1/5pBRbxyQAa+Pa79xlox6EjoBRAEsSBu5GWSINLdziHpacJjYZ2tfTv3P4vFE/c5F3D5PKnK0womVekip4sf/mK7EH352PP/acB2K1G7W0tfjLD45aUrN4sMVRMg1oUG9KXbXZ60qRvev/8ExdgaofibdmzDRZ1pwKWHMNmbeLDjYcTUWWr2dS9lTSVy9IlE7M9wxyiwQ6YJ918NwGxRNwVUcjF6/x+s6FsSoDKGkLwqwdWpNbU4Ze9Q3qbNUYBeTUD/ihslkPadR4hr//bNhw0qh6QTSYAUZQsZ+1UKSwQVbo+WxL34NmaRWnnLHwJLNtBKXHhD4aEtRHNG5Py6ot9JFISfShyjLLyYQw5UxVu7yWcJS9YuCc06TJzUuR15al4FrA9isYDAJnJffbIE3/+3a3Hq8ivq46nMyFua6e/VH9etcrg1gz6pGLQkALOS14oAmXoEV1QRHKhbE1lkXxj3J5RWrh6Y7dB0L10tBdRfuhC26tEHwENr1SEs5Ll4D4jMM3qDOL9i3HIrLp2dRAAAAYAMAAAjx8fUWcrTjk7QP3O8wS5rvlJOf7V+VCt/VtGg+nZW66uudlI8LaVgrgaXS/I1gcywQ3Hh3kgRrZuwDYmTx8G6+4NxNNXl2tRUJHw7F1tMh9YtMOag5EYi04mlrA9jpWRCaw3n1X1EOVr6LfnjoDtAg+GkbY0v2m07T0e0zp/XndrtCJbdwYrXvj1/lLmi016l8ZARoxEezisDFfivvmW10bkumqAV5HjlORnQcNF5+SaqeKZb7ZerbNryRpJD2CBTEmzEaRAd2l/ejBzqpmwf6+xzdjtweg6IRv8QWh8IXL9BJRjHOJS9avATj09aZn2N6l12Vr4JuRHG3pGpAiM/SAwxMNuBZobz+tkvhWzSVcidd3ogOBbHRV4Ct/EqRW+kQhpvynBCpv/X28UR38VEdEz16pfEvbDJZMtNUgDeNWdOfdtfxqWCUMCvyhZA9ApbmPBpnYu0LHXuvdH7Zt+ZmSdvSFDXZ3VW8EhsvokD7bjnEw7w7n33GF9rdRYqu08mApWtN6eu2Eq8J5hxCMfJX3774rrb10lx9H4YjcuFH0c/ruAFRSglrWFp3GygAX8SfaxI5+CsgWyqqHDN3T3bufblx+SvXB5drjYd677ZlU2pi3xHveWE/fQpyKaEWjIZkBF/NkbDctsu4WXv+zFsAEViU/SBWdtrpPj+GhGnwzTnBF1HlFFtuvwmIUvryMn4QARGuuIiJzQYBxwmcOVfpG8mqNFx+JYnOifKkPnAOLlDcglGw5sz1n5peEaljLpPtgEYyTEv/l1uG1ldJY0Q6BsTETD6gkV7rE2xjqCz1bVl2/TVQDACK3jKnkn6lFaMqgDpjQv8eFBp6PXvFp2ZHbU3Ds8J4XJyjCGTOmmWKMNklt2gEhDHHygbUTKDuqqFammulGvYA7PXSMtpBkTS0KMbBM49yKz8Pq1NkZi91UbHQtACLumdTA/luK3DKA1P1/d8V7Rg2o3+ICgqxFQkCNfoI0wiKHVon0Z+DKF8g5xzyXg8ri0zWFzyQ8lSNXL5Ei+SREI253HDvtYnvq2FA4QqumToW1VP1vI5MmGJpNg776Uk5l/stD37tlaDIDF2kHY9f3SkK92LwBS8uxzcLXpigwUss/VhijQBF0Lzgz2jfXXFh3BhrkVakubhvigAAAAA=');
