<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.2.7.0 SourceGuardian (13.06.2023) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2023, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
