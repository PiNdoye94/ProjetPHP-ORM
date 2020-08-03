<?php
	

	class addData
	{

		public function __construct(){
			require "../../bootstrap.php";
		}
		public static function addclient($nom,$adresse,$telephone,$email)
		{
			$entityManager->persist($Client);
			$entityManager->flush();
		}
		
		public function addclientsalarie($prenom,$profession,$salaire_client,$nom_entreprise,$adresse_entreprise,$id_client,$identifiant_employeur,$carte_identite,$validite_CIN)
		{
			$entityManager->persist($ClientSalarie);
			$entityManager->flush();
		}
		public function addcompte($numero_compte,$numero_agence,$cle_rib,$id_client,$id_Responsable_Compte,$date_ouverture,$solde)
		{
			$entityManager->persist($Compte);
			$entityManager->flush();
		}
		public function addcomptecourant($nom_Employeur,$Adresse_employeur,$raison_sociale,$id_compte,$id_agios)
		{
			$entityManager->persist($CompteCourant);
			$entityManager->flush();
		}
	}