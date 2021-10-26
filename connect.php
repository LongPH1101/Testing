<?php
	/*$Connect = mysqli_connect("localhost","root","","qlbh") or die("Lỗi".mysqli_error($Connect));
	
	mysqli_query($Connect,'SET NAMES "utf8"');
	//mysqli_close($Connect);*/
	$Connect = pg_connect("postgres://zasrsyphhktabb:a8b0a0039a969ae920b9b6670fff4aedb86368698da0326dfeef65e3a942f30b@ec2-34-232-245-127.compute-1.amazonaws.com:5432/ddtjc5klb7idtg
");
    //$Connect = pg_connect("host=localhost port=5432 dbname=postgres");
	//$Connect = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=123456");
	
    if (!$Connect) {
        die("Connection failed");
    }
?>
