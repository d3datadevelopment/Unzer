<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.0.1.1 SourceGuardian (07.05.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B3FFE09ED5AAQAAAAhAAAABKgAAACABAAAAAAAAAD/MSGm7wrk0WI3ivlf1RXNTjaOTukv8Ut9HTHQcg+5viFw5jorS/ZK6EZDh55ZWybL36oUCzb/FNRYjonb0tYc6PKjmVtKzxUbvMkPBu2+dVx2IK0XmPHP+dL2J+pN3tkKzuAv5u0zkOIMjd1dlZYOkqpNCM711zscqeqG2qtsa/hoG21HEK9IO0p1iKzLPQXVIR9bYJ11kQNsZTcFLvCk4/nIu3jBLuZFCAAAANgBAAAtkufG5EikflJRW1wCdC2Vs+TYR7Wi4WyP7mUlcc9zV2+SWst87k8myKhVAPWphhiZZpkMWwWtBUyobgMoqTlT6AMuTjvd4qxY/xfUJ/7QoJTN23wKweIo2XnzakTUuIUhxJTl1sBVy2S91QwxeybfkAJXVvPE3iO0VecpNXaI6hfEWsU8+DE1O1BpW5/N6r0aVPBP0Nfi/wIaBO8s5kUJn2shissAmIxUTf2ZimL9p5PE9++quGyKhidQ616QGW8GW7dOMFDbPiYZYWdLIuDx/cknNJmQy+Lbc9wCKT4zZaPvyLtaRUdgk8I84JZIWnKTCr+zxz/pdqmziz54NKdgTedSNr2jEXpAUdb0vbbtXQpMcJ7Sy/smxDv7hChWkTaFukVZbRSfFjj8JCbmAIcukHk/oAzl2Iw+ZPFs2n6nf0EUZIaMKdmB1QHQyALOlCLT15PGA2b492dLueUCybGBKpmPsYhgBf+FFgB4XeMmz7e+Sq64htJs8c6dYe7P5F4qFW0AXK6Y55F8eHVydl+bpwYuiwmcQ3JBcA0wufNJ8V9uC5LDQsJyVE5V7Tzh1ChbRPxSa8ZHQ9DvmIQuaA7n6vHfbHMV0X5roZrD53KDkqWA/53DAFa0UQAAANABAABPn/Gvm8QpV1bXA/x4gNJbTZb6BXd8w2+FB33Y61iodW1GwUNvmHiHDuONa1RsvkZnQ+QCDuiBMeehHKvpSnVJUDPYsVDCoNPSxRffVMaqI2DXxjAvRhaE8B8wQGBRMyRzZIHA/SckvsiBMHdxGyn8gHdJhjgRs75hYW83jYVya15hRNwbfKh+jpJPftsXYe83PcPDeeja1RcV3jeL+YQT5QtUBBglkKo0ApeTyi9Z86vK++aa5ahdMCGAoULqTg/sbNrlHNchhoi/kIrflmPKLg1WoHnewsLHatvoiwKbupuqOcBlsB9k9xBtYBAMOLZw3dXofts+nBIRkoywMnq6Er0ccDR1LTWIdBNa4fY1oTdCGWbkFruwpkpdAmxTcBiMNkVUw94tf9CKE78BshUeP5gfmwui01zJodus7O35DahFXGAa/dsVSeg+bVnl99k6SQ4bIRhoEffj5/t2egzVw6CjcXe/1V8TN+vCf5yX5UDYcZKWjcZcxK4iTBaaGEHIWSzHU9P7x4k3r1gXMMM+KH539UraStQmI1DtbT77OsaVWafRmkc+nRV3NjHGzhDz4iCKN6rZRVL9EacG6S+Vnh5Vnk27t6faL0kokbkN1VIAAADQAQAAMLptJ4cpnZO7UcqLKBfJ0XgyKeBRHB7pOymApoUq/iKBq66C+Mly0SXl6fCmxCsjwSfPIjDy2u9/TsvcotycQZw3gWAVSROH3pm8HWw74NBB2sq3/Y6+tVw0j2peiBkWoDFkESM364fAO1n4fkI/IuXdbGRjW/AWRDVpx2WjDoB8AYg7y1BuHGn/B0+Rwyo8UEIuZjlYWUkgxVdnoBv1/+C9kMIM8OuiEKSKecBSrMbBHx2EQXydqRyjKR1DsYEhtLrzB1IqaHHJpiFVxwa+goKe6DLn8Qs26v69QSfWHYWBXpJz5mM+jjr+I17t8GTYC55pXNKVzdoiBh+5KY6jMXbfFq9/sP/d8jrMvRv1o8nCuwGhA/RsEKZcu1ivn3INrduaHI81+XvunhuYe0c1bH17Hnst6N8+d49xbe5PncpGNfV1Dtq5P9GFJ4PEjeYjta8FS+iKA6L8UX8hgh9JA3TqXWZ19IH8B4oRN4LbhA1KDc5S/+K1sATZwLZpDAEeJzS5AIwujjw7yAEvxwbRjXEHrINFAq3dywLXYByTN9pmKHr1DIK7t2LZQLYwQ/gXv59do2hJegjLYUHh1N6NS85VqylWzL8ZBr3yn1GsvUMAAAAA');
