<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.3.1 SourceGuardian (07.05.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B30FE09ED6AAQAAAAhAAAABKgAAACABAAAAAAAAAD/3A9RU/j03p9oZ+O4NT+Xg+qStwbNOq6BiT5FGLdhT9bvf1npL5KqrXATp/EK9scYjZ+e7UOKspEyVOCLWj+04y+q4CmzYe4grkYO+1elefRjyLoIKp7fw2iIW9/rCFsXPMReq6tARqfGPLUwb16ZKlsyRudgK81XQNXET04czoqj8WSWceLSWT3Effms0KBCLljwge3Yu72qTzAIQTD4bNaGHL8kEXNRCAAAACgHAAC5iE5GcfSRJaoEbcMHyxB1Sc9MxtfqJJR+O6G96VW0i7E195AhRDrYPSY4Z/r26ArCHeV3pJzRdNXg27LUuXrPFTNYiP7HoXKSNwiHmYSZtBEMYaZ4VM1rEdU+iNG+2GsJl6TxwDE/KUt8iMx5pt0dIffz5jc0vagSETcM/CVVzcI3l3/LGT2IajaC2IkM6w3svXH8xxynKWOXw/w/DRAiVGi7ZP77jHbKmk5qhgxzNPP+RkAC14B824TeWm7XYlwR4mezfZ80pwnA95TcjfnHIhYZU8cQ4c1xAz370qiuuHOf84hPojsh5xxcBvQmKMXkSp/DbSxbAZHMcI5j2NNA9ngDF5J0WJyTzJnFf4beR2uBa3DsehpPXJ9X2WcUqhM9p3ySr/A1THLVgWonN/xUtNQC5vQbx+J71YSFRPUqZyswTBYqIojhvvzb+ppTB97p7gRZPoqiiOQagCCbM7EZl6CFGMulzE/MEwyRDT9pVsyxjcGgn2WxqQvHyYMecqrnBSTWQ+6+e+RrHp+scIyxf85DSiCiMb4Pm5+wqntp1OrQTVKH7lzJ0sJtlSNiEWrCZrVlw1kfZdvfNpsY7ELWnzzsGbaDJHEMNTL2oYCjtMrG80YTDLLTrPTs97TVed4+C48ecnuXUeLCow97uovhTpaG6vOVH8gBWSqjTgzk7pWb+ykw/2CUFwbOV3LIjna/Adbp/8B0uZTrbFLCD+J6ujcI1yGVGIYEof+te8Oc5u8QLsUGABwwMI2YEDjcgMOH/Eneyp9jTZQAO9wynXtn8rsxist4QCQ/2bpuObpEmBtikG1MvDaT8WDOeEUwxpCeTDwATkCzPAVryBzEBhmA8NEanlNmhUFTuRPoBqJRC+tiAAXz5p1urmAHOtNoY0c9u8eRnbGdOz83QpynfwaRP6+yFqY954iS7fNZkifYO5JIrPw47DR5+lSZk3qErsGxv5Mj6B8W5X+2v9KzhROXHzHGjA82Id1No3j8DrBLq0mkVLvIYohFhOf6M0TdyiBVNQFDFkGxncsOTt3cP4sr3SXh2maaqY4PQUoOQCTO0bd/g8kaY1DDYQCWAwH4cQ/xnKo8uNF+4CApwqm3xiriuqvSHzBzUW0zXbzAWYzymABqNGUB2l6Tzwn7jhtR3Ppzmw72FtbcxjtH7a50d/FUCu6llYIrpae+l6Cz8Ipn4BqVAnTBmB1g1z5cuEEma8DlSPQjZdBzURoBC9DB2HriZ28SCgS+vYiIjYtkfc+6Q2Q3WitfmwSukcCSVn3S6PIRufUroCXXjccKcAlleIJAxg/T8h5gtZi7Y48QaCR4M0vLObp/Ibb5Qbcfqnp5VvKdWsRcPNPDz2yRDxQYvj8nvNrRD8Mew2GvmHW8lK/SBaAyfuYTb/cygjTZYuCF05Knm9+riFNOIKEG68V14+AOu/8uvDOxk/ewosrxxuMR4HmgUmfOOfmFbOY5uGcoyDkQBMU4/JyxV8jnvsDX8Yqd0C3KJAyYLNOWE5cKgLlBn3BXW76QBZv/Ay4J4KcaDCOmhhgt+RT77wILHNSiAaT4UzGZt4+TnE17DXEL7Zu1h5PkpjjlKnUxCpABr2iFR6b+w1F9dGwosKr5gvAdnsYwCy5ycQu354A2ITheeYHPCC58A7u+LFjaZNTXclqNRTvInfUhsNJ1TWaYFBgHB1yFyb1XZOJ4Un5HsAxBVdBOaJBiDNfv8KtSmT4V3/YeUaOUqhTS0MRFTMdTJ/I3By/I4RV5zqt5jJNuUn2KRKECoeNd5zj1J2NmOFI58OToY9oPiqRggwagsv2U2dxD4DHogm+6RFEFQQzphZFaSRVcl+uO4yjOxDPj7aBWss0ub7QfTRcKyi5Sl+O2u189jFtlfgFnq8bZweN14NvDfqNKkh5oiI/8SDdSFWzwZ8L8lVikD6M57MiLLbQMPlQBa9cL+rnU466+PxO8S+c7aS0BkN+TIHMXkyZN+L2V/zKwjQOBnnogFODA2pb1bOooPdsJeSbfX7BemPUiu1I3161bClOdI3+IRcYyQqjfhIqEdss37D9CwFJ2audtpL+v/4Zl5djSXadRozlgY48OMZ1ZZuTx6Xtv8T7m6/SdzQ3QxnEB+s91FQu2Qb1BPdIh1QQ4UFB7ixa0csBXeU6T/avCiExO8CwjdhRJfum1V1r9qPtz2vOXGp4tv9BYShDWjQS5mQHsisw1kZN/Sw+e8HkmPXqT7JhxKWfQ051mQYQE1AvLksV/CUCNoyzI5BPbFzHxVr98LhoRmmLmVzcqIks26iMMQEPRI8JSzBUrUt4Z0zoyCWYi7jbGXzOcrdkyShvjM7FbkdGBjCcXpE8dmluoHSCLUDHbrFQxjh71543AtMzO6rWfXUqWTxsKaFT60oOH+X1S7N0p6tpqzaonN3pPQw1K5ScmDvA2L/ylkn57+1l2tA7vYhWbjVEAAAAgBwAAmwfosGzC3YA8K20abjllV0sadfMOESwnhYDPdYT5Ep20eF4U+XGDnUoOXiU9dSuM4P900sWcGNLRzSmhrJo8QdYPG4lwsMz6HnrEhXe9ZGH4/o9FTaVVxFm3rA1a/PXbXSKPfOlY8hls4HhZClDKU6FwsNuwpkeQ360ahQtAIOEuIzkv5eY/dJ3/eF3Aa+YoxWdGsJ9QJqsZVG2WKJh4o6zfnxf1Pwm89Qyt2mgMAPxX3EBDTvXZ2/kDwXfe+jMkeu3kFkD4NKAqV9fm4piHppmIgBybVlZM1xPzdyRUSKY6f/Zxx3GFOreQSRKHmLEFMRFU1eg4banEUYZOWGKznpKbMT3i7Mozw3sXC4P3YohiYGCjE8PnJUolnoOAoiA+8YcRaRqwXf+Ku4CYDgEwaZYydIc29LIECmLc3Cp2xrKDgEiDs5QwKT7Q16v8pgZIrbha6uyhGDKCd1929W/foFZDnbeU7BgFtW0j+pfkA+j2Ke28TN2SNeD3i/6nhBbVAVj3K2LoEFOZ6DPWqNCom+mmqCcK9bP2pAEnEz4p5/b9zhM1M0U9au1dlTL7Js9NkE5H65PqGAlDgebBMR2p5+CmzoHNsRtNGjPxG7sQway6ht/GKvUsQ8OzBs6YmQ5MgitNE1V3VrbH9ZEzmSDHtcCGbmcaAGLMrX707WgqiXhODbS+dBIao9+6kEcIyI2o0Sao2lTf4WL1aBawxBLwpxXecW9ZZ3ox7uLjN6m7BzFvNNTInMFpP6ka11yEmFxIz95k/QiLjSrDag32AYEdWkiNJdskvVJVkRCV9zEK/+nf9Z3vLT98NmEQUbpyTdQS2NflmuoYK6SYXV5zt5bFpEgE6HYTpTalXtH0xpgC6z1AhRoC44wMTrZZCao/rIXkuuXBcGoWq3PEsq+fUqAbmMVRv+zKRWAbmFqduD99bsng+bhQCP4RQ5sTmSShkVuAnbEeJoEP1XcHrGbrXMviSRziSup1gQAuojrkRXhO806x7XhN1kMLfnuj9ba7eTYlnIruyRHiE+RohGTvNdFFfMh7oULtqhjubzHUIWgc7/kOQ7xmhuVziUzFIA7VMt0RP3EXwL0MBIWf4pPYt+d64TPtu9eZFHCxDttZO8eLTTv9UVVKi/WOGOkx+rRj4H8uVZn02eVERIdLOhb2GonTnSiOwW8n8mVg3vapxchzYhx2keHXhvN3NpVyrIoYMqMPQ77phkqIT1BQQsUECiR1BtPg5nS2rkxaen2OijuwtH5jhunbfj6sc5j5TnOiWlOic2CUEAl1bH2Woa9NhN443s4eUbtqnDS3+HsKE384tJHBdprB1VDafOWXzlK+9JzSne5nq72rDx0e6y2jn2NqsLtnA4xhGKFmrK5WXoyj6W0SpkFKWKnBlJz4nZQhSUlEkLHrOcEn0Oplzm6OL4tpe/e/pdPdU4cZFRfyYs2W16mzlP2V5uX9fTbtI4b9lbCkf9UWRrYMh2H8aKX/NGrTAUt2onnkSyCEnajJO0EMmjfdJn+L666nNCbJK8dgAZYmdT07rj+ALyaZfbQ42gDgSqkIh/PuYLQdJVQ+DyC6PycUnzMQWeylelg0yIQjiDzEPhtzx6XXvUXTC6aEPCMOk3eVlzfoR6vGRAjqVamJvteiZM/PxoytvHsk3LP+WiWMHlPqVluAAtq67F1QrkabLb4l0kAwY4L0ZxcXfG4QvUmw7P0UTKR+1RrSwgUjYPWilUdIwq8mvl4k4KbjR2gdTXKDoDiK4cQpBfTyXoJlKT2h0AYw7BwY7/HHmqT0oHfZM7aetbC5d8jJUDMPLNpawV9M4ffKFSaMdCmSTaFYrBsYgU23LEw/2zTDoTnaOc09lVvkTNo1D50gexUcDdfi4CLsCI9rPBScBOoeREISgIJvgMPpRh/c1TB0My8qtpQkxCx0/g+cvjA5aRwxutyC8TZ3GiEHwBpf31a3OWk3YuznJtFYZcX458M2sMXtfJbZv+pCoq+kBVeMR3OOXwjFk++3oUldLIjq0RiyrA/5sz3L5XUROCyTmHp2iPSQlcfBvBaH0xCWINlVoJCKiLdgkMo1JPn9/bFViz07IPt3qapEGBb5sxV8YxsHCh7nEBbzvaVJExtMP9/HclfyVOjSpf074D4+RwNoVCQlU/cXDDQfaWS0d/rZQsgi2z6MjsAreI4fixoWIMOx91FPGF3RZC0hg/B3QdRBl6A/a3KK4pVSN1cMeyFzFQMr/Ub24KG8uTO4pwnWYisD6Rw7gbQzXVEP4E++7nFW10J0+tPYHWwq5Ob5OFSxdVOFwkny/Zq/OiCLscDFWAKZ4wJ3ZO/QH58fHbEhax1hlWflgZknyYkWnNYlVkmzfM/cgRwc5X5Lf7hzwQ13zWI2vCq01cAVnCf5KgBnpLmBMV4/4FvfoN9/fKnFiesaGS8jOwAhiIpBUgAAABgHAACrdxKgxTGWBSInlUEJIqbRWJZ5tlsjAZHpZx9IN8CSbTs+uKf/H6TJ+TPkSfJzAVGP4QJm4v1JWeTIBCdySvBwlg0E2/uPOaVqbX5FDzOztZWTpJuXRWkaar6gUy5XTsz9QSpCPmNPvIKcbCz5vSIFhU0/s90qgCYjqHrxN745uDfix48zF5JsMqsnXmnhRPsv/s1/MnfqKrHHiAH5BZdPDeS9CRoXwxWMLfx1MiOt04MqeUnZtrpaMxgKGagp/RFYH+4tGuAZuQ9sdtAL0n7t4UK19KuV3zTmnnVKMjGLFonKHIIlbzw7kYVxo8JMdK0PA22nr8Jxn0G1iPICW1em9BcW2+a/8hKySHKO+QthAR5W+3AM9hv5MYfJ8yx3x+9oJgESWJwJ4/qQgyTkCUPPRnq1SFTYhK+y2bOmXbBA/XLZQ6UHojAAFkul6fiyXuH8q4uCO69+PjUxn/Rjt2kXXqjxXT/JA7mnTFu/tef8AJWvG8c0BkBS/bo94qST/xGvlQXjrxQPVIep2atxBhfuNTKfJlM/Ou1ZWJ0ry2U/LE9fhhMAdiAhfEoPSGlei8ENUGc8PLoN2BLB77FH5romKxYuHnP5RczbVSjdK2xhE20btDQcO88SSC4X7HIKO4EP9/E5NV3NblMB2tea0WxStSRDqP/RZuCEo4Q0/tgxZEKLtRxgg5ff5m4WeRiwr0JPr2Hm2HpsUHZgpAl8r+8TLAN8VEnw4dO2bSmVLtVtoyVZTS4VJUtEnpKdxX3NCvEgkx8kzA9RQ/aDRHjAeDDD4ZvSYtGeZrXCYJUh7tf+hWiHgx1PiT3b/yypJtKLvq1UkFBQHxXMSjR8z/aDjn9MlCKENcbp93JuHecDZJViYYqB7zzYhDJe+4ATCuraIjQhPy4nokzE9nKZe3fqj3xTHGe33mdlm3dfzPBKX+qQLNhxrgB9mZYS2mU0ATtysswBIzl1Ea3HhYjoNyojB4/6dQtLjJKqQhvPhnWEkp1kPRnKv+CqvLy2cMlpbcxfjGSc+kEla/fChiBe2bgJfK7XXoMGRuR4y9wok7RRAQDCbrzYGBiwFjIN3+6qhs5yhxcguuFiue2Ywhg/lFf9FHuhOdKJekvo2NTGfc6Gp1NsuZi2SLHHWxfx1Cn9SkPhcW439GaPpjegpMvfiarWmYwBVqZ+E4RSvA/4viEyeOG+BQpkptpioYeP3OY7WRcA4wmOPLrkMyXAdcuP5E2WoDb2GP6uc2cZuvlixeGOM6//ebbJPYXJ5BuCm6sMSEJ8L9TL0cXGvc/FSkYYDzE/3o3qhUe627dyJ3yYpjt8QHqg9SHM0oF5guREV1KLSFxQWMuSLBm9sHqt3Znq3eZPYE27/jBGArow/MPuXeJWm1u3Y4tP70VYO2sza2qxSUAMzflNmUIQdxnTn33dBhYouE7EsfjfX8TOaY5zEfq4hl+CmYAfuMkkRKiRcNYuiB62jcUnGoZb+WkzJSS4gsnmlPuyxONgkXcThmG70Fj/XAs0buBbbCnkfpz0hnRHxuNQITLqxkpYVaVSpxsh3b2F8JsfbjeVWcnzLMoK8qYN8RU4FtmegtOsVnUw5RQtqXwZjvy7ka4VjrKbraJKy8KNUoQLdMhDAYYo9zw6q++U6r1bVztVlQRcGRvboIEb8Y1F6rH6k1tnCrnBZ1jhrBxYTRL+Lec964FrXlXwD3mGsrtQfoabdkl/cwz2FyEDoTRZWjpcOFZPiy1pVb2OjRL68BSIhTKECAY2A5jZXrVIZTyBC38J9rmmQWQn8dxqyIySCX2/pgEao7PvFp8hbMVygOCfHd6GINVzz/QyK3xMYApqf9zB4NQwqBkHrpQyewtI0g6U4u9EmnXguA4mQtVNV+tdnJGqmx/KvbtkkwUteid2RH5q9XxZhEXMHZV47KS+IZjeq32qizk2tBgxLX+UFCM12jLy+RmUmRQMcdj9dw+GjtAT8UXrPJ6sDBDfrZpLQo/q1G0QlC/Kf+J1b42fFv2RunfBXWI4uCT9OIW/wGUVAIxwOdPhfrDpfbkHJjlk+gJKk+5o2UTADmKKpKWmq9nGoeDOf/Ke4wSAVZkOdEOaEb/yj4ABZ12Ygzk72x5RUAvSkXsBLpr/ekNsncHEVualrWcejJ/cMo2AF49nGpSDct39rwoHsHDDcMUK9AjL4s64kVVXhtanH3jbhq0RSoUa6NpV4AbWjfUl6Mfk/QipCQCw+CfS8cT3pzJUxFD5/7QQUGOq5vmIpSPCgh3Si7At0z9aAZtBzzMY26Ki/DzQR3KZ/ZfLT8CK57akilDcvH2pFanhkhGjkxALbwPBsKqDSM/3VrG1KYf4mWeiRbNcYie4pFkcFs+uOu0ZGV1suGwR1jnKBOKxIYOKR702qRpQzDnjDMcTUVhJwXj9h42Y4uWrPFFfPmk6AAAAAA==');
