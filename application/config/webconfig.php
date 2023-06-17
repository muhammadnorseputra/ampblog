<?php
// BLOG KEYS
$config['apikey'] = 'AIzaSyBMgrvqLoK_LKur-HfdQpGc90Bo2lYXdi8';
$config['blog_id'] = '7792147091805313605';

// GLOBAL
$ci = get_instance();
$ci->load->library('curl');

// Blog Data
$data = $ci->curl->simple_get('https://www.googleapis.com/blogger/v3/blogs/'.$config['blog_id'].'?&fields=name,description&key='.$config['apikey']);
$row = json_decode($data);
$config['blog_name'] = $row->name;
$config['blog_desc'] = $row->description;

// Blog Pages
$pages = $ci->curl->simple_get('https://www.googleapis.com/blogger/v3/blogs/'.$config['blog_id'].'/pages/?fields=items(title,url,id)&key='.$config['apikey'].'&fetchBodies=false&status=LIVE');
$pages_row = json_decode($pages);
$config['pages_data'] = $pages_row->items;