<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.2.6.0 SourceGuardian (04.07.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B35DE09E25AAQAAAAXAAAABHAAAACABAAAAAAAAAD/7cD87M3Buw6UZJnnTMZ66KhjUge1B7Ur+4aoW33ChHqwSujAzEy6uNuC1g3PBh6HbuYOl7LjwcDQTimOrI/PVr9t479lTxnwNOBHP+jbEY+nPoeLWn/OY1Fpc+5SprZY6CW3B4WAOwxl5BOL5+63WQgAAACQAgAAp7GgqkWeK0TxpytInhBG6AHEOSZeI1FPHTt+FD6az5dqR1O2pbtGu0YTHNUBykk1QljrZjQ3WV6rnwbIdd5HmaGyNnD6XdQcQc+1gs+csrZraNleXDS1XkCOpAMZE+Dsz7B8SpdGHKGOw1qBmoyFgrkcJGzhKxv3c/5LYRcMpX/EVrRK1q5NLGM8uvD7y3uHkWOBrC0FBsmbqadRVDQOPrgs34srbAAboICuB4P8j4CcX5A+qCIrZgZfv1WTpId2xlU5mB4LYNEn1RndpLYk3qgc7O4oqEuKGCTOawB187dW9mFzttdtpH0Oo1eXwSfaj4ngIFKDqHa03wnpeBUBycL+nuRCcojh4DV5pXuNQEKh65lmDyntGIHHBWbdy2Bh5Hog0PWn6U5P15noySdEIW2FtJkPUcuwjaKxeYvrggkZua7iixrmApZzZvLhdCfMZ5MdW8PUToyoGTaAnXeow1hpftF9LBUlLuc0vT/t00cnquOTNV5Odq0Fivk6w1ZNEcXSsZb/lLjKOA/x8i5kc4qrLU2TpPi9//sCmMgbL9IszRFpwDDnR4aUZboGqE+sCq0fP1XCHUyIJPITK9gOQ7cZcdjpBmSVKOM7F97DerasAUcb9ufSb2ubp0kUvpei1A1kzJR/lQfsn8Lm/rtG4PSM+NYc+85ZBvs7BcVclg3/lBvRAtfr4fMafQ8H8TpjX6LNggCuziCJW+Zbn8DE3wh9YYUzQzbXbdRDkkuRiWxAHxASUHk+y41VexxWRO/fE1cQ8dCUgLaPNj2+25iTFMuKUqNuGysk6t9/xgguDieZq2fSDbxVuCEcn7uVl/G39Pjtw1Tk1311+kaJtye1uMNotagXbS17o1yLjThs0JxRAAAAiAIAAPIbs8hAH1dbwJBPp7MGkPWjMSlLAQybEj4dWlgcuqePWREb3NA9R72cLzEOFdnuucoFM322lwyq4Gmys/cSg8PCGcgC1IIxg693lwNxLfL8HZs2gjq+DrWVCisQcXueqp5ALrs7ydkPE4fBxvX8h6DYnRSU5cTRs8U8dJuxb84/NsZ2Djx9lVGj9bXIS1JWGrVrfTU+0DJHS4k5FksNkHfqO7jPsMWP6+AtfDDfRiZ3JwvAskPnoR6N0LAfMkuyWCNkZny6jabYbGVEh1qV5zwx2rJ2tN35WEkrwhOs6ZDkfpQMx//alJ5n71AQuRpmI5IQ0ejWihIYL8K7vQgvUZjPeLSMtvvotfFHaXN2vYWPpxJZBIwzo62fnLDyds8qzeFu0R2AYCDMOoFCN/D1hvaBQoaNV2/mGvTJbdmrCwxtFdVdzYz7kYGz5mXwnwSsgrpORU9B22P2iCLVMeux5bfMzCH4KiPnMJGsy/haDeh+tDocJtaTuaicQjPU/RlMd2N+fwxeGQ5Or9XQBW/9eGflmq2DBCWmNwHoUfaBs8iy6d6wC7GdC8Exk2WoavYoMKUFwuOKlPRgfeJwiRB70NqelB9EozM1hpKolmx2yzL8v7WuU3CKO4b90OqJ4Znf94LD8SpzB/hoyhaw7AP5CJ0X3V+MZ/9pq931NYCru6cO5VxPH2NLOY192aF+biY29TzXzwfQxZSi1yHnK3UdRSrcY+nbOi2AJFpCCWJBRLtw6rA+KhQWJqNfyv02M2oqzkSk7pvea1YmqarIaQB5XSh3Jyxa7jUYIo7HkE04adAQGqvkUBuYpc7wi235uGn5INZqlVSUzxWX3N3Rmg8zSXdPd+MVZ5ogZAAAAAA=');
