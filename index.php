<?php
include('koneksi.php');

$sql = "select * from mahasiswa";
$result = pg_query($sql);

?>
<h1>Aplikasi Mahasiswa</h1>

<table border="1">
    <thead>
        <tr>
            <tb>NIM</tb>
            <tb>NAMA</tb>
            <tb>KELAS</tb>
        </tr>
    </thead>
<tbody>

<?php
    while($row = pg_fetch_object($result));
?>