<?php
$aws_key = getenv('AWS_ACCESS_KEY_ID') ?: '';
$aws_secret = getenv('AWS_SECRET_ACCESS_KEY') ?: '';
$rds_dbname = getenv('RDS_DB_NAME') ?: '';
$rds_host = getenv('RDS_HOST') ?: '';
$rds_user = getenv('RDS_USERNAME') ?: '';
$rds_pass = getenv('RDS_PASSWORD') ?: '';
$s3_bucket = getenv('S3_BUCKET') ?: '';

$CONFIG = array (
  'htaccess.RewriteBase' => '/',
  'memcache.local' => '\\OC\\Memcache\\APCu',
  'datadirectory' => '/var/www/html/data',
  'trusted_domains' => [
    0 => 'localhost',
    1 => '192.168.1.41',
  ],
  'objectstore' => [
    'class' => '\\OC\\Files\\ObjectStore\\S3',
    'arguments' => [
      'bucket' => $s3_bucket,
      'autocreate' => false,
      'key'    => $aws_key,
      'secret' => $aws_secret,
      'region' => 'ap-northeast-2',
      'use_ssl' => true,
      'use_path_style' => false,
      'hostname' => 's3.ap-northeast-2.amazonaws.com',
      'port' => 443,
    ],
  ],
  'dbtype' => 'mysql',
  'dbname' => $rds_dbname,
  'dbhost' => $rds_host,
  'dbport' => '',
  'dbuser' => $rds_user,
  'dbpassword' => $rds_pass,
  'installed' => false 
);
