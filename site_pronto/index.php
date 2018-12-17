<?php
session_start();
include("php/settings.php");
$query = mysqli_query($mysqli,  "SELECT * FROM minist")or die("erro não foi possivel achar seu usuario");			
$row = mysqli_fetch_array($query);
$total  = mysqli_num_rows($query);

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
        <link rel="stylesheet" type="text/css" href="cssmodify/cssestilo.css?id=<?php echo time(); ?>"/>
        <link rel="stylesheet" type="text/css" href="scroll.css?id=<?php echo time(); ?>">
    </head>

    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container">
            <a class="navbar-brand mb-0" href="#">
                <img src="cssmodify/imagens/brandi.png" >
            </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a href="#home" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#historia" class="nav-link">Nossa História</a>
                        </li>
                        <li class="nav-item">
                            <a href="#agenda" class="nav-link">Agenda</a>
                        </li>
                        <li class="nav-item">
                            <a href="#ministerio" class="nav-link">Ministérios</a>
                        </li>
                        <li class="nav-item">
                            <a href="#midia" class="nav-link">Mídia</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Localização</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Fale Conosco</a>
                        </li>
                        <li class="nav-item">
                            <a href="admin.html" class="nav-link ml-5">admin</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="logo " id="home">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 mt-5">
                        <div class="container mt-4 fadeIn">
                            <h1 class="text-center mt-5 display-2 text-light">
                                <br>
                                <p><b>IGREJA BATISTA
                                 NOVA ALIANÇA</b></p>
                            </h1>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="hist azul" id="historia">
            <div class="container">
                <div class="row justify-content-center text-light">
                    <h3 class="text-center my-5">NOSSA HISTÓRIA</h3>
                    <div class="col-12 ">
                        <ul class="nav nav-pills justify-content-center mb-5 text-light" id="pills-nav" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link bg-dark text-light active my-1" id="nav-pills-01" data-toggle="pill" href="#navitem01">Fundação da igreja</a>
                            </li>

                            <li class="nav-item">  
                                <a class="nav-link mx-1 bg-dark text-light my-1" id="nav-pills-01" data-toggle="pill" href="#navitem02">Da igreja a Lista de pastores</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link bg-dark text-light my-1" id="nav-pills-01" data-toggle="pill" href="#navitem03">Valores Atuais</a>
                            </li>
                        </ul>

                        <div class="tab-content" id="nav-pills-content">

                            <div class="tab-pane fade show active text-light" id="navitem01" role="tabpanel">
                                <div class="container">
                                    <p class="lead">Em 1963, quando o Pastor Jabes Prudente da Silva, então pastor da Primeira
                                    Igreja Batista de Americana, zeloso pelo ensino da Palavra de Deus e seus
                                    preceitos, ao disciplinar algumas famílias da Igreja, por não estarem vivendo
                                    conforme as Escrituras, foi por estes, fortemente perseguido, que em um
                                    levante contaminaram uma parte da Igreja, e em assembléia decidiram
                                    exonerar o pastor.
                                    Pastor Jabes então, deixou o ministério e com ele um grupo de
                                    aproximadamente 50 irmãos, que logo em seguida começaram a se reunir em
                                    uma garagem da família Salvação, um empresário da época.
                                    Pastor e irmãos orando, buscando direção de Deus para um terreno onde seria
                                    construída a futura Igreja Batista, foi quando passando pelo bairro Cordenonsi,
                                    na rua Professor Ignácio Dias Leme, o pastor Jabes viu um terreno que já tinha
                                    um alicerce de uma casa. Na ocasião trouxe alguns irmãos até o local,
                                    abaixaram o mato com os pés, ajoelharam e consagraram àquele lugar ao
                                    Senhor em oração.
                                    Logo em seguida o pastor Jabes foi falar com o dono do terreno que culminou
                                    na compra do mesmo.
                                    Sempre com muito esforço e trabalho duro, começaram a obra, destruindo o
                                    alicerce que havia no lugar, para aproveitar os materiais. Trabalhando em
                                    mutirão, (homens, mulheres jovens e adolescentes) em alguns momentos
                                    chegaram a trabalhar a noite toda na construção, com alegria e dedicação, e o
                                    Senhor dava ânimo e fortalecia àqueles irmãos.
                                    Enquanto a obra prosseguia a Igreja continuava a se reunir na garagem da
                                    família Salvação.</p>
                                </div>
                            </div>
                            
                            <div class="tab-pane fade" id="navitem02" role="tabpanel">
                                <div class="container">
                                    <p class="lead">Em pouco tempo um pequeno salão ficou pronto, e os cultos passaram a
                                    acontecer onde em breve seria a nova igreja.
                                    Entre alguns irmãos que acompanharam o pastor Jabes e família, havia alguns
                                    recém chegados da cidade de Dracena. Como o pastor e irmãos não
                                    encontraram apoio das igrejas da região e até mesmo da Associação, foi feito
                                    um contato com a Primeira Igreja Batista de Dracena, que era pastoreada por
                                    Pr. Josias Antunes, que prontamente demostrou amor cristão, se propondo a
                                    organizar a Igreja.
                                    Quando em 27 de junho de 1964, a Igreja foi organizada, nascia a Igreja
                                    Batista Central de Americana, que recebeu este nome em função da
                                    localização do centro comercial e industrial, ficar nas proximidades da Igreja.
                                    Pastores que sucederam o pastor Jabes Prudente da Silva (in memoriam):<br>
                                    - Pastor Antonio Pacheco de Albuquerque (in memoriam),<br>
                                    - Pastor Jonatas Leite do Sacramento (in memoriam),<br>
                                    - Pastor Jaime de Oliveira Inácio,<br>
                                    - Pastor Luiz Rodrigues de Oliveira,<br>
                                    - Pastor Antonino Pinho Ribeiro (Nino),<br>
                                    - Pastor Paulo Balaniuc, justamente em seu pastoreado percebendo que já não
                                    estávamos localizados no centro comercial da cidade, e com o objetivo de que
                                    não se associasse o nome da Igreja com a localização, em assembléia foi
                                    votado o nome fantasia “Igreja Batista Nova Aliança em Americana”.</p>
                                </div>
                        </div>
                            
                            <div class="tab-pane fade" id="navitem03" role="tabpanel">
                                <div class="container">
                                    <p class="text-center lead">
                                        Esta que é atualmente pastoreada pelo Pastor Silmar Gonçalves Pereira,
                                        desde 02 de Julho de 2006.<br></p>
                                    
                                    <p class="lead" >Tendo como missão:<br>
                                        Adorar a Deus e cumprir o “ide” de Jesus.<br>
                                        Como visão:<br>
                        
                                        Ser uma igreja família, cheia do Espírito Santo, com uma espiritualidade
                                        contagiante, consciente de seu papel na sociedade, vocacionada a ser e fazer
                                        discípulos.<br>
                                        E como Valores:<br>
                                        - Liderança capacitadora;<br>
                                        - Ministérios voltados para os dons;<br>
                                        - Espiritualidade contagiante;<br>
                                        - Estruturas funcionais;<br>
                                        - Culto inspirador;<br>
                                        - Grupos familiares;<br>
                                        - Evangelização voltada ás necessidades;<br>
                                        - Relacionamentos marcados pelo amor fraternal.
                                    </p>
                                </div>    
                            </div>

                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
        <div class="agenda">
            <div class="text-center">
                <h1 class="my-5"  id="agenda">Agenda Semanal</h1>
                <p class="lead">Fique por dentro do horário de culto:<p>
            </div>    
                <div class="container text-center">
                    <div class="row ">
                        <?php
                            diasemana("domingo");
                            diasemana("segunda");
                            diasemana("terca");
                            diasemana("quarta");
                            diasemana("quinta");
                            diasemana("sexta");
                            diasemana("sabado");

                        ?>
                    </div>
                </div>
                <?php
                
                function diasemana($d){
                    $var = false;
                    $linha = "";
                    include("php/settings.php");
                    $query = mysqli_query($mysqli,  "SELECT $d FROM agenda")or die("erro não foi possivel achar seu usuario");			
                    $row = mysqli_fetch_assoc($query);
                    $total  = mysqli_num_rows($query);
                        if($total > 0) {
                            do {
                                if($row[$d] !=""){
                                    $var=true;
                                    $linha = '<div class="col-lg-4 col-md-3 col-sm-3 col-6"><img src="cssmodify/imagens/agenda.png" class="img-fluid"><h2>'.strtoupper($d).'</h2><p class="lead"><b>'.$row[$d].'</b></p></div>';
                                    echo $linha;
                                }else{
                                    echo "";
                                }
                            }while($row = mysqli_fetch_assoc($query));
                                echo'';    
                        }
                }
                ?>
                <div class="container ">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-3 col-sm-3 col-6 text-center my-5">
                            <img src="cssmodify/imagens/agenda.png" class="img-fluid">
                            <h5>Demais Eventos</h5>
                                    <?php
                                    $queryevent = mysqli_query($mysqli,  "SELECT evento FROM agenda")or die("erro não foi possivel achar seu usuario");			
                                    $rowevent = mysqli_fetch_assoc($queryevent);
                                    $totalevent  = mysqli_num_rows($queryevent);
                                    $var8=0;
                                    if($totalevent > 0) {
                                    do { 
                                        if($rowevent['evento'] != NULL){
                                            $var8++;
                                        }
                                    ?>
                                    <p class="lead"><b> <?php echo $rowevent['evento'];?></b></p>

                                    <?php
                                        }while($rowevent = mysqli_fetch_assoc($queryevent));
                                            echo'';    
                                    }
                                    if($var8 == 0){
                                        echo '<p>--</p>';
                                    }
                                    ?>
                        </div>
                    </div>
                </div>
           
        </div>
        <div class="minist azul" id="ministerio">
            <br>
            <h2 class="text-center mt-5 text-light">MINISTÉRIOS</h2>
                <div class="container mt-5">
                    <div class="row justify-content-center mt-5 text-light">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-6 text-center ">
                            <h4>Homens</h4>
                            <p class="lead"><b>Lider: <?php echo $row['homens'];?></b></p>
                            <img src="cssmodify/imagens/homem.png" class="img-fluid">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-6 text-center">
                            <h4>Mulheres</h4>
                            <p class="lead"><b>Lider: <?php echo $row['mulheres'];?></b></p>
                            <img src="cssmodify/imagens/mulher.png" class="img-fluid">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-6 text-center">
                            <h4>Jovens</h4>
                            <p class="lead"><b>Lider: <?php echo $row['jovens'];?></b></p>
                            <img src="cssmodify/imagens/jovemm.png" class="img-fluid">
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row justify-content-center my-5 text-light">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-6 text-center">
                            <h4>Eventos</h4>
                            <p class="lead"><b>Lider: <?php echo $row['eventos'];?></b></p>
                            <img src="cssmodify/imagens/eventoss.png" class="img-fluid">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-6 text-center">
                            <h4>Missão Integral</h4>
                            <p class="lead"><b>Lider: <?php echo $row['missao'];?></b></p>
                            <img src="cssmodify/imagens/missaao.png" class="img-fluid">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-6 text-center">
                            <h4>Música</h4>
                            <p class="lead"><b>Lider: <?php echo $row['musica'];?></b></p>
                            <img src="cssmodify/imagens/musicaa.png" class="img-fluid">
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row justify-content-center my-5 mb-5 text-light">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-6 text-center">
                            <h4>Segurança</h4>
                            <p class="lead"><b>Lider: <?php echo $row['seguranca'];?></b></p>
                            <img src="cssmodify/imagens/segurancaa.png" class="img-fluid">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-6 text-center">
                            <h4>Recepção</h4>
                            <p class="lead"><b>Lider: <?php echo $row['recepcao'];?></b></p>
                            <img src="cssmodify/imagens/recepcaoo.png" class="img-fluid">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-6 text-center">
                            <h4>Infantil</h4>
                            <p class="lead"><b>Lider: <?php echo $row['infantil'];?></b></p>
                            <img src="cssmodify/imagens/infantil.png" class="img-fluid">
                        </div>
                    </div>
                </div>
                <br>
            </div>
        </div>

        

        <div id="midia">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12 text-center mb-5">
                        <h3>MÍDIA</h3>
                        <p class="lead">Imagens de alguns de nossos eventos e cultos:</p>
                    </div>
                </div>
                <p class="lead text-center mt-5 "><b>Imagens do culto de celebração aos domingos</b></p>
                <div class="row justify-content-center">
                
                    <div class="col-lg-4 col-sm-6">
                        <div class="card mb-3 zoom rotate">
                            <a href="#" class="card-link" onclick="foto('imagemfacereal','1');" data-toggle="modal" data-target="#meuModal"><img src="cssmodify/face/face1" class="card-img img-fluid"></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="card mb-3 zoom rotate">
                            <a href="#" class="card-link" onclick="foto('imagemfacereal','2');" data-toggle="modal" data-target="#meuModal"><img src="cssmodify/face/face2" class="card-img img-fluid"></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="card mb-3 zoom rotate">
                            <a href="#" class="card-link" onclick="foto('imagemfacereal','3');" data-toggle="modal" data-target="#meuModal"><img src="cssmodify/face/face3" class="card-img img-fluid"></a>
                        </div>
                    </div>
                </div>

                    <div class="col-12">
                        <div class="card my-3"></div>
                    </div>

                    <p class="lead text-center mt-5 "><b>Imagens do alguns eventos realizados no templo</b></p>

                <div class="row justify-content-center">
                    <div class="col-lg-4 col-sm-6">
                        <div class="card my-3 zoom rotate">
                            <a href="#" class="card-link" onclick="foto('imagemfacereal','4');" data-toggle="modal" data-target="#meuModal"><img src="cssmodify/face/face4" class="card-img img-fluid"></a>
                        </div>
                        
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="card my-3 zoom rotate">
                            
                            <a href="#" class="card-link" onclick="foto('imagemfacereal','5');" data-toggle="modal" data-target="#meuModal"><img src="cssmodify/face/face5" class="card-img img-fluid"></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="card my-3 zoom rotate">
                            <a href="#" class="card-link" onclick="foto('imagemfacereal','6');" data-toggle="modal" data-target="#meuModal"><img src="cssmodify/face/face6" class="card-img img-fluid"></a>
                        </div>                        
                        
                    </div>
                </div>

                    <div class="col-12">
                        <div class="card my-3"></div>
                    </div>

                    <p class="lead text-center mt-5"><b>Imagens do evento "Impacto Social"</b></p>

                <div class="row justify-content-center">
                    <div class="col-lg-4 col-sm-6 zoom rotate">
                        <div class="card my-3">
                            
                            <a href="#" class="card-link" onclick="foto('imagemfacereal','7');" data-toggle="modal" data-target="#meuModal"><img src="cssmodify/face/face7" class="card-img img-fluid"></a>
                        </div>
                       
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="card my-3 zoom rotate">
                            
                            <a href="#" class="card-link" onclick="foto('imagemfacereal','8');" data-toggle="modal" data-target="#meuModal"><img src="cssmodify/face/face8" class="card-img img-fluid"></a>
                        </div>
                        
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="card my-3 zoom rotate">
                            
                            <a href="#" class="card-link" onclick="foto('imagemfacereal','9');" data-toggle="modal" data-target="#meuModal"><img src="cssmodify/face/face9" class="card-img img-fluid"></a>

                        </div>
                        
                    </div>
                
                </div>
            </div>
            <br>
            <br>
        </div>
        
        <div class="contato azul" id="contato">
        <br>
            <div class="container text-light text-center my-5">
                <h2> Faça contato conosco</h2>
                <div class="row justfy-content-center text-light">
                    <div class="col-12">
                        <p class="lead ">Selecione o motivo de seu contato e assim que puder-mos, entraremos em contato!!</p>
                    </div>
                </div>
                <div class="row justify-content-center text-light">
                    <div class="col-lg-8 col-sm-6 contatos"></div>
                    <div class="col-lg-4 col-sm-6">
                        <form action="email.php">
                            <div class="form-group">
                                <label for="nome" class="text-light">Nome:</label>
                                <input type="text" id="nome" name="nome" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email" class="text-light">Email:</label>
                                <input type="text" id="email" name="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="telefone" class="text-light">Telefone:</label>
                                <input type="text" id="telefone" name="telefone" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="motivo" class="text-light">Motivos do contato</label>
                                <select name="motivo" id="motivo" class="form-control">
                                    <option value="doacoes">Doações</option>
                                    <option value="comentarios">Comentarios</option>
                                    <option value="aconselhamento">Aconselhamento Pastoral</option>
                                    <option value="outro">Outros Motivos</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="mensagem" class="text-light">Mensagem:</label>
                                <textarea name="mensagem" id="mensagem" cols="30" rows="10" class="form-control" style="resize:none;"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-dark">Enviar</button>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="local" id="local">
            <h2 class="my-5 text-center">localização</h2>
            <p class="lead text-center">Venha fazer uma visita para a gente!!</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d919.9847799935087!2d-47.32676737082354!3d-22.730504099068867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c89a366de14543%3A0x890ef5a8c1198258!2sIgreja+Batista+Central+Americana!5e0!3m2!1spt-BR!2sbr!4v1541194519609" width="100%" height="600px" frameborder="0" style="border:0" allowfullscreen>sfd</iframe>
        </div>
        <footer class="text-center">
            <p class="lead">//desenvolvido por Guilherme Moriggi de Souza//</p>
        </footer>
                      
        

        
              
        <div class="modal fade" role="dialog" id="meuModal" tabindex="-1">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Visualizador de Fotos</h5>
                        <button type="button" class="close" data-dismiss="modal">x</button>
                    </div>
                    
                    <div class="modal-body text-center">
                            <span id="fototitulo"><script>
                                function foto(id, num){
                                var foto = document.querySelector("#fototitulo");
                                foto.innerHTML = "<img src='cssmodify/imagens/"+ id + num +".jpg' class='img-fluid'></img>";
                                }
                        </script>
                    </span>
                        
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">fechar</button>
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