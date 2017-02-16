
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale-1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Multiplication par Php</title>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>
    <div class="container">

        <form action="index.php" method="post" class="form-group" style="width: 20%">

         <?php if($errors !== ' '){?>
            <div class="errors warning"> 
                <p class="alert-danger" > <?= $errors; ?> </p>

            	<label for="chiffre" class="control-label">Entrez la table souhaitée</label>
            </div>
        <?php }?>


        <input type="text" name="chiffre" id="chiffre" class="form-control">

        <?php if($errors !== ' '){?>
            <div class="errors warning"> 
                <p class="alert-danger" > <?= $errors; ?> </p>

                <label for="fois" class="control-label">Entrez la fois souhaitée</label>
            </div>
    <?php }?>

            <input type="text" name="fois" id="fois" class="form-control" >
            <input type="submit" value="envoyer" class="btn btn-primary ">
        </form>

  
   

   
    

    <?php if($chiffre && $fois == true){ ?> <!-- Verifie si ma chaine est un chiffre-->
        
    
         <h1>La table de <?= $chiffre ?> fois <?= $fois ?> </h1>
        <table class="table table-striped">
            <tr>
                <th>X </th>
                <?php for($i=1;$i<=$fois;$i++)
                { ?>
                  <th><?= $i ?></th> <!-- Horizontal -->
            <?php } ?>
            </tr>


            <?php for($j=1;$j<=$chiffre;$j++) { ?>
            <tr>
                <th><?= $j ?><!-- Vertical -->
                    <?php for($k=1;$k<=$fois;$k++) { ?>


                    <td>
                        <?= $j; ?>*<?= $k; ?> = <?= $j * $k; ?> <!-- Cellule -->
                    </td> 
                </th>
                <?php }?> <!-- FIN boucle fois -->
            </tr>

            <?php }?>   <!-- FIN boucle chiffre -->
        </table>
        <?php }?> <!-- fin IF -->
    </div>
<script src="bootstrap/js/jquery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

    </body>
</html>