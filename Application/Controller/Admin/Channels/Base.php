<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.0.1.1 SourceGuardian (07.05.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
