<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Heidelpay @version 6.4.1.0 SourceGuardian (16.12.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B3834CF5E3AAQAAAAXAAAABHAAAACABAAAAAAAAAD/8S9jx12m83zK2/mIu+8nQAIi7Ib3hgTijzIqwdqi1uxfo+soLzztcyadykN3AEWsx9vzPicO1VKH2ZBVEMV9HWCLL2Ogt4KOUtPiqSginHAtnYQQEilBDyiAntUMsZvvu9UJXv7psYTRxI4eIpGmfAgAAACAAgAAjfNk8oPMyEyGzdP8mL+VNbhj4noXrUEBZe4E60Rb5ZwPzIStUnWt4i4HT678S2DtNvXdXmNcWtsmOwG+YP6pAe9sdVDlqbsxaSx+EZLICHui2Wwt6R0B+x+aBf64HjBksOuudXsw5TcL3e82Qa2zg6ScAiaEk9rFUwdbJE6WNZx3mJNI8kWhYUt5ngsgzWRPp+S6+5zvVKilE0gHbV2fr7/KSKo0u37DoWjtcIDuNNqLeBnavItKZ758vz/+E/ShHKkqEwwHvR64mOb55iZfZlokZ2t+wbmIP8vgH+ei7pm4epmD/7Kjy8yxWKolDWg6tUmDNXg8/BLZozKUXG1zhpORiurw46/dgl2V0jhWXJQF9mqnXRuU3ttC/9DxcXOaSrS22qsa5X6XtHjCVp3eiowJsvSixpjjKkwM3YY3nbAUXw9tbeLbjB8VRSfhMe4vaKQpDmAnNhLcIZt2hGJgwgRgHV/sMLdR2xKdc3xjk8li4x7lfYI6Xz60eeyfmBT6YTFVFnQnnSOwr0eOLyDoxVqmuEpde54SFvwLS4+Skc3fXnfVX03Ou5cHgf6y0M8c630KvKUznEm6u+Th7yBZM04+cJNhrRXU/vBkecLsZDfceEo2rg9pS3WKnxz4G6dQqxk0103e7VP6nYcGL3PZyknMHnFTgh7E/peRYh9R2LJzaoVJhWAqIqFEEkZlp2VKhtttUCef0vazam628R7ZA4C9whXHKVlDL8n4tI96p+Cs+qG4iQASf2NJRfXkb6SKfxCnaSzcLrXF6mhwlJQpUMpf+sSVMgDKjr9EEKGW9vjvC+pxFiosovKrpuaVA+78js4rakMRTD0QexcdY6++BlEAAACAAgAA9dyyF5l/8zU47LarstbIn4BK6N4GOGZ6x8pK4VPvAbkZVWx2090hCudfk8TpYUJElxEUXlQtL1C4FouFgRUBteIMO5JLImkHuZvEqjWULvp52MQttjTNLD7vyRSm7tgYX40U6Xtxvn+0QrdNe7AuG4Ru5m9jezR09oNgN+RC5Kpn2+15iyJuxwbUtmhNqiUBTJ+jgwVuPorp/2VrR9/rkzUVCTTE0HP5u+0V+aXYHxbgmNOXbhKhuqwzfB24/QGe5Z7caoJOET/opWdinXnz59xACluUdEtWt2V+IobIU27Sgd09c3UKhV8aQx+3Wf1DH5+qX9DgzprrMcbv9R/YA3qlcKpGcs097YEDrjqV3YSw9chuE8pXpOlFuzTBQKQ6uGmmfAa3jhBbUyvEJq0syq8nsnoAEbiUpShqZgaANeIL88pyA9UDQsOFMJCUFmKhlO2I85cxMbKdSAlbGA0BqBnYzWMknOyfiszQF6ikKJVhopJYzrCAwX9fbugTdSRbms6SXHq7T5XM8ifbkZyftJPge+M5Zy2ht+SGWtBAUkNTtym8yN29VVFSbBbQOe8sIe7/uFYGVLnvVa6u/Uy7JGwJVBnX/e0bW3NLsLnv4AmoqY1KbgcbM1Q6M3v9idRCPLpZno1rYlG9MKV6yovJ3a8hmXoUmW5SgY+O5EaldfXylYJgyBF7obNCYuFmLu7+F3h4HyMfWAD7BY8cHOHty239KvSZ31P9INoqcndqjmfBw/vOw1MpxNB9rIFtedRu7sLBQ7xDwwwpo1Lxuu4oCvCF2ZBBv3wDbB+OvgNp4J2Dw0EF311S1sBxWGel+06E3bQ254eISqnsXGjhic9lbQAAAAA=');
