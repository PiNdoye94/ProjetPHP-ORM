<?php
	error_reporting(-1);
	include "../model/db.php";
	include "ControllerClient/C_Client.php";
	include "ControllerClient/C_ClientNonSalarie.php";
	include "ControllerCompte/C_Compte.php";
	//include "ControllerCompte/C_CompteCourant.php";
	include "ControllerCompte/C_CompteEpargne.php";
	include "ControllerCompte/C_CompteBloque.php";
	include "../model/InsertionClient.class.php";
	include "../model/InsertionCompte.class.php";

	//if (isset($_Post['envoyer'] )) {
		
		$nom = $_POST['nom']; 
	    $prenom = $_POST['prenom']; 
	    $adresse = $_POST['Adresse'];
	    $telephone = $_POST['telephone'];
	    $email = $_POST['email'];
	    $carte_identite = $_POST['identite'];
	    $validite_CIN = $_POST['validite'];
	    $activite = $_POST['profession'];
	    $numero_compte = $_POST['numero_compte'];
	    $cle_rib = $_POST['cle_rib'];
	    $numero_agence = $_POST['numero_agence'];
	    $date_ouverture = $_POST['date_ouverture'];
	    $duree_blocage = $_POST['duree_blocage'];
	    $solde = $_POST['solde'];
	    $MontantRenumeration = $_POST['MontantRenumeration'];
	    $frais_ouverture = $_POST['frais_ouverture'];
	    $id_client = 1;
	    $id_Responsable_Compte = 1;
	    $id_compte = 1;
	    $id_agios = 1;
   
	//}

	$insertClient = new InsertionClient($db);
	$insertCompte = new InsertionCompte($db);

	//$clientSalarie = new ClientSalarie($Prenom, $Profession, $Salaire, $Nom_entreprise, $Adresse_entreprise, $Id_client, $Identifiant_employeur, $Validite_CIN);

	$ClientNonSalarie = new ClientNonSalarie();
	$Client = new Client();
	$Compte = new Compte();
	$CompteEpargne = new CompteEpargne();
	$CompteBloque = new CompteBloque();

	//Données table clients
	$Client->setNom($nom);
	$Client->setAdresse($adresse);
	$Client->setTelephone($telephone);
	$Client->setEmail($email);

	echo $Client->getNom();
	echo $Client->getAdresse();
	echo $Client->getTelephone();
	echo $Client->getEmail();

	//Données table clients non salaries
	$ClientNonSalarie->setPrenom($prenom);
	$ClientNonSalarie->setActivite($activite);
	$ClientNonSalarie->setId_client($id_client);
	$ClientNonSalarie->setCarte_Identite($carte_identite);
	$ClientNonSalarie->setValidite_CIN($validite_CIN);

	echo $ClientNonSalarie->getPrenom();
	echo $ClientNonSalarie->getActivite();
	echo $ClientNonSalarie->getId_client();
	echo $ClientNonSalarie->getCarte_Identite();
	echo $ClientNonSalarie->getValidite_CIN();

	//Données table compte
	$Compte->setNumero_Compte($numero_compte);
	$Compte->setNumero_Agence($numero_agence);
	$Compte->setCle_Rib($cle_rib);
	$Compte->setId_Client($id_client);
	$Compte->setId_Responsable_Compte($id_Responsable_Compte);
	$Compte->setDate_Ouverture($date_ouverture);
	$Compte->setSolde($solde);

	echo $Compte->getNumero_Compte();
	echo $Compte->getNumero_Agence();
	echo $Compte->getCle_Rib();
	echo $Compte->getId_Client();
	echo $Compte->getId_Responsable_Compte();
	echo $Compte->getDate_Ouverture();
	echo $Compte->getSolde();

	//Données table compte epargne
	$CompteEpargne->setFrais_Compte($frais_ouverture);
	$CompteEpargne->setId_Compte($id_compte);
	$CompteEpargne->setMontant_Renumeration($MontantRenumeration);

	echo $CompteEpargne->getFrais_Compte();
	echo $CompteEpargne->getId_Compte();
	echo $CompteEpargne->getMontant_Renumeration();

	//Données table compte bloque
	$CompteBloque->setFrais_Compte($frais_ouverture);
	$CompteBloque->setDuree_Blocage($duree_blocage);
	$CompteBloque->setId_Compte($id_compte);
	$CompteBloque->setMontant_Renumeration($MontantRenumeration);

	echo $CompteBloque->getFrais_Compte();
	echo $CompteBloque->getDuree_Blocage();
	echo $CompteBloque->getId_Compte();
	echo $CompteBloque->getMontant_Renumeration();


	$insertClient->insertionClienNonSalarie($ClientNonSalarie);
	$insertClient->insertionClient($Client);
	$insertCompte->insertionCompte($Compte);
	$insertCompte->insertionCompteEpargne($CompteEpargne);
	$insertCompte->insertionCompteBloque($CompteBloque);

	/*header('Location: http://localhost/Mes_Projets/Projet_BP_PHP_POO/controller/insertionClientSalarie.php');
    exit();*/


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
                <button><a href="../accueil.php">RETOUR A L'ACCUEIL</a></button>
            </div>
            <div id="confirm" style="background-color: white; margin: 15px;" >
            <p style="text-align: center;font-size: 30px;">
            	<?php
            		error_reporting(-1);
	                if($insertClient && $insertCompte)
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

