<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.0.1.1 SourceGuardian (07.05.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
