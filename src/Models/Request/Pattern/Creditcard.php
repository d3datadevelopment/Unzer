<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.3.0 SourceGuardian (19.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
