<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.0.1.1 SourceGuardian (07.05.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
