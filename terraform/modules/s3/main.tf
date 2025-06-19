resource "aws_s3_bucket" "nextcloud" {
  bucket = var.bucket_name
}

resource "aws_iam_user" "nextcloud" {
  name = "nextcloud-s3-user"
}

resource "aws_iam_access_key" "s3_access" {
  user = aws_iam_user.nextcloud.name
}
