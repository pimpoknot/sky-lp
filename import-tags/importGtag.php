<?php 
  // indica se deve importar o script do gtag ou não. Mude este valor conforme necessário.
  $shouldImportGtag = true;

  // id do gtag
  $gtagId = 'UA-192604802-1';
?>

<?php if($shouldImportGtag): ?>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=<?= $gtagId ?>"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag() {
    dataLayer.push(arguments);
  }
  gtag('js', new Date());
  gtag('config', '<?= $gtagId ?>');
</script>

<!-- função de integração com gtag -->
<script src="assets/js/integracao/gtag.js"></script>

<?php endif; ?>