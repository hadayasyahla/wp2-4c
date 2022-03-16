<?php
$conn_str = "host=kashin.db.elephantsql.com " . 
"port=5432 " . 
"user= 	gpelewwe " . 
"dbname= 	gpelewwe " . 
"password=gBzORR0XfYn6-PQujfee4GchfiiO-XTg ";
$conn = pg_connect($conn_str);

if($conn){
    echo"<h3>koneksi berhasil</h3>";
}else{
    echo"<h3>koneksi GAGAl TERSAMBUNG</h3>";
}
?>