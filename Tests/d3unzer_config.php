<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.0.0.1 SourceGuardian (09.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B3F7E09F4DAAQAAAAhAAAABKgAAACABAAAAAAAAAD/DuqaIZ76H9JB6zX5bD6sP4ArZmcKsUN/j3amEmxt5AncRStfTu4Ex38vL7g64So2MrCia5+EnG5Lmjs6RsTFcQ3gbRjcP1PIN7kgtiyIax1O/a28seTfoQLL3zBA4jQAi9BeF6tTTx6SuntIgwDzo0JNoiGZg/VoDcAHYhynhUAWKbZk2KxplfwXZsLPeTlhdu2PKGVRu7rPK07wxXPQchECX/O0JX1qCAAAAOgAAABXo8E3rE5xn73wW+dIZKisGQIG/tN+ke4XmDMGGNa8Ym2yI06FI1R3D+jkQJ2fcT2Lsy+YfeLUFzITnC4vKuW+BnlpPOXl50N+8BboQFz7K2KH6Ov8jUqWXAz9UbUjXCSas5SK3yECFZOzbQrWs8T8aUlO8Mg1lf6SblGjasF7vNGyTiOc52L/I8ueHvFDHI7mazggwZzKvRrboagBZgrrhLMvrmFckqWDjXoQO+4SmoPSJOQ1BTVBebdF4uMHIoLlfKrodTdokpTNvmsO1AwRC3dgEKwalNMojPGyvQTtHH2c2U0I3EfZUQAAAOAAAADFNkXdta1qikv4eTOufBwY/gipeTAMMvHLJdpq5nSa5k3SmYsCs+xWJ59d1tyBkGINqxmUww68P7Ss2PF98zIZaPNelffE14TzxBfRjDhk0VmIxdPNDieg1asRxYGmVtPWfqSx1JbRjV+SyJ3yLF08d6id6DrJnzV0p5ucpahN0urAaVON+7Xuca07auDYEbnCNL7eJQq7meQzQhwZWA7HIipXBXxaGJEG6dzxbExc54/bvGwJt1lHP6uNKLrgAbwAWMkGFfVm9CHxTLFlsj0tOeAeCp5ltmm3wqmo39MIyFIAAADgAAAA8kivPh9ZpWBUd+lBz1kauc/tn3MQtQKdrliKvLT5HfO9Yh6SpURD/Xi75ViYaudmgEMrNshr2xFn+wnnflZa0U0ufjCTCq8SSk1T7sTwEBJdT/WtTi8aMBHur4gtotaSEJGZDB8WXmL345HGHHVG3eY7FtVkm/1J6Diy7vztZlwXp/WR92yH6QyVu/q6dXdEOCOmBW1Bpg5Q3+jLEAb34fSOOaLdXCALkmpkvAVnuMozfGMpwfJLoy1tmGN58D/0u/ifAmNaqU7cLPzOiei14k/6hX+AtLIqv75NdomUQPwAAAAA');