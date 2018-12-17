<?php
$dados=$_GET['id'];
$coluna=$_GET['coluna'];
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css">
        <link rel="stylesheet" href="node_modules/bootstrap/compiler/styles.css">
        
        <title>site igreja</title>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3>VOCÊ DESEJA MESMO EXCLUIR O HORARIO/EVENTO <?php echo $dados;?></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-6 text-center">
                    <a href="excluireventconf.php?id=<?php echo $dados;?>&coluna=<?php echo $coluna;?>">SIM, desejo</a>
                </div>
                <div class="col-6 text-center">
                    <a href="areadm.php">NÃO, não desejo</a>
                </div>
            </div>
        </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </body>
</html>