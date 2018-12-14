<?php
/**
 * Custom post types
 */

//Instantiate new class object
$drivers = new MBC_Theme( 'drivers' );

$drivers->mbc_build_cpt( 'drivers', 'Drivers', 'Drivers', $supports = array(), $settings = array(), $has_arch = true, $hier = true);

//Instantiate new class object
$race_results = new MBC_Theme( 'race-results' );

$race_results->mbc_build_cpt( 'race-results', 'Race Results', 'Race Results', $supports = array(), $settings = array(), $has_arch = true, $hier = true);