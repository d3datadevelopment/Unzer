<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.3.0.0 SourceGuardian (31.08.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B34DE09EEDAAQAAAAXAAAABHAAAACABAAAAAAAAAD/hZ2L6yLTRV4ZkcgBSrDjiqekfY8N2e3KCyQQma4t8W2Bc3Z4oERt1Pjy84SVwrgrFz/5iBJOFU3p3TFMyH0cVuKvmVaw4GUUOQxW2jYS2yszp8Ptd0a0dwRl7FCtQv6ujaIaBeRFoM2QLCt6D0o6WwgAAAAwBQAAXyzqrPDJvyCreLT2TQLCNKip2mCEoHu53S3sLCsM/T+k3CTqGuzSCC3xKOD+ncuHyucA18CU0QfOv+tG/LaEzkCHt+JzfOnEEoKwhtf6shqom90PbnD63BBLv/CcUH8Hpqa4mOKtZ7p4taXN3AwM8ARF8cBjb6flut/t4oS3ku3JoZs/m55WzKnXCRsCwFR1LOeBEtR+xBVVMpiEwyLgsCNTrLF3kL+xeNkkIl7Ue5crMIHLNIuchNpJQrPPuh4KT7+lBN4vC58bwU0vfV9vbhaFij7/2j9lD68Od5SREDPQwRDo2QR98xuGa0U6s4OpWVcwZgFPWn8BcJuOhGpybQA6PfLk3BG9JzgupEiu7KwBbiExiCHEgrgPX3RtM9N8D1cLYC35m4ChABqs7pq6ANCap5Th7sSwVbmwBTVRJipdUfPOJUiVFPqmXO/4XIlz3Xpy3KPnb2YKArjdy3w3O72q/aDzPaRMEuiWaqa69l6KrnjmIhxfk8SxSi8dKdGQslyIavx9Z5M9rHigBejKVCjlPLsT8IXVZgolHkHeFLTtJ9q7k+6IF2kH3tU4he1OszgFQ3KqDuNpYBPoWdGdEYF2YtZGkGiNa4DSisaM+27YPGKVw4uzjvjDrY97wovZ0iyViRdrr21/nfUKq4ZQYV9xPq0UMlhWPrU9A4+X2YC6duyXvyNE9pPBt3XD69YRVr66Ygv3Ww8NRJO21ttc12xWkcJmmRWPnxxTCOvj7nSnfX5/ITpRPt3mXhjpoe4mZbsNWZD+1liW6Io1q22GpuI9aPKyO/O8DAlP7ehmh7xmaatnxlvkm9n8L8+CfS0o4BWrXkMHSm3fJHjG0Ti8iX4CcRznPGHd0Iol9YkYO7HmxUjcchRYRyFPxRnqqTw4kctQkiqqu6nYSFXE9d+58F4oBS47Ck3GuTn6uTMAJ5AuJ3wFq7wcBhJjVaXWdtB0JmjgjDW9BaA8iE+7H+TpiDvojUthVh0IGC/1vJ7HchsKTF2bSRcNMRpL1cKQrd8A2HpA/Fh3J99oiYNy0NMhrAcWnrC+BUCgqws3UfoOxWt0WvRArwNE9Fo82syDcVFcjpWqt0EFriBI5gHII+QU8ZNDoxfbQBLiqVDgrWHkrahXPpcBX13BZa8wSspROQcFHWP3Pivz4BtoAs3EVPRVWRkIH1zTdDYXLojnUooq0WZdzGB/2yc4Rzm/F0MLxdAVx2Hxj2Fr6LXHdX0F8Lhm9R/oZy0Noj24+nBQqs0ORKQZ5gAqA29xWoK52BuwjdpBJyFEMpsbrdVfJBmfx+TjAGX51NehjGUo4bkPczCEdLMeIEnNWIXgf9zC7iojWgLZUqO59J6dcUbDbWUqNK6zUbBeKRMrg6slvAy5xxzSojqBI9bY41pzcL3E0GatrkskPc83QRgMgZJi1B0SqVxv4Qs+B3Yy1PL2hz2tSPkimfkCbSWttIH6Ebz94cIWQznZnROQGJCte28NnwwBPKYaJRnZKiE+Q+xjeMsmtymjPt0vvCP5avrKetp7Hvt8EOsWliHDDRtXa+rpCLfxgx17Xk9jAUw81dq6lymu0rl94M2x+27/KPNtSPvJQlcjqeAz5RBngqh0EjIqqZIr1Lp2nz++Ij6e9OHskqmVRDXC1XaIV5XOR4KiYvqWNUxqT2dp5Jd+hENWdIyD9QodHCScACcLgQgm+e0mCdegXA6M64zYrhFHzw38j4wOjbUPkmB0nMi+0niOPZdBaAaImoWqMqCX4mWMK74KE6h2XweCqTBRAAAAIAUAAPYIQCegPwW0/B2e7wMnAQwSX3M/lx/TY4RRuELH0TIG7E69U582Po40s3GbgaO4iQ4gduNkHrz4BlfPBAyQ0IC3knQbzJcLaJnnZjR8tlPhgGlW4nKJcp8QUsjjdNPVh3Nc14y4bclwq9SyJZxnLvYYOUjyH41lQdbW1Rn1psmmgTLM/i6eyURtYW7Cop7eM462OnT2VQyCRXHqr1CXp3lP7NK0QV3joaT9vMqgnCqDT1LHpkWYc785Z+Q4Oe8ynmCbjm7lZBy6RFPOP+/TOK38yxiNRL6gWABhTYrCWDYLXJKezdb2Hz45xCf5xnP5bqUdbiIh10a30+CHgWKdBBPlu9mZoZ06SpwZTWXTjLg1ipOuttWy7k2xHP8NUqoVbw9ILqG7S+vQsXJVd9USQvCVlwgMLPzXGCQ+GM8eAbFccCESdbWpujsKSwWvf0B9SCbKQpoGtlW3U+Zh7OB4W6jO6AhPDvEUAS5rwEjhKGjzQAazJUGMYh9JjXb7qjc7AE1JX5PbfKmyAvrDcDM+UUJThTDxyD5DrVvRNo3qhPIHbSRKGXNjO7lYYPVIAkMqTPJ7NM4lGlhJYcFUGWkhiI91sjOly9xot5N2AXYnuT6vdW4wsOr8r+syPM8nms9kkyAH0au6u1qajraInZNQ+jWvWNTX2B9xS7B3W1fQwYEKguK5TZJ0FeG8xEZerzUpfk9shh/bjtQaskmLM+Ki6/XgD2wX3KmNxyy/HBKULxACH1wEVWIj4yI1B1e6vFCIloOx4zH7aNeccMfc2dfhD0fINCFjqjVPYrliIS5zdu2TpUfU60CPiuzmb7XHCu0vDztColnuVoVcAAACTYTCHtbaH/XivJjPId5to2l1LpR+spcrcV9BXgDakl9mdmsPmv7Cunyf6WlSxysm+RLsWtdsu6uqHtzCj9sbQBLaQKgB1BDtnY0yEjyx8clh1TqGcOSjp8erJK+cSE3fYMwODwUvDJ4VT0YS8nDJx4zImTcBcztVarhxCD+ynHPrJk+sytBfC5ktAIYj8Qqp7BfwGyKc/DthMnieE1M9W/q3I9T/NGHkjikQLp+qRpN/nwa5kSVXTBQqGYSvHugGNv1a5Psrk/3Hp77eZufH/2efkn9+X8Sg4rr/g1+vbPCQwwBO/2gshFQRU+HBbBul6F6EqCESpfHaigyPabddAsBXunyyT/+HrChuC0fukHlVMwGOTM1Y+Kw30BI2NHCEdmgnOGRSD1nE5T+HH15Vop+mku90CVYl09AazdVUgje8SMQS/LRY4Mj+1DWwo8AMiyH6C3/hDNremVIzKXVriLrqTnt8oAu9/WU3JxLCUMGjr8MbsLkHPEYgsyf3XtReR2pYLQbbuTU7sdxO9H8+73Tl0PppRhb4RNccJIqR7MT+euq28+fEIsBQ95kZwBTQVU6+Aw+7c6Q6yBz3UUaKYqFsbXOpG7uAjzFRyLTIfb9kp2qbeMEuDOA2ycFmDqldxaIBaFa5HLzR8Yorg8IYOwdfUXftksBR4siCP2Ec2xTputH5EcQ/uu9UxhZJhr/0keuAPK5mjOsyVcBXm1G76iAa/Mc7BBiJP33Ekuiiacd2ZYP1n7GY6jjbe1EF3YUMm3r62ZsgsHXsymWV5W29NH0F1goEZz5BoyjmxOP9yoUeiQi+5rAICuOjWnEI5HDWhX5Tmi4M/1p5dt15fPlQGUMm0hSwK0wDkBgR1LFdVrAYCOWSyyJ6w4a8bkbMOhoyEVErnX4AAAAA');
