<!DOCTYPE html>
<html>
<head>
	
	<title>AKN Bojonegoro</title>
	</head>
<body>
    
	 <center><h1>TUGAS  PEMROGRAMAN WEB</h1></center>
    
    <legend><center><h2>Konversi Nilai</h2></center>
        <form name="tugas_2" method="POST" action="#">
            <table cellspacing="3" cellpadding="5" align="center">
                <tr>
                    <td>Nilai</td>
                    <th>:</th>
                    <td><input type="text" name="nilai" placeholder="Masukkan Nilai Anda"></td>
                </tr>
                <tr>
                    <th colspan="3"><input type="submit" name="konversi" value="Konversi"></th>
                </tr>
<!--                code untuk konversi nilai-->
                <?php
                if(isset($_POST['konversi'])){
                    $nilai = $_POST['nilai'];
                    if (($nilai >= 85) && ($nilai <=100)) {
                        ?><script>alert('NILAI ANDA BAIK SEKALI');</script><?php
                    }elseif (($nilai > 59) && ($nilai <85)) {
                        ?><script>alert('NILAI ANDA BAIK');</script><?php                      
                    }elseif (($nilai >= 0) && ($nilai <=59)) {
                        ?><script>alert('NILAI ANDA CUKUP');</script><?php                      
                    }elseif ($nilai <= 0) {
                        ?><script>alert('MASUKKAN NILAI ANDA');</script><?php                      
                    }
                    else{
                        ?><script>alert('Maaf data yang anda masukkan salah!');</script><?php //peringatan error                                             
                    }
                }
                ?>
            </table>
        </form>      
    </legend>
        <?php
        ?>
	


</body>
</html>