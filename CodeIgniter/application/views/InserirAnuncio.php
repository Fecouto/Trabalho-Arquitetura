<!doctype html>
<html>
    <HEAD>
           <title>Anúncios Bicicletas</title>
           <meta charset="utf-8" />
           <link rel="stylesheet" type="text/css" href="Estilo.css"/>
    </HEAD>
    <body id="corpo">
        <div id="principal">
            <header>
                <div id="cabecalho">
                    <a href="index.php"><img src="img/201220130617091943bike2.jpg" alt="Icone Bike" id="logo"> </a>
                    <h1>ENCONTRE A BIKE PARA O SEU ESTILO</h1>

                </div>
            </header>
            <nav>
                <div id="navegador">
                    <ul>
                        <ol>
                            <a href="index.php">HOME</a>
                            <a href="InserirAnuncio.php">INSERIR ANÚNCIO</a>
                        </ol>
                    </ul>
                </div>
            </nav>
            <section>
                <div id="secao">
                    <p class = "estilo2">Preencha os campos abaixo para inserir seu anúncio. </p>
                    <form action="anuncio.php" method="POST" id="formulario">
                        <label class="estilo2">Descrição<br></label>
                        <input type="text" />
                        <label class="estilo2"><br>Tipo<br></label>
                        <input type="text" />
                        <input type="submit" value ="Enviar"/>
                    </form>
                </div>
            </section>
        </div>
    </body>
</html>