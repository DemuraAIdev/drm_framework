<?php

use Drm\Core\DRM;
use Drm\Core\classes\Asset;
?>


<?php
Asset::bootstrap('js');
Asset::animejs();

?>
<script>
var url = "<?php echo BASEURL;; ?>";
var ver = "<?php echo DRM::version('All') ?>";
</script>
<script src="<?= BASEURL; ?>js/script.js">
</script>
</body>

</html>