<?php

if($_POST = array_map('trim', $_POST)) {
  if(isset($_POST['create'])) {
    $capture = [
      'title' => $_POST['title'],
      'company' => $_POST['company'],
      'summary' => $_POST['summary'],
      'details' => $_POST['details'],
      'employment' => $_POST['employment'],
      'experience' => $_POST['experience'],
      'website' => $_POST['website'],
      'location' => $_POST['location']
    ];

    $sqlite->create('jobs', array_keys($capture));
    $sqlite->insert('jobs', $capture);
  }
}

?>

<h1><a href="<?= path('/jobs/'); ?>">Jobs</a></h1>
<form action="<?= path('/jobs/create/'); ?>" method="post" autocomplete="off">
  <input name="title" placeholder="Job Title" />
  <input name="company" placeholder="Company Name" />
  <textarea name="summary" placeholder="Short Description"></textarea>
  <textarea name="details" placeholder="Detail Description"></textarea>
  <select name="employment">
    <option value="internship">Internship</option>
    <option value="freelance">Freelance</option>
    <option value="parttime">Part Time</option>
    <option value="fulltime">Full Time</option>
  </select>
  <select name="experience">
    <option value="junior">Junior</option>
    <option value="widlevel">Midlevel</option>
    <option value="senior">Senior</option>
  </select>
  <input name="website" placeholder="Application Website" />
  <input name="location" placeholder="Office Location" />
  <button type="submit" name="create">Create Job</button>
</form>