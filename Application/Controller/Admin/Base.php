<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.0.0.2 SourceGuardian (10.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B3F9E09D8DAAQAAAAhAAAABKgAAACABAAAAAAAAAD/0WPtAHCuWymkG3uVhMBGZGk/7cMvoWlujRPvQh9imDnE4n/tJCR53ljMRsjfrPZwRa7Z2sT4bIYKvCsl9Tj+4Kizpl+oK6ftuJRbcHvbR/e+J/PerLlz4q+xD3yuVHOHY+UDD2CJlUY6U+fMFZr/taE0quFsBUEzE/b0Z7ZIbKQfe8gNCI/Mb7eW0hnlXLOb/N6vLivg7PBlnTUU8b3FsAXWytDJmPZOCAAAAKgBAAD6wYI3gstvZbsRuRMsiXwiObq5f/9GIv8LPlHW9K0P5NPR+r/mBfCU0K8Ny/30LonDUlstH+UCKPpienk8d8zuaqMg2fwf12fjRlVZE1rtcFnJZ8dGAJDhy/fXo9BaRp+9hNytrErux7hepYi0WNuHazqRRr5tYMzHJzZFKXuPdmiF7ATPPm96e3GKv+/m7ovWyyIjckoPmz7eey8vuOzQNudQxFj259lYYUssCkCPa0vV62YcjfJjoNdI0DVZTvK9huKlSP85RXELdU87rz00Y4/Q7ErQBlrWo6UGHR3fAyFxPIIVHLJdaqnVjQChbJrgl3YMIR0asvt5MjqXsV9heTt4Hu+1rfO3t2q2/eMbpbbaBtu4ku+ioINE0jzmHuKJcEZtdIHB0vmvVGcANaOXCRIY2B6d3CarZZcsQjwknWMzzPcMsjNmhmLy7CU/DVu9hN+8mvbqh+MFJMGvhRdWsf63jIhVaw5JsrGYFy52gOZcU1RrOk+pdovVB5Uz7aulZ7qhy4+cWh/cuGzHsq8z3M81rrcWnzPoOq2AnsetX/Krt2wFbIgcUQAAAJgBAAA80NIj0NU2qRMSzjqNvdSI8cCi6AEL/z7w+SU8s2eDrsXo1uUxpI6oRrXS+x4Ev3C1l7c+Dd5rjvbRTHtXG7o3DrTISGhnQ2phJcesqZAuPGF5aI7toKqnYBkL5O8bmBtXpIJhQEIOXg/o2/OgdoK8CypTolqM0tk8UV+UfxQVXQAxJ50CnrzcRPBdRrVBABmul3jHMcITTSfkoh/u7nPiB4BxWOBIIIVUlEZDCTjC9p+1DABwAHvQZwQ4X6dobJUwGkX5r2IlMFMVpmxMVYKo+8kmh5VHovuAHzWEIXSsBa645ChNRJCKrbIHR/VnVpw0DE2QhvPH3eK0GLfGWShN8wPDiTuxfMHPRUiDheNODqMgNEo/pudnkuEiC0Qc/113tg6BUJ9pFKtvdIuaHaaDJkiTHCqyZQvUVMjgvZrz3RPVHXbp0n76l13EG/DvGInDTGzjqmM2mXFgXlbDEBWY57py7b3yHsLrPHQm7GXWAm5mD2vRYsKsTTvvYQDC5xhCDemR5E77rwEgSmyidUWSxboL6pvNbBFSAAAAmAEAAH5ofNotalRqHRSrwXKw/Bl1FzqeCcxrhTsha4FDTyS7FX+o1UXHtDU9dZql7FQUAVsrr71MNpRqtGizI0DXJN5f27ki2eGWKnO/r/kcbapQ4P99KIA0hQN4S/2FUJ3mChiPSjnf2+7U7MjtX7/4d3p1NnB5yupc7IbsKnJePIm+cqdBHqZH4X4yrd0MS3EEBwc9yUWsReIPFj3Ap+CNQ90QYSP4SyuNDzR97Xq3b0q8SyZq7lf+K83O/9q5O2RbOzJ687XOiWOJupKXjwnBptFaZt955ur+KnqUynqmqxCvG1cPnSSJyt1ua59A0+p4MMFxu4B8B431Yb2gbjR43lXTtCrU86B3pCowC6Rm76xfOmQjc/njicpZNLm65eDyNNTAg2J2khJq6h3xNaR7+vcvW4iLPQvWoGWyCsDAotsMVnkQWWWUSido+33YuJBnF7KLM8fQcwNumDE7q1rBnZKyGPPmzToxw/hCiO2wXPuOXGRs9AGasBMCLb34MOzNfdduGHdp9Vln+2fUIRCIkt+CxBkSYAMhNAAAAAA=');
