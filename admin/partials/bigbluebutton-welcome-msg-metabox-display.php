<textarea rows="10" cols="80" name="<?php echo $message_name; ?>"><?php if ( $existing_value != '' ) { echo $existing_value; } ?></textarea>
<p class="description"><?php _e('The welcome message text for this room. You can use %PERMALINK% to enter the link to this room. Leave empty to use the default welcome message of the server.', 'bigbluebutton')?></p>
