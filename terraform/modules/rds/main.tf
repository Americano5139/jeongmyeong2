resource "aws_db_instance" "nextcloud" {
  identifier             = "nextcloud-db"
  engine                 = "mariadb"
  engine_version         = "10.6"
  instance_class         = "db.t3.micro"
  allocated_storage      = 20
  name                   = var.db_name
  username               = var.db_user
  password               = var.db_password
  db_subnet_group_name   = var.subnet_group
  vpc_security_group_ids = [var.db_sg_id]
  skip_final_snapshot    = true
  publicly_accessible    = true
}
