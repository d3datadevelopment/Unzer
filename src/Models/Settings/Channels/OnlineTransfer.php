<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.3.1 SourceGuardian (07.05.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B30FE09ED6AAQAAAAhAAAABKgAAACABAAAAAAAAAD/3A9RU/j03p9oZ+O4NT+Xg+qStwbNOq6BiT5FGLdhT9bvf1npL5KqrXATp/EK9scYjZ+e7UOKspEyVOCLWj+04y+q4CmzYe4grkYO+1elefRjyLoIKp7fw2iIW9/rCFsXPMReq6tARqfGPLUwb16ZKlsyRudgK81XQNXET04czoqj8WSWceLSWT3Effms0KBCLljwge3Yu72qTzAIQTD4bNaGHL8kEXNRCAAAAJABAAAeKK+1XshjJvJOTQev60OFGcK4ixG+DFKYmR8oIh4K+qUF/y5qc6LXt504rGorkyFdGJXyaQ398oofq2A2oBWm8/S+aTzGunWQLtYx30uD0YYnypdzUbh/YmfSz2Q+o7YDWeBwAw2ge4Cc0RMSh1RZrId6mT2BwVbyo/q2TZlQX02Pv92nfAO7u/4VzTpdOyGnwrwHu+lZVNuuzW3UVA9WSBaZSvnKcAy2d9manh+cCGH4ov460dZ+kCVHPsXkup+99hIQJ9xp9padvMdKcI62UG692HNJrci13qPHlvx7OjkvkSR+DjR+DUeKBVq47rL8vJQfdHL9/m/RpjzQw1DuDQUKYliERICO63TQ7hvescTF+CjGG0qhiIHi5giv+7F6tshMdBDGU8lIBkg5x5Dv1wXSNLXhGNm5tEG8deTr/GedfqUr7lpip7fuFDebLenR0YGGr0pdYkUSkSqMpSlkNR1+EzXZptqPOcvz3qUl/LxgGGEtMGIA6NV4blWxfCkvicGU2qpSUhNmoH4edrk3UQAAAIgBAABwICoZiy5Evqjfvz+6YVWVGTBjzKyEIU164L6VBJ7dckfTjK1NhYr4hrWvocXTVLm9UCPbhS+2EmquB/9oaHKyb0ISh0GFg9uXR+3ubMxPAYz2HcrSPJaX4z2R0xF0E9zdsWC7xx6bXMg7mAFNTeWs0NYQk0/TsZ7C14P/vVKI/rPYsJAkseW2I0zv1p2Hkp2HICYHhYz1KRFVWscylx8tI/mVFHyjm56ayu+qEWTmh9pfxN47PY0lqAd2z8G3xxl7jV6S4SXtRe4Cf026ESu7zIm0PStQZi+GjCQ0Deyt2H4viGfG4yUkh71Y8k7x3LRwk5duY+MI1evhm/j7h+aRPOx8vrkzFMUoqD+xCVhPkH7GiGVTqsdxJUw4likRdasEKWTfQWaAjA6ZctqWleRvsSUb09q+rsyMK7BH7TrP71BBjL2Fps1lnluZXgBattoXh/acejgctqKDFwuu+yT1M502xs0EnZ7CwiP11rNQAITR1PR2zWWVHIb+T2rXJry+47FQ89dwiFIAAACIAQAApTcTamxjPFh/Vr4m295mwxCjr+pJHe0IWAi87Fg7JigkYOjMPJ93SMi9E2f8mkbT7+XdCAvIHRr6qXndPjqdarrmWOEnoU8uR6f+Qn1ZmqITzF2BTrQZ0bxjstF07bY7yEaUyZtNjIdE84GC0gdpEbIm/LT0CrMJ+O6soWtlN0spw1n3Pmz/drWgJsK1Oi87VrmoqRFRQYuURurct4hyRy5eqKyubxsIQIRC9CoJgUuvDU+9/jLEDZaDfC2a2qV+M9a1URtDGadpQMW6zPDMyzS5irrX2qOsH9skTrJWDhqN8VJo1Bq9O+EKIKJjKb1B2suIDa4RQcHotdB5pKg0lfk8hZbrcUfzzFfhTi/pZnCpyOWkn6V7V5IySx19o6vKmXUklovLbs7fGJVAcfmuQbZqombvMEBmWy2WqO3gLvd7OVa0+rXxD6t6EnCGZiDQqsB3bKPgVaAxaDJW82Lc76RgfT/iC3e1jtTpDVKri4gOK4hqxNpm1mXcDGKGSsTC7ofH8M8C0OkAAAAA');
