<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.0.0.0 SourceGuardian (09.02.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B3F5E09F3DAAQAAAAhAAAABKgAAACABAAAAAAAAAD/UuafP9W43ZKJFlH0l629+u9H8nL0tpf7gulND8QX7bTDfsWOYyS5pR0V94JesekaLtTVCo+wYfu58zyoIcS3oMj1rhiuu+gkmK+p7KUtq9moAiOrJA9tbQCkK/TIc2n4tjrx3Pk1dvw17CRQempXIs1UGHgoCCuqMGUIQTK65rzDAu2vH+kFaKdMJD6cYll7fVAMH5Ior3cLMxGL8135NBdG28QXbiVeCAAAAKgBAACsGqBQKdu4ZerjFseQ5iiK+cq7oYJRiLc5ypxAdtm/AJlp/lqx6y7bnOOfX8zYIuwLCVJQUV9AlcP3NdM1Qz7u0rM9tezktBaJ9IVc2omT444KrtdNAtp+GTNwua98AykiikoJMVLN064OKZ+XOmM/S24wvI/9PbbxamJVh2ve1m4/4chteUAZRP40xwi6PBkFyPPE2auBf6F4SrxKtG50Hj9jjLKEOA3G8tS7rbHsIjLmtGIVnWAiTfbM+xLbCnxCH9a2jkCcsQ7ZsMLuzZKOcStNf/5cPMcnZkq3pyv8yv0uQaFGFfIjFAfQ1lfBQAHddySj0yDYHCuVfZFOXHAGIjbv6HNa3bmwrszC3WZl4o+2cHM9pM3V0mE0dUHukpqinyVYKTU+6RWtkTUXLBRhlezrQxqH7qT5ryNZIeYkGfJhgaL4JYFMGIcrp4U321RVN7YEmpp9Gk55LHDe+VUnlGxE7PBBnZqhmGrF/A//d68VzMxdU5YePcUerF9McZB8JnkfumR4ePIw2qsN+0yyi0mF2yoty0kY4Qqv7+10cipnsieFVHzIUQAAAJgBAAB+cIzdxf+LR+PfnBjQNAIJXws0k4U0kKc/IJbKCmiNdWYJJ3dOZHH/mheqLaCQX/HeDD+EAaRsCaqz8tsWnwvLDAwovMNT39aDrkhZm7qqj2GCBTSOvyjxL+YSTrpJrQBMwBSnMAg0SZdmPLVRaGtIoBYqt0/eyxXLfllLUCs2HOhAvMFBmlZPgUcWxySYDpBV7mmAcU6eCNNm2VqWew1WjWtnTPBAujnSNJT9PawV3tNVOP2gy3G9rW6ZUD7kMWBXKZJugZIDOt3Sc8+QoacQDIqVWCErX9E1F0VNore2rr14KdhxqPKY3OI2f5777RNsw6Pqbgwxrj+cuLp/OmfH+aRLe9YYJoSkKq5pLi9+8goFXzGO129dJOwkTAOcthyBOOEjZ2RFf4BoewZkvjT1KUJQUKXsfx9dPawsFpvMJpwrQvzD43L94vR1AfDFyLjal4y8SITHrmkF/4uDtzscG2mLHfSslqw+l6krwUXO7yOxRR0SNJedEqqkUA11BgMpFujD6VxpQsMtSJw7vTGT4o8h8Y09htJSAAAAmAEAADaFyD8XSkzFrqlA3Yc7nuwb4EwZWKZf/91HWolLjlXJhAPEfN0KofJPMUJxGflbQk0JFKOnJE2mzoesDTyxKSCY/wqhE/GuNinEXStqbGfcEDAHj05d60GnW2aWdI8pHlnGtOw104LeCeybSktJCMaC8H1gow5cyxT8AezTNquCOuTLsZ5Mjm6bNnjdPEKjDZkur4vjA0AouKLTy3yAfLWo8d2NdlstDg7XtlUIHnuVncKOPJNzpkXLIy6mDikaFHYmTmMqzeGfQ5RS32aQvJVvFfWzh3/5vHzH6AYjM80iK+Ex239qbuNinYTt++rKIeD6e2mCgEm4rBsklw/8gV/fPOIOGMohvPCvXpQJ3+htgU0SpOjX5p6twzTr6X+LwhTMCubck7lMXtTjnzluGuM8FN+AW7MzCRtv09bxSXgEmVW2EmBaFbk/qGJhfknNLNwO4VmuOb9Z4sM1AEuhJ21VdHiV+lYvp5uBj2L5vs8A5Dwo26d4Smg2jCW9L8a2hRmz1kgrL11zaP3ToypeZyI0Pu1fCR8gpQAAAAA=');
