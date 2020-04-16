<?php 

	class Calculadora
	{
		private $total;
		private $numero1;
		private $numero2;

		public function __construct()
		{
			$this -> total = 0;
			$this -> numero1 = 0;
			$this -> numero2 = 0;
		}

		// getter e setter
		public function __set($atributo, $valor)
		{
			if (is_numeric($valor)) {
				$this -> $atributo = $valor;
			}
		}

		public function somar()
		{
			$this -> total = $this -> numero1 + $this -> numero2;
		}

		public function subtrair()
		{
			$this -> total = $this -> numero1 - $this -> numero2;
		}

		public function multiplicar()
		{
			$this -> total = $this -> numero1 * $this -> numero2;
		}

		public function dividir()
		{
			$this -> total = $this -> numero1 / $this -> numero2;
		}

		public function __get($atributo)
		{
			return $this -> $atributo;
		}
	}
