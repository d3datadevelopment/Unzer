<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.3.1 SourceGuardian (07.05.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
