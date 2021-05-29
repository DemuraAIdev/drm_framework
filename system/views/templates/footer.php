<?php

use Drm\Core\DRM;
use Drm\Core\classes\Asset;
?>

<script src="<?php BASEURL ?>animejs/lib/anime.min.js"></script>
<?php
Asset::jquery();
Asset::bootstrap('js');
Asset::js('anime.js', array('type' => 'module'));

?>
<script>
var url = "<?php echo BASEURL;; ?>";
</script>
<script src="<?= BASEURL; ?>js/script.js">
</script>
</body>

</html>