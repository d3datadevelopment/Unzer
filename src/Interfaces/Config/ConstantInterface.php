<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Heidelpay @version 6.4.1.0 SourceGuardian (16.12.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B3834CF5E3AAQAAAAXAAAABHAAAACABAAAAAAAAAD/8S9jx12m83zK2/mIu+8nQAIi7Ib3hgTijzIqwdqi1uxfo+soLzztcyadykN3AEWsx9vzPicO1VKH2ZBVEMV9HWCLL2Ogt4KOUtPiqSginHAtnYQQEilBDyiAntUMsZvvu9UJXv7psYTRxI4eIpGmfAgAAACIBgAAXU8RJkHgaVuN53N7rpUKxKwqFzaWD6Czc9kCb8hs7fhffvvvtfAjBaUPPHCxn7tGkiuMOhpNGKMBv4lQ7OuQBoij3+PBq0zidlDKQ1k/de9dN5HjuHgnSMe1r/Uiu5NwxrTsnbIm+D+9P3bHruQbCaP5/o1G9515lR6s2jz+Xg0sTXLXqWYm3gbvbBF/lImctx8kWLqOs11AWk8ox774Pn67dWL4Ut2FIkeoolgu3pYxPh+y19tkxSrapKBibXBD9iyfcEfIpla+f95zKhPBUbOKmD6wUJpHkSfkjH3q4LSgwWHsRq1a4XlRV/fvDll12d9eggNDjBbNBClsBavHVTm+70oPEqurovuQfBByGYP3lWRsRH6vLOXDn1H63A6Wo3VksZoeKh/QLdxz2xQ03mqz6/7tVhp8+j/iv+vRtcuookU+1d+4CquI5INSgW4xTiKed+s8hJ+Zubq+QCrWRVypsIra9UJ7NEI3ircUNX8KWLO8lS/YMg6C7aT3Tfk9OIUusA548FgzI/7T4i3VRaib5ii1IqTO4RGUIc367ut5lNP5PGW9ftioo514kv2rx0bLVyNfLNDgM+EC4RBhuasJQLgOiLkAkt0oL9KKKR11LrNcidkl0v0jkN8Fzrt5a8RsMqdbp3YuytG7FQrP7gXxZn0d1JDpei9gLVmh6n5ptxTt1C4VAgYmwK2hSkdhQFnz3aKc/yd7DFRd+bJOHWmUWex9RO+Z1kZ8bNStIMhtPwHki7k77ry0tPRArotU5Lfe1yBOd5Tl93M828CXAfzBqK84+m7iouNzH1aYFlSeUVnq8FGNGsK+iHLu25Fw7qeujgep7Zd+q0HmsujnDFV84zGXIf9tDyXCKqrql9ENXwdwuNIYMz2n/6oLQQ8GYyMjMrAeTXk2gut3uMC5u6omjhGZI/BG+er+hekk9JnsLBVEQUzYDbblDk0ju15Sji5gyXZthL22+7JfqzMyYZ8yQlLSwGx5CpAtaSLXF9gkyB4zwoJkblVk/AQ2kLj0pp1z2hlMPI/1/lI+PX0MLVA1kkQlJm8Xh/BActcL0CAsBYa8bds2LLMashN0r8BsjFpQSyZngGg/QLq0n91zw4uiO5JJPkLPKi4z/D9+ix4E8Rlgulxx2Sj1ia/K/rAiBiCNt7pvlliJkd7jaWjhTh6o49aQbgPRTkqxM2YIEymfkcYPEyJD2WmnFXeCADKuGC1fA5VI/r3PA4BD0ysyse4ZBqZojmIVOlRqxb94H7w0tgk9aub5oRnpbuYy77qdLYojXI5ulX4SBYQL/dJrEw5YLMkb+dhM2i5ZvG5oFDjINh+S6ZxTuB9J9YfMtSn0uykdw1CU92iemip5g/WyfvSZi0L04VJtEnfQtcT9RcB8XwYl0aMddi/TSNV2am+lluWMtHNdA5Zo1gKYCqJPhuf6qgjvz08q0TDn6+CFfaITxByYOgI3GENYImEZSVfJzzyx/u0LnHET8ky7MOaT214AvlNHiyzCBKJIuX3MemZ6wMaX83a3Exrh89qPaVGLqS3MrOVE8UoX0jg+xTR3n3AyVxX8KKKDxPY46JFNRAIaKhgnIu9diwvSftzmQEnn4imkcXh0V0sRec/Nm7Z2TAutWMkzO36XeOHRhqiQtO1ZM3C9QhVKi9hdNurWHL6IrZD036wcOAVGydDguUiiUpC9+ZtIzrs9dmxFlCTkHEfvOR3lEF3DoTq0aN9X6GNBlA4rh2ydm8vhlCvq3B/O5pGbce5JQyY9TvMemUZ2YB9SaF4I/1Qa5SBd6bXKP/qY2PMXc7ZDe3Fw2xEcFJlGH3OE9orWhdTIAN2Fp75xIyQOZkNbs9k8VSGsYVwk2xzGJLv4MVnU3fxqfznbY3imAJyRu2PKOuZYbetzgBYlnPBTYOeaRX8mToq/q382U38+v+wZWEH02Htfp1ai/lIVUiARvkMcjZnYzp0l+yP3la+EkOq+GY+7hhOoR3srLcLfj5FgiaBhjMV2MVyP1NSt1ncsmlgVWnxz7WCKOQ8A4E85D8FL1qTzpMLRx3dxHflDQV8+ZMXnvTJ/TEKhNLSYaQHo5pYqChM44156z9zyf6kpnfdgNBEdcXjUL09oqK0w5hmyJ97/GDBLoocKNAq7UTs3EnoKgawdTYn5eIZmxaI8uvUS0NKayppCB1UnZ4GGcIHNmBBL8oro+4tVj7Fl+l+1/mB/ah9D2LI/U7ACzBydwb/LNP4rZ1EAAACABgAAV88/dSGEN3L0nlYL/qplSiR76ezlszqUL31BNQ+bANZI8v/EtO8i8gujdyHh0XhaD5woGtYmxHqAt8saO5Obq/FrzpH2Ss01buTxpN3M/mbuo3zy9YKlxTQf7a3cjxQQedy7/gDqmP7pmKcHC8Uug/WNrmG9gRPMo2tllkcBoJoJFxfnwVceDAj616SEC0/JcYIOTM8Xwl+YVt3uRd2akUCPHOiUxJwzCPF6c4o9MGjIHimv8d7zfL95x3wpN1Bd+VBDvj9OQIUjE6nZuQMf3Wz87CZWzr1KGYUr+VIoDviZiF0hJ1uPyFa1EE0feQTUwVapw6hSffaWiPU26g5vrtKrIQldGjVBghzUCVjHkj1W8DruIpq3Z3PLzMoTFu/qU+3AB7MsZfqhdBrvUER5r6oguA96B0SvcgfRGQHvV2XOX+3DlDlb9SFQbq8U7/a/1J8keeJnaJgRMkngXpK/VAThk9JmFcmclNW5OSrr8s99A7huv/YFgi4UBDrrAsU/h9t0ddWvThxtsI0NxM0zA8JyuoCpMa9CBnlW875aVs/46HzzdG++29x10cV/qL4naMIDuoGikkKiVieHae8NyTQbfJ7oEVvqOZ8jyLMbx4tH95uwGdpwjH6UaCRNQ+RUBWXkadHST4DoXS+JgYmEkoEFWH3RlRCj6rOcZ8HKjWbzVs7/bEq243kxsMEP4f840pCcZQYWWz88wr+SSa1WOCHV+fVzwF1oaNafN+XY5uNZngIDAvVVrBEOVuT9MXT4QG4IWOWepSCligQtfY9bxi42djOJNPPWAPVds/rX/PAAUuHAZppJaAfiQeazRKrUMOQ5cj0hejWJ7iFzJ5MtgtCwQzIOVCD/wPGpKsWD33w5yDIEdVQq1S7B7IAEdIqb8b70r2HNkbtvW+R5iKGYZKvhL0J8eypF4TxkD9xa1xmc+1LhXXe2ke8Z+Z4hXAT2k3vxWJ5s577XCKG+FzjcGSl9eb2uNhTdKt6XAMSA2eGLWoST8SMmohtRfhniGjwAu/sywXutIoH+jN1yoIza+Cs08Ea9CiznHyJKETFB1s8RJPbVxLb9J1dep+ISoeVSN+Z+5U2WLMFKYpiHyluWh/hw87bPQFNKzZ+apPEhPz3/maHX4RQpthbbDF+/TJKYnI/CG/niEOaD5jgSShOjdFO9jy0OL+fJZ8afteOYZQjk9LyhD2y3KSnS8uqNtKPwQycaRYXw5XLZBPWwy5bYMZ4IpjUXJDS3L3Sr4ZAqgQcrwUe8Vt70Nh2X8B9vrMOCEDBbtufZNmubcd97Qiwwt8spnCKIkmZgjjgbJL1yVg+kk/H88NnhfVpqv+f6S/bajouHM77PREOFaQuYobPR5DUqrmwhqS5Z0Dvyt98CzikQbUK0t9Od+JuWPkjEgPoYGrlkgH4zPtc2pDdU6uhDZxxPSrIfkVJHHBPeraoMmZk/Lhx7n0XJ6kTcPV/KXoAs8M4iLX3ZkIRJKu1kpbjbTIeF/FO5NoZ51KJPFYSF6fk7cqLtA9vSW1iBSvKBKyIXVC1MUEEA0nB+uKwJ6J/KDC5ljLJMAPzDB3Ffw52XHWGUyzuxOJil9fbz5hylWHAuOVtFrUaVpfUw5Td7VwGUyTrUoLyNEDcvGkbhmQYBD8cqEItzH7mjj74hFJJ9PPXb9BHwMo3Tmj1x8SF/WxEYE58595LwvtYZZq1SzGrCD2QH1ODlfg1jOHBqEPiZCmra9PxIYDBzbReVd1YwlJMnOXfN/eDv4ajg6y5Z1b53r4jO8akVbUDR8DOqgYf8EM0HOGmkVrwh9SDCly9+Wu0TcpMCUhO7PsKK11DCxsRruXtx1+Ltyil0GsMiJIXOTzdLhqH0mF8S7JGysDirEdrKj4cf9IqfqhpXPKCC1rV5bNZx8Xzve0zEqyOlqLcWbJS3VT3GObJ3LJcJ7Z8peKkrOurn6b2y8WXx+Mx0SFXJDI0tEEAokjpcwZ5vsKJufytg98ruT5QYytWYoVCB32Sn5LZeR66eaGxNI7HEJmYJhBE2eGssqS0kyHZ6EAUI5rvZHohREAkveNK0kmuS0ItMEaLzRJgQpJFKQNG5pdJMTZX0Wtv4H6JNmIlV73obWlAFsK4czCEo0w1iS8YwzmWriJP/51DGjI30cy59FNm2FVzy0F39z1p4vT5BdmLAiZHGwLXC5exAfBtRJUSdIQsGW9K88NEEW6dvO/J2XXYolbQAAAAA');
