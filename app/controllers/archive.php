<?php

namespace App;

use Sober\Controller\Controller;

class Archive extends Controller
{
    public function eventLoop()
    {
        $event_items = get_posts([
            'post_type' => 'event',
            'posts_per_page'=>'10',
        ]);
    
        return array_map(function ($post) {
            return [
                'content' => apply_filters('the_content', $post->post_content),
                'title' => apply_filters('the_content', $post->post_title),
                'event_date' =>  date_format(date_create(get_post_meta($post->ID, 'event_date', true )), 'd.m.Y'),
                'event_time' => get_post_meta($post->ID, 'event_time', true ),
                'location' => get_post_meta($post->ID, 'location', true ),
                'address' => get_post_meta($post->ID, 'event_address', true ),
                'is_workshop' => get_post_meta($post->ID, 'is_workshop', true ),
                'price' => get_post_meta($post->ID, 'event_price', true ),
            ];
        }, $event_items);
    }
}