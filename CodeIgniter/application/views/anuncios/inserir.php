
<?php  include $_SERVER['DOCUMENT_ROOT'] . '/application/views/partials/head.php'; ?>


<body id="background">
    <div id="principal">

        <?php include $_SERVER['DOCUMENT_ROOT'] . '/application/views/partials/header.php'; ?>

            <section>
                <div id="secao">
                    <p class = "estilo2">Preencha os campos abaixo para inserir seu anúncio. </p>
                    <form action="/index.php/anuncios/salvar" method="POST" id="formulario">
                        <label class="estilo2">Descrição<br></label>
                        <input type="text" />
                        <label class="estilo2"><br>Tipo<br></label>
                        <input type="text" />
                        <input type="submit" value ="Enviar"/>
                    </form>
                </div>
            </section>
        </div>

 <?php include $_SERVER['DOCUMENT_ROOT'] . '/application/views/partials/foot.php'; ?>