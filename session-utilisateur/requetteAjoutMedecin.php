<?php
    session_start();
    require("connect.php");
    header("Content-type:application/json;charset=utf-8");

    $dataResult = array();
    $nomMed = $_POST['nomMed'];
    $SpecMed = $_POST['SpecMed'];
    $numMed = $_POST['numMed'];
    $emailMed = $_POST['emailMed'];
    $adresseMed = $_POST['adresseMed'];
    
    if(empty($nomMed)){
        $dataResult["nomMed"] = 1;        
    }
    if(empty($SpecMed)){
        $dataResult["SpecMed"] = 1;        
    }
    if(empty($numMed)){
        $dataResult["numMed"] = 1;        
    }
    if(empty($emailMed)){
        $dataResult["emailMed"] = 1;        
    }
    if(empty($adresseMed)){
        $dataResult["adresseMed"] = 1;        
    }    

    $id_user = $_SESSION['id'];
        if (isset($_POST['submit'])){
            print_r($_POST);
            echo "<br> ".$id_user;
            $nom_medecin=$_POST['nomMed'];
            $specialite=$_POST['SpecMed'];
            $numero_telephone=$_POST['numMed'];
            $email=$_POST['emailMed'];
            $adresse=$_POST['adresseMed'];

            $requete_Ajout_medecin = $bdd->prepare('INSERT INTO medecin(`id_user`, `nom_medecin`,`specialite_medecin`,`numero_telephone`, `email`,`adresse`) 
            VALUES(:id_user, :nom_medecin, :specialite, :numero_telephone,:email, :adresse)');
               if(
            $requete_Ajout_medecin->execute(array(
                    'id_user' => $id_user,
                    'nom_medecin' => $nom_medecin,
                    'specialite' => $specialite,
                    'numero_telephone' => $numero_telephone,
                    'email' => $email,
                    'adresse' => $adresse
            ))){
                echo "hello word";
            }else{
                echo "khawartiha al9owad";
            }
    
        }

        echo json_encode($dataResult);
?>