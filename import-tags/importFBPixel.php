<?php
  // indica se o script do facebook pixel (fbq) deve ser importado ou não.
  // Mude este valor conforme necessário.
  $shouldImportFbq = true;

  // id do pixel
  $fbId = '2986905328206129';
?>

<?php if($shouldImportFbq): ?>

<!-- Facebook Pixel Code -->
<script>
! function(f, b, e, v, n, t, s) {
  if (f.fbq) return;
  n = f.fbq = function() {
    n.callMethod ?
      n.callMethod.apply(n, arguments) : n.queue.push(arguments)
  };
  if (!f._fbq) f._fbq = n;
  n.push = n;
  n.loaded = !0;
  n.version = '2.0';
  n.queue = [];
  t = b.createElement(e);
  t.async = !0;
  t.src = v;
  s = b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t, s)
}(window, document, 'script',
  'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '<?= $fbId ?>');
fbq('track', 'PageView');
</script>
<noscript>
<img height="1" width="1" alt="facebook" style="display:none"
    src="https://www.facebook.com/tr?id=<?= $fbId ?>&ev=PageView&noscript=1" />
</noscript>
<!-- End Facebook Pixel Code -->

<!-- função de integração com facebook pixel -->
<script src="assets/js/integracao/fbpixel.js"></script>


<?php endif; ?>