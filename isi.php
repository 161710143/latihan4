<?php
echo "<center>";

	require_once 'mobil.php';

	$identitas1 = new mobil("ferary", "merah", "Rp.100.000.000.000.0000");
		echo "Jenis = ".$identitas1->get_jenis().'<br>';
		echo "Warna = ".$identitas1->get_warna().'<br>';
		echo "Harga = ".$identitas1->get_harga().'<br>';
		echo "@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@".'<br>';

$identitas1 = new mobil("lamborghini", "hijau", "Rp.500.000.000.000.0000");
		echo "Jenis = ".$identitas1->get_jenis().'<br>';
		echo "Warna = ".$identitas1->get_warna().'<br>';
		echo "Harga = ".$identitas1->get_harga().'<br>';
		echo "@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@".'<br>';
	
	$identitas1 = new mobil("datsun", "hitam", "Rp.100.000.000.000");
		echo "Jenis = ".$identitas1->get_jenis().'<br>';
		echo "Warna = ".$identitas1->get_warna().'<br>';
		echo "Harga = ".$identitas1->get_harga().'<br>';
		echo "@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@".'<br>';

	

?>