# CI-RB-lib
Simple library for RedBeanPHP ORM integration into CodeIgniter PHP Framework

This library has been tested with CodeIgniter 2.2.x & 3.0.0, MySQL & RebBeanPHP 3.5 & 4.2.0

**See**
 * http://www.codeigniter.com
 * http://redbeanphp.com

Installation
----

Lets assume that ${CI} is the directory where CodeIgniter is installed.
For example :

    CI=/var/www/ci

Here is a sample script for RB 4.2.0 install with CI 3.0.0

**Embed RedBeanPHP into CI**

    cd ${CI}/application/third_party/
    wget http://redbeanphp.com/downloads/RedBeanPHP4_2_0.tar.gz
    tar zxvf RedBeanPHP4_2_0.tar.gz 
    mkdir rb && mv license.txt rb.php rb/
    rm RedBeanPHP4_2_0.tar.gz 

**Library**

    cd ${CI}/application
    wget https://github.com/lightisright/CI-RB-lib/archive/master.zip
    unzip master.zip
    
Configuration
----

Library only needs standard database configuration in ${CI}/application/config/database.php

You will need following variables to be set in $db['default'] PHP array : hostname, username, password, database

Example :
    $active_group = 'default';
    $query_builder = TRUE;
    
    $db['default'] = array(
    	'dsn'	=> '',
    	'hostname' => 'localhost',
    	'username' => 'ci',
    	'password' => 'test',
    	'database' => 'ci_tutorial',
    	'dbdriver' => 'mysqli',
    	'dbprefix' => '',
    	'pconnect' => FALSE,
    	'db_debug' => TRUE,
    	'cache_on' => FALSE,
    	'cachedir' => '',
    	'char_set' => 'utf8',
    	'dbcollat' => 'utf8_general_ci',
    	'swap_pre' => '',
    	'encrypt' => FALSE,
    	'compress' => FALSE,
    	'stricton' => FALSE,
    	'failover' => array(),
    	'save_queries' => TRUE
    );

Test
----

A test controller has been created to work with CodeIgniter "News" tutorial (http://www.codeigniter.com/userguide3/tutorial/news_section.html)

**Note**

In case you don't have CodeIgniter News tutorial environment (DB, data, ...) set, here is a sample commands which should help you to create it quickly

    echo "create user ci authentified by 'test';" | mysql -u root -p
    echo "grant all privileges on ci_tutorial.* to ci@'localhost' identified by 'test';" | mysql -u root -p
    echo "grant all privileges on ci_tutorial.* to ci@'%' identified by 'test';" | mysql -u root -p
    echo "CREATE TABLE news (id int(11) NOT NULL AUTO_INCREMENT,title varchar(128) NOT NULL,slug varchar(128) NOT     NULL,text text NOT NULL,PRIMARY KEY (id),KEY slug (slug));" | mysql -u ci -ptest -D ci_tutorial
    echo "insert into news(title, slug) values ('News 1', 'AZERTY'), ('News 2', 'QWERTY');" | mysql -u ci -ptest -D ci_tutorial

**Test route**

Then create a new route for CI-RB-lib test controller in ${CI}/application/config/routes.php

    $route['rbtest'] = 'cirblibtest';

Then you can test news list RedBeanPHP Bean objects output by following the /rbtest route of your CodeIgniter installation.


