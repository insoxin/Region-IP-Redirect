<?php
function ipdy($ipaddr) {
	$ipInfoApi= 'http://ip.taobao.com/service/getIpInfo.php?ip='.$ipaddr; 
	$areaInfo= file_get_contents($ipInfoApi);   
	$areaInfo= json_decode($areaInfo);
	$ipjg=$areaInfo->data->country.$areaInfo->data->area.$areaInfo->data->region.$areaInfo->data->city.$areaInfo->data->isp;
	//$ipjg=iconv('UTF-8','GBK',$ipjg);
	return $ipjg;
}
$ipaddr= $_SERVER["REMOTE_ADDR"];
$ip_str=ipdy($ipaddr);

if(strpos($ip_str,'北京')){
	echo '北京地区';
}elseif(strpos($ip_str,'天津')){
	echo '天津地区';
}elseif(strpos($ip_str,'河北')){
	echo '河北地区';
}elseif(strpos($ip_str,'山西')){
	echo '山西地区';
}elseif(strpos($ip_str,'内蒙古')){
	echo '内蒙古地区';
}elseif(strpos($ip_str,'辽宁')){
	echo '辽宁地区';
}elseif(strpos($ip_str,'吉林')){
	echo '吉林地区';
}elseif(strpos($ip_str,'黑龙江')){
	echo '黑龙江地区';
}elseif(strpos($ip_str,'上海')){
	echo '上海地区';
}elseif(strpos($ip_str,'江苏')){
	echo '江苏地区';
}elseif(strpos($ip_str,'浙江')){
	echo '浙江地区';
}elseif(strpos($ip_str,'安徽')){
	echo '安徽地区';
}elseif(strpos($ip_str,'福建')){
	echo '福建地区';
}elseif(strpos($ip_str,'江西')){
	echo '江西地区';
}elseif(strpos($ip_str,'山东')){
	echo '山东地区';
}elseif(strpos($ip_str,'河南')){
	echo '河南地区';
}elseif(strpos($ip_str,'湖北')){
	echo '湖北地区';
}elseif(strpos($ip_str,'湖南')){
	echo '湖南地区';
}elseif(strpos($ip_str,'广东')){
	echo '广东地区';
}elseif(strpos($ip_str,'广西')){
	echo '广西地区';
}elseif(strpos($ip_str,'海南')){
	echo '海南地区';
}elseif(strpos($ip_str,'重庆')){
	echo '重庆地区';
}elseif(strpos($ip_str,'四川')){
	echo '四川地区';
}elseif(strpos($ip_str,'重庆')){
	echo '重庆地区';
}elseif(strpos($ip_str,'贵州')){
	echo '贵州地区';
}elseif(strpos($ip_str,'云南')){
	echo '云南地区';
}elseif(strpos($ip_str,'西藏')){
	echo '西藏地区';
}elseif(strpos($ip_str,'陕西')){
	echo '陕西地区';
}elseif(strpos($ip_str,'甘肃')){
	echo '甘肃地区';
}elseif(strpos($ip_str,'青海')){
	echo '青海地区';
}elseif(strpos($ip_str,'宁夏')){
	echo '宁夏地区';
}elseif(strpos($ip_str,'新疆')){
	echo '新疆地区';
}elseif(strpos($ip_str,'香港')){
	echo '香港地区';
}elseif(strpos($ip_str,'澳门')){
	echo '澳门地区';
}elseif(strpos($ip_str,'台湾')){
	echo '台湾地区';
}else{
	echo '未识别的地区';
}
?>
