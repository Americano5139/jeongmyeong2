<?php
$CONFIG = array (
  'instanceid' => 'ocabcdef1234',
  'passwordsalt' => 'randomsaltstring',
  'secret' => 'supersecretvalue',
  'trusted_domains' =>
  array (
    0 => 'localhost',
    1 => '192.168.1.41',
  ),
  'datadirectory' => '/var/www/html/data',
  'dbtype' => 'mysql',
  'dbname' => getenv('RDS_DB_NAME'),
  'dbhost' => getenv('RDS_HOST'),
  'dbport' => '',
  'dbuser' => getenv('RDS_USERNAME'),
  'dbpassword' => getenv('RDS_PASSWORD'),
  'installed' => false,
);
