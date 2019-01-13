<?php
use \ehsanx64\phplib\Environment;

$e = new Environment();
if ($e->is('wordpress')) {
    if (get_locale() === 'fa_IR') {
      wp_enqueue_style('persianizer', EMPRESS_ASSETS . "/persianizer/persianizer.css");
    }
}