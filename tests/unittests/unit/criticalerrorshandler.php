<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.2.7.0 SourceGuardian (13.06.2023) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2023, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
