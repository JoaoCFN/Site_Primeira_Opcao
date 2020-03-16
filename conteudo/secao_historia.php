<div class="pt-4">
  <div id="historia">
    <div class="secao_historia">
      <div class="container">
        <div class="scroll_animado">
          <div align = "center">
            <h1 class="pb-1 sombra">História</h1>
            <div class="justify-content-center">
              <div class="row col-sm-8 pb-4">

              </div>
            </div>
            <div class="col-sm-4">
            	<!-- Botão para acionar modal -->
              <div class="sombra">
                <button type="button" class="btn btn-outline-light btn-lg texto_botao btn_contato" data-toggle="modal" data-target=".modal_historia">Conheça nossa história</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade modal_historia" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <!-- FORMULÁRIO ESTÁ POSICIONADO EM OUTRO ARQUIVO-->
      <?php require_once "modals/conteudo_secao_historia.php"?> 
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-light btn-lg texto_botao btn_ambiente btn_preto" data-dismiss="modal">Fechar</button>
      </div>

    </div>
  </div>
</div>
<!-- Modal -->