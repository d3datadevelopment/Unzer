<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.2.7.0 SourceGuardian (13.06.2023) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2023, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
