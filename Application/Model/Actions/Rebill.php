<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.0.1.0 SourceGuardian (19.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B3FDE09FCDAAQAAAAhAAAABKgAAACABAAAAAAAAAD/dHUGAg5zAPX+k0imzETekqA0cgBTUzinzGAe5ljrEOA6/hHUh9JwqyG0PXsN/BVEoAYCU7decOBu7MBGhXOpm3jn50IGjoEoBD4YDnwTTi8TnPNTIhOvObHzN/I3ZcL0C6XQMs/jnjiJaqVm05btpzOJ0NCj/elmA/w9U/iZS2ttX/rKU7z9dPL6Trprbnxdi2A7LEgNDlm65MCFhW4AT/7LrPsl/tsfCAAAANgDAAClmawt2993U/ccF/WmjOL8Cu+JsUkTMbIrw5YXWM5NjEhtpp983ZTFSmEbnX6i0/I5tc5WY7nmWqRe/PFuprIqYhq+sUWmDr7NMc5AYm8vBJJRbDbu/dvn+AP87DyJExKUSuAdPY9A9LKhfUuG8BCdVb9qL7oQ5VB4mbz1lvH9iTrWyh623uP6smff1csYwN59IpcBrc+uFCeD3KKLJCYuWhUIgKUiNqhzrbEaKNOh1u3v9cd4cQJEiX/rho6HBac/ZsWF7J8oEIHT18wGzhqyakrYlrKNNHVEeWGLrqIqLzu8x3G76pkjKHuTp+eirh0MzTd1u2zyvsyxLIV2Ba9TIWEFuUICkdMHkC5LWCH0g0ydsKeMR9npoMEsSVmP7uph79EegcynHcQyZRdYT3SPvjrahVnMz1oTmjqy7WsKRjdAYEpmdlK+8L+wy99PLF1W+2VJvL+S/dHS52M3EwT38vPmE58kI2LvPhV58R388w3fHgi3ChgXHBslrA65tjWuc6zEu2gzYUyGYQtSf6WIV5CQM/L9YK3UP3WWLszVEGbRfTgAeSi9bDC7pfGDl+Ly5I3LcC+otvisepIjyFOP2tWhLqPm+I9isvdkM8LUDbmRoEZ0wz6byx0iqFFWTD/X602gDyRhG3lOO7rIqAtiGQ76w+LARuDrVInj87OHVEJNSUolyUrtQkZvqQwBudiQTUoj0K9abH1fwU8CtuI+JjPFPSQhx/W4zOKQzeGf/7juPnWi5OMRepjvsa7PeWNKugI79jJDwm8BcRG9l5awnCGgG7xiB40Nv4yQe3f6X5wuOtpATUxx4iPduXIpRQuySC/BIbj3/XB9UtdZcwl23VBwnyXLC7yzOE68a57vRe/VkYX8aabB/LHaO0aBwa0D2g3zDdpzYfV6Mby8DEwMp9swm4oWQ8xgOZUT1Ewwa5hh0aIv1dIjG5YSOJrsy5qxiuwbrEaQqWSxSVPANDZgn/DriTm4mNvVnOhsYh6EtgtiX5VipUDD3LMlESlhw1y6SMOT1CtwAOYp3UECiR3+KmAcpytnBzwUIz9gHMiMJLo8o4VoSaB17iL/UBoEeD4ObMSAdS1GUoYKcUF3IpwImcQy2f9zMiQrVgFmzYVmhuNeeZnDbsx62cAEzp0T7DsxKVNIeV3/DKeGybQeGfQ1rw1sO+H5BdUXz6DkJAlqPvH/Y+Oq7+uaCTOeg3jxwvCGw/5nQNdn6U+BlM8Urwrch4t3JZnPy2A5CM1El7uLIEFhpEEf8EZh31SPPI2lIltHlk/dLgDttJJJ7iXGx0MBX6BO9KY+SKZRAAAA0AMAACX4JKstkEq2ARswMFV04hUcfZYYpNZ9EnY9LX9yRoQUZlVjIYsFsA78jsfo5rGHCjzeOOudK8MKhbEDVpbyFRn2H98Dj8VkY/noI2z4RE1gGJJtLDFU3inuiHBNSjcNpbxSnBlKl13cNB9xh8aMAGxS3Xl6GDnlpuSMmJlYOHNpMxL/1z8O7Bd5myU384aH1Y0v1tZFssKDvw6sC2+mtzj4oQ7l17NAxq1B4H1oTyY7Ppq68o2tKuRzWBpNx0xJ0uiz3ZRgo7fkHMhihdw4RnQ7fIS1ZdleCmAIQ3eZdwqsEU1zmvYyk82f9UzVYnmzwjhXV0DskPChvwV0zo/Sc9Op/Y9aDlkLH1r92pZz6k6/ghmuySSH8wXM0fraBeKUFtFGyj0ND7kajmqL8p1/MpLfzjnhdahf2CMl5od5dBR/hOJHp0y9ZzAKt/FZJxHet/kYGMjHO3BeH+dWwtrEy/0ELRdEQltLopMeC1hyDpcpp//FsemJ4cQeV7JCFUIkxxfVAwma1K5Z5YZXfTKaUjPpoxsnRKqvy7kFRZPgcZtXtmaDqKkytVUEnNPttnW+jA63qviukdoeZqjUVdmw2q+77ctZ4+Kec+JzgxTgUmlu5R8MXUY/t+Pan01UG4M8b4/QgEG2fxl4bDm1xULvT9lgMTsfdQA2ay3q8jy467a9QzpSWtpWS08Lvd5i5cmMKs63SzgPH+kv6Uutz4oLEqHBiWWHvU61IxEmvsonwbqx703NBvsfs8PJb3Zyv91MIoFAxgRvBxaXG0KZomOwvWu8igHb8mCcjLFgvCzYT7HUjeUuTj2q1fpO4mG3NFtJOA9hJkm8JZtx4VX7gjhiVqrlMn49yIx4ZXnE4dfw2kpeh0mW6a3oGuQDPfxmq7cyeJOCiIUSTi0BMkeB+BW2y/t2hh7owim4U16Sd4dTar47QJfayN8w4iuSjuH6esmABi4hXzOYGfdd1VY20YXCfKi69UQ5MmA7/Yu0h0uMwcU2cmFZTdq9J/J2cUI+YMUCaW7kj2udRpZjEgTNnMY/llf/0jkSYDD/4m4dAW5Npu423McJDlNX87sPLR21u+Spfm/EIkxxp/qdg6nB/RpPgJLCVaH29dIL0hNXQVaiALIrP9k4OUXbn2vtvZOr8SMSLM4nD/ofBXQgggoPiu+JKN7UIyJk2Zx5IUL6nvQ4h6bzpK8Jo+VdIoTlwyVrI5ZoPlRkCq9doM/26ch8IVy77Of3n32rjFajKcSroBCgBOxAUl/k4llwqi2U21LIN9NXRTAZsYmGpmFDLe0LK+2AMWVSAAAA0AMAAFsOQ7K8J/3zeLQZOFfDSPnwPFrm5eMr1lIso6KZdRR+AxVdxVysMhUiyd1jOe4cbkxf6R9FNfLhXrnpYMxDCNtTKnSyGB4r13JCa+7/o+xKrWqrVRKmBa5XfHaaktgepu4eiMY+GRWO5WKyZ2toKsEa0J1h3NJTzTW+TbgN1rMnLnfLZ95VIrzkDcg374b6gL2AquLI2pVxHFrf4oMmIvNkcHf5bzF4wE/yt+PEqZkxIIrDqIZnwLWHfMBB/aoUHxWP8Rx1cK/mh3JGp8ol9g/tztKotYIQEKuL4dbXBBOv3FtBzvmypldmm/PXcLV9n0zVuxFDjl0ak50lx3uHjOu+viwXbyIAssEef0E/7YbXwqYNQnLw+o82n2ZT7ugkoyCzL2kVKbVD9YNuNMPzvRiL1idYijPSE4XCgTVNMgEbm0+KdVQOklE+RBVEDvS9Vpg706E255sI0aWfqqLBs1HX17GJY3Lqtj6oXvkBQgQkrlGA8TzKm15Ror5MPq9xNNTWltPizUZ5rXQ3x2y/52JyLFhON2X1XrzQegq2L1EB5F97NF9IoV/34SNtnLlQJa6/cbIEpa9bwDxRabzH296VGCTmgYOV3+MA1HjdMAH4TxlU5cTiVEnI7QjuwDgtN8FyHG6M9dpk0gLVOmEIYVm+8OWseMVzrPslt0xEckvstNCAVLM24/25F6t+C2QlKWLoGXpoVOV2Osj3kJ43lOL8ykrTSwwbixhhrjnv4rE38gk0pync/SLq/henWJqFuT2OTucq7R2Qt7EJ9F6xqZ+ry1zyIe7Do6BwR/oDReLlahtNDuh+f466sxOdXDr9uEA0iN0kLk7TDrQKwMoKJDBjH22S0jtcFbZSSSsMWtSLUYHLr0sG+SXNhLixprjGFktjbkGXAKi9rEezkspEK2ujPXL54GqTub5rRxGGfJlKXn5q5PR6Ke0342KY772z/QSNJiZbHf5sYlzdFROZIfiedwEI9/6Tz0rRNc6+LKta+M1ItLLl2DG/Ody7ExUtvKlLqTtN/SLVenEh0UJ7WQqWfpA6sKZsYFqnXKJXWAsYanHVMMoUtYidW8PKpv1Bikwt3MHvgufFuNyPOtnZNfesDG6z1s5E42n0Siaj6n5BCTttXKat1qongamPQSWeIEH9KdsoZOUPzQKRrOe3J0rHxvMQ5SWSRCTwkOCYpx7CO498Hc9xWoH5hNS88BMHDFTD1wWNpg9uVKp9GISSZVbpvzReb9IphxY/tkJBePMVXMIYVbXqfu+i8WJBKNOdpUaH8oRPuxpkHkgbI4JmxkIAAAAA');
