<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>PRONAP</title>
    <!--CSS Personalizado-->
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/pronap.css')}}">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
    <!-- Optional theme -->
    <link rel="stylesheet" href="{{url('assets/font-awesome/css/font-awesome.min.css')}}">
    <!-- Optional theme -->
    <link rel="stylesheet" href="{{url('assets/css/bootstrap-theme.min.css')}}">
    <!-- Chamadas JS -->
    <!--jQuery-->
    <script src="{{url('assets/js/jquery-3.2.0.min.js')}}"></script>
    <script src="{{url('assets/js/animatescroll/animatescroll.js')}}"></script>


</head>
<body>


<header class="header">
    <nav role="navigation" class="navbar navbar-default navbar-fixed-top navbar-inverse transparent ">
        <div class="container">

            <div class="navbar-header navbar-inner">
                <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                    <span class="sr-only">Navegação Responsiva</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand logo"><strong>PRONAP</strong></a>
            </div>

            <div id="navbarCollapse" class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right menu">
                    <li><a onclick="$('#home').animatescroll({scrollSpeed:2000,easing:'easeOutBounce'});">Home</a></li>
                    <li><a onclick="$('#participar').animatescroll({scrollSpeed:2000,easing:'easeOutBounce'});">Como
                            Participar</a></li>
                    <li><a onclick="$('#cursos').animatescroll({scrollSpeed:2000,easing:'easeOutBounce'});">Cursos</a>
                    </li>
                    <li><a onclick="$('#certificado').animatescroll({scrollSpeed:2000,easing:'easeOutBounce'});">Certificados</a>
                    </li>
                    <li><a class="btn-menu add btn-enviar" href="" data-toggle="modal" data-target="#cadCandidato">CADASTRE-SE</a>
                    </li>
                    <li><a class="btn-menu" href="{{ url('/admin/login') }}">ENTRAR</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- Final Menu -->
<div class="clear"></div>
<section id="home" class="slide text-center color-white">
    <div class=" container col-md-12">
        <h1 class="titulo-slide">Cadastra-se e concorra a bolsas de estudo e diversos prêmios.</h1>
        <p class="descricao-slide">Faça seu cadastro para ter acesso ao teste de lógica e assim
            concorrer a Bolsas de Estudos INTEGRAIS e PARCIAIS,
            SMARTPHONE, TABLET, SMARTWATCH , entre outros: (consulte a premiação em sua cidade)</p>
        <div class="col-md-6 text-right">
            <a class="btn-saiba-mais large"
               onclick="$('#pronap').animatescroll({scrollSpeed:2000,easing:'easeOutBounce'});">SAIBA MAIS SOBRE O
                PRONAP</a>
        </div>
        <div class="col-md-6 text-left">
            <a class="btn-saiba-mais add btn-enviar" data-toggle="modal" data-target="#cadCandidato"
               href="">CADASTRA-SE</a>
        </div>

    </div>
</section>
<!-- Final slide -->
<section id="pronap" class="slide background-color-white">
    <div class="container text-center col-md-12">
        <h1 class="titulo-slide"><strong>PRONAP</strong> </br> Programa Nacional de Apoio a Aprendizagem Profissional
        </h1>
        <div class="divider"></div>
        <p class="descricao-slide">O PRONAP é um programa de incentivo que foi desenvolvido para ajudar pessoas
            de todas as idades a se desenvolver profissionalmente através de cursos oferecidos
            por empresas parceiras do PRONAP em todo Brasil. As opções de cursos podem
            variar de acordo com as demandas identificadas em cada região. Os cursos
            oferecidos em parceria com PRONAP são gratuitos ou são oferecidos com bolsas
            parciais dependendo das parcerias estabelecidas em sua cidade.</p>

    </div>
</section>
<!--Final da section sobre-->

