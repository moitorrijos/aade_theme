<?php

add_action('admin_menu', 'add_aade_custom_options');

function add_aade_custom_options() {
  add_options_page(
    'General Information for AADE',
    'Company Info',
    'manage_options',
    'aade-company-info',
    'aade_custom_options',
  );
  add_action( 'admin_init', 'register_aade_settings' );
}

function register_aade_settings() {
  register_setting( 'aade-settings-group', 'aade_address' );
	register_setting( 'aade-settings-group', 'aade_phone_number' );
	register_setting( 'aade-settings-group', 'aade_email_address' );
	register_setting( 'aade-settings-group', 'aade_facebook_url' );
	register_setting( 'aade-settings-group', 'aade_instagram_url' );
	register_setting( 'aade-settings-group', 'aade_twitter_url' );
	register_setting( 'aade-settings-group', 'aade_youtube_url' );
}

function aade_custom_options() {
  if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
  }
  ?>
  <div class="wrap">
    <h1>AADE General Company Information</h1>
    <form method="post" action="options.php">
      <?php
        settings_fields( 'aade-settings-group' ); // settings group name
        do_settings_sections( 'aade-settings-group' ); // just a page slug
      ?>
      <table class="form-table">
        <tr valign="top">
          <th scope="row">Company Address</th>
          <td>
            <input
              type="text" name="aade_address"
              value="<?php echo esc_attr( get_option('aade_address') ); ?>"
              class="regular-text"
            />
            <p class="description">
              African American Dance Ansemble Office Address.
            </p>
          </td>
        </tr>
          
        <tr valign="top">
          <th scope="row">Company Phone Number</th>
         
        <tr valign="top">
          <th scope="row">Teléfono de la Empresa o para WhatsApp</th>
          <td>
            <input
              type="text" name="aade_phone_number"
              value="<?php echo esc_attr( get_option('aade_phone_number') ); ?>"
              class="regular-text"
            />
            <p class="description">Telephone format +(1) 919-***-****</p>
          </td>
        </tr>
          
        <tr valign="top">
          <th scope="row">Primary Company Email</th>
          <td>
            <input
              type="email" name="aade_email_address"
              value="<?php echo esc_attr( get_option('aade_email_address') ); ?>"
              class="regular-text"
            />
            <p class="description">
              This email can be different from the WordPress admin email.
            </p>
          </td>
        </tr>

        <tr valign="top">
          <th scope="row">Facebook</th>
          <td>
            <input
              type="url" class="regular-text"
              name="aade_facebook_url"
              id="aade_facebook_url"
              value="<?php echo esc_attr( get_option('aade_facebook_url') ); ?>"
            >
            <p class="description">
              url format (https://facebook.com/...)
            </p>
          </td>
        </tr>

        <tr valign="top">
          <th scope="row">Instagram</th>
          <td>
            <input
              type="url" class="regular-text"
              name="aade_instagram_url"
              id="aade_instagram_url"
              value="<?php echo esc_attr( get_option('aade_instagram_url') ); ?>"
            >
            <p class="description">
              url format (https://instagram.com/...)
            </p>
          </td>
        </tr>

        <tr valign="top">
          <th scope="row">Twitter</th>
          <td>
            <input
              type="url" class="regular-text"
              name="aade_twitter_url"
              id="aade_twitter_url"
              value="<?php echo esc_attr( get_option('aade_twitter_url') ); ?>"
            >
            <p class="description">
              url format (https://twitter.com/...)
            </p>
          </td>
        </tr>

        <tr valign="top">
          <th scope="row">Youtube</th>
          <td>
            <input
              type="url" class="regular-text"
              name="aade_youtube_url"
              id="aade_youtube_url"
              value="<?php echo esc_attr( get_option('aade_youtube_url') ); ?>"
            >
            <p class="description">
              url format (https://youtube.com/...)
            </p>
          </td>
        </tr>
      </table>
      <?php submit_button(); ?>
    </form>
  </div>
  <?php
}
