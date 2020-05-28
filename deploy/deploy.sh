
chmod 400 deploy/aws_fmi_project.pem

ssh -i deploy/aws_fmi_project.pem ubuntu@ec2-3-22-254-117.us-east-2.compute.amazonaws.com 'cd /opt/lampp/htdocs/project && sudo git pull origin master'
