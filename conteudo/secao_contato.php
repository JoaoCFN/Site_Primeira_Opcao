<div id="contato">
  <div class="secao_contato">
    <div class="container">
      <div class="scroll_animado">
        <div align = "center">
          <h1 class="pb-4">Contato</h1>
          <div class="justify-content-center">
            <div class="col-sm-8 pb-4">
              <div class="row justify-content-center">
                <div class="col-sm-3">
                  <a href="tel:753221-6776">
                    <p>
                      (75) 3221-6776
                    </p>
                  </a> 

                  <a href="tel:75988569612">
                    <p>
                      (75) 988569612
                    </p>
                  </a>
                    
                </div>

                <div class="col-sm-3 align-self-center">
                  <a target="_blank" href="https://api.whatsapp.com/send?phone=5575988569612&text=Ol%C3%A1%20tudo%20bem%3F!%20Gostaria%20de%20fazer%20um%20pedido..."><i class="fa fa-whatsapp mr-3"></i></a>
                  <a target="_blank" href="https://www.instagram.com/restaurante1opcao/?hl=pt-br"><i class="fa fa-instagram"></i></a>                
                </div>

              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <!-- Botão para acionar modal -->
            <button type="button" class="btn btn-outline-light btn-lg texto_botao sombra btn_contato" data-toggle="modal" data-target=".modal_form">Formulário</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade modal_form" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <!-- FORMULÁRIO ESTÁ POSICIONADO EM OUTRO ARQUIVO-->
      <?php require_once "modals/conteudo_secao_contato.php"?> 
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-light btn-lg texto_botao btn_ambiente btn_preto" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-outline-light btn-lg texto_botao btn_ambiente btn_laranja">Enviar</button> 
      </div>

    </div>
  </div>
</div>
<!-- Modal -->