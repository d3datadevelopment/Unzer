<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.0.1.1 SourceGuardian (07.05.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
