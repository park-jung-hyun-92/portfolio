<?php

	$m_id = $_POST['m_id'];
	$m_password1 = $_POST['m_password1'];
	$m_password2 = $_POST['m_password2'];
	$m_name = $_POST['m_name'];

	$m_phone1 = $_POST['m_phone1'];
	$m_phone2 = $_POST['m_phone2'];
	$m_phone3 = $_POST['m_phone3'];
	$m_phone = $m_phone1.'-'.$m_phone2.'-'.$m_phone3;

	$m_email = $_POST['m_email'];
	

	function column_str($arr)
	{
		$arr_str = join(", ", $arr);
		return $arr_str;
	}

	function value_str($arr)
	{
		$arr_str = "'". join("', '", $arr) ."'";
		return $arr_str;
	}

	function price_str($str)
	{
		return $str ."원";
//		return "$". $str;
	}

	$a[] = 'm_num';
	$a[] = 'm_id';
	$a[] = 'm_password1';
	$a[] = 'm_password2';
	$a[] = 'm_name';
	$a[] = 'm_phone';
	$a[] = 'm_email';
	$a[] = 'm_date';
	$a[] = 'm_level';


	echo '<pre>';
	print_r($a);
	echo '</pre>';


	$v[] = $m_num;
	$v[] = $m_id;
	$v[] = $m_password1;
	$v[] = $m_password2;
	$v[] = $m_name;
	$v[] = $m_phone;
	$v[] = $m_email;
	$v[] = $m_date;
	$v[] = $m_level;


	echo '<pre>';
	print_r($v);
	echo '</pre>';

	$str = column_str($a);
	$val = value_str($v);

	echo $str;
	echo "<br>";

	echo $val;
	echo "<br>";

	$sql = "
		insert into table (". $str .") values (". $val .")
	";
	echo $sql;
?>