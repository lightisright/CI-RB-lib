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

**RedBeanPHP install**

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

Create a new route for CI-RB-lib test controller in ${CI}/application/config/routes.php

    $route['rbtest'] = 'cirblibtest';

Then you can test news list output by following the /rbtest route of your CodeIgniter installation.


