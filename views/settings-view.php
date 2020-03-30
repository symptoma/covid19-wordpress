<div class="wrap">
    <h1>Symptoma Covid19 Test Chatbot</h1>

    <form method="post" action="options.php">
        <?php settings_fields( $itemSlug ); ?>
        <?php do_settings_sections( $itemSlug ); ?>
        <table class="form-table">
            <tr valign="top">
                <th scope="row">Intro Text</th>
                <td><input type="text" name="introtext" value="<?php echo esc_attr( get_option('introtext') ); ?>" /></td>
            </tr>

            <tr valign="top">
                <th scope="row">Elevation</th>
                <td><input type="number" name="elevation" value="<?php echo esc_attr( get_option('elevation') ); ?>" /></td>
            </tr>

            <tr valign="top">
                <th scope="row">Height</th>
                <td><input type="number" name="height" value="<?php echo esc_attr( get_option('height') ); ?>" /></td>
            </tr>
            <tr valign="top">
                <th scope="row">Width</th>
                <td><input type="text" name="width" value="<?php echo esc_attr( get_option('width') ); ?>" /></td>
            </tr>
        </table>

        <?php submit_button(); ?>

    </form>
</div>