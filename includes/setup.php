<?php 

function t_setup_theme() {
  add_theme_support('editor-styles');
  
  add_editor_style([
    'https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;1,400&display=swap',
    'assets/bootstrap-icons/bootstrap-icons.css',
    'assets/public/index.css'
  ]);
}