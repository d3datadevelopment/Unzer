<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.0.1.1 SourceGuardian (07.05.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
