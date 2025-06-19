provider "aws" {
  region = var.aws_region
}

module "vpc" {
  source = "./modules/vpc"

  vpc_cidr_block = var.vpc_cidr_block
  public_subnet_cidrs = var.public_subnet_cidrs
}

module "ec2" {
  source = "./modules/ec2"

  instance_type = var.instance_type
  ami_id        = var.ami_id
  key_name      = var.key_name
  subnet_id     = module.vpc.public_subnet_id
  vpc_id        = module.vpc.vpc_id
}

module "rds" {
  source              = "./modules/rds"
  db_name             = var.db_name
  db_user             = var.db_user
  db_password         = var.db_password
  subnet_ids          = module.vpc.public_subnet_ids
  vpc_security_group_ids = [module.vpc.default_sg_id]
}

module "s3" {
  source              = "./modules/s3"
  bucket_name         = var.bucket_name
}
