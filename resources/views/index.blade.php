<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Squad | Chamada</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Mukta:wght@400;500&family=Ubuntu:ital,wght@0,400;0,500;1,400;1,500&display=swap"
        rel="stylesheet">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <section class="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center img-header">
                        <img src="{{ asset('img/logo.png') }}" alt="">
                    </div>
                </div>
            </div>

            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-6 item-header">
                        <img src="{{ asset('img/intro.png') }}" alt="">
                        <div class="pattern">
                            <img src="{{ asset('img/plus.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-md-6 item-header">
                        <h2>Recruta <br>
                            Qlik <br>
                            Sense</h2>

                        <button class="btn btn-header">
                            INSCREVA-SE
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </header>

    <section class="about">
        <div class="container">
            <div class="row ">
                <div class="col-md-6 about-item">
                    <div class="intro-text">
                        <h3>Quem Somos</h3>
                        <span class="line"></span>
                    </div>

                    <p>Meu nome é Rodolfo Barbosa, sou fundador do Data Squad, idealizador do BI Canvas,
                        já palestrei em grandes eventos de tecnologia e atuei em mais de 40 projetos de
                        Business Intelligence e Analytcs. Atualmente possuo mais de 8000 seguidores no
                        Linkedin, onde produzo conteúdo com frequência sobre dados analytics e Qlik.<br><br> Tenho
                        mais de 800 inscritos em meu canal do YouTube, considerado um dos maiores no nicho
                        tecnológico de dados.<br><br>
                        Já treinei mais de 100 profissionais presencialmente e mais de 500 profissionais no
                        ambiente online.
                        Além disso, contribui com a criação de comunidades de análise de dados,
                        empreendedorismo, produção de conteúdo, entre outros.


                        </p>
                    <div class="benefics">
                        <div class="item-benefics">
                            <img src="{{ asset('img/check.png') }}" alt="">
                            <p>CURSO COMPLETO COM AULAS GRAVADAS
                            </p>
                        </div>
                        <div class="item-benefics">
                            <img src="{{ asset('img/check.png') }}" alt="">
                            <p>SUPORTE PERSONALIZADO</p>
                        </div>
                        <div class="item-benefics">
                            <img src="{{ asset('img/check.png') }}" alt="">
                            <p>PROVADO POR MAIS DE 100 ALUNOS
                            </p>
                        </div>
                        <div class="item-benefics">
                            <img src="{{ asset('img/check.png') }}" alt="">
                            <p>CERTIFICADO
                            </p>
                        </div>
                        <div class="item-benefics">
                            <img src="{{ asset('img/check.png') }}" alt="">
                            <p>RECONHECIMENTO DO MERCADO
                            </p>
                        </div>
                        <div class="item-benefics">
                            <img src="{{ asset('img/check.png') }}" alt="">
                            <p>NETWORKING
                            </p>
                        </div>
                    </div>

                    <button class="btn btn-normal">INSCREVA-SE</button>
                </div>
                <div class="col-md-6 about-item">
                    <img src="{{ asset('img/video.png') }}" alt="">
                    <div class="pattern2">
                        <img src="{{ asset('img/play.png') }}" alt="" data-bs-toggle="modal"
                            data-bs-target="#vidModal">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="payment">
        <div class="blob1">
            <img src="{{ asset('img/blob1.png') }}" alt="">
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-6 payment-item">
                    <div class="intro-text">
                        <h3>Pagamento</h3>
                        <span class="line"></span>
                    </div>

                    <p>DURANTE A PANDEMIA ESTAMOS COM 50% DE DESCONTO.FAÇA COMO
                        DEZENAS DE ALUNOS E SEJA UM PROFISSIONAL DESEJADO PELO MERCADO.</p>

                    <div class="item-sales">
                        <div class="sales">
                            <img src="{{ asset('img/pix.png') }}" alt="">
                            <h4>PIX</h4>
                        </div>
                        <div class="sales">
                            <img src="{{ asset('img/banco.png') }}" alt="">
                            <h4>Transferência bancária</h4>
                        </div>
                        <div class="sales">
                            <img src="{{ asset('img/card.png') }}" alt="">
                            <h4>Cartão de crédito</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 payment-item">
                    <div class="recruta">
                        <h3>Recruta Qlick Sense</h3>
                        <p>
                            Os alunos recebem certificado<br>
                            18 horas/aula<br>
                            a acesso posterior italício
                        </p>

                        <p class="price">
                            <span class="short-price">
                                de R$1.380<br>
                            </span>
                            POR R$690
                        </p>

                        <button class="btn btn-price">INSCREVA-SE</button>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="content">
        <div class="container">
            <div class="row mt-5">
                <div class="intro-text">
                    <h3>Conteúdo Programático</h3>
                    <span class="line"></span>
                </div>
                <div class="col-md-3 item-content" data-aos="fade-up"
                data-aos-duration="3000">
                    <img src="{{ asset('img/bi.png') }}" alt="">

                    <h4>Mercado de BI
                    </h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed id sed sed sed ut congue facilisi pellentesque. Vitae nibh leo nulla suspendisse. Scelerisque </p>
                </div>
                <div class="col-md-3 item-content" data-aos="fade-up"
                data-aos-duration="3000">
                    <img src="{{ asset('img/data.png') }}" alt="">

                    <h4>Introdução a Dados

                    </h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed id sed sed sed ut congue facilisi pellentesque. Vitae nibh leo nulla suspendisse. Scelerisque </p>
                </div>

                <div class="col-md-3 item-content" data-aos="fade-up"
                data-aos-duration="3000">
                    <img src="{{ asset('img/qlick.png') }}" alt="">

                    <h4>O que é Qlik Sense?
                    </h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed id sed sed sed ut congue facilisi pellentesque. Vitae nibh leo nulla suspendisse. Scelerisque </p>
                </div>

                <div class="col-md-3 item-content" data-aos="fade-up"
                data-aos-duration="3000">
                    <img src="{{ asset('img/desktop.png') }}" alt="">

                    <h4>Conhecendo o Qlik Sense Desktop
                    </h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed id sed sed sed ut congue facilisi pellentesque. Vitae nibh leo nulla suspendisse. Scelerisque </p>
                </div>
            </div>

            <div class="row mt-5">

                <div class="col-md-3 item-content" data-aos="fade-up"
                data-aos-duration="2000">
                    <img src="{{ asset('img/file.png') }}" alt="">

                    <h4>Importando o primeiro
                        arquivo

                    </h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed id sed sed sed ut congue facilisi pellentesque. Vitae nibh leo nulla suspendisse. Scelerisque </p>
                </div>
                <div class="col-md-3 item-content" data-aos="fade-up"
                data-aos-duration="2000" >
                    <img src="{{ asset('img/metrics.png') }}" alt="">

                    <h4>Criando métricas

                    </h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed id sed sed sed ut congue facilisi pellentesque. Vitae nibh leo nulla suspendisse. Scelerisque </p>
                </div>

                <div class="col-md-3 item-content" data-aos="fade-up"
                data-aos-duration="2000">
                    <img src="{{ asset('img/grafics.png') }}" alt="">

                    <h4>Criando Gráficos
                    </h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed id sed sed sed ut congue facilisi pellentesque. Vitae nibh leo nulla suspendisse. Scelerisque </p>
                </div>

                <div class="col-md-3 item-content" data-aos="fade-up"
                data-aos-duration="2000">
                    <img src="{{ asset('img/itens.png') }}" alt="">

                    <h4>Itens Mestres

                    </h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed id sed sed sed ut congue facilisi pellentesque. Vitae nibh leo nulla suspendisse. Scelerisque </p>
                </div>
            </div>

            <div class="row mt-5">

                <div class="col-md-3 item-content" data-aos="fade-up"
                data-aos-duration="1000">
                    <img src="{{ asset('img/modelagem.png') }}" alt="">

                    <h4>Modelagem Básica

                    </h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed id sed sed sed ut congue facilisi pellentesque. Vitae nibh leo nulla suspendisse. Scelerisque </p>
                </div>
                <div class="col-md-3 item-content" data-aos="fade-up"
                data-aos-duration="1000">
                    <img src="{{ asset('img/story.png') }}" alt="">

                    <h4>Data Storytelling

                    </h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed id sed sed sed ut congue facilisi pellentesque. Vitae nibh leo nulla suspendisse. Scelerisque </p>
                </div>

                <div class="col-md-3 item-content" data-aos="fade-up"
                data-aos-duration="1000">
                    <img src="{{ asset('img/script.png') }}" alt="">

                    <h4>Script Básico
                    </h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed id sed sed sed ut congue facilisi pellentesque. Vitae nibh leo nulla suspendisse. Scelerisque </p>
                </div>

                <div class="col-md-3 item-content" data-aos="fade-up"
                data-aos-duration="1000">
                    <img src="{{ asset('img/project.png') }}" alt="">

                    <h4>Projeto Completo

                    </h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed id sed sed sed ut congue facilisi pellentesque. Vitae nibh leo nulla suspendisse. Scelerisque </p>
                </div>
            </div>
        </div>
    </section>

    <section class="bonus">
        <div class="triangule">
            <img src="{{ asset('img/triangulo.png') }}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="intro-text">
                    <h3>Conteúdo Programático</h3>
                    <span class="line"></span>
                </div>
                <div class="col-md-6 ">
                    <div class="item-about">
                    <img src="{{asset('img/start.png')}}" alt="">
                    <h4>Centro de Excelência em B.I</h4>
                </div>
                </div>
                <div class="col-md-6 ">
                    <div class="item-about">
                        <img src="{{asset('img/talk.png')}}" alt="">
                        <h4>Por onde começar?
                        </h4>
                    </div>
                </div>
            </div>
            <div class="row mt-5">

                <div class="col-md-6 ">
                    <div class="item-about">
                    <img src="{{asset('img/work.png')}}" alt="">
                    <h4>Pra quem serve o Centro de Excelência</h4>
                </div>
                </div>
                <div class="col-md-6 ">
                    <div class="item-about">
                        <img src="{{asset('img/coment.png')}}" alt="">
                        <h4>03 projetos funcionais comentados

                        </h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="triangule2">
            <img src="{{ asset('img/triangulo.png') }}" alt="">
        </div>
    </section>


    <section class="finale">
        <div class="container">
            <div class="row">
                <div class="col-md-12 item-finale text-center">
<h3>GANHE UM CERTIFICADO INCRÍVEL PARA FECHAR MUITOS CONTRATOS!</h3>
<p>Pare de perder tempo, domine o assunto mais requisitado pelas empresas de todo
    mundo!.</p>

<button class="btn btn-finale">
    INSCREVA-SE
</button>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <img src="{{asset('img/logo.png')}}" alt="" class="logo">

                    <div class="icons-redes">
                        <img src="{{asset('img/youtube.png')}}" alt="">
                        <img src="{{asset('img/linkedin.png')}}" alt="">

                        <img src="{{asset('img/instagram.png')}}" alt="">

                        <img src="{{asset('img/facebook.png')}}" alt="">


                    </div>
                </div>
            </div>
        </div>
    </footer>

    {{-- =====================MODAL==================== --}}
    <div class="modal fade" id="vidModal" tabindex="-1" aria-labelledby="vidModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <iframe width="100%" height="400" src="https://www.youtube.com/embed/_df79tBA8Ko" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
        integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
        integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
      </script>
</body>

</html>
