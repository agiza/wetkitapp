<div id="ribbon-container" style="background-color:<?php echo $ribbon_color; ?>; color:<?php echo $ribbon_font_color; ?>;">
    <div id="ribbon-label">
        <?php echo $ribbon_caption; ?>
    </div>
    <?php  if ($ribbon_hidden) { ?>
        <a href="javascript:void(0);" onClick="this.parentNode.style.display = 'none'" id="ribbon-command">
            <image src="<?php  echo $ribbon_hidden_icon; ?>" >
        </a>
    <?php } ?>
</div>