<section id="participar" class="slide background-parallax-detalhes color-white">
    <div class="container text-center col-md-12">
        <h1 class="titulo-slide">Como ganhar Bolsa Integral e concorrer a vários prêmios.</h1>
        <div class="divider"></div>
        <p class="descricao-slide">Infelizmente o programa não consegue atender a toda a demanda das cidades
            onde atua, então criamos um sistema de seleção de candidatos através de um rápido teste de lógica.
            Assim, para concorrer a uma bolsa de estudos e a diversos outros prêmios você precisa se cadastrar
            e responder a 9 perguntas de lógica, e os participantes que tiverem aproveitamento acima da média
            ganharão BOLSA DE ESTUDOS para um dos cursos oferecidos pelo programa e ainda concorrerão a vários
            prêmios que dependendo da sua cidade podem ser Smartphones, Tablet’s, Smartwatch (Relógios Android)
            entre outros.</p>
    </div>
</section>
<!--Final da section como ganhar-->
<section id="cursos" class="slide background-color-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-6">
                    <img class="img-responsive" src="{{url('assets/img/cursos.jpg')}}" alt="">
                </div>
                <div class="col-md-6">
                    <h1 class="titulo">Cursos disponíveis.</h1>
                    <div class="divider"></div>
                    <p class="descricao">Temos mais de 50 cursos para atender as mais diversas demandas do mercado,
                        para atender ao aluno que deseja iniciar na área de informática, como também o profissional
                        que deseja se especializar.
                        Cursos na área de informática e administrativos.</p>
                    <div class="text-center">
                        <button type="button" class="btn btn-danger btn-lg"
                                data-toggle="modal" data-target="#cursosDisponiveis">
                            <i class="fa fa-laptop" aria-hidden="true"></i>
                            Conheça nossos cursos
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>

</section>

<section class="slide safe background-parallax-slide color-black">
    <div class="container text-center col-md-12">
        <h1 class="titulo titulo2">Por que buscar qualificação.</h1>
        <div class="divider"></div>
        <div class="row">
            <div class="col-md-4">
                <div class="embed-container">
                    <iframe width="560" height="315"
                            src="https://www.youtube.com/embed/_PmLN50c0Tc"
                            frameborder="0" allowfullscreen>
                    </iframe>
                </div>

            </div>
            <div class="col-md-4">
                <div class="embed-container">
                    <iframe width="560" height="315"
                            src="https://www.youtube.com/embed/57hJi533mHk?list=PL0h8psU9l0B-Kw89fvt9aJ-wpPD0dUurd"
                            frameborder="0" allowfullscreen>
                    </iframe>
                </div>
            </div>
            <div class="col-md-4">
                <div class="embed-container">
                    <iframe width="560" height="315"
                            src="https://www.youtube.com/embed/qxjHku-4Yz4"
                            frameborder="0" allowfullscreen>
                    </iframe>
                </div>
            </div>

        </div>


    </div>
</section>
<!--Final da videos-->


<section id="certificado" class="slide background-color-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-6">
                    <img class="img-responsive" src="{{url('assets/img/content-img-03.png')}}" alt="">
                </div>
                <div class="col-md-6">
                    <h1 class="titulo">Certificados</h1>
                    <div class="divider"></div>
                    <p class="descricao">Os Cursos Livres de formação continuada do PRONAP, tem base Legal no Decreto
                        Nº 5.154, 23 de Julho de 2004, Art. 1º e 3º e de acordo com as normas do Ministério da Educação
                        (MEC) pela Resolução CNE nº 04/09, Art. 11º. Válido em todo Território Nacional.</p>
                </div>
            </div>
        </div>
    </div>

