<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.0.1.1 SourceGuardian (07.05.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
