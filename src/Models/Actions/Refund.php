<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Heidelpay @version 6.4.1.0 SourceGuardian (16.12.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
