<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.3.1 SourceGuardian (07.05.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
