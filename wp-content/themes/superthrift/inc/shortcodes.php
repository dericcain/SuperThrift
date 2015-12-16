<?php

add_shortcode('separator', 'superthrift_shortcode_separator');

function superthrift_shortcode_separator($attrs, $content) {

    $side = 'left';

    if (isset($attrs['side'])) {
        $side = $attrs['side'];
    }

    return '
    <div class="separator-wrapper"> ' . $content . '
    <div class="line-separator-' . $side . '">
        <span class="line-start"></span><span class="line-middle"></span><span class="line-end"></span>
    </div></div>';
    
}