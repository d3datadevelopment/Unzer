<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.2.7.0 SourceGuardian (13.06.2023) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2023, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
