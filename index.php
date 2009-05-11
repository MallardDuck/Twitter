<?php


Plugin::setInfos(array(
    'id'          => 'twitter',
    'title'       => 'Twitter', 
    'description' => 'Adds your Twitter status to your site', 
    'version'     => '0.1',
    'author'      => 'Andrew Waters',
    'website'     => 'mailto:andrew@band-x.org')
);


Plugin::addController('twitter', 'Twitter');


// Include Functions
include('functions/twitter_js.php');
include('functions/twitter.php');