<?php

if($_POST = array_map('trim', $_POST)) {
  if(isset($_POST['create'])) {
    foreach($fields as $name => $field) {
      $values[$name] = $_POST[$name] ?? null;
    }

    $errors = $validate($values);

    if(empty($errors)) {
      $data = array_merge($values, [
        'date' => date('Y-m-d H:i:s')
      ]);

      $sqlite->create('jobs', array_keys($data));
      $sqlite->insert('jobs', $data);

      define('REDIRECT', '/jobs/');
    }
  }
}

?>

<h1><a href="<?= path('/jobs/'); ?>">Jobs</a></h1>
<form action="<?= path('/jobs/create/'); ?>" method="post" autocomplete="off">
  <?php foreach($fields as $name => $field) { ?>
    <?php switch($field['type']) { case 'text': ?>
      <input name="<?= $name; ?>" value="<?= $values[$name] ?? null; ?>" placeholder="<?= $field['placeholder']; ?><?= $if($errors[$name] ?? false); ?>"<?= $if(isset($errors[$name]), 'error', 'class'); ?> />
    <?php break; case 'textarea': ?>
      <textarea name="<?= $name; ?>" rows="5" placeholder="<?= $field['placeholder']; ?><?= $if($errors[$name] ?? false); ?>"<?= $if(isset($errors[$name]), 'error', 'class'); ?>><?= $values[$name] ?? null; ?></textarea>
    <?php break; case 'select': ?>
      <select name="<?= $name; ?>"<?= $if(isset($errors[$name]), 'error', 'class'); ?>>
        <option disabled="disabled" selected="selected"><?= $field['placeholder']; ?><?= $if($errors[$name] ?? false); ?></option>
        <?php foreach($field['options'] as $index => $value) { ?>
          <option value="<?= $value; ?>"<?= $if($value == ($values[$name] ?? null), 'selected="selected"'); ?>><?= $value; ?></option>
        <?php } ?>
      </select>
    <?php break; } ?>
  <?php } ?>
  <button type="submit" name="create">Create Job</button>
</form>