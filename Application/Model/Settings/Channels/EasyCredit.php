<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.0.1.1 SourceGuardian (07.05.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
