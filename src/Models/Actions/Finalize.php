<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.2.6.1 SourceGuardian (18.07.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B35FE09FA5AAQAAAAXAAAABHAAAACABAAAAAAAAAD/RvilLstExDzttRCb4ojWacLGLuMpeJpPNUA8aWrqmDLKMkzBlhTv2Rv6+3ceI4b4PvRjIzARFynHLkrXQXOHVQeoKLjSSdUb0VTWxvcFGvEGaIrHcewAUTM01F7WFDtD7qXf87MGj3FvU5SOQskCZQgAAAD4AgAAU29c80yIo6vQ8p+S5Hu6Is/dJitA9Ftsiggd0oYraPLwwG3A5J6gY8FYbPlLjv69/TVc+au4EExQHgouXSjoQOVU7AGrAXfCkMzru82YOpvVzZN16DUvdTCAIoT9ernmgTN+yw2W4AXwbwz6MGz42C6D4sIerDJ/Q+Ei02ipvwUHseypkvZTrlBtb6I3kdBsjzWBTixNki8ZKD+85Fn+VyDw4x4TdnTRAhFm+1t9Db5fZmF2ezzDobLLBmJzZp9PpgcupolU+tTYs3/Jpksjxe5FoeA3O/cd9IfzJXYW84HouvxdGQ9R5vIWKjgIf5NyDmLlKlxYdrGhVA+iUpQiHVE8ZPv9orEz3HrhKhJuT+rz1AiL8ZIRdUP6qojSM0hNS13jbEe8O/JcsZBlbRNCCWJUF2eg9IRtMP4JsIApJFLTtnc3rG0I14ESWt4IZFx5e02nq2TBjeVqeypPFnCk7azPGUiSG0AvcBXzqUX9GwCSx54hy0/+LIYhRWjXHJtnUkqogBM4xu/B9E2IKMClAvlou5DEqyot/0+dSJnfZVEC6ML9f6rWg38TFnkSK5ebomSpt+mkbZNv9ECcvDxZs/bDba5sRLL9YSbOTv4UtPVFPJmA1P/kKhpMdr58QKAfgR0u9QlMsF9c6xa6d7dgxRAcEb9NvzbCreWncyUbti7oOXxpSmDS2xb0wpnuIZLQOyF6AY4ZQQXWOXcH/kocrTZJRc4t2QxCjZFtKAOk/nG5PCd7IEDfaG/vWSxkbtft0QQiXtt/FfV+23c92aruV96Y6vYVp2OmFcATqffcgj2HjMFJHnhEfmngocRKwkPyLVpu4GJoXjrIYTkE4VMRsCTxp+BnNhj1GB+Hw8cm2Dkp39/Pvt0jvGEnpkB+u6Klg1OY2lOwyGrisAucF3dSw6FicXEV5dEPYesVYjwAGCIcnwmdspyr1ax6iasgvLf4ue3xDfRaLJJxGuuiqk7vgF4lt9lBNO6HE73SfyYbRDvxrRbKF5XHWlEAAADwAgAAxTuh50WdrSSUXRRu4J7LEAKwc2ZcCoqc5owMH7HN2ZFegnqOLiAG4+CdhevHMXlPwmp6VXd6YJtwlGV66csH+1/m4VnjOfe5SkRo0swhghzVxJStmAGMhdL3Cxw9jFQPaxf5A3FjckiOA7ihTPTcY7ZP7GnCfw/2MpnTcav0DKfDZT+2N0lK87VVWlQeQnkRGppQl/g8DPqT8jBWET5/KXBj9W+TrGoOi+9UIuOm3my0T/QmJD+OOJZ0gQnGRRxw/Qa780RMnNHbQgbjRH/mKP5CyTsAYWgy21M5I/I5bIJPqvAIrpWQA2J6hz8+VeHNS1YqsWOPVaj1g98DJ7zaoCiA2aElQ3wZGpO0rah+BA3IIxZTriMEUl8PLU8c7TvhFD/iQFxZlXq74xmmUU6x39yNQlCulp3mDMuVQwzF0H6S79BtBcrHjQgqB1ln9Mi6hZ6+Mv2MBZsiDwbTOgxgSJK7si+XbtIA1o6KQZE7/r00kHzlszfry764MWTbymvA+ZYwqZNaq5XDu8odF3sl4ZFiPCEICuL2KHhwRr+KB2KLKeb7Tkj5xEc1zdwG00iqqBdVpQuV7CruBb8Y6RjkcgcqhaObvGd8gqGnuZsRr9YsaI6JzzBam3AvAYQXzCiHwF0G6ezR7YKlu1ae+jCm2dRU1Gf0I6CqSvkkzJtCl3IQZd7GtzjgdxhYEjNGJ7JTDMTs+tbQnNKVb7Jkw0b+jzR31mp+evsm/x396Uwnxq80Cni7sYhfwHwQ4quwHSFqkSrtpTKAS3JwALRo0l8goprMwjsr+JEs55J1IgwelS3XzW2kojGEVNBfYsGTyVzG7nfthneRj6jkVwTtLkJv3izRqoOVIC5DptAqqPZCef/FHYgAIcJFyl60k6uhcu977FBDrq8UZAHprwYp1KEUx8VgQ6ASujOlcu6Y8CHCysqdtigqIFJzvIVoHR734ZdmqVQWkKjuL8YweQh4UfT4F+zDmcU9iUA2KI9HAwgY9okAAAAA');
