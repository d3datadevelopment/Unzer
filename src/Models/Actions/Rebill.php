<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.3.1 SourceGuardian (07.05.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
