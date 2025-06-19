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
  value = module.rds.rds_endpoint
}

output "db_password" {
  value = module.rds.db_password
}

output "bucket_name" {
  value = module.s3.bucket_name
}

output "s3_access_key" {
  value = module.s3.s3_access_key
}

output "s3_secret_key" {
  value = module.s3.s3_secret_key
}
