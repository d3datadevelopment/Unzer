<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.0.0.2 SourceGuardian (10.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
