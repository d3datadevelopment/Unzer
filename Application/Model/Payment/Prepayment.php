<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.0.1.1 SourceGuardian (07.05.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
