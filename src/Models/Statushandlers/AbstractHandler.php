<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.2.2 SourceGuardian (10.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
