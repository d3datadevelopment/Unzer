<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.3.0 SourceGuardian (19.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
