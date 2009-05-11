<?php 
if (Dispatcher::getAction() != 'view'):
?>



<h1><img src="../frog/plugins/twitter/images/twitter_large.png" style="padding-bottom: 15px;" /></h1>

<h1>Extending the Twitter Plugin</h1>

<p>Whilst this plugin will work out of the box, there is room to extend it in the future and simple 'hacks' you can do for now, so if you can't resist getting your hands dirty, read on.</p>

<p>OK, so we make a request to Twitter's server with a username and number of tweets to collect and Twitter then returns information to us to do with what we like.</p>

<p>&nbsp;</p>

<p>Twitter will return the following information:</p>

<table class="index" cellpadding="0" cellspacing="0" border="0">
<thead>
<tr>
<th width="25%" style="font-weight: bold; font-size: 16px;">Name</th>
<th width="35%" style="font-weight: bold; font-size: 16px;">Interpretation</th>
<th width="40%" style="font-weight: bold; font-size: 16px;">Example</th>
</tr>
</thead>
<tbody>
<tr class="<?php echo odd_even(); ?>">
<td>text</td>
<td>The message itself</td>
<td>is busy writing a plugin for Frog</td>
</tr>
<tr class="<?php echo odd_even(); ?>">
<td>id</td>
<td>The message ID number</td>
<td>http://twitter.com/user_name/statuses/<strong>123456789</strong></td>
</tr>
<tr class="<?php echo odd_even(); ?>">
<td>source</td>
<td>Where the update came from</td>
<td>Twitterific, Web, Mobile</td>
</tr>
<tr class="<?php echo odd_even(); ?>">
<td>created_at</td>
<td>Timestamp of "Tweet"</td>
<td>Fri Jul 18 00:00:01 +0000 2008</td>
</tr>
<tr class="<?php echo odd_even(); ?>">
<td>time</td>
<td>A user friendly time of "Tweet"</td>
<td>"less than a minute ago", "4 days ago"</td>
</tr>
<tr class="<?php echo odd_even(); ?>">
<td>user_name</td>
<td>Your real name</td>
<td>Andrew Waters</td>
</tr>
<tr class="<?php echo odd_even(); ?>">
<td>user_screen_name</td>
<td>The Screen Name of the user</td>
<td>andrew_waters</td>
</tr>
<tr class="<?php echo odd_even(); ?>">
<td>user_id</td>
<td>The user ID value</td>
<td>987654321</td>
</tr>
<tr class="<?php echo odd_even(); ?>">
<td>user_profile_image_url</td>
<td>The users image</td>
<td>Returns the users image they have set</td>
</tr>
<tr class="<?php echo odd_even(); ?>">
<td>user_url</td>
<td>The users homepage</td>
<td>http://www.madebyfrog.com</td>
</tr>
<tr class="<?php echo odd_even(); ?>">
<td>user_location</td>
<td>Coordinates of where update sent from</td>
<td>12.123456,-1.234567</td>
</tr>
<tr class="<?php echo odd_even(); ?>">
<td>user_description</td>
<td>The Bio line on Twitter</td>
<td>I'm a web developer</td>
</tr>
</tbody>
</table>

<p>&nbsp;</p>

<p>We can then add that information to our output via the javascript function.<br />
<strong>Please Note that we have to wrap each string in "%" (see below)</strong></p>

<p>If you take a look at the <strong>frog/plugins/twitter/functions</strong> folder there is a file called <strong><em>twitter.php</em></strong></p>

<p>Fire it up and take a look inside - it should look a little bit like this:</p>


<p>
<pre>
&lt;script type=\"text/javascript\" charset=\"utf-8\">
	getTwitters('tweets', {
		id: '".$twitter_username."',
		clearContents: false,
		count: ".$tweet_count.",
		ignoreReplies: false,
		template: '\"%text%\"
	});
&lt;/script>
</pre>
</p>

<p>You can now customise this javascript to your own needs by inserting the code in the table above. Make sure that you wrap the variables in <code>%</code> though - for example <code>created_at</code> becomes <code>%created_at%</code></p>

<p><strong>Enjoy!</strong></p>















<?php endif; ?>