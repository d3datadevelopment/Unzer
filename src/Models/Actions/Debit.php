<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.2.0 SourceGuardian (13.06.2023) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2023, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
