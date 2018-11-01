
<?php  include $_SERVER['DOCUMENT_ROOT'] . '/application/views/partials/head.php'; ?>


<body id="background">
    <div id="principal">

        <?php include $_SERVER['DOCUMENT_ROOT'] . '/application/views/partials/header.php'; ?>

            <section>
                <div id="secao">
                    <p class = "estilo2">Preencha os campos abaixo para inserir seu anúncio. </p>
                    <form action="/index.php/anuncios/salvar" method="POST" id="formulario">
                        <div>
                            <label class="estilo2">Descrição<br></label>
                            <textarea name= "textarea" cols="40" rows="5" minlength="10" maxlength="200"></textarea>
                        </div>
                        <div>
                            <label class="estilo2"><br>Tipo<br></label>
                            <select id="select" name="tipo">
                                <option>Peça</option>
                                <option>Produto</option>
                            </select>
                        </div>
                        <div>
                            <label class="estilo2"><br>Suspensão<br></label>
                            <div id="selectsuspension">
                                <ul>
                                    <ol>
                                        <label for="suspension" id="suspensao">Sim</label>
                                        <input type="radio" id="susp" name="suspensao" value="sim">
                                    
                                        <label for="suspension" id="suspensao">Não</label>
                                        <input type="radio" id="susp" name="suspensao" value="nao">
                                    </ol>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <label class="estilo2"><br>Valor<br></label>
                            <input type="text" />
                        </div>
                        <div>
                            <label class="estilo2"><br><br></label>
                            <input type="submit" value ="Salvar"/>
                        </div>
                    </form>
                </div>
            </section>
        </div>

 <?php include $_SERVER['DOCUMENT_ROOT'] . '/application/views/partials/foot.php'; ?>