<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.3.0 SourceGuardian (19.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B30DE09FCEAAQAAAAhAAAABKgAAACABAAAAAAAAAD/F0Ak4J8hyV6XPzhSPj2OlVcxhYNiLz/trtsTiQfbk+BrfPEC7ZDx+OMZVeTvm9EtaXHVAxEAnqN8yb1iseCALLQpcICfqHWj6uILQ31B0RC4xJwHRaNAS/DfCYGr1emkKc5A7f3JlYs04DYjHevkktiFdfLs/o4QaRIXUpWkAx98M+hQvEZ2X/hM46VdqxrLguaJxCyqUaAUakXpoOJFh3WBc7NU98DCCAAAAKABAADNmmPiIKHwStofzzAQ2Y9F5/0D4DRZBTcElddZTbSX8O+BTRIXT4d/W1zblPCJQrGm5NWTVBHsn0nhtWyuG/uzaumOa3736+RA3ZivWrzrVrDcqnOghS0fzSGpi8JIDQYqdOIwlEJzkD+zw0rd38pmsAfWy4YPHUJ+ZPOIDv64GJilY2DLOlmfdBzPnGVFw8GxTduKRQHrkkns9yG3o6z1qKOHarmmwl02ANV/CpKomBdQdyW45ygHvonYpM1ZURPuggYdVOuajirK9M9X0lMA1OX0fZD+zNHBPd+HOSCygkEc0Xb9v+fBrXJpC17NAEZ5AVJdvx6+FNYJ+giFJCij5p2MgHe3FB8ttNnqhVgd5uHLKJ5HTvYjsNW3DuU4Pn2V3kchzk3R2IPEIkDtLqJiX9abpxUadBZ3Aw7WkIXst2SvolMm+DTZgFTGN7DG7VqxMzubl+/EkbqnonetWSMaKkUhDUPObBdfBk0/AcL9DLfqcF4pUJBGGLoFRii7iSB7Qs48RC+r5IwLZ4P4Xg2Nth1rKmtOjfb7ozJXGETbslEAAACYAQAAhO0fX34g0jNRFjIphd5oq8ky0kqsxOv6Z/NrIJTsNAqTj+/1G5EiL8mkm3Q+PABSb0YbQwH3M6pHCVZazknZAGMuujZcQv7GVCWK9Wl+d9HKmOQw0LPh71uDH9ltVPwmPZWFtNOustU1A1QEekVrSpt2L0aNMK2DPERs91VZfkTkAUWtnJzEPKWPzztshO2mjzY6Puqkrkd/uCv4QcPB5WeTQ2fZtNqFE91kVyZsqyHf6RhFOXgqFbPyqJJxBR05jAsiF98NqBgaS13NlGY9qDALrCmkdbkg+aAD3avtmHot6a5AU+CAlcyYg059vvUdPq7TSClk2Wdr5Ahe1sbLblrkZU3UvIphoUTkhViKe3dDFqV+qjq7aKhDuTxIBhL8G89gcoPseCJpfDfHBUrqxDEe0EfHD+Q0xtRo2cJjEYtXjHTibhKYRF4Y94Ho67v5U++Zjf2/JAoeMA9J65X1YdbExwnZ8aBm5wjlh2Q6bL+yjEgj3/xA8Ke7kz8GWNLNC4dSojpfZtaTj6X5EIOLlBTag7WxteUzUgAAAJgBAAAMTnO1B3tsFAx1y93XbH33Ke8nU0KO787NMPE26wZfUoPXYQKUK1n0KoxlMBz36SarMIKdELViYfY8r+zDMgciuJLZvtVnToiUNrWmGOi1GPofUSJiIPrcByjeGwMEA9e8Buyl5DQF1XrxsIlxYWyHIcvrzDC5dwrF95S5Hu4nW49UVNCSIJ0e3uqXbtoo4z5IINQ+7EUsl8q24I5q/7ny/0RERWSPoDBejs5Se0LROa/OAbdNf7RVVcZlQUXTry/mRBia1Fm5su1na8Ak2jDVeGk1lsfLn+NA0P+mGBMg1w9bQAalsrmW5igxlkycQu5zt7U1MUJubCTDyj/syeSYj7Z896ue4SpazvPB/tr5WZLQqu+QrYOtARTXI9nfRcl2nRXvVqMS87Zvdc/azlEVxi/fNmFFVAyqZ7CkS/3oU7AraPeKYunqY1Vm7y6uZcOCNF9BdWdKIK/d0avb7UvIBjHFTqgqCzDlg63d+z4CHyPLYpfieE11SFH3HiynVctbrNz7+prYxzy3HJg39WbXAdoAgLiHXIsAAAAA');
