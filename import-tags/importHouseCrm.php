<?php
  // indica se o script do suahouse crm deve ser importado ou não.
  // Mude este valor conforme necessário.
  $shouldImportHouseCrm = false;

  // url remota do script do suahouse crm
  $houseCrmSrc = '';
?>

<?php if($shouldImportHouseCrm): ?>

<!-- script remoto do CRM sua house -->
<script src="<?= $houseCrmSrc ?>"></script>
<script src="assets/js/integracao/suahouse.js"></script>

<?php endif; ?>