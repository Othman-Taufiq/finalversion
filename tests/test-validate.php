<?php

if(!isset($_SESSION)) session_start();

require_once('../controllers/class_validate.php');

/* exemple d'usage */
$_POST = [
    'name' => 'toto"',
    'email' => 'sdf sdf@sdfsdf.fr',
    'phone' => '0634567891',
    'code_postal' => '06350',
    'password' => '12345',
    'password_verify' => '12345',
    'date_fr' => '11/09/1988',
    'date_en' => '1988-11-09',
    'age' => 22,
    'cat' => 12,
    'price' => 21.2,
    'alphabetic' => 'sdfhuUHUihdef',
    'champ_a_exclure' => 'sdfkjhsdfjh',
    'champ_a_exclure_b' => 'dddd'
];

$v = new Validate($_POST);
$v->validate([
  'name' => ['required', 'minLength:3','type:string'],
  'email' => ['required', 'maxLength:150','type:email'],
  'phone' => ['type:phone'],
  'code_postal' => ['type:zipcode'],
  'password' => ['required', 'maxLength:150','type:password'],
  'password_verify' => ['samePassword'], //compare avec le data['password'] existant (intervient toujours APRES un data data['password'])
  'age' => ['minLength:2','type:int','minValue:18','maxValue:98'],
  'cat' => ['minLength:2'],
  'date_fr' => ['type:date-fr'],
  'date_en' => ['type:date-en'],
  'price' => ['type:float'],
  'test' => ['exists'], //vérifie simplement si un champ est passé (existe)
  'alphabetic' => ['type:alphabetic'] //chaîne alphabétique uniquement (lettres majuscules/minuscules)
]);

if (!$v->ok()) {
  var_dump($v->errors());
}

$v->logs();

echo'<br><br><br><br><br><br><br><br><br>_POST: ';
print_r($_POST);

echo'<br><br>datas sanitized: ';
$_POST = $v->getDatas();
print_r($_POST);

echo'<br><br>datas session: ';
if(isset($_SESSION)){
    $_SESSION['form_errors'] = $v->errors();
    print_r($_SESSION);
} else echo 'Aucune session ouverte';


/*$prenom_perso_1 = "Thor";
$age_perso_1 = 34;
$sexe_perso_1 = "Homme";

$prenom_perso_2 = "Xena";
$age_perso_2 = 30;
$sexe_perso_2 = "Femme";


//Thor attaque Xena
$pts_vie_perso_2 = $pts_vie_perso_2-$pts_attaque_perso_1;

//Xena attaque Thor
$pts_vie_perso_1 = $pts_vie_perso_1-$pts_attaque_perso_2;



$thor->attaque($xena);

$xena->attaque($thor);


.....

$thor = new Personnage("Thor");
$tor->age = 34;
$tor->sexe = "Homme";

$xena = new Personnage("Xena");
$xena->age = 30;
$xena->sexe = "Femme";*/





?>