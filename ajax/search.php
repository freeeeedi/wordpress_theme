<?php

function ajax_search() {

    $result = [];
    $query = new WP_Query([
        's' => $_POST['search'],
        'post_type' => ['news', 'events']
    ]);

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            $result[] = get_the_title();
        }
    } else {
        $result[] = 'Ничего не найдено';
    }

    wp_send_json($result);
}