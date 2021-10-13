<?php

/**
 * @file
 * Drupal site-specific local settings file.
 * settings.local.php is excluded from git repository for security reasons.
 */

/**
 * Database settings:
 */
$databases = [];
$databases['default']['default'] = array (
  'database' => 'drupal_newsdrunk',
  'username' => 'root',
  'password' => '',
  'prefix' => '',
  'host' => 'localhost',
  'port' => '3306',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
);
