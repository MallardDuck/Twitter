<?php 
if (Dispatcher::getAction() != 'view'):
?>

<p class="button"><img src="../frog/plugins/twitter/images/twitter.png" align="middle" alt="page icon" /><a href="<?php echo get_url('plugin/twitter/'); ?>">Home</a></p>

<p class="button"><img src="../frog/plugins/twitter/images/extending.png" align="middle" alt="page icon" /><a href="<?php echo get_url('plugin/twitter/extending'); ?>">Extending</a></p>

<p class="button"><img src="../frog/plugins/twitter/images/contact.png" align="middle" alt="page icon" /><a href="<?php echo get_url('plugin/twitter/contact'); ?>">Contact</a></p>


<?php endif; ?>