<?php
$CONFIG = array (
  'dbtype' => 'mysql',
  'dbname' => getenv('RDS_DB_NAME'),
  'dbhost' => getenv('RDS_HOST'),
  'dbuser' => getenv('RDS_USERNAME'),
  'dbpassword' => getenv('RDS_PASSWORD'),
  'objectstore' => [
    'class' => '\\OC\\Files\\ObjectStore\\S3',
    'arguments' => [
      'bucket' => getenv('S3_BUCKET'),
      'key' => getenv('AWS_ACCESS_KEY_ID'),
      'secret' => getenv('AWS_SECRET_ACCESS_KEY'),
      'region' => 'ap-northeast-2',
      'use_ssl' => true,
      'use_path_style' => false,
      'hostname' => 's3.ap-northeast-2.amazonaws.com',
      'port' => 443,
    ],
  ],
  'installed' => false,  // 처음 배포할 땐 false 또는 제거
);

