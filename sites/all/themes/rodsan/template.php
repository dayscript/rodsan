<?php

/**
 * Implements template_preprocess_html().
 */
function rodsan_preprocess_html(&$variables) {
}

/**
 * Implements template_preprocess_page.
 */
function rodsan_preprocess_page(&$variables) {

    // Convenience variables.
    if (!empty($variables['page']['sidebar_first'])) {
        $left = $variables['page']['sidebar_first'];
    }

    if (!empty($variables['page']['sidebar_second'])) {
        $right = $variables['page']['sidebar_second'];
    }

    // Dynamic sidebars.
    if (!empty($left) && !empty($right)) {
        $variables['main_grid'] = 'medium-6 medium-push-2';
        $variables['sidebar_first_grid'] = 'medium-2 medium-pull-6';
        $variables['sidebar_sec_grid'] = 'medium-4';
    }
    elseif (empty($left) && !empty($right)) {
        $variables['main_grid'] = 'medium-8';
        $variables['sidebar_first_grid'] = '';
        $variables['sidebar_sec_grid'] = 'medium-4';
    }
    elseif (!empty($left) && empty($right)) {
        $variables['main_grid'] = 'medium-10 medium-push-2';
        $variables['sidebar_first_grid'] = 'medium-2 medium-pull-10';
        $variables['sidebar_sec_grid'] = '';
    }
    else {
        $variables['main_grid'] = '';
        $variables['sidebar_first_grid'] = '';
        $variables['sidebar_sec_grid'] = '';
    }
}

/**
 * Implements template_preprocess_node.
 */
function rodsan_preprocess_node(&$variables) {
}
