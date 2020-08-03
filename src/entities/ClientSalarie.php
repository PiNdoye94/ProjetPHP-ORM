<?php

	use Doctrine\ORM\Mapping as ORM;
	   
	/**
	* @ORM\Entity @ORM\Table(name="ClientSalarie") 
	**/
	class ClientSalarie
	{
		/** @ORM\Id @ORM\Column(type="integer") @ORM\GeneratedValue **/
		private $id;
		/** @ORM\Column(type="string") **/
		private $prenom;
		/** @ORM\Column(type="string") **/
		private $profession;
		/** @ORM\Column(type="decimal") **/
		private $salaire;
		/** @ORM\Column(type="string") **/
		private $nomEntreprise;
		/** @ORM\Column(type="string") **/
		private $adresseEntreprise;
		/**
	    * Many ClientSalaries have one Client. This is the owning side.
	    * @ORM\ManyToOne(targetEntity="Client", inversedBy="ClientSalaries")
	    * @ORM\JoinColumn(name="Id_Client", referencedColumnName="id")
	    */
		private $Client;
		/** @ORM\Column(type="integer") **/
		private $idEmployeur;
		/** @ORM\Column(type="string") **/
		private $carteIdentite;
		/** @ORM\Column(type="datetime") **/
		private $validiteCIN;

		public function __construct(){}
		public function getId_clientSalarie()
		{
			return $this->Id_clientSalarie;
		}
		public function getprenom()
		{
			return $this->prenom;
		}
		public function getprofession()
		{
			return $this->profession;
		}
		public function getsalaire()
		{
			return $this->salaire;
		}
		public function getnomEntreprise()
		{
			return $this->nomEntreprise;
		}
		public function getadresseEntreprise()
		{
			return $this->adresseEntreprise;
		}
		public function getId_client()
		{
			return $this->Id_client;
		}
		public function getidEmployeur()
		{
			return $this->idEmployeur;
		}
		public function getcarteIdentite()
		{
			return $this->carteIdentite;
		}
		public function getvaliditeCIN()
		{
			return $this->validiteCIN;
		}
		public function setprenom($prenom)
		{
			$this->prenom = $prenom;
		}
		public function setprofession($profession)
		{
			$this->profession = $profession;
		}
		public function setsalaire($salaire)
		{
			$this->salaire = $salaire;
		}
		public function setnomEntreprise($nomEntreprise)
		{
			$this->nomEntreprise = $nomEntreprise;
		}
		public function setadresseEntreprise($adresseEntreprise)
		{
			$this->adresseEntreprise = $adresseEntreprise;
		}
		public function setId_client($Id_client)
		{
			$this->Id_client = $Id_client;
		}
		public function setidEmployeur($idEmployeur)
		{
			$this->idEmployeur = $idEmployeur;
		}
		public function setcarteIdentite($carteIdentite)
		{
			$this->carteIdentite = $carteIdentite;
		}
		public function setvaliditeCIN($validiteCIN)
		{
			$this->validiteCIN = new \DateTime($validiteCIN);
		}
	}