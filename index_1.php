<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.2.slim.js" integrity="sha256-OflJKW8Z8amEUuCaflBZJ4GOg4+JnNh9JdVfoV+6biw=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="estilo.css">
    <title>Dental Uni - Encontre seu Dentista</title>
</head>
<body>
    <!-- Cabeçalho -->
    <header>
        <div class="container" style="width: 100%;">
            <div class="row">
                <!--Coluna 1-->
                <div class="col-3">
                    <a href="index_1.php"><img src="imagens/logopng.png" class="img-top" alt="logo"></a>
                </div>
                <!--Coluna 2-->
                <div class="col-9 coluna-topo-2">
                    <div>
                        <nav class="navbar navbar-expand-xxl bg-transparent">
                            <div class="container-fluid">
                              <button class="navbar-toggler border-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation" >
                                <span class="navbar-toggler-icon " id="tog-nav"></span>
                              </button>
                              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                <div class="navbar-nav">
                                  <a class="nav-link" href="#" id="nav-1">A COOPERATIVA</a>
                                  <a class="nav-link" aria-current="page" href="#" id="nav-2">BLOG</a>
                                  <a class="nav-link" href="#" id="nav-3">PLANOS ODONTOLÓGICOS</a>
                                  <a class="nav-link" href="#" id="nav-4">ENCONTRE SEU DENTISTA</a>
                                  <a class="nav-link" href="#" id="nav-5">OUVIDORIA</a>
                                  <a class="nav-link" href="#" id="nav-6">IDSS</a>
                                  <a class="nav-link" href="#" id="nav-7">CONTATOS</a>
                                  <button class="btn btn-transparent" role="button" id="but-log"><b>LOGIN</b></button>
                                </div>
                              </div>
                            </div>
                            
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <hr/>
    <!--Conteudo Principal-->
    <section>
        <div class="container">
            <div class="row titulo-conteudo">
                <div class="col">
                    <h4>ENCONTRE SEU DENTISTA</h4>
                </div>
            </div>

            <div class="row conteudo-1">
                <div class="col">
                    <form>
                        <br/><br/><br/>
                        <div class="formulario-inp" style="margin-left: 0px;">
                            <input class="form-control inp-1 borda" type="text" placeholder="Nome do Dentista / Clínica">
                        </div>  
                        <div class="formulario-inp inp-2">
                            <select class="form-select borda" id="estado" name="estado" >
                                <option value="" selected >Estado</option>
                                <option value="AC">Acre</option>
                                <option value="AL">Alagoas</option>
                                <option value="AP">Amapá</option>
                                <option value="AM">Amazonas</option>
                                <option value="BA">Bahia</option>
                                <option value="CE">Ceará</option>
                                <option value="DF">Distrito Federal</option>
                                <option value="ES">Espírito Santo</option>
                                <option value="GO">Goiás</option>
                                <option value="MA">Maranhão</option>
                                <option value="MT">Mato Grosso</option>
                                <option value="MS">Mato Grosso do Sul</option>
                                <option value="MG">Minas Gerais</option>
                                <option value="PA">Pará</option>
                                <option value="PB">Paraíba</option>
                                <option value="PR">Paraná</option>
                                <option value="PE">Pernambuco</option>
                                <option value="PI">Piauí</option>
                                <option value="RJ">Rio de Janeiro</option>
                                <option value="RN">Rio Grande do Norte</option>
                                <option value="RS">Rio Grande do Sul</option>
                                <option value="RO">Rondônia</option>
                                <option value="RR">Roraima</option>
                                <option value="SC">Santa Catarina</option>
                                <option value="SP">São Paulo</option>
                                <option value="SE">Sergipe</option>
                                <option value="TO">Tocantins</option>
                                <option value="EX">Estrangeiro</option>
                            </select>
                        </div>
                        <div class="formulario-inp">
                            <select class="form-select borda" name="cidade" id="idade">
                                <option value="#">Cidade</option>
                            </select>
                        </div>
                        <div class="formulario-inp">
                            <input class="form-control borda inp" list="datalistOptions" id="exampleDataList" placeholder="Bairro">
                            <datalist id="datalistOptions">
                              <option value="Centro">
                              <option value="Rebouças">
                              <option value="Batel">
                              <option value="Ahú">
                              <option value="Cabral">
                            </datalist>
                        </div>
                        <div class="formulario-inp">
                            <select class="form-select borda" name="urgencia">
                                <option value="#" selected>Urgência</option>
                                <option value="#">Sim</option>
                                <option value="#">Não</option>
                            </select>
                        </div>
                        <div class="formulario-inp">
                            <select class="form-select borda" name="especialidade">
                                <option>Especialidade</option>
                                <option>Acupuntura</option>
                                <option>Cirurgia e Traumatologia Bucomaxilofacial</option>
                                <option>Clínico Geral</option>
                                <option>Disfunção Temporomandibular e Dor Orofacial</option>
                                <option>Endodontia</option>
                                <option>Estomatologia</option>
                                <option>Homeopatia</option>
                                <option>Implantodontia</option>
                                <option>Odontogeriatria</option>
                                <option>Odontologia do esporte</option>
                                <option>Odontologia do Trabalho</option>
                                <option>Odontologia para Pacientes com Necessidades Especiais</option>
                                <option>Odontopediatria</option>
                                <option>Ortodontia</option>
                                <option>Ortopedia Funcional dos Maxilares</option>
                                <option>Patologia bucal</option>
                                <option>Periodontia</option>
                                <option>Prótese Bucomaxilofacial</option>
                                <option>Prótese Dentária</option>
                                <option>Radiologia Odontológica e Imaginologia</option>
                                <option>Urgencia e emergencia</option>
                                <option>Urgencia e emergencia 24 horas</option>
                            </select>
                        </div>
                        <br/>
                        <br/>
                        <center>
                        <button class="btn btn-secondary btn-env" role="button">Encontrar Dentista</button>
                        </center>
                    </form>
                    <hr>
                    <h3>CURITIBA</h3>
                    <section>
                        <?php 
                        //Apresentação da lista de Dentistas
                            require 'conn.php';
                            $query = "SELECT * FROM `dentista`";
                            $stmt = $conn->prepare($query);
                            $stmt->execute();
                            while($row = $stmt->fetch()){
                        ?>
                            <div class="border-dark mb-3 bg-white bloco" style="height: auto; overflow: hidden;">
                                <div class="card-header" style="height: 55px;"><?= "<b>".$row['nm_dentista']."<br/>CRO: ".$row['nm_cro']."</b>";?></div>
                                    <hr size="4" noshade color="black"/>
                                    <div class="card-body text-dark" style="height: 220px;">
                                        <p class="card-text"><?= '<b>Fone: </b>'.$row['nm_telefone']; ?></p>
                                        <p class="card-text"><?= '<b>Endereço: </b>'.$row['ds_endereco']; ?></p>
                                        <p class="card-text"><?= '<b>Áreas de atuação: </b>'.$row['ds_atuacao']; ?></p> 
                                    </div>
                                    <div style="height: auto: overflow: hidden;">
                                        <hr size="4" noshade color="black"/>
                                        <button class="btn btn-info">Como chegar</button>
                                        <button class="btn btn-info" >Ver mapa</button>
                                        <button class="btn btn-info">Planos</button>
                                        <button class="btn btn-info" style="margin-top: 5px;">Horários</button>
                                    </div>
                            </div>

                        <?php
                            }
                        ?>
                    </section>
                </div>
            </div>
        </div>
    </section>
    <!-- Inicio Rodapé -->
    <footer class="rodape">
        <div class="container" >
            <div class="row">
                <div class="col-4 fot-box bord fot-box-1">
                    <div><a href="index_1.php"><img src="imagens/logopng.png" class="img-rodape" alt="logo"></a></div>
                    
                        <h3 class="tel">4007-2525<h3>
                        <p class="par">Capitais e região metropolitana</p>
                    
                        <h3 class="tel">0800 603 3683<h3>
                        <p class="par">Demais localidades</p>
                    
                        <h3 class="tel">0800 052 6000<h3>
                        <p class="par">Vendas</p>
                    
                </div>
                <div class="col-3 fot-box">
                    <h3 class="cop">A cooperativa<h3>
                    <ul>
                    <li class="footer-nav"><a href="#" class="nav-fot">Histórico e institucional</a></li>
                    <li class="footer-nav"><a href="#" class="nav-fot">Missão, visão e valores</a></li>
                    <li class="footer-nav"><a href="#" class="nav-fot">Nossos diferenciais</a></li>
                    <li class="footer-nav"><a href="#" class="nav-fot">Notícias</a></li>
                    <li class="footer-nav"><a href="#" class="nav-fot">Contato</a></li>
                    <li class="footer-nav"><a href="#" class="nav-fot">Trabalhe Conosco</a></li>
                    <li class="footer-nav"><a href="#" class="nav-fot">Portal Da Privacidade</a></li>
                    </ul>
                </div>
                <div class="col-3 fot-box">
                <h3 class="cop">Planos odontológicos<h3>
                    <ul>
                    <li class="footer-nav"><a href="#" class="nav-fot">Plano odontológico individual / familiar</a></li>
                    <li class="footer-nav"><a href="#" class="nav-fot">Plano odontológico empresarial PME - 30 a 99</a></li>
                    <li class="footer-nav"><a href="#" class="nav-fot">Plano odontológico corporativo - acima de 100</a></li>
                    </ul>
                </div>
                <div class="col fot-box social">
                <h3 class="cop">Social</h3>
                <div>
                    <ul>
                        <li class="social-nav"><a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                        </svg>
                        </a>
                        </li>
                        <li class="social-nav">
                        <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                        </svg>
                        </li>
                        <li class="social-nav">
                        </a>
                        <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                            <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                        </svg>
                        </a>
                        </li>
                        <li class="social-nav">
                        <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                            <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
                        </svg>
                        </a>
                        </li>
                    </ul>
                </div>
                </div>   
                </div>
            </div>
        </div>
    </footer>
    <script type="text/javascript" src="jq.js"></script>
</body>
</html>