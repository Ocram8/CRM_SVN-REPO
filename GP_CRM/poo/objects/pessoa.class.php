<?php
	class Pessoa
	{
		private $pesId;
		private $pesNome;
		private $pesNic;
		private $pesNif;
		private $pesDataNascimento;
		private $pesSexo;
		private $pesEstadoCivil;
		private $pesProfissao;
		private $pesTelefone;
		private $pesEmail;
		private $pesTitulo;
		private $pesFotografia;
		private $pesObservacoes;
		private $pesMorada;
		
		public function __construct($id, $nome, $nic, $nif, $dataNasc, $sexo, $estCivil, $prof, $tel, $email, $titulo, $foto, $obs, $morada)
		{
			$this->pesId = $id;
			$this->pesNome = $nome;
			$this->pesNic = $nic;
			$this->pesNif = $nif;
			$this->pesDataNascimento = $dataNasc;
			$this->pesSexo = $sexo;
			$this->pesEstadoCivil = $estCivil;
			$this->pesProfissao = $prof;
			$this->pesTelefone = $tel;
			$this->pesEmail = $email;
			$this->pesTitulo = $titulo;
			$this->pesFotografia = $foto;
			$this->pesObservacoes = $obs;
			$this->pesMorada = $morada;
		}
		
		public function getPesId()
		{
			return $this->pesId;
		}
		
		public function getPesNome()
		{
			return $this->pesNome;
		}
		
		public function getPesNic()
		{
			return $this->pesNic;
		}
		
		public function getPesNif()
		{
			return $this->pesNif;
		}
		
		public function getPesDataNascimento()
		{
			return $this->pesDataNascimento;
		}
		
		public function getPesSexo()
		{
			return $this->pesSexo;
		}
		
		public function getPesEstadoCivil()
		{
			return $this->pesEstadoCivil;
		}
		
		public function getPesProfissao()
		{
			return $this->pesProfissao;
		}
		
		public function getPesTelefone()
		{
			return $this->pesTelefone;
		}
		
		public function getPesEmail()
		{
			return $this->pesEmail;
		}
		
		public function getPesTitulo()
		{
			return $this->pesTitulo;
		}
		
		public function getPesFotografia()
		{
			return $this->pesFotografia;
		}
		
		public function getPesObservacoes()
		{
			return $this->pesObservacoes;
		}
		
		public function getPesMorada()
		{
			return $this->pesMorada;
		}
		
		public function setPesId($id)
		{
			$this->pesId = $id;
		}
		
		public function setPesNome($nome)
		{
			$this->pesNome = $nome;
		}
		
		public function setPesNic($nic)
		{
			$this->pesNic = $nic;
		}
		
		public function setPesNif($nif)
		{
			$this->pesNif = $nif;
		}
		
		public function setPesDataNascimento($dataNasc)
		{
			$this->pesDataNascimento = $dataNascimento;
		}
		
		public function setPesSexo($sexo)
		{
			$this->pesSexo = $sexo;
		}
		
		public function setPesEstadoCivil($estCivil)
		{
			$this->pesEstadoCivil = $estCivil;
		}
		
		public function setPesProfissao($prof)
		{
			$this->pesProfissao = $prof;
		}
		
		public function setPesTelefone($tel)
		{
			$this->pesTelefone = $tel;
		}
		
		public function setPesEmail($email)
		{
			$this->pesEmail = $email;
		}
		
		public function setPesTitulo($titulo)
		{
			$this->pesTitulo = $titulo;
		}
		
		public function setPesFotografia($foto)
		{
			$this->pesFotografia = $foto;
		}
		
		public function setPesObservacoes($obs)
		{
			$this->pesObservacoes = $obs;
		}
		
		public function setPesMorada($morada)
		{
			$this->pesMorada = $morada;
		}
	}
?>