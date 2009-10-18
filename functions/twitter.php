<?php

function twitter($twitter_username,$tweet_count) {
	echo "
		<script type=\"text/javascript\" charset=\"utf-8\">
			getTwitters('tweets', {
				id: '".$twitter_username."', 
				clearContents: false,
				count: ".$tweet_count.", 
				ignoreReplies: false,
				template: '\"%text%\" <br /><a href=\"http://twitter.com/%user_screen_name%/statuses/%id%/\">%user_description%</a>'
			});
		</script>
		<div class=\"twitters\" id=\"tweets\">
			<h2>Latest Tweets:</h2>
		</div>";
}