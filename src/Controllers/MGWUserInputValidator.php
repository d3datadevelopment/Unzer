<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Heidelpay @version 6.4.1.0 SourceGuardian (16.12.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
