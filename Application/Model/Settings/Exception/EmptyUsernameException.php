<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.0.1.1 SourceGuardian (07.05.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
