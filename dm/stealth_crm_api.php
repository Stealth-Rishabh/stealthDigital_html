<?php
//  echo "<pre>";print_r($_POST);
// die;
$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$mobile = filter_var($_POST['phone'], FILTER_SANITIZE_NUMBER_INT);
// $state = filter_var($_POST['state'], FILTER_SANITIZE_STRING);
// $city = filter_var($_POST['city'], FILTER_SANITIZE_STRING);
$service = filter_var($_POST['service'], FILTER_SANITIZE_STRING);
$query = $_POST['query'] . "<br><b>Bussiness Name: </b>" .$_POST['businessname'] . "<br></b><b>Service : </b> " . $service;
$referrer = $_POST['referrer_name'];
$keyword = $_POST['keyword'];
$source = $_POST['source'];
$orderid = $_POST['orderid'];
$sitename = $_POST['sitename'];
$campaign_url = $_POST['campaign_url'];
$campaign_name = $_POST['campaign_name'];
$network = $_POST['network'];
if (!empty($name) && !empty($email) && !empty($mobile)) {
	$uniFields = array(
		'name' => urlencode($name),
		'phone' => urlencode($mobile),
		'email' => urlencode($email),
		// 'state' => urlencode($state),
		// 'city' => urlencode($city),
		// 'course' => urlencode($course),
		'query' => urlencode($query),
		'http_referer' => urlencode($referrer),
		'search_keyword' => urlencode($keyword),
		'campaign_url' => urlencode($campaign_url),
		'campaign_name' => urlencode($campaign_name),
		'network' => urlencode($network),
		'source' => urlencode($source),
		'ORDERID' => urlencode($orderid),
		'SITENAME' => urlencode($sitename)
		// 'ORDERID' => urlencode('1038'),
		// 'SITENAME' => urlencode('IETBhaddal')
	);
	//    echo "<pre>"; print_r($uniFields); echo "</pre>"; exit;  
	$uniUrl = 'https://crm.stealthdigital.in/lp/index';
	foreach ($uniFields as $key => $value) {
		$uni_fields_string .= $key . '=' . $value . '&';
	}
	rtrim($uni_fields_string, '&');
	// print_r($uni_fields_string);die;
	$post = curl_init();
	curl_setopt($post, CURLOPT_URL, $uniUrl);
	curl_setopt($post, CURLOPT_POST, count($uniFields));
	curl_setopt($post, CURLOPT_POSTFIELDS, $uni_fields_string);
	curl_setopt($post, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($post, CURLOPT_FOLLOWLOCATION, true);
	$content = curl_exec($post);
	if (curl_errno($post)) {
		echo 'cURL error: ' . curl_error($post);
		// die;
	} else {
		// echo 'Response from server: ' . $content;
		// die;
		$href = "thankyou.html";
		header("location:$href");
		// die;
	}

	// //  print_r($content);
	// $href = "thankyou.php";
	// header("location:$href");
} else {
	echo "All fields are manadatory";
}
?>