<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.3.1 SourceGuardian (07.05.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B30FE09ED6AAQAAAAhAAAABKgAAACABAAAAAAAAAD/49JbA6/LRwBZ0e6YjHKFHowLVmdEo25NDnAkftoXd0Nr/XYtZGp2Th+aPhSpeQSN3kOG05Dzoey4VME9xx+JRSpCETlBdimcs/QXdR53rkEs2bp0x4Z2PtEsWDLzKopJ0Ms56QwoEwGjznkP3UvbKSBnhOCwpJyTPEsLaOqoOaE+yH8D231Hq1ZZvI/unFLfy/Hb/NG35+oKhlDwVf15Ipi43QSc6q9gCAAAAEAFAACoDYJzLvfdT64joGeH5KFR9Issnhp2t8IlGUfx6ifs9KZvoCN8SE+p99TqrKsNc2p/4YWK5w0ww1NTYIasF4uKVEEkMJMMwuefdlz8rxAS48LnOD0GdPpA+tr9MJ1F5GatIWxO9VP/NalxT9Hhfph24+2yYJ1up7KkrLXHFPR257W5h/EygMHiHftCNG47p0BSAnONDz4BtvxZqtflF7P4B7TwQxcnjKE6OYDy4gJhvBjf2jPTk9XdyJIw66q36gGrvdW8tDOls2G9F0J/og4UAaqILwL94AUJMI8r+GU+ifisdIpSC3SYdQApe+8LX2XgwjYKxaeU9OIhSyqGXbl5eRX/UnktrLQ08Y64PPalI3QXquyXeM9cwl2d9zGDA+lfh77TeB3hktYSlMjb55jx2S9+x7sBQdgbfAwDtBOzljfNJ+jIcJA7mchw2j9+qdpq+/l7ETZWD74LmykqNubFOm6sMzIw1xiCizPeGebEfSMy1TpRDVHwruwGplIVgOZe08CJLgWIMaUR+7jNktr6lOnZDkP7kU7ll9ra0h2dOmvpNkb/7piKMxLNdQDjQ4C3IgqILKwZCT/9atw46GANsgSfT+S1DfqieR/JBxaIKsFGwtjTwspVluu3hNgY31hUDD5VEEHMj8sh7b1HFJlqj3Hz+D3hnM64e8h1jLKB/KMRIrOBYo0bw7w89Rr4/FeNXw6CQ6Rrvf7q4oDcsvRfVFtgydN8OMrF3Hv6PzS+ZP0Ss6KLPU4hqMK039K+fjDIznNUz9KtuAr8jo5CQn70w+ykvbB3ZB0AD7OQwW/fRP5Uh7TntNl2llTow2QMnBc6olWGn3568Y6ZfroP9QEIAfGG2FERAZFyq5fiFFmbxMCChCHD1/7LMzciVJrbzPZWE7NedcMz5J1edaQtfdPzRJEYsnndKNQscXzm7zQMSdcC+FebDa1IcPG5wnf4rO52L0VX3tfv3XYQaef94oFjV4cuDJ94eV9cYkvpFIOJAENI4rhrZ8DTDpMEXaqA+df7X86D368mVfL1wpeyJu8LgVSav/IpAwBw1W5Ji2vIkJa6tWXK9LpvLRSjiGYc/0p/mHppSzvdZjY63KSUdcmmnE58wN2a+hAeK6ozUrpE12Zmzz2Qf4ED1iB3K84RvA/uVIUUG3t6toO1cyaTAxYb3bDte5X1RUl1QKRRVH1TcTxA3E3RVtjEd1+NZW0kBOld3HPDhDnRTtyxvR7AeJG5qz3f1aI5UXeCQ51t4Cl8mrr7rwtI61eZLlU0zGyf8icI2E4iAG8xTGBugNTqeWXn554KvPPH8dReKPpbO58re2eSTuv7oNjjbGrxUu9oUw+rql0sDUKpG+bFO7Jg8xSOndQukB6ktQOytGcDXu+1QCPD/sp/k+Xz+Yx5Pn/vJUhaEXupRJ84/ADqIlIJ53CPTJuAsBGOHDUHj3J6Y/WUhIVrJhm65/OTz8uPqNLKZvXmZjgw9DZucLUJMT7ING2NGrYUMyQBlam/Sw6D9quKGdy05PMlKAhFX8x3avPivJKe7W7qsRsGr9VimZczjibXLKsSmSxLmEGCwGB2F49fP0mvnWieqTCdPJsGtX/VLYDTi0kVtRFJLNjxI1e8AcCQgx5jpgyoh1M5cca8IukI7pBJdJPMSe96IgO5AwHUWPVQcigKzm1fPsV5YPoaHXAJil0LRhEMJNVmDKtbbWMLl6aRV9yC7uIrFxXDLyFd/ltmX2Fe1yyLhcUPYyNyTt0MsAMYJpeBxYkHzqsNohXMv3Jtv4CxGG8/dM8e02s7uZ5RAAAAQAUAABDMAmZ7wDdG300GPdPEfwRpsw/56MIKk8jEbtxBEcBrSOwgmYHK8181ghsSF36T/zIgOjEOv3r+8Brg+Hfh3Hn7dOeMkNYNi4alOpxMHFrgwATFaC/z/pA7ORA9iGjKFyV9crGmCfUxEvA6AUin0malpFiaj0dTFXOSBF9Wf4Zp3Na1/ZSyHVafUEqhbfrr9wo4ZpKL/8WDh/uK9fkMGaHV2S1YZrmDvaGV4Jb+VwH7SfAxUQY30VoNhc8/PE4yjzrhJ/MooW+Bt2jc6yosq916jIUclARKaWCkKV/RAXebggq88z3+Lim0B5hLLhuWiJ/OIv+HX+H193AGOyUCvZVNIw73cRBdWz/PhYU/Yery3uRzuObOJscNn6mLRfe0N8GM2pbtjGV7aNHLTMdGXfkYUkdfxPXzGnL00OqFjRJS1zksPvm1vrva2uH7MBx1FyxXPrvKduMHbY+pqG0uGrvUxCwfV0QpJDuDSUanQ5qOwtlIpzlz/wf6g1gZmzzhRz2J8uXhGHymqcvhcxSylDuZoQHsIferIz+Jab03JPAyCtpXfoc4JksCwGbt9oCALjXgcwwewxIwFBJueZqoQBtffchTfVGR9eH0WWlpnF1WoqOaJ4Xegp42oe8DlVt4kU7m1pUw+n7rvSCtSXTqS6iKom3bLvjf3eZ08+Nx0CVwzDqc1Gk4u2qf6mHKKBD3idGqZbUpuNnILARujtXES1fdHdcteZUEHWWaLWJmINve1QbnjCzhIlwYIhHcyqW3WId0IpufvwxX4yxVpwRmA343CkyCuBdm2lRCNM02VLzasfjYOzWEwIORTg84fIq4aMq7MyzOWlmlqw2g2snhSKsxW66/uvizZWA1V/Fb3vQ9BoskTiMcRL8HKbV2R/7Pwg++DLgjA2bpNWZKtbJVdJ7P8GnaeA0U0eTaREYz43G3k1uoOgDtTk2db2eyEBMAfzFukq6L9VCENlFW8OXt7SBDB3UthjmCmfEbCiKYP1ji8lfq1sF/ETip1p2Opd9RMsXUs0rwRg9aAUg+0G1WzDYtAJnkvRF3DHxJ7hcm1FLSQUxky64MjcqQs2Bm6wk3Ll2XauY1fIhuIbEigyA395p8h014+yLacBMHDF1yW3Jrv7ISGCQRlfPy6YZKUt/c427N4Rpn2kXX8P4pazfa1xaMrRsX8lhneKmQpD6efKBV20C6IadSsCAR+UDHQutlBqumeVp4y3nxE2HIABI5jONlJiZKh+QSZiqfg9VVUcFEt7lopnTnHV5WSFFPyi4Vvpm30Rktp82wf/oZ11Bl7VL10HLgesBvAJBoUy9XlcRxOhofJIygW22qUzl+ULvqb4AVKb6Agtda6hmDiPKqQ9k7hPvj+09ydUs0YsR3ZgepwaJ/Ieih5SNalGJNsVZl+FPq/ffZAkYjyT5M3CYfhY0y6K66I/8xDh3C6xXfdC04G51edmy/8dwy3Z0QkLOG8qmYxOsg5BvoxUIU2h391o9ITTln9BmQdGySmZu30QlDi4xomKg/e1PYz86bFvStg3jqws5nF6TP3aohnD4HgOwlEdKM0qcJ9KB552BcJLB25fsARvTVy5AiRyWxm0VYW8tpAPL7m/pIpCah6d6ML83zvE8VLBrf9E5Jih7vfiDwawUIukxN/8RDCJbCPkWKMqd+UVTrdwh/a5UmSzGUrgTLvEuWAgsOSgSWDvUggoYxq3BkgnP7NT2zN1GcrzV4lFRdXBXlsGoslMz1wskL2BzNywfu9qA7KsgUMNxESrWsQrSsf6gl5USoL/S8+MHY+lIAAAAwBQAApRVGzx8SX6Wq6O1/DPdzav4sPcmdfxoiHfla1Wcdtj9q4q8UEkp9VPVF7/mRrll60UpQnVrlnaVXNRG3eHPn4lZbEuQ2+ZZqnyHeDWChTgk2QO6CjJFeJisSzgd/w6XNF3qrFTGuH7jR40Q8BlUt1WgzbKwXw44BeLZ06lysAxxonL+sXl/zAWoDl+lErHZWu5Otddi99oPnA99VaKSisAHCYhxG4G2z/Rmw0BEVdkauN+3rbfF8Tk//jIl22R5PhzzAtaDoCti1Oyr6fOkAgO2tCWF2wfuGmhlzABAy7oRat36kFB7z+AqIQwk4Cgg/WPSR9EMiWm9DLcOC2i5EdVDNJHQiOsC+Tf7mbfL1V+rDyQCxhAiDbX5diuO+6kC9Xnb7kegOG2CaP2u/nDiGyMQzF0pFSxH4MoTCiFz1RbMX7JdwzqyIT6JOCAg8glk9mojZDqkPXjatpantsZvgQcU++Oapnl+nsoVFYARVtW9k2v3wAbJ2FIzwtn8Sg4kkpX69jMsz5dJDKSpoZH3AGT72HCsODvMUND6EPo+IqoIySMor2BiPRBs7vAq1/rHmkkkSXzTDZP6wgzujD9ggIQlWFo8d9KNtjT7Hjwot1kN5FURG7+LBknUZZ4nucUcClrN5938aVZXuqrhikkXR+Nexu8J3lX5ScysAsbMka45p8XzF01sf4P2b+2RF03B2gMVTJ8GMv4U3//djmb0Q3SUfVGqESx6FP5+YURe8tCAH6Wg493bpqVpqAYznpuLPIBzQHnukBDtjvL3eJouMAG6reeNLxE0RwJuCCwIwL5AsJN2CttKpeHrSLFqVNLgR9Iz/HwljLJ36f29pam22c8TjDyx8GmBuSfMouowP9fOdc6eCuk0qxytc1lsfITIenF7mNDzsaDjwicGqRNeWQ1zVOUh2wWDSIKkzWT5TFqIARm7ClPJp8k5tc0sTrFkWdar2SGg0gTsjkIUfTkZigHBVrSNtSTSxG/ll3R7Gex1+R8vFry8ACK0FJbJazr13dyX595aXJyDwJlb7TZgb53n/yj36+gOVicY4WhnN5f4UJWiR6YAEqjVMgz1ogppDfroNZzpEQ/mbCzc+fM0a0lX0rpUQq3TsIT9XqNp96WmPpIqUTKQYhu4NMDHUMPEaA+H2WYgPi+Apr/3H0rQddvGLfKuHXtmQXjxZumUHjtl/SDm3Ro7YTIzD+pGNg/eiQMLsghy9o81AqBibOFx3XtIrnSW0ZQbIzdo/vdWJYXPtOBb1dWZ/qVyTj0Snxi4ElVcWFRiJhqYksj971yC9NeARYB3y91yMby5CEXrWdzZdZ/YaQ5ZstnljSx+87DgUeTkhC7N38MzYrd63kcUaqKe5uWuXE92J03QiDeKtU2MiwSUAwJFAADrziQhMjdAYCoKgB/wnKU5iI0Qq21VXefZK6nM2JhIkcOWJzDsU8ar1MNI4X1bFcZG3SH1XrIERnusJqaPy+FYfrzT+7M7WRJ3NX/ojK2EwXWU9WRJJq6FC+KYEH/AwVFf77AhKk/dvRKqnEFQhHCP6W0IalwYXADgdjNS9tbGtXVyfcdsyHbmIwjUD5yxbnj2Qx7W/NqFAUaN3fRz1LjVXylSGkb19IcUFsTyVpaCk2v0dh5v18N2jBMIgiHUNe+qJhXUHAB/Wit2zbYUUfcE2104TntxKKTXDz/CYTJVqOXD4/mzESvXlQ41tJxs/5qkezjcmX3fO92TcmhZuHg44+/N3OGNzbofb2RSmfqtP48FLuAVND0EAAAAA');
