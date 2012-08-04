<?php if (Dispatcher::getAction() != 'view'): ?>

<p class="button"><a href="<?php echo get_url('plugin/twitter/'); ?>"><img src="<?php echo PLUGINS_URI; ?>twitter/images/twitter.png" align="middle" alt="page icon" />Home</a></p>
<p class="button"><a href="<?php echo get_url('plugin/twitter/extending'); ?>"><img src="<?php echo PLUGINS_URI; ?>twitter/images/extending.png" align="middle" alt="page icon" />Extending</a></p>

<?php endif; ?>