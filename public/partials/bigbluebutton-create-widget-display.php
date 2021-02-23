<div class="bbb-top-bottom-margin">
	<p>
		<label for="<?php echo $text_id; ?>" class="bbb-width-30 bbb-inline-block"><?php esc_html_e( 'Tokens (separated by comma)', 'bigbluebutton' ); ?>:</label>
		<input class="widefat" id=<?php echo esc_attr( $text_id ); ?> name="<?php echo esc_attr( $text_name ); ?>" type="text" value="<?php echo esc_attr( $text_value ); ?>" />
	</p>
    <p>
        <label for="<?php echo $content_id; ?>"><?php _e( 'Content:' ); ?></label>
        <textarea class="widefat" rows="16" cols="20" id="<?php echo esc_attr( $content_id ); ?>" name="<?php echo esc_attr( $content_name ); ?>"><?php echo esc_textarea( $content_value ); ?></textarea>
    </p>
</div>
