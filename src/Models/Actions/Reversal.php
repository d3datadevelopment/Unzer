<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.2.2 SourceGuardian (10.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B309E09D8EAAQAAAAhAAAABKgAAACABAAAAAAAAAD/lgwyEAaDPneGHnYjdwFIQ5lWxjEWYisVuQhcE5STaxf2F+kzqqPFOf7Ejs0Kx5lpsw0u7xhL0VlNT5pOkCZ8F6qOntmqqONStA7dfWo3c9tlEKIXIsrSTj8hWPwrsIzUsi+bBy2B5gtS7Q8ZWaLQOiNVsFg92xJxpWMB9WpUODNghsrE9N4uXQkXzcsVv8ms6js2MLhEM6Rm60ysxuU+SDevpZMtnKFvCAAAAFADAAA3n2NAdh6/afqps1OQv+DsKE3fII1esYQSJzNl04b9EMzTwkxWm7lsH6aiszLlnPRVVvbwyV3aX4Sw5+Zi6RtAZl1f5X8uaj5StVZxOr32+6ygQ8ayZ2G4o0RIcDwgY9UpX0NGImhabckngLl/LT0ngIhK4WhaypJauEf19zOqKxkV0m7JQfMJnLggv1CiR8Mk+LtTqX0vwufQNtKjDW5CVxNh6O/eqQGNKr/141lEf6709Yy6HiNW0V+6GFg5l+d+XTbLLFsyUhD0/yIB8fun+CywRv5e3100csVFbre6DJaRow6MlSl/PBXeDiTh01myCGz3wykCdu6VAe76AE6EiA+tjy5o2/e/ZhCWDRwq2HR4SwF1QqAyrET22r1qAT7xtgwsTpwcvNwJX73LOMAuC5OPkg10jL8rzJef594ShPh9mvnKGplwZqLCkHo0Mi5u9u/b+jgtEO86RRB70Suph9SJJ3g3DD9HQwD+LuvBJofQC20f/3aKmMZNEAYS7ZH53ZlkIm1MuMC4c4dbNW0YPeBVsg8HSipyU1QgPTkqzKICr+1PaONzYotYHGytRSHQhHS9uqJrIoMbm2jxpWixMjIwvxcTIqOVr5gwOvHH6HELK4qVNT76JVdck51295XUMyeeeTiC+rRpsFMEycUW00lCgjwnZ00b1cuWaxX389TI8kYA3DDhDl/zaqo/XZSPu6Yx8R+WhNQIi7tMb3+8s6JkIlCNiWlgkKptMt2Xlz4GruwcOu5/GEGggwdkLW9IVa50wCqYRl1BfTZp0O8hwJ3d+BMmkWEjgbvUE7GKuSGIwjDbKk1eve2S0RqRutsldnBpfHhsTVIhr49Nfxj4SlvQ1vELMuGWSHIh30okdwzbhXT2PEkNaxhF0qVEnpSSyUDoEIzm6ZitJCawyI44gCu4T46lyC0J/2Y3CnpS1YVDZPIZHJhMFFDy0MjBaWXiuoCD7DVpx7rhrVeOGoQ+s/tFmJ7kf3ndE7Z+nITuFzsiTT9XKRhzcalRhq/taaLdqUDvvVYj1m+d3vJIWvLll9DtLXCFBkss7jXmUtfweCIFgjYA/nv3p4SlwTWmcySyqRwO0wTVIwS1SAqFM3c+Kw4BFVwkZ5XOUL7pNm16nFEAAABQAwAAa9dtgsu0v1PNEejhYlbsTqCkMwkAvx//QiTP+I0pyuv4FaMczbYkFWDRjlYu/I8CjbS4VBbBdD4XI7DVS/4iISv75hGJDwsxxa1RmDNwEkZegUPepD5Tz+fumHxVal84XOreCXZqMe5n1Xe5c4cSiwzzIAxNiDTSFKrR+B+a+QrRltQvjkGK3U/gm57fKlwUEMlMcmNbf5cf9v6/PwbAF28eUSO+hz2xE/REPmvuAMi2Kf2R6w9b/38h0bzz39edpKh9agRHY+84UEb1pxqGua8d01dtTiDIPtQpxiDRkKBhr/yusQOkBRQ71jhGRHAfwzJqoH+8vil2w7+phASVhdzM8A8SZZdZtfRXgDXqUU4BeFyGsBn0Xw85Wf/GX2Fy0ZQgEu6C7cASWp/mOZJ0qLuLDaUeq/KzZr2PQaMAjCdVp5LyARlnsP4qtg2CpO+DCo7oHHDJcyoYqZJ2JEFIQ7MIq9utRGICgCF8fhmepNoKfpS/FsN6VH6hamLfu14o5fgLnPrGsQnOWov7tgLW1jmEZatX2Ub35MKAc1oZzrQalNi0/0cfAR0FFmZi8eKzB2s/OL3nPpjwF+3eO6qbSljY/oKbFkFDoyzyJ4S9GoWlDj+gcVoYPCI3KyO5cMMf41tgYpPy6KBFO+s98r3Zvtg42lJ0vrSS+JqVglpwfykzxR07ysx5syZIw+Ve5k5xFpMPs9YRKqUvw/RhV981aLH7gGgg0N4KF/jYwXoI9ZjbzeRkCKh5lhONazZ/qaPrjT5O57FHfmms3zrZh96ivbNApOwlw8TNXsiHhmPtfFCN/x6lMQoQan0hz/yzl96PKdZ9wnipmo9nJPqymdbCZj9MmlnkuWg4mu1PM8rp/TAPohGlnxyLalAOOHX+JJ36wA8ASAnEkRpzrjOG48weMBKX72t337VHirQAwJPqJ9NQKlHnAsaR2FA3CNuQIzh1GnkXfHSgaUWiIhZbDFxunSqRObiFUD/xG+yLfT1QKghI9az+x1NEYdnZ0hRRZld0ZOKo0WIF+3KOuqNeIt1Mk9vXsksqABk0QzLc9XYr4f++1dOZE+Y+Ze3WW0iYeTsvmKmsTMBARxTx+U7eqCjtY244zEeNvazOERseJZqQeadSAAAASAMAAG7ByfDJufAIGJlUNyrLHeV4C81xzRUJRbrg5rGPWWcgSqj1NVP32IBqHph1HdBtvQ5fPHRiRNi8fqH/YXlCdnJbXH8H2Pkj4q+qYToNSSy61zvSwT6crOk+PIEpOTv3RKI0oyeRBXV93jSVc1IfV+cgN1Pz5XYb+x8QfbHUi2eLPPXqxliV2jFicMDyWjdRHWGLPnIuZ75NZOD4OcZwJZ5PCHVd5gYmGbPZd3JNfYzTkxf6amOr/weaROgm+c7zG1EcIfAYUJDujJKE1qSSi3TpYDis3Q5IQhoWuwdKkCT6GglvgOWu1gSq74ht0R/r9B0l3yLPUj7wkDjY8ScL1faV0bAxTCtnyqmxoFUsrB9Td/UyLpwi+kQrwdsLCwjTz4kfI+oXv90l7zksEGMln/FU88iwxN3FlnwKN/q79lFJmPjOZRRN8zBoSY2QfsElSeiKn0AdroWJnqVORN1BLRjgifghbHjtvl0A34zWtcJmy6rR+9TVZlwEh9GkOIJsT3A7T2eNH6M0xzEb7Osu85sDPCmBX1B1AALQ+sWadcX9+JP8YaJIDCF5yPVPxkrjLeloObYv73/HWXpeKd7uHyq188m3tJkvPoGgHG09GrfVo/t79nydbEQyrywzxBIqQDspIgA5WvqRr9XDW0Pv+AK6YzomxypZTieBVW0DOn5NZN43/SOghJuNA9YvTzV80gKhRhIZx2DPQQfkYgk3FfwDShwLNbt35s5CQpuInY+RbysVVYKr9CZqJJu6jjm8PzyKSHPbnUnXMYrt7sfFoPMmwNNfCOJ/qGvl0iY/MIc+IKjMeHKn4OKG5IJ+I52Lz4PnziVnVnhTStB7+DGwG9X/9KImM7ReT8gZ28rlovBvOdOxANY8lwlUnfF0kelq9C/hPgQTpHZIxTAr1fcHLe6b+1ObaYiNoPBg7qn7NIdiaA80M7J/bgUc2MilFxfM3xPd0GTPnDD3EK7G6oTjzb44hs+JOWdBz6t5SFBRprQuICTwfdvOZzy2ebzaCxzSrhwNvHstd4ikYqvsxfMEqv6e8rDBD7PTfNM6+LZjcDp5GPCZQ+3e6X9uabykhmZyh+2Y+WnVdtC0UQseEsYPiYmHVvTezp6WaQAAAAA=');
