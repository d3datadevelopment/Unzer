<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.2.6.0 SourceGuardian (04.07.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B35DE09E25AAQAAAAXAAAABHAAAACABAAAAAAAAAD/7cD87M3Buw6UZJnnTMZ66KhjUge1B7Ur+4aoW33ChHqwSujAzEy6uNuC1g3PBh6HbuYOl7LjwcDQTimOrI/PVr9t479lTxnwNOBHP+jbEY+nPoeLWn/OY1Fpc+5SprZY6CW3B4WAOwxl5BOL5+63WQgAAAAoBAAA/FM9KuKmynD2PD6C1+DLtHTbpqqKxliubDozQb1n+uk+nO6crjKowH1hLnwJvcWhbuA1SBMZsZvXc50/xxz5cTWEOc3PYjXHAEe6mK++BFzkkmGNemtewMm0qWdumVoGLpGXv41dQ2dMwjveb4kv+QuYOD9+FaKlGXy4PIg0/4FjJ84gbbSHyzjMNKgZWT6pK8nqkwWoTJac/Gp9wPqqmr7P+qGBH7yokbMMJcgCAWvRF1qvj1I1E/HBM7ZfcEbXDceMc9/5FZZc7UmAbeqJQJuTGgjus8pLicAFLg3Ty995AIsLEtwdoLIMXO1GzX9ZL7+PkRjEpJ87pXBzuc6W0hPaDzHD9rbbEsaRJX0WFenSMUQrQZHmn+6HTiTnX02EO2TyL0pKDCEFbYw0+aKzbKjjqQJJ/od10fmV9aC+kOHZIwS5rHjH6VwozfYOPcS3HRKnd64ng/mhUsBvKkraZSJuL0peP2twgYBb/+XNRGIYmFJmVK8dtJhx+uwZunHSf5V2/pWOG0J3sTbVdVLRF6kPnoWQXWgG1tDT4QeYJURf5nqVanIrb3xhD3oYnPIo3SnXUdTOsXpE+PkcdcFhO6SwiCk49sF/aJC/oNUGFzWt1fXhi0/s2W8uD/clKrZIb+mIHKhVJ/nn2M2s8Du9JxKqs91ZuwT1Nl2LFqBnzmUImW1l2Lf9Oayi9+Q6ZN9Pt+q8nvSymOc2dgIqyEwqjzPlkZP0wR6mh37DuZb9pgh7hkdRMRlAayRd+5qNDSP4A4lWi7WoR1rEBnXuZEgjd/pMv40emJzlTqqQjDrHtYrUEghML2lSldVNeuz++eCBEu25kkWwfUK56W+TNj+AK/cXWIj0PE05ymUebvcib3BXt1RD8qFVLfynkazvc55b0YRwQshYae1gYL3a6pCoNuJiOs1FY/8r8dmcBggY0Q4EBqGBELqPuPgQ9MvVGn1R8q1LJQA4OUWoeck3NyYYWeveiFhzo1g3CrD0PvPdo8F64QM9oS4MYEcnecTljmng03qqOO7CYF5rEsIWzfUTZ1aj7Z5xfYaVxdnX2nuJ4MqZ0wcodcOF4JullIjC/XLqYvHRr4vE4T0gFJ4iWoATVY1w2ah4Wjt1xbkBbsa9Jy7TOw2B01x9pm/ZPZfC8bf2YT8RahDLFwj5oH9W5I7FnLTjwRDq4ymBFOxG/AHNSx9WZaH46eFynt5RyZG4fhn3ppMp/fLYBw60QJ2wf/IAOcImZ3k0jQYXpwgx74UJnaGwVwcBvuJ+kWy/tq6QQRTJizTAX/3PxMZPqpNdFFigQSkMzD2LCBmQdpsi2VCC2aS6bzz/dL4GvK1Vba6MgQGj69bdxQ0fgW5QZgv27FOTzrsCeyv6revZCxKzETTccQbTrIP7tHAgMpLEAhPw0d4S8PzFjphfxotRAAAAIAQAAGkcpukGlxfmFzquVSmGUgR5v4oj8L0tMivI3WMgnpAlkQyga2eD21E4UbOfFOgmLroAcekvYhTCD1AaYZ1AhtBDj9zhGHGlu8wq1i/mBPw0G1juv9tXvueWtdfVPg9pU7WIv5ALMGnHDvLfuTXw6sGbbN7yVKjDGAwqKCfgviY+XqBL/7Tsx16Xq9SKlpUv/VytfVE50ws2D/rRB+lCHWVIpI5AbSGsDuw9RxyLMNMCeihbMQmzmix7Cza+SblD5ATolRZcS9Z/Hr+huLQ3Ie8b93g6+srCs1Yy8FTdBGN0ktzLworMqqffnxlRFN8RzWaPJCVDcChlGfolqbVL/w+xR0QjDnFQu93RDLWAQRg6aMkHyL+E+Mtv4/Syt58rD/fSpKXBGgDmdeyi2u3JG2OO8FsWvX2V1WWp2etz2n5JUiPwYAp/WpWhLtoqvzUCnYRGQZj4RoovSD+tdm3Q4J06wJPAMoQ5XpxGjyXM0e/gaBmn0L1PV7c+DYQl0VYid8QbvkFJJ5GEJRFtCq7PX/G6H6mOe0Bby9xC9+XHQrYY2EZhbFLkKHRjIyzs26/IpT+y3cond0YWHVAK4YZ2t0pVxeQLROEc54/2wXUZFQlWm1D5AqwTYYI+M2OSypSKdxe1/1T4xf8IwJ2nPOav2cxkgYii20Gm/1HgTEGNmStjYZXsw2ILG5yq/zV+iVaQl4MkXOs4iOaXCm6n9AS3XxY9QXVxB17BTa4/Xag7iyigUj+Sw3Zp5IEFHBW06ViX0Y27NKNFhcDN0CHhVR4xADczM29BOOIV0Hd4kDTWXPqER9KYp5dEFXcCHOudKTDswgcyaODS5GB/w4OEU3AnHUKNZFdbCUdvmfoIF8YMJpPGxddz1jj4+hE4SF59VQM8eOcxEeN9W1ktk5J57L/pO1mpXiD7T0AYKWgsQ4HVcghah/30cNfmtubcw+gQPMwtoEYZXKLByu4bN1yeKvNuw0j+s4acSoHojDlVnnFQBBm7CECMrcQf9cKL3b5JVN/tN11uSHZ88EoIC/A15WxNs9RliB2bMFK5oEMMPQ3v1VKULGyFzRxkl8thdSdFXDnYIlLZh70M4Yu3HAHoNC4cF5YzA84N0rYiIoOaNQ1xw5al8yTX8h9dP9dJkkjAZv/FjQYhSVApEaazuIDsRsWG86uk8dap7g2O9YBnz/Z5PiCNy1hyNWQycTdaNW0UngOfLckPUq7PRwle9hlY4YRMUpjvpx4+ugY4saQPQLIou1Yt9r2nos9BRxLZGL8CQgYgRJ5s1/N1Bm2pLDZxozhvyKsJXZJZk+iNQGcG6vhShdEfWJjpMyivBCbGhxgndQ9BkQHeAN9tbWeE5f2R+6kRd4Ojf+KcauA7sxMaZSVv7eZScQ/Aj6Hw2KFefzFiwNBzzAAAAAA=');
