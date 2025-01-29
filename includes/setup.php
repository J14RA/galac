<?php

function u_setup_theme() {
  add_theme_support('editor-styles');

  add_editor_style([
    'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap',
    'assets/bootstrap-icons/bootstrap-icons.css',
    'assets/public/index.css',
    'assets/editor.css'
  ]);
}