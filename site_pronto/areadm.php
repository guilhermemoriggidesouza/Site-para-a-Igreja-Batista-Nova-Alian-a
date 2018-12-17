<?php
session_start();
include("php/settings.php");

if($_SESSION['logado'] != "ok"){
    header("Location:index.php");
}
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
        <link rel="stylesheet" type="text/css" href="cssmodify/cssestilo.css"/>
        <link rel="stylesheet" href="scroll.css">
    </head>

    <body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-3">
                <h1>breve</h1>
            </div>
            <div class="col-9 bg-light">
                <div class="container justify-content-center">
                    <form action="adddmin.php" method="POST" class="my-5">
                        <h2 class="text-center">Mudar Lider de Ministério</h2>
                        <div class="form-group">

                            <select name="minist" class="form-control col-4 form-control-sm ">
                                <option value="">Ministérios</option>
                                <option value="homens">Homens</option>
                                <option value="mulheres">Mulheres</option>
                                <option value="jovens">Jovens</option>
                                <option value="eventos">Evento</option>
                                <option value="missao">Missão</option>
                                <option value="musica">Música</option>
                                <option value="recepcao">Recepção</option>
                                <option value="infantil">Infantil</option>
                                <option value="seguranca">Segurança</option>
                            </select>

                            <label for="nome">Novo lider de minitério</label>
                            <input type="text" class="form-control form-control-sm col-4" name="nome" id="nome">

                            <button type="submit" class="btn btn-primary mt-5">mudar</button>
                            <p><?php $msg1=(isset($_GET['msg1']))? $_GET['msg1'] : ""; echo $msg1; ?></p>

                        </div>
                    </form>             
                </div>
                <div class="container justify-content-center">
                    <form action="adddagenda.php" method="POST" class="my-5">
                        <h2 class="text-center">Adicionar Agenda</h2>
                        <div class="form-group">


                            <label for="segunda">Novo Horario SEGUNDA</label>
                            <input type="text" class="form-control form-control-sm col-4" name="esegunda" id="esegunda" placeholder="ex:09:00-Escola Bíblica Dominical">

                            <label for="terca">Novo Horario TERÇA</label>
                            <input type="text" class="form-control form-control-sm col-4" name="eterca" id="eterca" placeholder="ex:09:00-Escola Bíblica Dominical">

                            <label for="quarta">Novo Horario QUARTA</label>
                            <input type="text" class="form-control form-control-sm col-4" name="equarta" id="equarta" placeholder="ex:09:00-Escola Bíblica Dominical">

                            <label for="quinta">Novo Horario QUINTA</label>
                            <input type="text" class="form-control form-control-sm col-4" name="equinta" id="equinta" placeholder="ex:09:00-Escola Bíblica Dominical">

                            <label for="sexta">Novo Horario SEXTA</label>
                            <input type="text" class="form-control form-control-sm col-4" name="esexta" id="esexta" placeholder="ex:09:00-Escola Bíblica Dominical">

                            <label for="sabado">Novo Horario SABADO</label>
                            <input type="text" class="form-control form-control-sm col-4" name="esabado" id="esabado" placeholder="ex:09:00-Escola Bíblica Dominical">

                            <label for="domingo">Novo Horario DOMINGO</label>
                            <input type="text" class="form-control form-control-sm col-4" name="edomingo" id="domingo" placeholder="ex:09:00-Escola Bíblica Dominical">

                            <label for="evento">Novo Evento</label>
                            <input type="text" class="form-control form-control-sm col-4" name="evento" id="evento" placeholder="ex:(12/10)14:00-Dia das Crianças">
                            
                            <button type="submit" class="btn btn-primary mt-5">Adicionar</button>
                            <p><?php $msg2= (isset($_GET['msg2']))? $_GET['msg2'] : ""; echo $msg2; ?></p>
                            
                            <h2 class="mt-5 text-center">Excluir um horário</h2>
                            <div class="text-center my-5">
                <h1 class="my-5">Agenda Semanal</h1>
                <p>Exclua o evento que não acontecerá mais:<p>
                <div class="row justify-content-center my-5">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-6 text-center">
                        <img src="cssmodify/imagens/agenda.png" class="img-fluid">
                        <h5>DOMINGO</h5>
                            <?php
                            $querydom = mysqli_query($mysqli,  "SELECT domingo FROM agenda")or die("erro não foi possivel achar seu usuario");			
                            $rowdom = mysqli_fetch_assoc($querydom);
                            $totaldom  = mysqli_num_rows($querydom);
                            if($totaldom > 0) {
                            do { 
                            ?>
                            <a href="excluireventconf.php?id=<?php echo $rowdom['domingo'];?>&coluna=domingo"><p><?php echo $rowdom['domingo'];?></p></a>

                            <?php
                                }while($rowdom = mysqli_fetch_assoc($querydom));
                                    echo'.';    
                            } 
                            ?>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-6 text-center">
                        <img src="cssmodify/imagens/agenda.png" class="img-fluid">
                        <h5>SEGUNDA</h5>
                            <?php
                            $queryseg = mysqli_query($mysqli,  "SELECT segunda FROM agenda")or die("erro não foi possivel achar seu usuario");			
                            $rowseg = mysqli_fetch_assoc($queryseg);
                            $totalseg  = mysqli_num_rows($queryseg);
                            if($totalseg > 0) {
                            do { 
                            ?>
                            <a href="excluirevent.php?id=<?php echo $rowseg['segunda'];?>&coluna=segunda"><p><?php echo $rowseg['segunda'];?></p></a>

                            <?php
                                }while($rowseg = mysqli_fetch_assoc($queryseg));
                                    echo'.';    
                            } 
                            ?>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-6 text-center">
                        <img src="cssmodify/imagens/agenda.png" class="img-fluid">
                        <h5>TERÇA</h5>
                            <?php
                            $queryter = mysqli_query($mysqli,  "SELECT terca FROM agenda")or die("erro não foi possivel achar seu usuario");			
                            $rowter = mysqli_fetch_assoc($queryter);
                            $totalter  = mysqli_num_rows($queryter);
                            if($totalter > 0) {
                            do { 
                            ?>
                            <a href="excluirevent.php?id=<?php echo $rowter['terca'];?>&coluna=terca"><p><?php echo $rowter['terca'];?></p></a>

                            <?php
                                }while($rowter = mysqli_fetch_assoc($queryter));
                                    echo'.';    
                            } 
                            ?>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-6 text-center">
                        <img src="cssmodify/imagens/agenda.png" class="img-fluid">
                        <h5>QUARTA</h5>
                            <?php
                            $queryqua = mysqli_query($mysqli,  "SELECT quarta FROM agenda")or die("erro não foi possivel achar seu usuario");			
                            $rowqua = mysqli_fetch_assoc($queryqua);
                            $totalqua  = mysqli_num_rows($queryqua);
                            if($totalqua > 0) {
                            do { 
                            ?>
                            <a href="excluirevent.php?id=<?php echo $rowqua['quarta'];?>&coluna=quarta"><p><?php echo $rowqua['quarta'];?></p></a>

                            <?php
                                }while($rowqua = mysqli_fetch_assoc($queryqua));
                                    echo'.';    
                            } 
                            ?>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-6 text-center">
                        <img src="cssmodify/imagens/agenda.png" class="img-fluid">
                        <h5>QUINTA</h5>
                            <?php
                            $queryqui = mysqli_query($mysqli,  "SELECT quinta FROM agenda")or die("erro não foi possivel achar seu usuario");			
                            $rowqui = mysqli_fetch_assoc($queryqui);
                            $totalqui  = mysqli_num_rows($queryqui);
                            if($totalqui > 0) {
                            do { 
                            ?>
                            <a href="excluirevent.php?id=<?php echo $rowqui['quinta'];?>&coluna=quinta"><p><?php echo $rowqui['quinta'];?></p></a>

                            <?php
                                }while($rowqui = mysqli_fetch_assoc($queryqui));
                                    echo'.';    
                            } 
                            ?>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-6 text-center">
                        <img src="cssmodify/imagens/agenda.png" class="img-fluid">
                        <h5>SEXTA</h5>
                            <?php
                            $querysex = mysqli_query($mysqli,  "SELECT sexta FROM agenda")or die("erro não foi possivel achar seu usuario");			
                            $rowsex = mysqli_fetch_assoc($querysex);
                            $totalsex  = mysqli_num_rows($querysex);
                            if($totalsex > 0) {
                            do { 
                            ?>
                            <a href="excluirevent.php?id=<?php echo $rowsex['sexta'];?>&coluna=sexta"><p><?php echo $rowsex['sexta'];?></p></a>

                            <?php
                                }while($rowsex = mysqli_fetch_assoc($querysex));
                                    echo'.';    
                            } 
                            ?>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-6 text-center">
                        <img src="cssmodify/imagens/agenda.png" class="img-fluid">
                        <h5>SABADO</h5>
                            <?php
                            $querysab = mysqli_query($mysqli,  "SELECT sabado FROM agenda")or die("erro não foi possivel achar seu usuario");			
                            $rowsab = mysqli_fetch_assoc($querysab);
                            $totalsab  = mysqli_num_rows($querysab);
                            if($totalsab > 0) {
                            do { 
                            ?>
                            <a href="excluirevent.php?id=<?php echo $rowsab['sabado'];?>&coluna=sabado"><p><?php echo $rowsab['sabado'];?></p></a>

                            <?php
                                }while($rowsab = mysqli_fetch_assoc($querysab));
                                    echo'.';    
                            } 
                            ?>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-6 text-center">
                        <img src="cssmodify/imagens/agenda.png" class="img-fluid">
                        <h5>Demais Eventos</h5>
                            <?php
                            $queryevent = mysqli_query($mysqli,  "SELECT evento FROM agenda")or die("erro não foi possivel achar seu usuario");			
                            $rowevent = mysqli_fetch_assoc($queryevent);
                            $totalevent  = mysqli_num_rows($queryevent);
                            if($totalevent > 0) {
                            do { 
                            ?>
                            <a href="excluirevent.php?id=<?php echo $rowevent['evento'];?>&coluna=evento"><p><?php echo $rowevent['evento'];?></p></a>

                            <?php
                                }while($rowevent = mysqli_fetch_assoc($queryevent));
                                    echo'.';    
                            } 
                            ?>
                    </div>
                    <p><?php $msg3= (isset($_GET['msg3']))? $_GET['msg3'] : ""; echo $msg3; ?></p>
                </div>
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
