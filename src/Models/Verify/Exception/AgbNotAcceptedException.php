<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.3.1 SourceGuardian (07.05.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
