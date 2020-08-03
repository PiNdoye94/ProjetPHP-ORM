<?php

	use Doctrine\ORM\Mapping as ORM;
	   
	/**
	* @ORM\Entity @ORM\Table(name="Agios") 
	**/
	class Agios
	{
		/** @ORM\Id @ORM\Column(type="integer") @ORM\GeneratedValue **/
		private $id;
		/** @ORM\Column(type="decimal") **/
		private $montantAgios;
		/** @ORM\Column(type="decimal") **/
		private $tauxAgios;
		/**
	    * Many Agios have one CompteCourant. This is the owning side.
	    * @ORM\OneToMany(targetEntity="CompteCourant", mappedBy="Agios")
	    */
		private $CompteCourant;

		public function __construct(){}
		public function getId_agios()
		{
			return $this->Id_agios;
		}
		public function getmontantAgios()
		{
			return $this->montantAgios;
		}
		public function gettauxAgios()
		{
			return $this->tauxAgios;
		}
		public function setmontantAgios()
		{
			$this->montantAgios = $montantAgios;
		}
		public function settauxAgios()
		{
			$this->tauxAgios = $tauxAgios;
		}

	}