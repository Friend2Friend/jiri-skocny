<?php

function navigationList(){

  $files = glob('*.php');

  foreach ($files as $file) {
    $file = basename($file, '.php');
    $file_cap = ucfirst(basename($file, '.php'));

    if ($file === 'index') {
      $file = '/websiteApp';
    }

    if ($file_cap === 'Index') {
      $file_cap = 'Home';
    }

    echo '<li class="list-item" id="'.$file.'"><a href='.$file.'>'.$file_cap.'</a></li>';
  }
}

?>