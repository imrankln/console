Custom Console Command Extension for magento2
======================================
This extension provides a base for creating custom console commands for Magento2.


# Features
- Easy to add new console commands.
- Simple M2 module.
- Easy to update.


# How to install
- Using Composer
    - composer require imrankln/m2-console
    - bin/magento setup:upgrade
- Using Modman
    - modman init
    - modman clone git@github.com:imrankln/m2-console.git
- Using Zip
    - Download the Zip File
    - Extract & upload the files to /path/to/magento2/app/code/Veriteworks/Console

# How to configure
step 1: register new command in side etc/di.xml
step 2: create a new file inside Command directory and write your desired function.

# Tests
N/A

# Support

If you have any issues about this extension, open an issue on Github.
Technical support question is same. 

# Contribution

Any contributions are highly appreciated. Please send me a pull request.

# License

[Open Software License 3.0](http://opensource.org/licenses/osl-3.0.php)

# Copyright

(c) 2017 Imran Shakil.