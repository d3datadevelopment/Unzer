<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Heidelpay @version 6.4.1.0 SourceGuardian (16.12.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
