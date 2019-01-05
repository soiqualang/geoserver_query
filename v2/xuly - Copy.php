<?php
	//echo $_REQUEST['idtinh'];
	$txttenkhuvuc=$_REQUEST['txttenkhuvuc'];
	$txttentinh=$_REQUEST['txttentinh'];
	
	//echo $txttenkhuvuc;
	//echo '<br>';
	//echo $txttentinh;
	//NAME_2 LIKE '%H%' AND NAME_1 LIKE '%Bắc%'
	//echo '<br>';
	$cql="NAME_2 ILIKE '%".$txttentinh."%' AND NAME_1 ILIKE '%".$txttenkhuvuc."%'";
	//echo $cql;
	$cql=urlencode($cql);
	//echo $cql;
	//echo '<br>';
	//$cql='NAME_2%20LIKE%20%27%25An%20Giang%25%27%20AND%20NAME_1%20LIKE%20%27%25Long%25%27';
	//echo $cql;
	//$url="http://dev.dothanhlong.org:8080/geoserver/dothanhlong/wms?SERVICE=WMS&VERSION=1.1.1&REQUEST=GetMap&FORMAT=image/png&TRANSPARENT=true&LAYERS=dothanhlong:provinces&STYLES&CQL_FILTER=".$cql."&SRS=EPSG:4326&WIDTH=379&HEIGHT=768&BBOX=101.634521484375,7.53662109375,109.962158203125,24.41162109375";
	$url='http://dev.dothanhlong.org:8080/geoserver/dothanhlong/wms?SERVICE=WMS&VERSION=1.1.1&REQUEST=GetMap&FORMAT=image%2Fpng&TRANSPARENT=true&LAYERS=dothanhlong%3Aprovinces&STYLES&CQL_FILTER='.$cql.'&SRS=EPSG%3A4326&WIDTH=379&HEIGHT=768&BBOX=101.634521484375%2C7.53662109375%2C109.962158203125%2C24.41162109375';
	//echo $url;
	echo '<img src="dothanhlong-vn_provinces.png">';
	echo '<img src="'.$url.'" style="position: absolute;left: 5;top: -18;">';
?>