<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// print_r($_POST); die;
$name = $_POST['contact-name'];
$email = $_POST['contact-email'];
$phone = $_POST['contact-phone'];
$company = $_POST['contact-company'];
$subject = $_POST['contact-subject'];
$message = $_POST['contact-message'];
// $city = $_POST['contact-city'];
$query = '<b>Company: </b>' . $company . '<br><b>Subject: </b>' . $subject . '<br><b>Message: </b>' . $message;
$referrer = $_POST['referrer_name'];
$keyword = $_POST['keyword'];
$source = $_POST['source'];
$medium = $_POST['medium'];
$orderid = $_POST['orderid'];
$sitename = $_POST['sitename'];
$campaign_url = $_POST['campaign_url'];
$campaign_name = $_POST['campaign_name'];
$network = $_POST['network'];

// echo "name " .$name . "<br>";
// echo "email " .$email . "<br>";
// echo "phone " .$phone . "<br>";
// echo "company " .$company . "<br>";
// echo "subject " .$subject . "<br>";
// echo "message " .$message . "<br>";
// echo "Query " . $query . "<br>";
// echo "source " . $source . "<br>";
// echo "orderid " . $orderid . "<br>";
// echo "sitename " . $sitename . "<br>";
// exit;

if (!empty($name) && !empty($email) && !empty($phone)) {
	$uniFields = array(
		'name' => urlencode($name),
		'phone' => urlencode($phone),
		'email' => urlencode($email),
		'query' => urlencode($query),
		'http_referer' => urlencode($referrer),
		'search_keyword' => urlencode($keyword),
		'campaign_url' => urlencode($campaign_url),
		'campaign_name' => urlencode($campaign_name),
		'network' => urlencode($network),
		'source' => urlencode($source),
		'ORDERID' => urlencode($orderid),
		'SITENAME' => urlencode($sitename)
	);

	//  echo "<pre>"; print_r($uniFields); echo "</pre>"; exit;
	$uniUrl = 'https://crm.stealthdigital.in/lp/index';

	$uni_fields_string = '';
	foreach ($uniFields as $key => $value) {
		$uni_fields_string .= $key . '=' . $value . '&';
	}
	rtrim($uni_fields_string, '&');

	$post = curl_init();
	curl_setopt($post, CURLOPT_URL, $uniUrl);
	curl_setopt($post, CURLOPT_POST, count($uniFields));
	curl_setopt($post, CURLOPT_POSTFIELDS, $uni_fields_string);
	curl_setopt($post, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($post, CURLOPT_FOLLOWLOCATION, true);
	$content = curl_exec($post);
	curl_close($post);

	// print_r($content);die;

	// Send data to Google Sheet
	$googleSheetUrl = 'https://script.google.com/macros/s/AKfycbxp9p5GiSqG9PPPxWLAf_hsquVZ9WwqVXaLX5VGjhGu6PR2yOUpBZVDY3pBxz07XzbnLw/exec';
	$googleSheetFields = array(
		'contact-name' => urlencode($name),
		'contact-email' => urlencode($email),
		'contact-phone' => urlencode($phone),
		'contact-company' => urlencode($company),
		'contact-subject' => urlencode($subject),
		'contact-message' => urlencode($message),
		'referrer_name' => urlencode($referrer),
		'keyword' => urlencode($keyword),
		'source' => urlencode($source),
		'medium' => urlencode($medium),
		'network' => urlencode($network),
		'campaign_url' => urlencode($campaign_url),
		'campaign_name' => urlencode($campaign_name)
	);

	$google_sheet_fields_string = '';
	foreach ($googleSheetFields as $key => $value) {
		$google_sheet_fields_string .= $key . '=' . $value . '&';
	}
	rtrim($google_sheet_fields_string, '&');

	$google_post = curl_init();
	curl_setopt($google_post, CURLOPT_URL, $googleSheetUrl);
	curl_setopt($google_post, CURLOPT_POST, count($googleSheetFields));
	curl_setopt($google_post, CURLOPT_POSTFIELDS, $google_sheet_fields_string);
	curl_setopt($google_post, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($google_post, CURLOPT_FOLLOWLOCATION, true);
	$google_content = curl_exec($google_post);

	// Debugging: Log the response from Google and any cURL errors
	$log_file = 'google_sheet_debug.log';
	$timestamp = date('Y-m-d H:i:s');
	if ($google_content === false) {
		$curl_error = curl_error($google_post);
		file_put_contents($log_file, "[$timestamp] cURL Error: " . $curl_error . "\n", FILE_APPEND);
	} else {
		file_put_contents($log_file, "[$timestamp] Google Response: " . $google_content . "\n", FILE_APPEND);
	}

	curl_close($google_post);

	$href = 'thankyou.html';
	header("location:$href");
} else {
	echo 'All fields are manadatory';
	$href = 'index.html';
	header("location:$href");
}
