<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.0.0.1 SourceGuardian (09.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B3F7E09F4DAAQAAAAhAAAABKgAAACABAAAAAAAAAD/xgiSmJWjLZVKpgXBlrZ9rcZeiWmgh6ndOaQsETAGD6BJ75dKDlfD67ucJk+L2tdV7DISbM1fORSZWT1ODZnXh0D8bGUFOMMdxYHjXcCW0exOSasiNKpvBsluYtad9pvqGRjMYSvAVp0wJNmVnfkSrcbiXCymHvKPGkTSGwkCGigCvZZNFzrKMvi/NRWgnQ0o6ZO8oEBMOMQKdrqJ9++UJDcQIDUg5BBUCAAAAPACAABYumEGUyYnBdCIA2QJBxJkAXc5PaB3HD3sUbBtv4UsWI3KhYgRpXrXlSBvETt0H8sun8zg7Sgz+wyGlBg9IxmMctfDZAv5qOqvy+TQXCpCHkv3XzmJCWzJTguxnC3cJiro7IRxec4Nkp3h919moG8yRbe0YTCqWNvAUC+nkUswEL8rBpS4983Ly4DMlkSDYFv1Vu+hPGxe6yzqiX+ZwFWTPNEjV8nWx4KuOd8HJwTVEqZDCjPvO+IWgSqBpCyz0QBy5CB9UC3Mmh3lkJWD8zS8IbMMY6nXiYyu1UR9zvWFc+EzFgcPGOUroAfT5q8CUs/4OBLgh4neckCEX51xPASbdS2B/QvHP7TaaencO9zAJghqVjPBA5mHH1Ihv6WKLNcfGJHeDhOXiC9AMRyodMjPAKWxtIsgLUAJatqi+YL+sME1h9i/T2g+rR7qVOTZxKE5RJ+8b9InEmJs/i6snPk/cyaW1vSiuNfnOGSGpPOhe54UVekZoPKCipKH2tJrJqjXuU0nKlkERVUO4NPJ0QTLY0g9+062Uj3uPaV4nljGEuinQD95rV6w7waQyLD3U/1hZ+CKdeUbtRzayKU3hISlwHVImK8y9T+7Ynn/r9lKeA5uJpyTKNpEc4nxNFsoacMrdv4L0DhYRf4CqQC536VJ8XnX2+bcg4h9w4nCcORujTNqLIJTjNZXV6EXGyxvcZAVQc1kYRqtS7+qA56Vp/9/MMiTaIV00bIdCvszF/QqNy0CtWAduh0pV6rrtncVr2NMEhYhfWRnmbqPE0PawkpF+ZuxXNviKv1d7GuCCs1YDYrVwpnfIcU85B3SPAPTa2s7qIvROVQK/rZurDWCuxKnJ5SmcAIrED+T0o4SmEKuDFHsFAWdrKdPE6hv4TH0mJ/m13XppQf+q9qR9QU9jdqF0tw02IZ7pzmz1ouFueP4CJ9CetmI6SKTsmRVkKPi1N9LHNPR/ImzUTORZPztJe62qkeHz1MdQQc31Rm+/V3OP1EAAADoAgAAJ7MAdsrdPoCpKbg6FN/1nC9/x9hD+ebZjaP6ZGmXDA4M9/818fQL1brmNbbDm2KQRluOAXKHohWJ04JTQl6eLuQ1NROZBTOEuHb332riPEKz2HHG/XLPTxCVs+uiTJz4ddvDyPiYOS2XLC38DbPob9JVwwGLU13IAvy6KIOMrAjCOXegA+t1odhd21xX2BUjDw3JUEb16g+jDq9EyT9OizHLli41+gAtQSaw7V8bqVXFDIN/YHBWLUXY9ILJmTWlUwDQPi7FLvE+yPYbSSbvzcBt2HGmLzpgtrgYV6WFG6WXuCnDIoIrzttzdg/mPAuBodWzr2qedk4cMWVPTTgY9v0FElEHY1Ghbmz9h8geBPcjb1w4Bqx6EqPRXfIvoAc5g8vE9rZcbYwHi4+IGOuERx7PhCSa7eFNXVFvqLTds2IKYqnyWsLlfRlbvY8CNZkvRD1mu01tugS9dBRyDqtCyjtnQ0n6gxoB29OsHGRrJkimnmQocQPfaXmOsROx9+HOFHmWnMsQqWd9AClGABbN290TgIn/2qyv66gzwAol8IW0I9zsaz5kmYKQEuR+NLvNRKr7YCPSxmJ7NaczVjSsIa/MB4G9deNomhJBpg/Ylp/DpHR2GcomXfFeDsQVrcf9aFG+o9lpwtHXwFkqFfvnjHIYels2oJX0Ngbvb+nM5S7JmT2/tTQj1zwNKocyDl4i77X9Wk6YoM6j4BrPvj0+kZohVhKxIiqicnovYZs3dkV4VGoor31HccEjH3dBuynlZ6CLc7md5gDVx1AppfsLiYCXiuSk69NNbzSaYpzTTE3g/lZySkTO/Gx8ub7QwMh9QkZxRxGQ58QgsE5d8r3jp45h9kdea7Oq9erVIhldFebQ6ZvWOzDA4MuTgZvhRDcPVo8qohi8PqVBM0vXUA8htheTT6b4zpmef9gIGNnyZboutQmX2l2QsGnzj8SmiIvbg3xV0jTENJdliq8Zw6ieB4CBjkQykB7+UgAAAOgCAADt+gk8ziCAy6+8AhaI47CdrPQFLeosx+1qgzIatJCMmTp/0Y7USnYuWCt0PbUd+4M1I3FWS6PslVao81VQ+Zgza4tHi1clHd3lZy8v7JHOFKBV97rFIHO1dP637wtFNDCVxQcNB55GSMtZX8idN7S8cR0rTg7j2PTErClcM9h3W1o8p248vFiKe7ZkdJnig4UsQHzetbhovwAaGyoeuqSEBoH+u8wLJnXsmFmsk4RcP/QnETPdewPKh1fdF44jgvgy4X2RxUIWEHBTb8KD8RhUsKm9eCWC+/SYlaEvRxb/pOPZYp9mMUYFC5ve3Lw0AlIcxdnVQEJAon7xYmw33Sm4fvqgVDhgiuUddstenZu4xYcKE+AMdH+IHpLVQHYPcrIqT1FRYmEHmL0Bfx6+dQt0XU8ZbSsfQD+G7/KiJ849jB8YBXlffukK+JR0QEWsx77jOhmel/POviw+p9ehnDc84rOVitvNXppii9kzqrg5OURZeXUKpByV6FHExkHbvt1eQBDDRaUq088b9PT2kBwmiVAd/NzuHP4FfoKn8a0hRCX/4xK26ohS3s/5ezWhYkk1E0zGdGs4DnqgFAMu3Yd/BjPvEji9t1VzQaP308KFg6MqKxV6D5H4NkASc+epIDeiahwIqbQarpp6Os5CbifipU5yG74fE5xWYyDQib4xvEboSV7U3YjFgXmh7fGbO2boteq3mJWp29m+g+AwGfppAXDbM3/cDjyNTgfqD1fEmSjYBsz8ybQPvflPobd/dRdFh5ASJav8jf+mWcy9VVaQNZ/U4DXJn4Gq4ZFB4y2ai0w73uekQxxhVypEa7ZOcAoaYDNRjfWlQSk2GzmAv5SStqL1iI8hMTxnkYsK/eAbkWtUDjZOJAOdipOoTZTu1+9g/VK4MGYsJMD2PvlDzhxea8mhC7Y9QOY8JqoNCnetXXiROb2BxToH5aHHOHVo3tE5tn5QnUs6S+nxOc0yVjQUSmcoj2IpVDIAAAAA');
