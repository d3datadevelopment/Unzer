<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.0.0.2 SourceGuardian (10.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
