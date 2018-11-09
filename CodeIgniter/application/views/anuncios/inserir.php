<?php include $_SERVER['DOCUMENT_ROOT'] . '/Trabalho-Arquitetura/CodeIgniter/application/views/partials/head.php'; ?>

<body id="background">
    <div id="principal">

        <?php include $_SERVER['DOCUMENT_ROOT'] . '/Trabalho-Arquitetura/CodeIgniter/application/views/partials/header.php'; ?>

            <section>

                <div id="secao">

                    <p class="estilo2">Preencha os campos abaixo para inserir seu anúncio.</p>
                 
                    <form action="<?= base_url(); ?>/index.php/anuncios/salvar" method="POST" id="formulario">

                        <div class="grupo-formulario linha">
                            <label for="descricao" class="estilo2">Descrição</label>
                            <textarea id="descricao" name="descricao" cols="40" rows="5" minlength="10" maxlength="200"></textarea>
                        </div>

                        <div class="grupo-formulario">

                            <label for="tamanho-aro" class="estilo2">Tamanho do aro</label>
                           
                            <select id="tamanho-aro" name="tipo">
                                <option>18</option>
                                <option>20</option>
                            </select>

                        </div>

                        <div class="grupo-formulario">

                            <label for="tipo" class="estilo2">Tipo</label>
                         
                            <select id="tipo" name="tipo">
                                <option value="peca">Peça</option>
                                <option value="bicicleta">Bicicleta</option>
                            </select>

                        </div>

                        <div class="grupo-formulario">

                            <label for="valor" class="estilo2">Valor</label>
                            <input type="number" id="valor" name="preco">

                        </div>

                        <div class="grupo-formulario">

                            <fieldset>

                                <legend>Suspensão Completa</legend>

                                <input type="radio" id="suspensao-sim" name="suspensao" value="true">
                                <label class="linha" for="suspensao-sim">Sim</label>
                                
                                <input type="radio" id="suspensao-nao" name="suspensao" value="false">
                                <label class="linha" for="suspensao-nao">Não</label>

                            </fieldset>   

                        </div>      

                        <div class="grupo-formulario linha">

                            <button type="submit">Salvar</button>

                        </div>
                     
                    </form>
                </div>

            </section>

        </div>

 <?php include $_SERVER['DOCUMENT_ROOT'] . '/Trabalho-Arquitetura/CodeIgniter/application/views/partials/foot.php'; ?>
 