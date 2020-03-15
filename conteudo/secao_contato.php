<div id="contato">
  <div class="secao_contato">
    <div class="container">
      <div class="scroll_animado">
        <!-- Botão para acionar modal -->
        <div align = "center">
          <h1 class="pb-4">Contato</h1>
          <button type="button" class="btn btn-outline-light btn-lg texto_botao sombra btn_contato" data-toggle="modal" data-target=".bd-example-modal-lg">Entre em contato</button>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <!-- FORMULÁRIO ESTÁ POSICIONADO EM OUTRO ARQUIVO-->
      <?php require_once "conteudo/conteudo_secao_contato.php"?> 
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-light btn-lg texto_botao btn_ambiente btn_preto" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-outline-light btn-lg texto_botao btn_ambiente btn_laranja">Enviar</button> 
      </div>

    </div>
  </div>
</div>
<!-- Modal -->