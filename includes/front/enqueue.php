<?php

function t_enqueue()
{
    wp_register_style(
        't_font_rubik_and_quicksand',
        'https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;1,400&display=swap'
    );
    wp_register_style(
        't_bootstrap_icons',
        get_theme_file_uri('assets/bootstrap-icons/bootstrap-icons.css')
    );
    wp_register_style(
        't_theme',
        get_theme_file_uri('assets/public/index.css')
    );
}
