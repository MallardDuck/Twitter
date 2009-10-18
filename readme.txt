Twitter Plugin for Frog CMS
by Andrew Waters
andrew@band-x.org
Twitter: @andrew_waters

Thanks for downloading my Twitter plugin!

This plugin enables you to display your Twitter Status on your site in three simple steps.



------------
INSTALLATION
------------

Very simple to install:

1. Unzip the files
2. Upload the 'twitter' folder to your plugins directory
3. Go to your admin panel and activate the plugin
4. Click the new 'Twitter' tab and read the usage instuctions



-----
USAGE
-----

Add the following code to your layout head section:

<?php twitter_js(); ?>


Now that the javascript is set up, we can place the status updates on our page by inserting the following code where you would like your updates to appear. This can be placed in a page part, layout or snippet.

<?php twitter($twitter_username,$tweet_count); ?>


When you write this in your page, you should replace the two variables:

$twitter_username	:	is your username...
$tweet_count		:	is the number of updates you would like to show on the page.



---------
CHANGELOG
---------

0.2
- Updated for Wolf

0.1
+ First Build