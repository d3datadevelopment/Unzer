<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.0.0.0 SourceGuardian (09.02.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B3F5E09F3DAAQAAAAhAAAABKgAAACABAAAAAAAAAD/c0L72rAlK1n9MozQITIulLynRTp+nddrgppNnNB3KgiGP3eP8qfR2cgNu+tnh4azZ6SV9GfmgQdEqJFSjInV15iahcCVkOMoeCl8bwJGyZzZfWCw8+dYuw/Xbl6iZ5qCxLeK/wtC7ABo1+l1PsApqlMQwOsfrfER6HAnAyUxSQOx/41pPiOgcRLCOszPVSIx0VWumCE5oH2N7p0abAMd4mIs7qiJZ+cTCAAAANACAADVjHolWJFztw3GMmZbyy8bA2Pb8rLZH/slth55KKK+nXdaK7M/l3hEK8z7vMbdj1LG3meyegB3eXoZlZQN984OIuXwUbDnm8GNLwHi289oIM/rhPAF382CYI6qNmMpCAICvmPocUaz+4r6z57UYigdymvj/KLaS61plDta061ChijSBCRQMRs0JvN9JlTvDlKKKRc5NXu1uRegNrw4ZgIZNcGNHImycM1mHh0RJomC6Jn/9oE0jRUfGVhPDiEvAipz7KykMGToTPBz78yw1PMzMx56fXNMjjvU1JNUSNqRR4aB5Q81S6/2TWK9zaRBQ3JDUoJ4kScJr9rfE3L6oey4DvYK3AQcB56ulMtIg+PciwjTAESbPC8GoOfOHp7P7cQSIz5/wnovSiGdzj6I4t1vNdQ1P1l3CtPRGZmt4UBnyoCiMUmBHIIgzAfFir05LYWOCGPzCZ2vsJB79y3kZF2y8IaYmXsW5EFeRx/mHVdGaMeYyUm40hoAOM77Z1hnvBg+ayZNAvVwLHj4WwC+arnP3zGbk4kE0y/RC1qDVZjhcZC5QrBtNq6IHkwFF5PhwDclXqgZ6m06wtQsJDbwN4xvSl9f2zClilvbok5xcXiNJsYFqzqXVQea6mJ4hK1AjgtUaBhRKlsBk/EaCEXgBuEHqhv1exXb4lBUjk+rk71ZL/7celYw8B+iZtwgvmClWBiEzKrLQpJkyoxCFB1yryIGYRHynVuwVyZYFdboacN0iaxXFV2KvL5iN90RbpZPpWA6qmpTWXkEcn58wUM8+F9zTY7G4W8vOS5TRbkzyAcrBG6uSC/4PzOZEaOUvj/wnh9ZdOKmlKwD1EfXiPGYbcyjD4CYlrTSTQBWkonXhdpty3dxk9eUK7BvV6rhk+hBmV9qfGgELmTkXUbO+nQtUQAa7tNGTKdFVMz4v9F1lvat8j57UHz7Et3KIUE28VbI9DNRAAAAyAIAAHcgsNE2Sx2nBfFJudeZFfSLW4iIKeKoxXMG7SYSRllLR8a5aOsIglOU7mDwj71aq3+ABdQ8dk1E/nKQkGgL2Zw2H76b+tlCGlfgEBJrejfuyxQIt+t2Oki01v2EEYp+coLMxqMe464tUIK2nIEC5NDRvy34a8y4ArVAR5Rqy212sY6as4HXQ1u840fGQfNUCnMlgbABur+C2jdVFyLI88r1UvH8Zx1ezGB9D1+mLbOyrao/Oe3Uw6qtyLLkeuLWw8K3fXO/x0o0uO7BrZT9Cjj7mO0ttE3TuirJB1HTA9LoOabAd3dKThK+w0XcZCvm0z+aNinaXTvVmv8lwK8ENKuLVoavow3EEQwEqZ7yoM7Lacg5P6+a33rpT3iatRNt19lphtZh7YHq+sk6fp1N6nslro4YSh0djXffTzO1xppOHaJAQUVfBAYqHgAW+PfuugaZFneY8pwPYrY2P7n4yXASHncN/iXSBNeV2ya/Ic6JONKaI8P3YYdCUYl7//HFF6d4fdtQrMyAoMzU2zsVW5n6IWZ6ctSwwZvQWC91xpW6CrFK6OqpyxESahO1vvQq7IGtvtzOxEd1qD2GTfE1IvG/8LKXcuMfxYP7LIDRQu2mkCKlYkEnU8J0sb8kJXMEeNWryOw2Z5FsZr7Cnt6cnHg//vjWZpFVkDDsXgyG2tsgcftP8nu78+YOZD2Ov/Ye5Ynp9WFaZUAiHxtMHYJ9BHRlM0lrw2Za4SODEin4ykq/1g+vQiw3nRv53ttGseJnaBgxS7VR/EeGYXISBOYkyzPTIAFIU3t1zlFIGU/A9CldPh35KzzkdMSpQN+Ujs4ZvLO8SJFFgi5iJvqkgq3RhfYEGLc3vnhw1fosmfDr+3OGFw/0GqMKAhFbjwtwhb7BH9MwwgP+xUdrCGCk6w22LzYgRCPyr5+yh0D53C2a5tdk75iSzofHnONSAAAAwAIAAKy6JMZhB/Vz3+ZafmcnOsDY5keTeQroze35oqZ4/G9URauEYbrfy8UsaxQRgz51gDJyQ1bdu9nLljdXDMSucNpgkw5AByLEp+teLAlyQ7LnVCGAfP3slxrgjxqMT8NAcbyQaWF2FgmCZxIAdw6zo6JrSuPN3E3Kjr/gSKxtc8UzDDulz76pLD2Zjmm4o4oBPq5OywKYtPf2vsCPdoLHQj60KwkhWiO6hqyazY6aJGnh7RsO3qP9GWQMyTtPD0cJACO1nxTKSeHYp1bWSG7qqDO7LV7SJfezV001vKHosQACq2Q7u9pLVWRSSbtsKmWYY5nIs3zAVDHH5Tk5JD9XVWUDZyoXRNXHOIkNRKZA8sWWkVyeSAGmMHCTwpXa64WtwIFxtct3UbR0F410hXia4+0cdF8/b0h8TJPPMc0nmJsogp5y8wUgbOKpSlXzja2yPpihP9khHT7XqdChoslAsGc5lP6gMycicdBqDwz2QxORy7A9bElt5kc+dW7tmZyZfn4PjsUOVJb6sjD6xNXFb/xRP6p6OKsRj/pvZD8hb17cP2HtCuHwttKXMQrCkSIxeI5mGFPpLZIKvi8VHe1rz38R5FMqmU+WMA2/aMVh86YoplU7tSk+rm4SxFLtGdwGVIpC9KvjBSf7fDJrPK6Cw1wFXdkkEoe75n0MK/fFHTacBkQjofLrD+wlVy0UOiV5d1iCQc1cXnmVUlSik6u+pDr6W3t90qdw6WupvfMI0BFLhGsrieJdAOFNv9p2scUkQgXWSdRL/QGPC14IfOKljNHw6Nr9U+Hu3WK//ciBhO8nl9no0WuN75PeCdHOPRL7IFAbELa+/ccyeuQn2V3VKJcF9u1/awe7j4tr7nrOOyPKcUACQeFvQthf75yuiQDGdE+ZBOEfJ7k5A2068+oRZT1Vw+qfivFr+5k00CPpkCB6AAAAAA==');
