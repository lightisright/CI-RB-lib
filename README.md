# CI-RB-lib
Simple library for RedBeanPHP ORM integration into CodeIgniter PHP Framework

CI-RB-lib
=============

Simple library for RedBeanPHP ORM integration into CodeIgniter PHP Framework

This library has been tested with CodeIgniter 2.2.x & 3.0.0

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

    cd ${CI}/application/libraries/
