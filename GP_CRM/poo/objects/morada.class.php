<?php
 class Morada
 {
 	private $morId;
 	private $morEndereco;
 	private $morLocalidade;
 	private $morCodigoPostal;
 	
 	public function __construct($id, $enderco, $localidade, $codPostal)
 	{
 		$this->morId = $id;
 		$this->morEndereco = $enderco;
 		$this->morLocalidade = $localidade;
 		$this->morCodigoPostal = $codPostal;
 	}
 	
 	public function getMorId()
 	{
 		return $this->morId;
 	}
 	
 	public function getMorEndereco()
 	{
 		return $this->morEndereco;
 	}
 	
 	public function getMorLocalidade()
 	{
 		return $this->morLocalidade;
 	}
 	
 	public function getMorCodigoPostal()
 	{
 		return $this->morCodigoPostal;
 	}
 	
 	public function setMorId($id)
 	{
 		$this->morId = $id;
 	}
 	
 	public function setMorEndereco($endereco)
 	{
 		$this->morEndereco = $endereco;
 	}
 	
 	public function setMorLocalidade($localidade)
 	{
 		$this->morLocalidade = $localidade;
 	}
 	
 	public function setMorCodigoPostal($codPostal)
 	{
 		$this->morCodigoPostal = $codPostal;
 	}
 }
?>