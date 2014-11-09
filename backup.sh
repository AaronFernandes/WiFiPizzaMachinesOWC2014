#!/bin/bash
# Script Function:
# This bash script backups up the db everyday dependent on 
# when you set the cron job to run with a file name time stamp 
# and tar.gz zips the file.
# The db will be saved in /backups/database/
# Db backups older than 5 days will be deleted.\
#[Changes Directory]
cd /var/www/

#[Stamps the file name with a date]
TIMESTAMP=`date +%m-%d-%y-%H%M`

#[DB Backup Scripts]
# DB Name
HOST=localhost
DBNAME="wifipizza2"
USER="wifipizza"
PASSWORD="eatmorepizza"
DUMP_PATH=/home/backups/database
BACK_PATH=/home/backups/wordpress
/usr/bin/mysqldump --opt -c -e -Q -h$HOST -u$USER -p$PASSWORD $DBNAME > $DBNAME.sql
tar czpf $DUMP_PATH/$DBNAME.$TIMESTAMP.tar.gz $DBNAME.sql

rm -f $DBNAME.sql
#Backing up Wordpress files @ root
tar czf $BACK_PATH/wordpress.$TIMESTAMP.tar.gz /var/www