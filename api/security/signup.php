<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once '../../functions/ctrlSaisies.php';
require_once '../../functions/getExistPseudo.php';


//Fonctionne
$error = false;
if (!empty($_POST['nomMemb']) && !empty($_POST['prenomMemb'])) {
    $nom = ctrlSaisies($_POST['nomMemb']);
    $prenom = ctrlSaisies($_POST['prenomMemb']);
}else{
    die("Les champs nom et prénom sont obligatoires.");
    
}

//Fonctionne
$pseudo = ctrlSaisies($_POST['pseudoMemb']);
if (strlen($pseudo) < 6 || strlen($pseudo) > 70) {
    die("Le pseudo doivent être compris entre 6 et 70 caractères");
    $error = true;
}
elseif (get_ExistPseudo($pseudo) > 0) {
    die("Le pseudo existe déjà.");
    $error = true;
}

$dateCreation = date("Y-m-d H:i:s"); 
$dtMajMemb = NULL; 


//Fonctionne
if (isset($_POST['email1']) && isset($_POST['email2'])) {

    $email1 = $_POST['email1'];
    $email2 = $_POST['email2'];
    
    $patternMail = '/^[^\s@]+@[^\s@]+\.[^\s@]+$/';

    if (!preg_match($patternMail, $email1) || !preg_match($patternMail, $email2)) {
        die("Veuillez saisir des adresses email valides.");
        $error = true;
    }
    
    if ($email1 !== $email2) {
        die("Les adresses email ne correspondent pas.");
        $error = true;
    }

}else{
    die("Veuillez saisir des adresses email.");
    $error = true;
}

//Fonctionne
$mdp1 = $_POST['passMemb1'];
$mdp2 = $_POST['passMemb2'];
if (!empty($_POST['passMemb1']) && !empty($_POST['passMemb2'])) {

    $mdp1 = $_POST['passMemb1'];
    $mdp2 = $_POST['passMemb2'];

    $patternMdp = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,15}$/';

    if (!preg_match($patternMdp, $mdp1) || !preg_match($patternMdp, $mdp2)) {
        die("Les mots de passe doivent être compris entre 8 et 15 caractères, avec au moins une majuscule, une minuscule, un chiffre et un caractère spécial.");
        $error = true;
    }
    
    if ($mdp1 !== $mdp2) {
        die("Les mots de passe ne correspondent pas.");
        $error = true;
    }
    
}else{
    die("Veuillez saisir un mot de passe");
    $error = true;
}

$accordMemb = $_POST["accordMemb"];
if ($accordMemb !== '1') {
    die("Vous devez accepter que vos données soient conservées pour créer un compte.");
}

$numStat = 3;

if(isset($_POST['g-recaptcha-response'])){
    $token = $_POST['g-recaptcha-response'];
    $url = 'https://www.google.com/recaptcha/api/siteverify';
    $data = array(
    'secret' => '6LdQWmopAAAAAFJwZcwJIeIXMggmABmNB26d20wg8',
    'response' => $token
    );
    $options = array(
    'http' => array (
    
    'header' => "Content-Type: application/x-www-form-urlencoded\r\n",
    
    'method' => 'POST',
    'content' => http_build_query($data)
    )
    );
    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    $response = json_decode($result);
    /*
    - google response score is between 0.0 to 1.0
    - if score is 0.5, it's a human
    - if score is 0.0, it's a bot
    - google recommend to use score 0.5 for verify human
    */
    if ($response->success && $response->score >= 0.5) {
   
    //Le test est réussi, on peut inscrire la personne si le pseudo et le mot de passe sont bons
    var_dump(array('success' => true, "msg"=>"You are not a robot!",
    "response"=>$response));
    }else{
    var_dump(array('success' => false, "msg"=>"You are a robot!",
    "response"=>$response));
    die("Vous êtes un robot");
    }
}


if (!$error){
    $mdpHash = password_hash($mdp1, PASSWORD_DEFAULT);
    sql_insert('MEMBRE', 'nomMemb, prenomMemb, pseudoMemb, passMemb, eMailMemb, accordMemb, numStat', " '$nom', '$prenom', '$pseudo', '$mdpHash', '$email1', 1, '$numStat'");

    setcookie('pseudo', $pseudoMemb, time() + (86400 * 30), "/");

    session_start();
    $_SESSION['logged'] = true;
    $_SESSION['username'] = $pseudo;
    $_SESSION['numMemb'] = $numMemb;

    $numStat = sql_select("membre", "numStat", "pseudoMemb = '$pseudo'");
    $numStat = $numStat[0]["numStat"];

    $_SESSION['numStat'] = $numStat;
    
    header('Location: ../../index.php');
    ?>

    <?php
}else{
    die("erreur");
}

?>
