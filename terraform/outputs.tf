output "vpc_id" {
  value = module.vpc.vpc_id
}

output "public_subnet_id" {
  value = module.vpc.public_subnet_id
}

output "ec2_public_ip" {
  value = module.ec2.public_ip
}

output "rds_endpoint" {
  value = aws_db_instance.nextcloud.endpoint
}

output "db_password" {
  value = var.db_password
  sensitive = true
}

output "bucket_name" {
  value = aws_s3_bucket.nextcloud.bucket
}

output "s3_access_key" {
  value = aws_iam_access_key.s3_access.id
}

output "s3_secret_key" {
  value = aws_iam_access_key.s3_access.secret
  sensitive = true
}
