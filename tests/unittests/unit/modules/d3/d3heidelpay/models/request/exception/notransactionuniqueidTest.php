<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.2.7.0 SourceGuardian (13.06.2023) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2023, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
