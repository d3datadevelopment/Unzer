<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.2.2 SourceGuardian (10.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
