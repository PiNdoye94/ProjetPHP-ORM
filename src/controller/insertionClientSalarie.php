<?php
require "../../bootstrap.php";
//require_once "../model/addData.php";
//require_once "../entities/Client.php";
//if (isset($_Post['envoyer'] )) {
		
		$nom = $_POST['nom']; 
	    $prenom = $_POST['prenom']; 
	    $adresse = $_POST['Adresse'];
	    $telephone = $_POST['telephone'];
	    $email = $_POST['email'];
	    $carte_identite = $_POST['identite'];
	    $validite_CIN = $_POST['validite'];
	    $profession = $_POST['profession'];
	    $nom_entreprise = $_POST['nom_entreprise'];
	    $adresse_entreprise = $_POST['adresse_entreprise'];
	    $salaire_client = $_POST['salaire_client'];
	    $numero_compte = $_POST['numero_compte'];
	    $cle_rib = $_POST['cle_rib'];
	    $numero_agence = $_POST['numero_agence'];
	    $nom_Employeur = $_POST['nom_Employeur'];
	    $raison_sociale = $_POST['raison_sociale'];
	    $identifiant_employeur = $_POST['identifiant_employeur'];
	    $Adresse_employeur = $_POST['Adresse_employeur'];
	    $date_ouverture = $_POST['date_ouverture'];
	    $duree_blocage = $_POST['duree_blocage'];
	    $solde = $_POST['solde'];
	    $MontantRenumeration = $_POST['MontantRenumeration'];
	    $frais_ouverture = $_POST['frais_ouverture'];
	    $agios_compte_courant = $_POST['agios_compte_courant'];
	    $id_client = 1;
	    $id_Responsable_Compte = 1;
	    $id_compte = 1;
	    $id_agios = 1;
   
	//Données table clients	
	//if (!empty($nom) && !empty($adresse) && !empty($telephone) && !empty($email)) {}
		$Client = new Client();
		$Client->setNom($nom);
		$Client->setAdresse($adresse);
		$Client->setTelephone($telephone);
		$Client->setEmail($email);
		//addData::addclient($nom,$adresse,$telephone,$email);

		//echo "$nom,$adresse,$telephone,$email";
	

	//Données table clients salaries
	//if (!empty($prenom) && !empty($profession) && !empty($salaire_client) && !empty($nom_entreprise) && !empty($adresse_entreprise) && !empty($id_client) && !empty($identifiant_employeur) && !empty($carte_identite) && !empty($validite_CIN)) {}
		$ClientSalarie = new ClientSalarie();
		$ClientSalarie->setprenom($prenom);
		$ClientSalarie->setprofession($profession);
		$ClientSalarie->setsalaire($salaire_client);
		$ClientSalarie->setnomEntreprise($nom_entreprise);
		$ClientSalarie->setadresseEntreprise($adresse_entreprise);
		$ClientSalarie->setId_client($id_client);
		$ClientSalarie->setidEmployeur($identifiant_employeur); 
		$ClientSalarie->setcarteIdentite($carte_identite);
		$ClientSalarie->setvaliditeCIN($validite_CIN);
		//$ClientSalarie->addclientsalarie($prenom,$profession,$salaire_client,$nom_entreprise,$adresse_entreprise,$id_client,$identifiant_employeur,$carte_identite,$validite_CIN)
	
	//Données table compte
	//if (!empty($numero_compte) && !empty($numero_agence) && !empty($cle_rib) && !empty($id_client) && !empty($id_Responsable_Compte) && !empty($date_ouverture) && !empty($solde)) {}
		$Compte = new Compte();
		$Compte->setNumero_Compte($numero_compte);
		$Compte->setNumero_Agence($numero_agence);
		$Compte->setCle_Rib($cle_rib);
		$Compte->setId_Client($id_client);
		$Compte->setId_Responsable_Compte($id_Responsable_Compte);
		$Compte->setDate_Ouverture($date_ouverture);
		$Compte->setSolde($solde);
		//$Compte->addcompte($numero_compte,$numero_agence,$cle_rib,$id_client,$id_Responsable_Compte,$date_ouverture,$solde);
	

	//Données table compte courant
	//if (!empty($nom_Employeur) && !empty($Adresse_employeur) && !empty($raison_sociale) && !empty($id_compte) && !empty($id_agios)) {}
		$CompteCourant = new CompteCourant();
		$CompteCourant->setnomEmployeur($nom_Employeur);
		$CompteCourant->setadresseEmployeur($Adresse_employeur);
		$CompteCourant->setraisonSociale($raison_sociale);
		$CompteCourant->setId_Compte($id_compte);
		$CompteCourant->setId_agios($id_agios);
		//$CompteCourant->addcomptecourant($nom_Employeur,$Adresse_employeur,$raison_sociale,$id_compte,$id_agios);
	

//}

	$entityManager->persist($Client);
	$entityManager->flush();
	$entityManager->persist($Compte);
	$entityManager->flush();
	$entityManager->persist($ClientSalarie);
	$entityManager->flush();
	$entityManager->persist($CompteCourant);
	$entityManager->flush();

	//Données table compte epargne
	/*$CompteEpargne->setFrais_Compte($frais_ouverture);
	$CompteEpargne->setId_Compte($id_compte);
	$CompteEpargne->setMontant_Renumeration($MontantRenumeration);

	echo $CompteEpargne->getFrais_Compte();
	echo $CompteEpargne->getId_Compte();
	echo $CompteEpargne->getMontant_Renumeration();*/

	//Données table compte bloque
	/*$CompteBloque->setFrais_Compte($frais_ouverture);
	$CompteBloque->setDuree_Blocage($duree_blocage);
	$CompteBloque->setId_Compte($id_compte);
	$CompteBloque->setMontant_Renumeration($MontantRenumeration);

	echo $CompteBloque->getFrais_Compte();
	echo $CompteBloque->getDuree_Blocage();
	echo $CompteBloque->getId_Compte();
	echo $CompteBloque->getMontant_Renumeration();*/




?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>OUVERTURE COMPTE</title>
        <link rel="stylesheet" href="../public/css/style.css"/>
    </head>
    <body>
        <header>
            <div id="logo">
                <img src="../public/img/logobp.png"/>
            </div>
            <div id="welcome">
                <h1>BIENVENUE DANS LA BANQUE DU PEUPLE !!</h1>
            </div>
        </header>
            <div>
                <button><a href="../../accueil.php">RETOUR A L'ACCUEIL</a></button>
            </div>
            <div id="confirm" style="background-color: white; margin: 15px;" >
            <p style="text-align: center;font-size: 30px;">
            	<?php
            		error_reporting(-1);
	                if($Client && $Compte)
	                {
	                    echo 'Client enregistré dans la base de données';
	                }
	                else
	                {
	                    echo "Client non enregistré dans la base de données";
	                }
            	?>	
            </p>
                
            </div>
    </body>
</html>

