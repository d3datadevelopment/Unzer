<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.0.0.1 SourceGuardian (09.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B3F7E09F4DAAQAAAAhAAAABKgAAACABAAAAAAAAAD/xgiSmJWjLZVKpgXBlrZ9rcZeiWmgh6ndOaQsETAGD6BJ75dKDlfD67ucJk+L2tdV7DISbM1fORSZWT1ODZnXh0D8bGUFOMMdxYHjXcCW0exOSasiNKpvBsluYtad9pvqGRjMYSvAVp0wJNmVnfkSrcbiXCymHvKPGkTSGwkCGigCvZZNFzrKMvi/NRWgnQ0o6ZO8oEBMOMQKdrqJ9++UJDcQIDUg5BBUCAAAADgEAAAdX1WSxAKdtSksEx5OfbwxTurGWYHIvRlbvfvFfQo2RehTsK9TP/TQhMz/09YgV6dwD9WOSZaGo/ufelNczNzvXta/8WMbhy/ooJb8tQnUThm2nHU/faCjn7ZAEtho4phu9ird+K5/iJXADT+b0vUxuai8nZdrZag8p9mb0uZ6CSfHjiVnw4xWgojbYV6DoSyhttxmJ9K6sB3Lof7I+xxb4OvS+blHHGoykZbCQMcBpJ8dZLT6/PDlNd4t5YkSb66uCElcs7mkXWE6kyMah65R0SRrWVEF252un8V11GyE1yu0+fqinM6VXxc4/C+AhbLHiXl+M2cNpuHJGNGfsxQrmOJvR/KqerpH7ENs7GE/IUoOjEeuLWXEgajC71Fz1vW5Mo8e/JX+TnlIxGB2/uKkEOU+yUsT7k0S0Vr7HZZ6ffsY9+kOd2cyUs+7m6BTZ8QROMjOQI2eJ4/ERvg6PQ1fUFB6ZQMT//O/uEzcbngivLq9YkjE9oWPGzJwW0aPhnUQopVvhHeQQIO0EfMj5vMALAKAvsXkR30g0/nhtaM7yXswsrOwnvjhX/5bEZ8sI6RrUJfjiUhdGyZ5cZvxZnYu0Q8f/ArXe6JptCMYWPH+Ds9sRqpzAyDNsHnmptOIkPqJ8cVTJkd79FYoudhUYuGrKz/m+jIvrPLXzcNu7UjVYF0yr+UDuoOjfCQq9lDrNPKdWq9bD0+FLNPR9GEG0I04ZiUe90+D70FABfK6ur+6wdWqcQDAmiG5ZOlIJvaVJAbFcRfg7hJcIyLrn0yHJ7W05QWHgAS6TbJOWTZokEfkcg+Ou7vgg58py1WVjVW9MSGqk4NMZcnLpt5PMEsgf3sPXa99IysvlhU5Fqs3HER4kjrJb1Lbq+rIJqDBYB51tBFyWuqA9WoYeNHvP4wB05RH4sgUqmEtd7kIH9ZNPfXsEj/m9npIBjmIwpraNOaFSxpRta7ZAH/E64APd8B6nYaC8IBHqCpBiIwrYDQbR1oONN0cHAMdNS2leqBqCXSEPRgPboSroy5q/XGOLWEPZXBF+MgRHshEMhFivwqYLDxZ4cEswwsm3otpybHLD9W1E1CwT6UyhXPV9ELb4NFPFR1XvNInXTrnykTUmZHG2SsiVUc5EyUGZthFNT8U0x/tqs4IVvzZEqwEEyLADaXhXbBOIFZPv4F7TNKhH+i9bQSN0CyTVu2To9YaNlUvrGCuIqVoMhWM+l1zVN0Kr8ZzZ711n5Lz3etxrtSW+DDMLOhUicTu0xKypO7d+suuDeNE5dRfltmEbtMNCeu57lrnJxQeieVkz3jmA98JXW+vyZEg0bv0LWJ1umWJSK8l176eHfYWaS0yCOcwuZlFqiTsBU6frlT2ROwuxquUQykOs+ceVxG83QFSWgkBG/vNa29zkqLHGBVI26CZg+vscEu1Bq6yJ4u0A2A39+FRAAAAMAQAANbC/ivUs2pndlni4BZcpMyuthMtKRGNfLOddaOBQz6jXEuObaU/mS4/rZQeJw1fVBSNM189LZc4z1+xFOZ1/jw+ultZha4zTus1YgqdMYNcSlhXAYDIdsbok/0w0CK6ulLaAlKHg5S9tyy32aRLEXNA+muvVAiE4CHG0k2pQvhxNICr4mk6ZI1nFi31Qik+hVDF7rQCpooTKOsFKM+DjTPzDHofEN1LbuwG/7zv+9ptOqQ4y+lB9fldIRI4bM7q4RqkFPT5ruNzywnJUbnKKeTKmcr1MWRbRSvWMbM+iGhx4Y2bYcdWW1X+DQ2cRH38dIkTxHi8F+DtkQVyacqwcLaXCCmAzP9MDWIRm/uISs9igDLIIl+r2SXBc/RtjrnlMpzTbKZzjDhN3q/noEUoWFAlvIyThhs35+ySqAj7IhDOIlUHPPEmNP4HyIkoqaX84esY6/r8JfEZBzVgkNMl3EpPjpeOkxC4EMI87HTWTguCJqNouJC5en0iwGidDbESjYE79KLAtCqLVdN9b1jZZdRn+FZWdirB3YdqqZtfHU7TopF9TgbaDvRqeHNflFZr5b7ZCLAQtvEirsaJyaqdWfgcITzInZrMdU+KPikPmJR39zKrGNNWZ6bSAS04Ulw0d3QbzIjGBhstpF4rFyI+lm3l30eYRXbuUrcP2TV6aKMQuNxgo5hCdiOo7pQxeii+YzIUEsh4H/RlI82M7mcsGikmxiCBGRNUKzWpCJNDwyHqzDrAnXVqG/7mvJE5Eut2JGTe0JVYBZrFcVdqqSIAckI2dYZpPb0aQECwsjP+nlw91z9Pc9u56cEh/rqpvhs0sf2uug1FsNrAnWDpWbUvH4uOmOOoVW/LiQWsJtu9gW5C6eSmNm+yomNc1MPRpRERGXmviKzQ1uHZKcZfs8hU+adeO+Iv9pWyzx4RH4Upe5GewbwyDelmUwWtZ7e0+kG8mi1s8vCUARXwMiAwVJJZEP/JWJZnaHhBY9DptBsYQ+v8dshUYPT/IFsLMvhmIXJ5p0dG2LUGSNR+YSAcGWKINNmLGF1bfFoNmDbeQDSTwwiknY9+eI2T52ETgQXpL7VO4Y0ByKopVrIdGsAtUCA6bI05wiai7eYTmhs8r0pOY+c8K4gylnVMCh4TD7uqIm+VDdGWuIyGzy5xgSdDxQT7KYsaAMyOR0MFGgKPACxOrOxJjChil/uJ8x9uwNYDqwu2p4SfNnK8C7EnQLbtjNRvKM6lsExQdm42dE1/RaP4AHOCASJZEqfBepTdSn6n/m9vBcQY+lILqjVWMr6ujN057iB8q0yPk7GRJNZsDh2vQ7pNoWwVfW8+V+fxp4BNf12u+OdgKuP1dkgzaZygAlswFyznxulERcfTKbPxmSquc+0g6swpQm/3bmd9ZewXMbZbJ3/LUI2+Wg8g+sY2WG82hk1SAAAAMAQAAI4tWMyu/PJWQfrESbXqM8Ssqw4kkiV3rsJkonL77UPb4ftLsosU8++h95JWPLGJdYNgGOdydBH+ekgp7+QEaicJFRSUJzfK3oCuCA2dUNQf8fhQOrxG5OiTQKzTgl62b1DqxmNsp3rJV9kI9AlpvBKsXo9psHl/1kqq+jd0460Dc8HQYuw9DnvN7v9W2vwkT+6zUfYWAZXxnizVWzL+wx4eeY+0FTcN8PF6aD/FKMLBLMxYImB6KIblovvibSDHO+5IBI0hMTjJJEOHQsLOqk4AH29P/gvjSUhkvnHalN/EbHLgyIuJlkMc6dowUxhU7v9NGSjc8JNdYahkQatjis2FwKrlIMbLAdpun/jHxu8EUbxwWPmaRzmuUFyfSTQ19Rx9y0ypMGw2rD+EmRCpKbokJZg3+1cFqZaVrATKemWqY0pXTpwBhXH62Xfx157KO8YH84v84onClzt7IT+dpznavqNtHbLhf4dQ70VvhT2PyZsX+iVB4nuLcpHvrpnBeWbdmqYqRtd/EUFk0IXrCVA2//wfoDlt6drKAYBdkHccrMXIyCVcIAwh/BBKaF8ibP5DSdkYhybi49jnbHwCHlqjB5tW/9IRxCdIFzslp3KZairW7K4+BzzyWnhtt4onvxvnwELnkTnESNzBmw1qUdn3AXKwg/CykDJZy3L6HFhxzyNNABPmGUUjrHe2kM/Yk9Hpn8UhjihvCNh1KDH1utYLI+7FGSD1gFSfJUsi966NioevFpsi6zfmVbkbyaG62riSJ8QsDFbIdW0UqWWCXCn1BFqdYmIDyvKM29SZAWhfPRW1ogS+CVQutUX7KggZFdLmT6Hstk4g+hI9SbUzGmE7bfOhksMgMAGjnHbgCd2TOjAGL1Rmb1zdP4uykzrMGtZjyY71oxnUJlhuufwr3bm9P0ddItG/iGdarcKSEsVCLdroFRED6P+XgZqvRmIww3mfLKMcc6zah0SAkfmwJgFhh5W9Q4bk5nOf8lIfccU9OtVfIAHS6d/rlqxgdRxBLRLxWvjd9+nrD43Nqgdocr2AmIx799eFlFg/9HXM2zkZe4CrAbHqq4l762HtS3WjKqlDVQkG6zyH9x098DendVSooHq1LBX9B9iUZ17yJ+cbUbju0dh3dxvBffWWWgB0Iu2kv9pYRURi4zTrzwwMry2h8cYUIiPvfspX7dn0JYH8gW2MHVPAJX/pCMm3ahR9bSeqeHDJ5Tv49qQf6s6qRMmeqPsl1i0qc1VVPUPmzJhHa2DDNaMszU88yahczPIbK6iXF++0m6x93kRSDR2adW8AnuqlTfYSFwLA3xhV0F+JZi+xXZrlJoneCTMRyvhLsd1TwYzQkvQljbD30ytzkfyHQ9FnZprUMjZ8fqpOZPBwj4SMsslaUDXB519kwUnLqfW7hAjBZPHBGedlH/fguHQAAAAA');