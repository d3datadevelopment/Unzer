<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.2.0 SourceGuardian (13.06.2023) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2023, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
