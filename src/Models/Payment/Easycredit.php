<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.2.7.0 SourceGuardian (13.06.2023) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2023, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
