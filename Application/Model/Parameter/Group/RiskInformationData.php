<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.0.1.1 SourceGuardian (07.05.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
