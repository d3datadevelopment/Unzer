<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.3.0.0 SourceGuardian (31.08.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B34DE09EEDAAQAAAAXAAAABHAAAACABAAAAAAAAAD/hZ2L6yLTRV4ZkcgBSrDjiqekfY8N2e3KCyQQma4t8W2Bc3Z4oERt1Pjy84SVwrgrFz/5iBJOFU3p3TFMyH0cVuKvmVaw4GUUOQxW2jYS2yszp8Ptd0a0dwRl7FCtQv6ujaIaBeRFoM2QLCt6D0o6WwgAAADoAQAArJ6ERfBShFE0PY+6AHMoPjs+nEZFrQhncb1yltQ6cyZ/zJ7YVwfjuYebwXdctupsBz67eV/jyXIEEVOO3h35SrTA7h3yf57kCmnt6qkGwaIT/PO1mOOD19hZfvLTvjfZocjHWEjCuedZNoaH+LXmutNakkmAP00cWQ4yVbsxfTcHuEMYi+R1DBKp3+GgbXtO1QRWnOImBj7YnFTshCkHNnEDRfX5c54LP6chRspf6L9aZhcssugvquWZgRqpOXWwQJbupfMtOb0gE6dHbKe2i49Y4ZJhCPduA7WBZ1aQcRQfkpMSNacu88SkgXO/rPuqrVF/OrVD7NY+EhVTpzRT1tPfVz9xpzHSX+4bnk6mseQRCTkGOUFlhgraH0dGTvUIuRZzMxS9dD2xm2N35gGL37dtyzYacoL+YX6YyQ20OeDJ86+MT4WWb6+dz3vPwMyIIh+OSvQ6kPUxZzLzq5EwM77gHWhZnYNSBTzLWlKRU6RL/LOQ5IBNgIPeL9kCaUaEfzBfT1SVWW7f2YU0RlpSgSy+B/fIKorVxa6604p1RSlpYW8QVXfK+30ZRyQR3jAO7QgZcM2c1/iN2vVvOQH1haAFs7vRhVMY7RHkaiIWAYfACMQXVMur5Cwo2dzJYInxTiPm23jC625RAAAA2AEAAKjmZwfrO/+JrmvjyirpvChhbsCiOSvKD0X/6s8PLPLCbKf5Pju7ExiIdcDLPhrK2alDEMbTlQeL0m/72Dj+6Cp9Dgvu146DZoddzZKoSxGGjWRDuA3LX67YFLWlvcZmP+skiLiVOQMbVweGv6e5GPABWk+epb9b0OOdRSSXmiosrDzT/4VXfa1YkTNlsgwj9UxdjzC/Nkb+qbn6RR3Dufpwfs7g1PC/8kZqSvTVbv4VjGFb2S2Boi3MmqqrWEQVV0syloMCNzoV1PV/E/jxSH2gaq8tQTwIbYtMvKOSa8DixW0clJd5zUoFyZj86KicsdFnJ5AlPf8liwy8wrH7gVjnEAGaAtx5lb7kVLnLINf+LuN71kNna9VexRVZ+MWbe+gPEfnjFs1O710kHOJXawCpf7BwsLvYmB6BWkNHeZf9gJtJ8j+dlyoV2t2udodmJjc4JQZbUar61PlN1PdUR+1FFybCJOVqN2cK4rzqHgLYlKRV5xhvy4qvadoAtDfWOrX/MO4yRG/54/ttSDXJH6NyEHnhRT3qU83UGJnEBtIRo5s/v8S0AJXrK15novqmVLRNk/yPjazdr/9rHpmIjXtZvetQs74xsSyE1XrumrkIBAu9xuOyEOsAAAAA');
