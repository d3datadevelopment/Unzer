<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.3.1 SourceGuardian (07.05.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
