<?php

function u_enqueue() {
  wp_register_style(
    'u_font_poppins',
    'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap',
    [],
    null
  );
  wp_register_style(
    'u_bootstrap_icons',
    get_theme_file_uri('assets/bootstrap-icons/bootstrap-icons.css')
  );
  wp_register_style(
    'u_theme',
    get_theme_file_uri('assets/public/index.css')
  );

  wp_enqueue_style('u_font_poppins');
  wp_enqueue_style('u_bootstrap_icons');
  wp_enqueue_style('u_theme');
}