<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.0.0.2 SourceGuardian (10.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
