<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.3.1.0 SourceGuardian (13.06.2023) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2023, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B399E09E5DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/OQ0LXIvr/SI0AS2HdVcaQS7qmjU4oLmUZi7fXzwrUgMLXgVz0LVFNFPs40HrGUWTeRSvaKs1rbPTj2QKCBjHJWBhvUaNJHwwFW0gQui6FQ1/i2dKtWlKC+ej8uOsHlJ9SkMMv88k3oAvH5RDX+dV0ggAAADYAQAA+AXIVhbBknwosueTm9OW1I2sliyEAss1yP6GPnPfN0xAiQYSE81uuqo1TnPO6k74VpTpZQrfAhl2f11bH4a4KOzFMSElP4GN62RZSPoKpPNcJ/tQbKQsMsYxnldbGNvttaGDNWS6rivrNy1R3YGss0cB9QE5sQt+pKB1Z69vgz8TTLDZbBUqUG+sGqrGl5PfPG0sTr75Bd96wjYqVk/EN8+5VlFIbPoUcDGLy7Q7S2IvwCBRciCoEUpcM3pz1RLWazElNPMwB3MEIBYXHOwewmUnhVyEekolXvj3E1miIgIRU5mc9apFkOD4p169RSHiVB+zXxBfVHiRsn4q4ZVKUIoEiKiJM7FiC6v2hS78f5PRfxBOFB0fNHbyDlEejVrnfSLoahzprWDZGv5CsSzLmvIb+XhrAvMIp94L7g2w9Uzb4yLi6+Y4mGJG54+5e4Gt8lQvsCn3dq5H534eznuCjD0M/bbk5AhCATtWr/1uu0niUtNnVdc5skO5p05BlHr9CP4dekKjJlXqLNUX2+pWEYalrYf3pS2d+I+zzxzlvDM8UycI5vx7FiAX1LVKO4MKVBB0mf/xbEP+ZJTZCf5j7ya4SongQXkm/H/3Wy85tGTySHnjQvvMZVEAAADQAQAAEvJ9Wvz4UpsMybiRbVTDEvvZJLcGM8iM30rwvNVRyKMcehvDx5Kaj1y0kC+WNR1iLxvEls+8ljjH2JhGdFonucVtQ+ar5AerT6A0+k7vwT623nZtYnbNWsXaREc8f5usu1dGU1tcAr+VeqbV0PvXL0Q11xaf1SoMXpkuYGxyMYSjqpGKPvJmpjwN2pumdDgGlhoWXw27fxaVqoI4Dxmhp/pEy2SoyiEMNKPEUiFBJu89EkwF3yEeXtgaoEE9uT/2DbSjnjlexW7zvU0RgOVKw64QTA727la0rsfiA1wGIJ40GjtxRm2LnexJH5kQFc2dHE+/WHcLXwSONU09ibMIKPe03ZlZZ3gR2MSmTyC450iyb8n9BD+DiIidUzwF0q1ISPxvsNvbxbtE7u1sD1o7ejBsG4s5FM9rZxnaAvo/g9wERdyUCY4Q9lAeWB2t31gUp3D2zQp2CRtVhfe+hN7JY0Rck40H3QE71uGRbAit21Tmuln08bqwBHmunzopqFF+gIzcnVi+7ta82cDi3s2jh1rYfc9FFuZnoORSjrIhWLRoqc028iHdC9NR+boc81/UaAdwrSLzT18AK7i28eQHehOC7hkuPGcv9hRTmuo/yx4AAAAA');
