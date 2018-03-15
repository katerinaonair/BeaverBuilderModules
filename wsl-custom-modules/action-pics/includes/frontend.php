<?php

/**
 * This file should be used to render each module instance.
 * You have access to two variables in this file:
 *
 * $module An instance of your module class.
 * $settings The module's settings.
 *
 *
 */

?>

<div class="fl-actionpics">
<div class="grid" >
  <figure class="effect-bubba">
    <?php printf (   '<img src="%s" border="0">', $settings->actionimg_photo_field_src );?>
      <figcaption>
        <h2><?php echo $settings->textarea_field; ?></h2>
        <p><?php echo $settings->textarea_field2; ?></p>
        <a href="<?php echo $settings->my_link_field; ?>"></a>
      </figcaption>
    </figure>
</div>
</div>
