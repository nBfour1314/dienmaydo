<?php
	/*$Connect = mysqli_connect("localhost","root","","qlbh") or die("Lỗi".mysqli_error($Connect));
	
	mysqli_query($Connect,'SET NAMES "utf8"');
	//mysqli_close($Connect);*/
	$Connect = pg_connect("postgres://jhzewzqcikbaox:404963d9604e1177900087ba6ac1166d9c7df951af9f7af099ddf430d8e621b5@ec2-52-204-14-80.compute-1.amazonaws.com:5432/d6h40h1o0qarbi");
    //$Connect = pg_connect("host=localhost port=5432 dbname=postgres");
	//$Connect = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=123456");
	
    if (!$Connect) {
        die("Connection failed");
    }
?>