</section>
<section class="contato-form">
    <div class="container text-center ">
        <h1 class="titulo color-white">Contato</h1>
        <div class="divider"></div>
        <p class="descricao color-white">Entre em contato e tenha todas as suas dúvidas respondidas<br>
            Responderemos o mais rápido possível</p>
    </div>

    <div class="contato-form">
        <form class="especializati-form">
            <input type="text" name="nome" placeholder="Seu Nome">
            <input type="email" name="email" placeholder="Seu E-mail">
            <textarea name="descricao" placeholder="Sua mensagem"></textarea>

            <input type="submit" name="enviar" value="Enviar">
        </form>
    </div>
</section>
<!--Contato-->


<div class="copyright text-center">
    <p class="copyrigth">CopyRigth PRONAP 2017 - Todos os direitos reservados</p>
</div>


<div class="video-background">
    <div class="video-foreground">
        <iframe src="https://www.youtube.com/embed/W0LHTWG-UmQ?controls=0&showinfo=0&rel=0&autoplay=1&loop=1&playlist=W0LHTWG-UmQ"
                frameborder="0" allowfullscreen></iframe>
    </div>
</div>

<script type="text/javascript" src="{{url('assets/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{url('assets/js/jquery.mask.js')}}"></script>
<script>
    $(function () {
        jQuery("#form-add-aluno").submit(function () {
            $("#telefone").unmask();
            $("#cep").unmask();
            var dadosForm = jQuery(this).serialize();


            jQuery.ajax({
                url: 'add-aluno',
                data: dadosForm,
                method: 'POST'

            }).done(function (data) {
                if (data == '1') {
                    jQuery(".errors-msg").hide();

                    jQuery(".screen").hide();

                    jQuery(".success-msg").html(
                        "<h1>Seu Cadastro foi realizado com sucesso!</h1><br>" +
                        "<h4>Você receberá seu teste por SMS</h4>"
                    );
                    jQuery(".success-msg").show();

                    setTimeout("location.reload();", 5000);
                } else {
                    jQuery(".errors-msg").html(data);
                    jQuery(".errors-msg").show();
                }
            }).fail(function () {
                alert('Falha ao enviar dados!!');
            });


            return false;
        });

    });


    jQuery(".btn-enviar").click(function () {

        //limpa formulário
        $("#form-add-aluno").trigger("reset");
        jQuery(".cep-msg ").hide();

        //aplica mascára nos inputs
        $('.telefone').mask('(00) 0 0000-0000');
        $('.cep').mask('00000-000');
    });
</script>

<script type="text/javascript">

    function limpa_formulário_cep() {
        //Limpa valores do formulário de cep.
        document.getElementById('rua').value = ("");
        document.getElementById('bairro').value = ("");
        document.getElementById('cidade').value = ("");
        document.getElementById('uf').value = ("");
        document.getElementById('ibge').value = ("");
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            jQuery(".cep-msg ").show();
            //Atualiza os campos com os valores.
            document.getElementById('rua').value = (conteudo.logradouro);
            document.getElementById('bairro').value = (conteudo.bairro);
            document.getElementById('cidade').value = (conteudo.localidade);
            document.getElementById('uf').value = (conteudo.uf);
            document.getElementById('ibge').value = (conteudo.ibge);
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }

    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if (validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('rua').value = "...";
                document.getElementById('bairro').value = "...";
                document.getElementById('cidade').value = "...";
                document.getElementById('uf').value = "...";
                document.getElementById('ibge').value = "...";

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = '//viacep.com.br/ws/' + cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    }
    ;

</script>

