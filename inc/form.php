<form method="post" action="options.php">
  <?php wp_nonce_field('update-options'); ?>
  <table class="form-table">
  <tr valign="top">
      <th scope="row">Handle<br>
        <span style="display: inherit;font-size: 12px;">name</span></th>
      <td><input type="text" name="handle" style="width:200px;" value="<?php echo get_option('handle'); ?>"/></td>
    </tr>
    <tr valign="top">
      <th scope="row">Position<br>
        <span style="display: inherit;font-size: 12px;">fixed/relative</span></th>
      <td><select name="position" style="width: 150px;">
          <option value="fixed">fixed</option>
          <option value="relative">relative</option>
        </select>
        <span style="display: inherit;font-size: 12px; padding-left:8px;">saved - <b><?php echo get_option('position'); ?></b></span>
      </td>
    </tr>
    <tr valign="top">
      <th scope="row">Left<br>
        <span style="display: inherit;font-size: 12px;">indent</span></th>
      <td><input type="text" name="leftinp" value="<?php echo get_option('leftinp'); ?>"/></td>
    </tr>
    <tr valign="top">
      <th scope="row">Right<br>
        <span style="display: inherit;font-size: 12px;">indent</span></th>
      <td><input type="text" name="rightinp" value="<?php echo get_option('rightinp'); ?>"/></td>
    </tr>
    <tr valign="top">
      <th scope="row">Bottom<br>
        <span style="display: inherit;font-size: 12px;">indent</span></th>
      <td><input type="text" name="bottominp" value="<?php echo get_option('bottominp'); ?>"/></td>
    </tr>
    <tr valign="top">
      <th scope="row">Background color<br>
        <span style="display: inherit;font-size: 12px;">hex, rgb, rgba</span></th>
      <td><input type="text" name="backgroundColor" value="<?php echo get_option('backgroundColor'); ?>"/></td>
    </tr>
    <tr valign="top">
      <th scope="row">Text color<br>
        <span style="display: inherit;font-size: 12px;">hex, rgb, rgba</span></th>
      <td><input type="text" name="colorText" value="<?php echo get_option('colorText'); ?>"/></td>
    </tr>
    <tr valign="top">
      <th scope="row">Height<br>
        <span style="display: inherit;font-size: 12px;">view</span></th>
      <td><input type="text" name="heightBtn" value="<?php echo get_option('heightBtn'); ?>"/></td>
    </tr>
    <tr valign="top">
      <th scope="row">Width<br>
        <span style="display: inherit;font-size: 12px;">view</span></th>
      <td><input type="text" name="widthBtn" value="<?php echo get_option('widthBtn'); ?>"/></td>
    </tr>
  </table>
  <input type="hidden" name="action" value="update" />
  <input type="hidden" name="page_options" value="url_form2,position,leftinp,rightinp,bottominp,handle,backgroundColor,colorText,heightBtn,widthBtn" />
  <p class="submit">
    <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
  </p>
</form>
