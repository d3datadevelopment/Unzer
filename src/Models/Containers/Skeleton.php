<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.2.0 SourceGuardian (13.06.2023) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2023, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
