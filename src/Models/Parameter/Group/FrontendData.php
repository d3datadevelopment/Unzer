<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Heidelpay @version 6.4.1.0 SourceGuardian (16.12.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
