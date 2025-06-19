<?php
$aws_key    = getenv('AWS_ACCESS_KEY_ID') ?: '';
$aws_secret = getenv('AWS_SECRET_ACCESS_KEY') ?: '';
$rds_dbname = getenv('RDS_DB_NAME') ?: '';
$rds_host   = getenv('RDS_HOST') ?: '';
$rds_user   = getenv('RDS_USERNAME') ?: '';
$rds_pass   = getenv('RDS_PASSWORD') ?: '';
$s3_bucket  = getenv('S3_BUCKET') ?: '';

$CONFIG = array(
  'instanceid' => 'ocabcdef1234',
  'passwordsalt' => 'randomsaltstring',
  'secret' => 'supersecretvalue',
  'trusted_domains' => array(
    0 => 'localhost',
    1 => '192.168.1.41', # 필요 시 ALB 도메인 추가
  ),
  'datadirectory' => '/var/www/html/data',
  'dbtype' => 'mysql',
  'dbname' => $rds_dbname,
  'dbhost' => $rds_host,
  'dbport' => '',
  'dbuser' => $rds_user,
  'dbpassword' => $rds_pass,
  'installed' => true,
);

# ✅ S3 환경변수가 모두 설정되어 있으면 objectstore 설정 추가
if ($aws_key && $aws_secret && $s3_bucket) {
  $CONFIG['objectstore'] = array(
    'class' => '\\OC\\Files\\ObjectStore\\S3',
    'arguments' => array(
      'bucket' => $s3_bucket,
      'autocreate' => true,
      'key' => $aws_key,
      'secret' => $aws_secret,
      'region' => 'ap-northeast-2',
      'use_ssl' => true,
      'use_path_style' => false,
      'hostname' => 's3.ap-northeast-2.amazonaws.com',
      'port' => 443,
    ),
  );
}
