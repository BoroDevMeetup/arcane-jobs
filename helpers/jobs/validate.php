<?php

return function($values) {
  foreach($values as $name => $value) {
    $error = false;

    switch($name) {
      case 'title':
      case 'description':
      case 'employment':
      case 'location':
        if(empty($value)) {
          $error = 'Required';
        }
      break;
    }

    if($error) {
      $errors[$name] = $error;
    }
  }

  return $errors ?? [];
}

?>