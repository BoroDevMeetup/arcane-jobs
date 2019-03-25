<?php

if(path(2)) {
  $job = $sqlite->select('jobs', [
    'id' => path(2)
  ])[0];

  define('ROUTE', [
    ["{$job['id']}"]
  ]);
} else {
  $jobs = $sqlite->select('jobs');
}

?>

<?php if(path(2)) { ?>
  <h1><a href="<?= path('/jobs/'); ?>">Jobs</a></h1>
  <h2><?= $job['title']; ?><?= $if($job['company'], $job['company'], '(%s)'); ?></h2>
  <p><?= $job['description']; ?></p>
  <ul>
    <li>Location: <?= $job['location']; ?></li>
    <?php if($job['employment']) { ?>
      <li>Employment: <?= $job['employment']; ?></li>
    <?php } ?>
    <?php if($job['experience']) { ?>
      <li>Experience: <?= $job['experience']; ?></li>
    <?php } ?>
    <?php if($job['website']) { ?>
      <li>Website: <?= $job['website']; ?></li>
    <?php } ?>
  </ul>
<?php } else { ?>
  <h1>Jobs</h1>
  <?php if($jobs) { ?>
    <ul>
      <?php foreach(array_reverse($jobs) as $job) { ?>
        <li><a href="<?= path("/jobs/{$job['id']}/"); ?>"><?= $job['title']; ?><?= $if($job['company'], $job['company'], '(%s)'); ?></a><br /><?= $truncate($job['description']); ?></li>
      <?php } ?>
    </ul>
  <?php } else { ?>
    <p>No jobs have been created.</p>
  <?php } ?>
  <a href="<?= path('/jobs/create/'); ?>">Create Job</a>
<?php } ?>