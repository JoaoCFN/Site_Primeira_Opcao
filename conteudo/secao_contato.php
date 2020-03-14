<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Formulário de contato</button>

<!-- Botão para acionar modal -->
<div align = "center">

</div>

<!-- Modal -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <!-- FORMULÁRIO ESTÁ POSICIONADO EM OUTRO ARQUIVO-->
      <?php require_once "conteudo/conteudo_secao_contato.php"?> 
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Salvar mudanças</button> 
    </div>

  </div>
</div>
<!-- Modal -->