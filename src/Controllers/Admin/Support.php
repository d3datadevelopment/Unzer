<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Heidelpay @version 6.4.1.0 SourceGuardian (16.12.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B3834CF5E3AAQAAAAXAAAABHAAAACABAAAAAAAAAD/8S9jx12m83zK2/mIu+8nQAIi7Ib3hgTijzIqwdqi1uxfo+soLzztcyadykN3AEWsx9vzPicO1VKH2ZBVEMV9HWCLL2Ogt4KOUtPiqSginHAtnYQQEilBDyiAntUMsZvvu9UJXv7psYTRxI4eIpGmfAgAAAAoAgAAokuJvV7oV0xkl6Z6+qZL30Ae59VJfy9brcXCfHGURaVlNRGg4+k8zZazdXN90JuQ+FqDpdCralpnp8FoVgERCsAQHQzEoUHJ9N8RSebfhgX6z7680Iiu5nQMISEsl0sePSaLcVEXCbnrtTyg6ViUMgsDl7FK1goWYvhZSDVTsYphqD9l2MZ0A5kAVmHlN6kLKKl4Lt6Q8dKvWxjBIOSGpC5jGEa26/le0yvOz+O6uFmRrrlT165nwW6ESaT0efR960xH28DhK7dJJT8khvEnJuOUB6tVxBebUk5FVV9GjECuRlElGIeXIge9EHzVZS4KxtrlckPUoeuF+f2PryFdE1iYErqGR6/HFkczCqsemveAbMoGmhDw6jl98bEHyDsy4VndTzdSdHC33cWrI1gi7P0V1m5yffTE+uya3q1M+FLZdNhb/sPlPO1Cm6++kQFc4dRF3VTtIxwV1jJDHm8v5M1ezKAJIpWUypwPKW7xuW2ASYgDWDjE2EIcWU7nHv/EOFaoIVQulWThDqLax1o37eGx0L/izWLELN4iOovjTZFiT25je1t5wGVqljxy5JOIBTe7hrJraUsrJnYGbFucPbEWJHj7y3Sdgr1bUnNfW0rAVe0RutdV44lIDczPV7FWcZW4GpBGky5RAz5+fQ5+HpHVpM8lGNISQLZwqgLgCUkqCPk/58bxPj9VPz2u29A39slX7yirapu4Ix+g+mA42sqrZSxaCZTIUQAAABgCAAB5p4os1dWneUHViT/Ave8xv5wlDNFH51zYlEsVyjhF4eJk5gSURQM/l2dSz/SXk4eqH/PDZQyHBLlyaiUBOu5yb1SMCXu7Jhq3hvm8yU/peJf0sWZEj2/hFr1D9zAw6CXNdxvcJIDO6E91BViH+bgm5dQdF4YJV68+72pSaL6eWvP/wp5Txd+SUxiH24lEq6g+2W9nU3T+WyFZDO/UX2clij3Co4lSRq5l/oTi4YAPiFJqRyFi/rJjaX0JVeTfMzUK7IThMRSJgsNIx6/8aYTmpfbME9VVUCc8kwNAX33kqaLBH0EOKO0T9ObZr/QdXqQAQz7pNwZBEmDcZg+lSMXRC2xJZf7Hx6KF1mGZ6XWi6b7z/kfNOGV4+217FxnXosOsJx2K0VM5mXn1IO/TLWchWX1ffoLSbP4LMRMTWeaLXgqNU5K+tGZxIsBKT7ATjT8FJm9wFSOF6uppSHx1lnI7YOX6PDARbcKlSVP1L4YH7ZQKUkjz1JYQcdFL/OggEmeGAgHmWVQEQJagUIBVjTeNS1847r95k8EBoZXtEq3dVbPQeGWOEa4TLRQ9MbXWPzaNPAfT3nwtmS4LWQG9JhL/LsoiOrXtfeKokcqd3cURN0IzR6b9Z8Tc/KYXfQ5kZZ3E4giMkSjgu6sVMyGFucYWk19L4xD1IB5Lt/brmCKpWdTFIEGBPaoOAf1wJWKq6fTTFr1PoGikTAAAAAA=');
