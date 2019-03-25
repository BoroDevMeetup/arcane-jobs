<?php

return [
  'title' => [
    'type' => 'text',
    'placeholder' => 'Job Title'
  ],

  'company' => [
    'type' => 'text',
    'placeholder' => 'Company Name'
  ],

  'description' => [
    'type' => 'textarea',
    'placeholder' => 'Description Details'
  ],

  'employment' => [
    'type' => 'select',
    'placeholder' => 'Employment Type',
    'options' => [
      'internship' => 'Internship',
      'freelance' => 'Freelance',
      'parttime' => 'Part Time',
      'fulltime' => 'Full Time'
    ]
  ],

  'experience' => [
    'type' => 'select',
    'placeholder' => 'Experience Range',
    'options' => [
      'junior' => 'Junior',
      'midlevel' => 'Midlevel',
      'senior' => 'Senior'
    ]
  ],

  'website' => [
    'type' => 'text',
    'placeholder' => 'Application Website'
  ],

  'location' => [
    'type' => 'text',
    'placeholder' => 'Office Location'
  ]
]

?>