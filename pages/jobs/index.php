<?php

if(path(2)) {
  $job = $sqlite->select('jobs', [
    'id' => path(2)
  ])[0];

  define('ROUTE', [
    ["{$job['id']}"]
  ]);
} else {
  $jobs = $sqlite->select('jobs', 'id, title');
}

?>

<?php if(path(2)) { ?>
  <h1><a href="<?= path('/jobs/'); ?>">Jobs</a></h1>
  <h2><?= $job['title']; ?><h2>
  <p><?= $job['details']; ?></p>
<?php } else { ?>
  <h1>Jobs</h1>
  <?php if($jobs) { ?>
    <ul>
      <?php foreach(array_reverse($jobs) as $job) { ?>
        <li><a href="<?= path("/jobs/{$job['id']}/"); ?>"><?= $job['title']; ?></a></li>
      <?php } ?>
    </ul>
  <?php } else { ?>
    <p>No jobs have been created.</p>
  <?php } ?>
  <a href="<?= path('/jobs/create/'); ?>">Create Job</a>
<?php } ?>