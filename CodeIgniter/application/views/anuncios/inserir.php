<?php include $_SERVER['DOCUMENT_ROOT'] . '/Trabalho-Arquitetura/CodeIgniter/application/views/partials/head.php'; ?>

<body id="background_inserir">
    <div id="principal">

        <?php include $_SERVER['DOCUMENT_ROOT'] . '/Trabalho-Arquitetura/CodeIgniter/application/views/partials/header.php'; ?>

            <section>

                <div id="secao">
                    <div class="grupo-formulario linha">

                    <p class="estilo2">Preencha os campos abaixo para inserir seu anúncio.</p>
                 
                    </div>

                    <form action="<?= base_url(); ?>/index.php/anuncio/salvar" method="POST" id="formulario">

                        <div class="grupo-formulario linha">
                            <label for="descricao" class="estilo2">Descrição</label>
                            <textarea id="descricao" name="anuncio[descricao]" cols="40" rows="5" minlength="10" maxlength="200"></textarea>
                        </div>

                        <div class="grupo-formulario">

                            <label for="tipo" class="estilo2">Tipo</label>
                         
                            <select id="tipo" name="anuncio[tipo]">
                                <option value="peca">Peça</option>
                                <option value="bicicleta">Bicicleta</option>
                            </select>

                        </div>

                        <div class="grupo-formulario">

                            <label for="tamanho-aro" class="estilo2">Tamanho do aro</label>

                            <select id="tamanho-aro" name="produto[tamanhoAro]">
                                <option>16</option>
                                <option>20</option>
                                <option>24</option>
                                <option>26</option>
                                <option>28</option>
                                <option>30</option>
                            </select>

                        </div>

                        <div class="grupo-formulario">

                            <label for="quantidade-marcha" class="estilo2">Quantidade de Marcha</label>

                            <select id="quantidade-marcha" name="produto[quantidadeMarcha]">
                                <option>18</option>
                                <option>24</option>
                                <option>28</option>
                            </select>

                        </div>

                        <div class="grupo-formulario">

                            <fieldset>

                                <legend>Suspensão Dianteira</legend>

                                <input type="radio" id="suspensao-sim" name="produto[suspensaoDianteira]" value="1">
                                <label class="linha" for="suspensao-sim">Sim</label>
                                
                                <input type="radio" id="suspensao-nao" name="produto[suspensaoDianteira]" value="0">
                                <label class="linha" for="suspensao-nao">Não</label>

                            </fieldset>   

                        </div>

                        <div class="grupo-formulario">

                            <fieldset>

                                <legend>Suspensão Completa</legend>

                                <input type="radio" id="suspensao-sim" name="produto[fullsuspension]" value="1">
                                <label class="linha" for="suspensao-sim">Sim</label>
                                
                                <input type="radio" id="suspensao-nao" name="produto[fullsuspension]" value="0">
                                <label class="linha" for="suspensao-nao">Não</label>

                            </fieldset>   

                        </div>
                        
                        <div class="grupo-formulario">

                            <label for="valor" class="estilo2">Valor</label>
                            <input type="number" id="valor" name="anuncio[preco]">

                        </div>

                        <div class="grupo-formulario linha">

                            <button type="submit">Salvar</button>

                        </div>
                     
                    </form>
                </div>

            </section>

        </div>

 <?php include $_SERVER['DOCUMENT_ROOT'] . '/Trabalho-Arquitetura/CodeIgniter/application/views/partials/foot.php'; ?>
 