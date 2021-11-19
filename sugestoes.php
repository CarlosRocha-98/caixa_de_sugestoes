<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
        
        <nav>
            <div class="nav-wrapper">
                <a href="#!" class="brand-logo"><i class="material-icons">online_prediction</i>Logo</a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="#"><i class="material-icons">search</i></a></li>
                    <li><a href="#"><i class="material-icons">refresh</i></a></li>
                    <li><a href="#"><i class="material-icons">more_vert</i></a></li>
                </ul>
            </div>
        </nav>

        <div class="container-fluid">
            <div class="row">
                <?php
                    include_once('connection.php');
                    $sql = 'SELECT * FROM sugestoes';
                    $result_set = mysqli_query($conexao, $sql);
                        while($linha = mysqli_fetch_array(result_set, MYSQLI_BOTH)) {
                            $tipo = $linha['tipo'];
                            $
                        }
                ?>

            </div>

        </div>

        <div class="container">
            <div class="row">
                <div class="col s12 m12 l6 lg6">
                    <div class="card">
                        <img src="imagens/idea.png"style="width: 48px; height: 48px; position: absolute; top: 16px; right: 16px;" alt="">
                        <div class="card-content">
                            <span class="card-title">sugestao</span>
                            <p>Precisamos daquele café coletivo!</p>
                        </div>
                        <div class="card-action">
                            <div class="row">
                                <span class="col s4 m4 l4 lg4">Sistemas</span>
                                <span class="col s4 m4 l4 lg4">Aline</span>
                                <span class="col s4 m4 l4 lg4">18/11/2021 21:30:27</span>

                            </div>
                        </div>
                    </div>
                </div> 

                <div class="col s12 m12 l6 lg6">
                    <div class="card">
                        <img src="imagens/idea.png"style="width: 48px; height: 48px; position: absolute; top: 16px; right: 16px;" alt="">
                        <div class="card-content">
                            <span class="card-title">sugestao</span>
                            <p>Quinta do PHP</p>
                        </div>
                        <div class="card-action">
                            <div class="row">
                                <span class="col s4 m4 l4 lg4">Sistemas</span>
                                <span class="col s4 m4 l4 lg4">Carlos</span>
                                <span class="col s4 m4 l4 lg4">18/11/2021 22:21:09</span>

                            </div>
                        </div>
                    </div>
                </div> 

                <div class="col s12 m12 l6 lg6">
                    <div class="card">
                        <img src="imagens/Coração vermelho.png"style="width: 48px; height: 48px; position: absolute; top: 16px; right: 16px;" alt="">
                        <div class="card-content">
                            <span class="card-title">Card Title</span>
                            <p>I am a very simple card. I am good at containing small bits of information.
                                I am convenient because I require little markup to use effectively.</p>
                        </div>
                        <div class="card-action">
                            <div class="row">
                                <span class="col s4 m4 l4 lg4">Sistemas</span>
                                <span class="col s4 m4 l4 lg4">Carlos</span>
                                <span class="col s4 m4 l4 lg4">18/11/2021</span>

                            </div>
                        </div>
                    </div>
                </div> 

                <div class="col s12 m12 l6 lg6">
                    <div class="card">
                        <img src="imagens/idea.png"style="width: 48px; height: 48px; position: absolute; top: 16px; right: 16px;" alt="">
                        <div class="card-content">
                            <span class="card-title">Card Title</span>
                            <p>I am a very simple card. I am good at containing small bits of information.
                                I am convenient because I require little markup to use effectively.</p>
                        </div>
                        <div class="card-action">
                            <div class="row">
                                <span class="col s4 m4 l4 lg4">Sistemas</span>
                                <span class="col s4 m4 l4 lg4">Carlos</span>
                                <span class="col s4 m4 l4 lg4">18/11/2021</span>

                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
            


      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>
        