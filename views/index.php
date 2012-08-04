<?php if (Dispatcher::getAction() != 'view'): ?>


<h1><img src="<?php echo PLUGINS_URI; ?>/twitter/images/twitter_large.png" style="padding-bottom: 15px;" /></h1>

<h1>Status Display</h1>

<p>This plugin enables you to display your <a href="http://www.twitter.com" target="_blank">Twitter Status</a> on your site in three simple steps.</p>
<p>&nbsp;</p>

<h2 style="text-decoration: underline;">Step One</h2>

<p>Add the following code to your layout head section:</p>
<p><code>&lt;?php twitter_js(); ?></code></p>
<p>&nbsp;</p>

<h2 style="text-decoration: underline;">Step Two</h2>

<p>Now that the javascript is set up, we can place the status updates on our page by inserting the following code where you would like your updates to appear. This can be placed in a page part, layout or snippet.</p>
<p><code>&lt;?php twitter(<strong>$twitter_username</strong>,<strong>$tweet_count</strong>); ?></code></p>

<p>When you write this in your page, you should replace the two variables:</p>
<p><strong><code>$twitter_username</code></strong><br />is your username...</p>
<p><strong><code>$tweet_count</code></strong><br />is the number of updates you would like to show on the page.</p>

<p>&nbsp;</p>

<h2 style="text-decoration: underline;">Step Three</h2>

<p><strong>Enjoy!</strong></p>


<?php endif; ?>