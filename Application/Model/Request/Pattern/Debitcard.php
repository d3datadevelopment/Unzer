<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.0.1.1 SourceGuardian (07.05.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B3FFE09ED5AAQAAAAhAAAABKgAAACABAAAAAAAAAD/MSGm7wrk0WI3ivlf1RXNTjaOTukv8Ut9HTHQcg+5viFw5jorS/ZK6EZDh55ZWybL36oUCzb/FNRYjonb0tYc6PKjmVtKzxUbvMkPBu2+dVx2IK0XmPHP+dL2J+pN3tkKzuAv5u0zkOIMjd1dlZYOkqpNCM711zscqeqG2qtsa/hoG21HEK9IO0p1iKzLPQXVIR9bYJ11kQNsZTcFLvCk4/nIu3jBLuZFCAAAAJgBAAA8kry8j4XhXgd3sSwfAn5NwOByF0MOZZS/r0aopsSjsn1oNvUXeec7Oje/QzJKFii5zrBa3LbhVMnHRSQ/jyX2jszhb8GUs0J9NEcEUCmjyc3uHPqxTts+pIaj2EI47ExHW+RYEJ+mSbWX60U2XtjEZLLkiRIvY2dlDruQXvLh9i625uVmhBr42hNwGR8jgHaZg4E92icVPsGW98q7zdWO8rTxQlRiyLgRgs6SEqqCaTzujSCkEWdjVqyH9/WBzZSKeQFZkQwyd+qC1GlImRlsMvnwcAFviiREGQ0WzCxifm20CbldRWgkmrBAu+Yb31g7IideJTIxKxgQQLYFQvidGOGgyw8DgxQrGVusRr9X7QBJh5gIlvYUQv8MFGO6VaZkSEQZHLlPaNeJhdUGL2HEFm5AcTvRaQkx+JJ9DopGsfRvFM8V2Xuzl6Hu4QndfdVafQROUdZ4lEghM40va5S3fBRSz3prFhOD4J5mEYAIeEcWwHa++Rk9t3YtErFRGZ2z+r6Sf908TI+0g9f1LR3PQ+JJuVf9G5dRAAAAkAEAADBAen4sP8kFjTyEYInU1aIks/16vzi5LFunr54jkiVv6EndKFKwGy2LXAQrla4AeRhwfq46ZJnvyabVTcp7a3O1sxXw8F1eS+i7c+SyMF0Mi+DpPU3zAQjTg+HTqklffhst9ImvxrQXx5SrfSgv/zoqH0MQCxxfEdJt4Nulr6IEUi11uzkDenomru1c2seuaiifgs6fWywj/cmnp/jh7gBtjNrvljjf7p3d9SHEzWH7uoHnvXSij4ibjvkxLmPNL84ZB+tKbZ/J30SLcvq4jCpxqlO01ZyVJjSoR8EiIUnPaZHhPZE6SR2ma5DfRFK/9rGZ36sOyg2ZJNfvEunIncCNtfcBsquEWYsZookkLHWTmtpn6Z+omZBQORPZ5T/4ikdtgKqSZsawnhYVN2dq/UxK3csiJyCvWNAfrYEWZwKZrF7fWvfLUFQODF2mloDxusPqlxOXfW+HgQ2Xk+5HI+Ts8avCacaWLVExfhTek5OtZohCR0SrrLPBLxp6j27ea37Dw17dixqDROOcPrJDPKtSAAAAkAEAAP4mt4DfuR7PASLtMZXoZavQ/DradJXDiUgOgtaAtPrfMafKkMVRc6q+4mIH/hIXSf2XQNGRBvAshfsV8+JpmkMtSbj4a05zJnZtkrM+TbWW9AwoHquRY1tp0jx+QZ0qkWvEnFPJwfToGkY0N09hf1/YzKdzsaX8JVPfwkwy1o2/3PKLA3aYcDRgfVgBu3AW6HsGwJMCug1CCdD6cTHswru0QbVJaJGziQQLtHEcTZUvaYYypy+KLQ3YXLoGZeIYHXqPghLpqeRMdAhWVRnZd+aoVcrbVCwJWu0IOqeeFHeSOxcWFh+hsN/xhy1sx+31AwGLwcq58dQRGClyJT+kGCi0hy8GTjt3eeXeuzMVNkmt2eVFpq2jsj0Fet90aQiy2rtSkTlvfPC2n/eaTd7lym4cs3sm3j0tp194PMeTzlquxqdHL1xJ1mnCL3s2/0SeuEPZ4RvREJRAIMn1f2l6D0lSo0u1Xsr2JRhX9bbnmpweBIXdPgeS2I1KOFZiux2o2zHzYqJR36kVdC+O373amvIAAAAA');
