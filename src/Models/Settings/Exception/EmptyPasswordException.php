<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.3.1 SourceGuardian (07.05.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
