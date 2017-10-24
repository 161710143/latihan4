<?php

	class mobil {
		public $jenis;
		public $warna;
		public $harga;
		

		function __construct ($jenis, $warna , $harga) {
			$this->jenis = $jenis;
			$this->warna = $warna;
			$this->harga = $harga;
	
		}

		function get_jenis(){
			return $this->jenis;
		}

		function get_warna(){
			return $this->warna;
		}

		function get_harga(){
			return $this->harga;

		}
	}



?>