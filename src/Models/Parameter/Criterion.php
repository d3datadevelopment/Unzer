<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.2.6.2 SourceGuardian (18.08.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B361E09FADAAQAAAAXAAAABHAAAACABAAAAAAAAAD/lkw+3wh1n+gMEw6WcsFENcQCX53YiJ+ug91PYqJmkBrbOl0UoKF0sEZbfLwAdfNDt7qWcWbOA/Bdo4TdZ2zAzY8KvIqB0GB8FNTYow0Nw46iumEF8yaC7eWoe8U2z7urY6nlTx6z+FYqLJA/RRj/7wgAAADAAQAAO/qkdqYHLQiTuRG/DGQpfEd9eUAk2rH+s01Jf2mMZjH/wqFeGqKQbalu6iccYytDTRmdmHNnkE1hPcIl8hFrq0QXN0xiOiT4n30aDy7GBD3hzUmCHXTxJ9mYhZVgoiZguxuI2fNSfZnPXAztMAq6dsGWsHSzDxTb+xdtqzDX6gOtutzDJH05o/MCmDiE4jVv+ojZOILPt8766N+wnursdGRVpf9Og/mc7H/BiWqtV/NjeZ+CLSxTUPCGZCRFJhnNkO1lYyvRpT+td6DKjO9QMLZP0EXU+xzMYTght/icSo4Vxs/OhpwLahD2w+ptEkM4hpTk1X3diazFeYjJKjNsO4byRiEPpzfd6WWSFVSitGNu+XcvbxwjCErYYFDq/dB2aFsuLg39We4nHy1zvDACTcFq47556Ki0bkMiMlv6abOK55jjnNWRQ16MeOc1UQ/uhyMuNFC9O9O3Ihd6XkuK7l0x95iA4kB0EnewxpKuPiTPTqUqk6vkVB8AZWve2ZNpC9lAdQ4Dnqi+1INYPj4Wi+C0jgZ7cJ7Pe5lba1XisenOKtpWm7NsOhrHQKOgb87itxI9ZzAbfJTxMYma4nwanFEAAACwAQAA32ROoMRMIjzdOKcC/vSKrASuPjmeoc/82yUCFtveDuUMOzW++/IxxivQMfRo01x3/+iWTuW+EFlehyxhaCqnefRyiCFEXa1twFInAw7aJNn1NYLJoYyb2X7J2pCz+Ki97qYD7cyOKw7lMNn53K/JVz6LnnMpcN3vbO0XmMeM0j/5YCEnkak4ty6NOvW0tKsb8YWMC9YqISHuqQprBKbj7QknfxnWl2BnYmXe49JIuuZpuyUUfF6Oug2+cB+uuKKBwScHdDx1W9QXVOAk87HMl4XJQC5qsjnrgioUdNrHpg7HsRPet2J+xI29Pyl0KAg6oaT3wk+yyMIvkXe6DvrX1kxein+aB4DmiTJR6R965u+QPoISKw5XQN4bOndCecLpgbyD0udiBwWeUnb/rzpjmUTSCtmLr2O0fYPw/zIE3otW+WreQVbyz2OqTK4FYl5gqTRR4reuUOdxqmPs2ss57Xn/E7aDnF6uO6Ue5l05YrOgrPqQFSHsKNT3jP+pW6lV6yZuTo62p1QTa22n/Ly+faJqASIKbujFO4xF1d2wGE41Atklme9UHDcdoo0MkuZgAAAAAA==');
