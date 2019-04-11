# EUDAT B2DROP Theme

[![Build Status](https://travis-ci.org/EUDAT-B2DROP/b2drop-theme.svg?branch=master)](https://travis-ci.org/EUDAT-B2DROP/b2drop-theme)

#### Table of Contents

1. [Theme Description - Why the theme](#module-description)
2. [Install - How to install the theme](#install)
3. [Development - Guide for contributing to the theme](#development)
4. [Testing - Instructions to test the code](#testing)


## Module Description

This repository provides the **B2DROP** theme. It's a thin overlay for Nextcloud, to provide the common EUDAT look and feel.

We expect to run **B2DROP** directly at the document root of your webserver, for example served at [https://b2drop.eudat.eu](https://b2drop.eudat.eu). A leading _nextcloud_ (https://b2drop.eudat.eu/nextcloud) is not supported and will break the templates that we use.

## Install

1. on your **B2DROP** server go to the <Nextcloud>/themes directory
2. git clone this repository
```
git clone https://github.com/EUDAT-B2DROP/b2drop-theme.git b2drop
```
3. do basic theming with Nextcloud's theeming app, all needed images are in the theme.
```
Color: #F45D00
Logo: logo.png
Header logo: logo-wide.png
Favicon: favicon.svg
```
4. enable the theme via creating <Nextcloud>/config/b2drop.config.php and adding
```
<?php
$CONFIG = array (
  'theme' => 'b2drop',
);
```
or only the the theme line directly to <Nextcloud>/config/config.php
```
./occ config:system:set theme --value b2drop
```

## Development

There are no formal requirements to participate. The development (enhancement, bugfixing) is done on the master branch.
If a version is stable for the current Nextcloud version, a branch is created referring to the corresponding Nextcloud version (e.g. branch nextcloud11). The branch is then used on the production systems.

## Testing

For testing your php code you need to install PHP_CodeSniffer and run:
```
phpcs --extensions=php --ignore=*/tests/*,*/templates/* .
```

Another way to directly test your code with your browser locally, when you have a php interpreter:


```
export CORE_BRANCH=stable11;
export THEME_BRANCH=nextcloud11;
export THEME=<local path>
git clone https://github.com/nextcloud/core.git --recursive --depth 1 -b $CORE_BRANCH nextcloud
cd nextcloud
./occ maintenance:install --admin-user admin --admin-pass admin

#decide whether you want to use github code or your local developments:
git clone https://github.com/EUDAT-B2DROP/b2drop-theme.git -b $THEME_BRANCH themes/b2drop
#rsync -uvaPr --delete  --exclude “.git*” --exclude ".idea" $THEME/ themes/b2drop
./occ config:system:set theme --value b2drop

php -S localhost:8080

```

You should be able to connect to [localhost:8080](http://localhost:8080) and see a working service. 