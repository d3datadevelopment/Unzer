<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.3.1 SourceGuardian (07.05.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
