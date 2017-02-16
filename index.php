
<?php 
// $errôr = ['wrong-tabme'=>'Vous deveza ...']


if( $_SERVER['REQUEST_METHOD'] === 'POST') { 

    if (isset($_POST)) {
        if(!isset($_POST['fois']) || !isset($_POST['chiffre'])) {
            $errors = 'Il faut entrer des chiffres dans les champs';
        }else{
            if(!ctype_digit($_POST['fois']) || !ctype_digit($_POST['chiffre'])) {
                $errors = 'Vous avez entrez autre chose qu\'un entier';
            }else{
                $fois = $_POST['fois'];
                $chiffre = $_POST['chiffre'];
            }
        
    }   }

}
?>

 