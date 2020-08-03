<?php
	//use Doctrine\ORM\Annotation as ORM;
	//use Doctrine\Common\Collections\ArrayCollection;
	use Doctrine\ORM\Mapping as ORM;
	   
	/**
	* @ORM\Entity @ORM\Table(name="Compte") 
	**/
	class Compte
	{
		/** @ORM\Id @ORM\Column(type="integer") @ORM\GeneratedValue **/
		private $id;
		/** @ORM\Column(type="integer") **/
		private $Numero_Compte;
		/** @ORM\Column(type="integer") **/
		private $Numero_Agence;
		/** @ORM\Column(type="integer") **/
		private $Cle_Rib;
		/**
	    * Many Comptes have one Client. This is the owning side.
	    * @ORM\ManyToOne(targetEntity="Client", inversedBy="Comptes")
	    * @ORM\JoinColumn(name="Id_Client", referencedColumnName="id")
	    */
		private $Client;
		/**
	     * One Compte have many CompteCourants. This is the owning side.
	     * @ORM\OneToMany(targetEntity="CompteCourant", mappedBy="Compte")
	     */
		private $CompteCourants;
		/** @ORM\Column(type="integer") **/
		private $Id_Responsable_Compte;
		/** @ORM\Column(type="datetime") **/
		private $Date_Ouverture;
		/** @ORM\Column(type="decimal") **/
		private $Solde;

		public function __construct(){}

		public function getId_Compte(){
			return $this->Id_Compte;
		}

		public function getNumero_Compte(){
			return $this->Numero_Compte;
		}

		public function getNumero_Agence(){
			return $this->Numero_Agence;
		}

		public function getCle_Rib(){
			return $this->Cle_Rib;
		}

		public function getId_Client(){
			return $this->Id_Client;
		}

		public function getId_Responsable_Compte(){
			return $this->Id_Responsable_Compte;
		}

		public function getDate_Ouverture(){
			return $this->Date_Ouverture;
		}

		public function getSolde(){
			return $this->Solde;
		}

	    public function setNumero_Compte($Numero_Compte) {
	        $this->Numero_Compte = $Numero_Compte;
	    }

	    public function setNumero_Agence($Numero_Agence) {
	        $this->Numero_Agence = $Numero_Agence;
	    }

	    public function setCle_Rib($Cle_Rib) {
	        $this->Cle_Rib = $Cle_Rib;
	    }

	    public function setId_Client($Id_Client) {
	        $this->Id_Client = $Id_Client;
	    }

	    public function setId_Responsable_Compte($Id_Responsable_Compte) {
	        $this->Id_Responsable_Compte = $Id_Responsable_Compte;
	    }

	    public function setDate_Ouverture($Date_Ouverture) {
	        $this->Date_Ouverture = new \DateTime($Date_Ouverture);
	    }

	    public function setSolde($Solde) {
	        $this->Solde = $Solde;
	    }
	}

	
  