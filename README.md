# EUDAT B2DROP Theme

[![Build Status](https://travis-ci.org/EUDAT-B2DROP/b2drop-theme.svg?branch=master)](https://travis-ci.org/EUDAT-B2DROP/b2drop-theme)

#### Table of Contents

1. [Theme Description - Why the theme](#module-description)
2. [Install - How to install the theme](#install)
3. [Development - Guide for contributing to the theme](#development)
4. [Testing - Instructions to test the code](#testing)


## Module Description

This repository provides the B2DROP theme. It's a thin overlay for owncloud, to provide a common EUDAT look and feel.

## Install

1. on your B2DROP server go to the <owncloud>/themes directory
2. git clone this repository
3. enable the theme via:
creating <owncloud>/config/b2drop.config.php and adding:
```
<?php
$CONFIG = array (
  \'theme\' => \'b2drop\',
);
```
or the theme part to <owncloud>/config/config.php

## Development

There are no formal requirements to participate. The development (enhancement, bugfixing) is done on the master branch.
If a version is stable for the current owncloud version, a branch is created referring to the owncloud version (e.g. branch owncloud9). The branch is then used on the production systems.

## Testing

For testing your php code you need to install PHP_CodeSniffer and run:

    phpcs --extensions=php --ignore=*/tests/*,*/templates/* .

Another way to directly test your code with your browser is via "ocdev". This is a tool provided by the owncloud developers, it requires python3 (virtualenv is suggested) and php. Some but not all instructions:

```
pip install ocdev
BRANCH=stable9
THEME=<YOUR_LOCAL_REPO>

ocdev setup core --dir owncloud --branch $BRANCH --no-history

rsync -uvaPr --delete  --exclude “.git*” --exclude ".idea" $THEME/ owncloud/themes/b2drop
cd owncloud
./occ maintenance:install --admin-user admin --admin-pass admin
# add the theme to your config as described in the "Install" section of this README
ocdev server
```

You should be able to connect to [localhost:8080](http://localhost:8080) and see a working service