<!-- Modal -->
<div class="modal fade" id="cadCandidato" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Cadastra-se</h4>
            </div>
            <div class="modal-body">
                <div class="errors-msg alert alert-danger" style="display:none;"></div>
                <div class="success-msg alert alert-success" style="display:none;">
                    <h1>ATENÇÃO</h1>
                    <p>O seu cadastro foi realizado com sucesso!!</p>
                </div>

                <div class="screen">

                    <form method="post" action="/add-aluno" id="form-add-aluno">
                        {{csrf_field()}}
                        <div class="form-group">
                            <input type="text" class="form-control" id="InputName" name="name" placeholder="NOME">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control telefone" id="telefone" name="cell"
                                   placeholder="CELULAR">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control cep" id="cep" name="cep" placeholder="CEP"
                                   onblur="pesquisacep(this.value);">
                        </div>
                        <div class="cep-msg alert alert-info col-md-12" style="display:none;">

                            <div class="form-group col-md-8">
                                <input class="form-control" name="rua" type="text" id="rua" placeholder="rua"
                                       readOnly="readOnly"/>
                            </div>
                            <div class="form-group col-md-4">
                                <input class="form-control" name="bairro" type="text" id="bairro" placeholder="Bairro"
                                       readOnly="readOnly"/>
                            </div>
                            <div class="form-group col-md-4">
                                <input class="form-control" name="cidade" type="text" id="cidade" placeholder="Cidade"
                                       readOnly="readOnly"/>
                            </div>
                            <div class="form-group col-md-4">
                                <input class="form-control" name="uf" type="text" id="uf" placeholder="Estado"
                                       readOnly="readOnly"/>
                            </div>
                            <div class=" form-group col-md-4">
                                <input class="form-control" name="ibge" type="text" id="ibge" placeholder="IBGE"
                                       readOnly="readOnly"/>
                            </div>


                        </div>
                        <div class=" row">
                            <div class="col-md-12">

                                <div class="col-md-6">

                                    <strong> Já fez curso de Informática? </strong>

                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="curso_info" id="infoRadio1" value="1" checked>
                                            Não.
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="curso_info" id="infoRadio2" value="2">
                                            Sim básico.
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="curso_info" id="infoRadio3" value="3">
                                            Sim completo.
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="curso_info" id="infoRadio4" value="4">
                                            Estou cursando.
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <strong> Já fez curso de Inglês?</strong>

                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="curso_ingl" id="englishRadio1" value="1"
                                                   checked>
                                            Não.
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="curso_ingl" id="englishRadio2" value="2">
                                            Sim básico.
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="curso_ingl" id="englishRadio3" value="3">
                                            Sim completo.
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="curso_ingl" id="englishRadio4" value="4">
                                            Estou cursando.
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div>


                                </div>

                                <div class="col-md-6">
                                    <strong> Qual sua escolaridade? </strong>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="escolaridade" id="escolaRadio1" value="1"
                                                   checked>
                                            Fundamental cursando
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="escolaridade" id="escolaRadio2" value="2">
                                            Fundamental completo
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="escolaridade" id="escolaRadio3" value="3">
                                            Médio cursando
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="escolaridade" id="escolaRadio4" value="4">
                                            Médio completo
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="escolaridade" id="escolaRadio5" value="5">
                                            Superior cursando
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="escolaridade" id="escolaRadio6" value="6">
                                            Superior superior
                                        </label>
                                    </div>
                                    <input type="hidden" name="in_teste" value="false">

                                </div>
                            </div>
                            <div class="preloader" style="display:none;">Enviando dados</div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default btn-lg" data-dismiss="modal">Cancelar
                                </button>
                                <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                            </div>
                        </div>

                    </form>
                </div><!-- end div screen -->
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="cursosDisponiveis" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Cursos Disponíveis</h4>
            </div>
            <div class="modal-body">
                <!-- LISTA DE CURSOS -->
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                                   aria-expanded="false" aria-controls="collapseOne">
                                    <strong>ADMINISTRAÇÃO</strong>
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                             aria-labelledby="headingOne">
                            <div class="panel-body">
                                <strong> Sobre a Administração:</strong>
                                <p>Todos os profissionais necessitam de uma visão ampla do funcionamento de sua empresa,
                                    seja qual for a área da
                                    mesma em que irá trabalhar. Essa visão garante ao profissional um entendimento
                                    melhor do seu trabalho dentro
                                    da organização.</p>
                                <b>Objetivo do curso:</b>
                                <p>Esse curso de Administração visa trazer essa visão da empresa ao aluno, de forma
                                    leve, procura passar conceitos
                                    que ajudarão muito no dia a dia profissional de todos. Procuramos mostrar como
                                    funcionam alguns processos
                                    que são rotineiros dentro de uma empresa e também uma visão geral dos setores mais
                                    importantes.</p>
                                <b>Carga horária: 12 aulas</b>
                                <p>
                                <li>Módulo 1 - Conceitos Básicos De Administração</li>
                                <li>Módulo 2 - A Criação E O Desenvolvimento Das Empresas</li>
                                <li>Módulo 3 - O Organograma Funcional Da Empresa Moderna</li>
                                <li>Módulo 4 - Definições</li>
                                <li>Módulo 5 - Funções De Apoio</li>
                                <li>Módulo 6 - Departamento De Compras</li>
                                <li>Módulo 7 - Área De Suprimentos E Materiais</li>
                                <li>Módulo 8 - Comercialização</li>
                                <li>Módulo 9 - Áreas Do Marketing</li>
                                <li>Módulo 10 - Área De Produção</li>
                                <li>Módulo 11 - Área Financeira</li>
                                <li>Avaliação</li>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                   href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <strong>TÉCNICAS DE REDAÇÃO</strong>
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                             aria-labelledby="headingTwo">
                            <div class="panel-body">
                                <strong>Sobre Técnicas de Redação:</strong>
                                <p>Todos os profissionais, independente da área que atuam, devem se aperfeiçoar na
                                    escrita, é uma ferramenta
                                    muito importante de interação e que as empresas valorizam muito quando e esperam que
                                    o profissional consiga
                                    expor suas ideias de forma clara e correta.</p>
                                <b>Objetivo do curso:</b>
                                <p>A proposta deste curso é ensinar ao aluno técnicas importantes para uma boa redação
                                    de textos, seja para utilizar
                                    esses conhecimentos em seus estudos, no trabalho ou até em concursos públicos que
                                    possam vir a prestar.</p>
                                <b>Carga horária: 8 aulas</b>
                                <li>Módulo 1 - Tipos E Níveis De Linguagem</li>
                                <li>Módulo 2 - Estrutura E Tipos De Texto</li>
                                <li>Módulo 3 - Gramática</li>
                                <li>Módulo 4 - Redação Oficial Nos Concursos Públicos</li>
                                <li>Módulo 5 - Redação Técnica</li>
                                <li>Avaliação</li>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <strong>CONTABILIDADE</strong>
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                Sobre a Contabilidade:
                                A Contabilidade registra todas as informações de transações da empresa e suas consolidações, dando condições
                                para que se transformem em informações estratégicas para gerentes, diretores, presidentes, acionistas e demais
                                interessados no desempenho da empresa.
                                Objetivo do curso:
                                Esse curso visa trazer ao aluno iniciante conhecimentos da estrutura contábil. De forma prática, os conceitos vão
                                sendo estudados e aplicados através de planilhas desenvolvidas em Excel, para que o aluno aprenda fazendo.
                                Carga horária: 12 aulas
                                ● Módulo 1 - Conceitos Gerais
                                ● Módulo 2 - Estática Patrimonial
                                ● Módulo 3 - Métodos De Partidas Dobradas
                                ● Módulo 4 - Prática Utilizando O Excel
                                ● Módulo 5 - Despesa, Receita E Resultado
                                ● Módulo 6 - Operações Com Mercadoria
                                ● Módulo 7 - Balanço Patrimonial - Aspectos
                                ● Módulo 8 - Formação E Natureza Das Contas
                                ● Módulo 9 - Ativo Imobilizado
                                ● Avaliação
                            </div>
                        </div>
                    </div>
            </div>
            <!-- FIM LISTA DE CURSOS -->
        </div>
    </div>
</div>
</div>

</body>


</html>

