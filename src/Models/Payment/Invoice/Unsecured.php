<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.2.0 SourceGuardian (13.06.2023) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2023, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B3C1E09E5DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/r5bIHnr2ZxZEBWAKG+olyQkOGu/lkZiN1I/njxHwyeSNsMrMnNUWWE8OKT4ZTQcEtpDeI/TsGH13kb7v3kdQEzGiButZwj6w22uxWLIFGikzsjtyYxV10hANafy0lmhMWT5QvJykoKUiDKG8BpHwgQgAAAAwBQAA7ll/J3QCKmS43wz/h0Vmt0c7qjpeU4cnAslj92q+jA72KPA9spfdqweyZl21CLhpqo9qTOTW1q+lwAs2TTY2QBRvSUq8J3JNc6ocDAGc9ZmyHDo3XQYDoH1P88F8Fk5HCWw6jhcUyAMTtknJrqrL5qRXiU1OISa0CVtIDa1JUMSaGsKHt5I2fsktby7FTUDTIysVMLJL7nRHZyMQVCNygcT4krDsYZERON5bk79pvdPze0xB6HdR+OYY1nLZ7oJXQLtsajstEN+4vecwCou/L23mAkoWt+Hmugol3ZPMLuZOo5hlgm2dPM93Z4hajqVKoMkQ7fBJVtXGOKkMtpKtfh6PKJ+uNW2mu2vXbW6yhoOl9BXOdytWlBZUFERd6aIQafgyajDiXYALQ+4dBG3EOaaFht+/dM87klO16aioc/RDFTYr07KDqsrp+MV57hxiLn7xzY+kDWXlfkxHZ4Nk3+smSMv4tDjO4qYUrdN/VM1Vy3iSnAK8r4n3I7C9CsmVwF4UCH2dJ6JwCEEWvHJHr3oTb2TCopO8UNWkd0GzQdNEc+EJGW840MRPXTfmsEJiLJI1CAl/W+RehjaTkL7HMtZJxxP65lV7RMh8DpLGt/PRzRJTdUHcfx7nXtcrA0HGqw4ntE2T2H60V5hQn7qTDq0mCEpg1RAum93JGWuDpUeX8+2i3xky/mjhhkW7+GncBmEtFHULuy2vAfz2k3VkNCDAQrwn08EpUbxiBmG/REjQl7B8HgUx63TZCgczayzdR8vFJthfgZJig4Cj5hRvID3kf1skG4/0eQjhXYQPIUPpEOtj7CI3KHI4cYskjRcs8pIWTf/Q4QhXKlcb4oSSBbOhVkWrBgxI8O1jxIT9h/RhQ7Ry0mroNoPCHoGyDNKxRDLI4va9Yr7MnehHPYjH8bRUm5Vm4YFDOaZgo5T3PChGDjyhKkiOuho3QmHzQmJ5Up1kkK9BLywf7/FXhxi3GcsXkH4I1lK33Brhov/a84BE2f2oHcwxqzzWNATs0WQnKh25/V/TEQkpJ8rdA8P24JU2ifm1wuwLGBpNRR7J+mBiKiC9P1ZQyIiKW+BmiOis1yfoKMWDTCuEStv+G1UsuzU+6umFJMgijFPUb96Q/aDC+19XU77BENXePNKw9CPiYtZ53cCgBd1UIsVGIQc+vtnRktEszJdB4EhU5dqhkvvSi/POiy/VWLLmFbaWtDjzvWZ0HiY9ZHo/9IPVjP84kmJvGmgfQLzzfdgTyTcfqY+4w0fQL/pCnnl5JPRl0jHHwQ96nh2e9An3JKm1YkcPvAjOQuc4gy9DPDcg1BFklcGBE5T0u51ljqbfMQBML/obffMpPMZlg0DLSr4Xt9jBtzQLJFgM5gtFbyCNKhUjoLC+Phsj1wriYdjWjWrt2pdrobZM30KUxqTX4+zrjiP1gxqiwotWTo5KDTpdMRFasieQS4/ath8LLAoUW/gBe2X9q0Fs5N/qeRn1y4YI3HJsrXhEqerjvsLKRN0tfr4v8TZe217XHQzBknoH1/XE+rv0q2ptyzo/giIrwyFozfbcrJjR3HCE22cVKKBI8+Q1FrgdeEChpiqveq7kRBpxhReyW3MttDYnuhfynafd2saBgU8XLwpotmNICRvmHqE7ODo2Snk4cKJtcEtgI3PnZkuhGBoyFccIkAEKU/7l8Qhnc7PT1gNL5nLF2WSqMFNvvWvejCaoixNTCdCCwUkNyTENvjBvZrRProxKW1QgI4LZe+oUyABsCeZY14T+aQrJFZFRAAAAIAUAAHfaFrxLHl05KcGC99bGHlRXcDlB6f8v/S6xF79XVvxrtPOJhOXa3sNH52Y0BLGHf88UFgJbEU2RrwpJQtyqHMFC6W9dRmS5bW6kXzFOcxq8T8wsredc/whFbK/kG7Sk+3ORku9xcOaWpLH6AH8lJUHDyeD30Z0m+nmx05i8JsVyb3wz+BHT8G3PBNr6J/9Rp9qtXZuu6ST7jtymQ4P/MA1taUOcvlJZDIdzajhok+hYcIugzt4z6QtlMzBxnj19UlvDyRWGNiIVJ0Fuash1spe7NRbD1IuBjreZ6A3vIGummt89mHF2setIH9dSX4RW6IMRyAIPCTQd11Zlj/9bbcHAoU590X7i+j9F3egu6jzhgkNWS6blEeA22irDs6JMdIyaLv1OGMBOyQ9dazo+1SG0FuOM1aD4pqbcWvnyZFrT4uBko1gvLGnkZQ4brgZGhhEQ2extaEzHEGGQeW2Pn2z6Yj2CQAFDKHDIdlLnCTgPIZ9YA8/pG/Xo4HrPmxqTPNc+rM/KvDr+4LjCK3xdrAhuE9fMh/XG0+GGQQCql2xomZeUznvR0HEmjjhpDTpqACmOoz0bxnLht01wj+8uvekVsGlGc79sXCpPCAtkyrc1XwTIXPZOYRGg03R9moLAgke7DB+1KsQI+vwYubYAqw2jOnD+BXcf9ARyYudXwh78FdIfSGpVAVxs2sAxxc9ZF+NyEz9mCtpzutPLuHjnbQAkcHS98ppKpPQuO3PsZLfNzTqQGfoJ/DDivWgH6hbkFj4gSfzW34HTMHhluHrMLEDH3nUTHnLS/C8x7JSG1lhaQ6CpWa4KXujFVG90RC0O7k+p8o01CgZO+kXdfVTiG2RQYRQdOhR3xhalsuod9AN2BFtUxEtuvHVdg+U2cLLY6nLx2UZMDFmFHjfr7GDMowpEWQ5/01bs0OFS818PBPDo3d71CBj6wYMdBK/MGk6R/8p99pruLS2BR6oMofQib7eLPW5779ZuFfYEC7P1a2TAwX5W9mfYC3R1QX7Cqdv3Eg0PcERCdqa3RZ8bxRsP13qLfW/n/jg6D7FCJqsZvuOA4sHaBebIqYJ2zo3iGm4o06wUr0FxdwRw8cbEsFhD/hl4/Hx+SXvNWkWXhNlE0pqrt3m/SF3Z+w63RliCtRud2d9EXvE6hqaECR2gG3p6QElrQcwZ2EfA/XZda0oIOoWXl5/Lp7RbH0RxdonNgtwukuDBLjA0fN/YIfpse8nnq0XfbsBrMC/Q3O7K07RKLId5kw09sySx/GI3ByzvfYNmiZcYEY+OUCIdPXerj9duJNQ6/QqxrqucVs+JMlCXkf3IBTBuxZwwuKBRFCKme3Bcu9+lKES64zLBTz/MeE0+GgZ7fzfpFLaj6wyXxuXD5YBwDqXZ/+SivGgDbT2kAnw4K4NTafCpyviMZ8VmzgBUOyLumXm5fmIIH5vMzyacc8JDx36g7fzcc8Sso/ahcrqdFOnCAu+HLGMRzRjyftTDsBeyC70MlqFbj5G+VWNeGT8NaDNH4xkgeobNwEHukOndJSUFrWLhkeTrH79HL1GOjvwHRxM7yiFnSgjbLclvBxImu8C4h6x/tU/vktEhSygzP6rD1zylUwAcie5IBrSvkbilzN7t0NW0/E5or6wv3tOu+uSrT2+2A/IDj90eqK3/JHWBKfAOlQr7d02EfhtKqH6usZiOnLbdcFUalDQHKnFKGHlFfmOyGZkwwCt6YSeC2+6ebBTrG5bVj3fu+NeHvRYAAAAA');
