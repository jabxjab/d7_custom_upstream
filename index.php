<?php

/**
 * @file
 * The PHP page that serves all page requests on a Drupal installation.
 *
 * The routines here dispatch control to the appropriate handler, which then
 * prints the appropriate page.
 *
 * All Drupal code is released under the GNU General Public License.
 * See COPYRIGHT.txt and LICENSE.txt.
 */

/**
 * Root directory of Drupal installation.
 */
define('DRUPAL_ROOT', getcwd());

require_once DRUPAL_ROOT . '/includes/bootstrap.inc';
drupal_bootstrap(DRUPAL_BOOTSTRAP_FULL);
menu_execute_active_handler();

// Update 030.
// Update 031.
// Update 032.
// Master went ahead test 001.
// Master went ahead test 002.
// Upstream updates 001.
// Master went ahead test 002.
// Master went ahead test 003.
// Master went ahead test 004.
// Master went ahead test 005.
