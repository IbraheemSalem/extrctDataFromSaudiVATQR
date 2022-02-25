<?php



function extract_data_from_qr($decodeQR){

/* By Ibraheem Salem */
	
	$fetched_data =	array(); /* مصفوفة التي ستخزن بها البيانات */ 

	/* الحصول على مبلغ الضريبة */
	if (strpos($decodeQR , '') == TRUE) {
		$data 	= explode("", $decodeQR);
	}elseif(strpos($decodeQR , '') == TRUE){
		$data 	= explode("", $decodeQR);
	}
	$fetched_data['tax']	=	(float)substr($data[1], 1);
	
	/* الحصول على مبلغ الفاتورة */
	if (strpos($data[0] , '') == TRUE) {
		$data 	= explode("", $data[0]);
	}elseif(strpos($data[0] , '') == TRUE){
		$data 	= explode("", $data[0]);
	}
	$fetched_data['money']	=	(float)substr($data[1], 1);
	
	/* الحصول على وقت الفاتورة */
	if (strpos($data[0] , '') == TRUE) {
		$data 	= explode("", $data[0]);
	}elseif(strpos($data[0] , '') == TRUE){
		$data 	= explode("", $data[0]);
	}
	$fetched_data['time']	=	substr($data[1], 1);

	/* الحصول على الرقم الضريبي */
	if (strpos($data[0] , '') == TRUE) {
		$data 	= explode("", $data[0]);
	}elseif(strpos($data[0] , '') == TRUE){
		$data 	= explode("", $data[0]);
	}
	$fetched_data['number']	=	(int)substr($data[1], 1);

	/* الحصول على اسم البائع */
	if (strpos($data[0] , '') == TRUE) {
		$data 	= explode("", $data[0]);
	}elseif(strpos($data[0] , '') == TRUE){
		$data 	= explode("", $data[0]);
	}
	$fetched_data['seller']	=	substr($data[0], 2);

	return $fetched_data;

}



$qr_code	=	"AUjZhdi32LnZhSDYrdmG2KfZhiDYudmE2Yog2LHYstmCINin2YTYudi32YjZiiDZhNiq2YLYr9mK2YUg2KfZhNmI2KzYqNin2KoCDzMxMDY2Mzc3ODIwMDAwMwMTMjAyMi0wMS0yNyAxMTowMToyNwQCMjIFBDIuODc=";
//$qr_code	=	"AUbZhdik2LPYs9ipINmB2YfYryDYp9mE2KfZhtis2KfYsiDZhNi12YrYp9mG2Kkg2KfZhNil2YTZg9iq2LHZiNmG2YrYp9iqAg0wMDAwMDAwMDAwMDAwAxMyMDIyLTAxLTI0IDIzOjAxOjQxBAI4MAUBMA==";
//$qr_code	=	"ATLZhdit2LfYqSDYudmI2LYg2LHYtNmK2K8g2KfZhNio2YTZiNmKINmE2YTZiNmC2YjYrwIQMzAwNTMwNzY3NTE5MzAwNQMTMjAyMi0wMS0yNyAxMTowMToxMAQDMTQ2BQUxOS4wNA";

$decodeQR	=	base64_decode($qr_code);
//echo $decodeQR."<br><br>";
echo "<pre>";
	print_r(extract_data_from_qr($decodeQR));
echo "</pre>";

?>
