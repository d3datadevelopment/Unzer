<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.0.1.1 SourceGuardian (07.05.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
