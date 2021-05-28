<!-- Integração com CRMs -->
<?php 
  //require 'importGtag.php';
  //require 'importFBPixel.php';
  //require 'importHouseCrm.php';
  //require 'importRdStation.php';

?>

<script>
  // parâmetros para novocrm
  // as variáveis $device e $parameters são definidas em index.php
  const device = "<?= $device ?>";
  const parameters = "<?= $parameters ?>";
</script>


<script src="assets/js/processa.js"></script>
<script src="assets/js/integracao/anapro.js"></script>
<script src="assets/js/integracao/itaplan.js"></script>
<script src="assets/js/integracao/novocrm.js"></script>


<?php include_once 'assets/js/forms.php'?>