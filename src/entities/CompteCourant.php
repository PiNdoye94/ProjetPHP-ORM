<?php

	use Doctrine\ORM\Mapping as ORM;
	   
	/**
	* @ORM\Entity @ORM\Table(name="CompteCourant") 
	**/
	class CompteCourant
	{
		/** @ORM\Id @ORM\Column(type="integer") @ORM\GeneratedValue **/
		private $id;
		/** @ORM\Column(type="string") **/
		private $nomEmployeur;
		/** @ORM\Column(type="string") **/
		private $adresseEmployeur;
		/** @ORM\Column(type="string") **/
		private $raisonSociale;
		/**
	    * Many CompteCourants have one Compte. This is the owning side.
	    * @ORM\ManyToOne(targetEntity="Compte", inversedBy="CompteCourants")
	    * @ORM\JoinColumn(name="Id_Compte", referencedColumnName="id")
	    */
		private $Compte;
		/**
	    * One CompteCourant have many Agios. This is the owning side.
	    * @ORM\ManyToOne(targetEntity="Agios", inversedBy="CompteCourants")
	    * @ORM\JoinColumn(name="Id_agios", referencedColumnName="id")
	    */
		private $Agios;
		
		public function __construct(){}
		public function getId_compteCourant()
		{
			return $this->Id_compteCourant;
		}
		public function getnomEmployeur()
		{
			return $this->nomEmployeur;
		}
		public function getadresseEmployeur()
		{
			return $this->adresseEmployeur;
		}
		public function getraisonSociale()
		{
			return $this->raisonSociale;
		}
		public function getId_Compte()
		{
			return $this->Id_Compte;
		}
		public function getId_agios()
		{
			return $this->Id_agios;
		}
		public function setnomEmployeur($nomEmployeur)
		{
			$this->nomEmployeur = $nomEmployeur;
		}
		public function setadresseEmployeur($adresseEmployeur)
		{
			$this->adresseEmployeur = $adresseEmployeur;
		}
		public function setraisonSociale($raisonSociale)
		{
			$this->raisonSociale = $raisonSociale;
		}
		public function setnomEntreprise($nomEntreprise)
		{
			$this->nomEntreprise = $nomEntreprise;
		}
		public function setadresseEntreprise($adresseEntreprise)
		{
			$this->adresseEntreprise = $adresseEntreprise;
		}
		public function setId_Compte($Id_Compte)
		{
			$this->Id_Compte = $Id_Compte;
		}
		public function setId_agios($Id_agios)
		{
			$this->Id_agios = $Id_agios;
		}
	}

