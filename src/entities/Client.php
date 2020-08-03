<?php
	//use Doctrine\ORM\Annotation as ORM;
	//use Doctrine\Common\Collections\ArrayCollection;
	use Doctrine\ORM\Mapping as ORM;
	   
	/**
	* @ORM\Entity @ORM\Table(name="Client") 
	**/
	
	class Client
	{
		/** @ORM\Id @ORM\Column(type="integer") @ORM\GeneratedValue **/
		private $id;
		/** @ORM\Column(type="string") **/
		private $Nom;
		/** @ORM\Column(type="string") **/
		private $Adresse;
		/** @ORM\Column(type="string") **/
		private $Telephone;
		/** @ORM\Column(type="string") **/
		private $Email;
		/**
	     * One Client have many Comptes. This is the owning side.
	     * @ORM\OneToMany(targetEntity="Compte", mappedBy="Client")
	     */
		private $Comptes;
		/**
	    * One Client have many ClientSalaries. This is the owning side.
	    * @ORM\OneToMany(targetEntity="ClientSalarie", mappedBy="Client")
	    */
		private $ClientSalaries;

		public function __construct(){}

	    public function getId_client() 
	    {
	        return $this->Id_client;
	    }
	    /**
	     * : string définit le type chaine qu'on va retourné, disponible à partir de php7 
	     * @return [type] [description]
	     */
	    public function getNom(): string 
	    {
	        return $this->Nom;
	    }

	    public function getAdresse() {
	        return $this->Adresse;
	    }

	    public function getTelephone() {
	        return $this->Telephone;
	    }

	    public function getEmail() {
	        return $this->Email;
	    }
	    public function getCompte() {
	        return $this->Compte;
	    }

	    public function setNom($Nom) {
	    	$this->Nom = $Nom;	
	    }

	    public function setAdresse($Adresse) {
	        $this->Adresse = $Adresse;
	    }

	    public function setTelephone($Telephone) {
	        $this->Telephone = $Telephone;
	    }

	    public function setEmail($Email) {
	        $this->Email = $Email;
	    }
	    public function setCompte($Compte) {
	        $this->Compte = $Compte;
	    }
	}