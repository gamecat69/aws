# aws-ec2
A repo to store any useful AWS EC2 scripts

## Instructions to install on linux web server

Run as su
<code>sudo su</code>

Install apache, git and php
<code>yum install -y httpd git php</code>

Switch to the default apache webroot
<code>cd /var/www/html</code>

Clone the files to the default webroot
<code>git clone https://github.com/gamecat69/aws-ec2</code>

## To access the page
http://--publicurl--/aws-ec2/meta-data.php
