<?php
    function snippet_internal_video($atts)
    {
        ob_start();
    ?>
        <video
        width="<?=$atts["width"]?>"
        height="<?=$atts["width"]?>"
        poster="<?=wp_upload_dir()["url"] . "/" . $atts["poster"]?>"
        <?php if ($atts["mp4"]) { ?>
            src="<?=wp_upload_dir()["url"] . "/" . $atts["mp4"]?>"
        <?php } else { ?>
            src="<?=wp_upload_dir()["url"] . "/" . $atts["ogg"]?>"
        <?php } ?>
        <?php if ($atts["controls"] === true) {echo "controls";}?>
        <?php if ($atts["autoplay"] === true) {echo "autoplay";}?>
        <?php if ($atts["muted"] === true) {echo "muted";}?>>
        <?php if ($atts["mp4"]) {?>
            <source src="<?=wp_upload_dir()["url"] . "/" . $atts["mp4"]?>" type="video/mp4">
        <?php }?>
        <?php if ($atts["ogg"]) {?>
            <source src="<?=wp_upload_dir()["url"] . "/" . $atts["ogg"]?>" type="video/ogg">
        <?php }?>
            Your browser does not support the video tag.
        </video>
<?php
return ob_get_clean();}
add_shortcode("internal_video", "snippet_internal_video");