<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.2.0 SourceGuardian (13.06.2023) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2023, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
