<div class="tve-sp"></div>
<h6><?php echo __('Choose the type of optin you would like for the Mailchimp integration', 'thrive-visual-editor') ?></h6>
<div class="tve_lightbox_select_holder tve_lightbox_input_inline tve_lightbox_select_inline">
    <select class="tve-api-extra" name="mailchimp_optin">
        <option
            value="s"<?php echo $data['optin'] === 's' ? ' selected="selected"' : '' ?>><?php echo __('Single optin', 'thrive-visual-editor') ?></option>
        <option
            value="d"<?php echo $data['optin'] === 'd' ? ' selected="selected"' : '' ?>><?php echo __('Double optin', 'thrive-visual-editor') ?></option>
    </select>
</div>
<br>
<p><?php echo __('(Double optin means your subscribers will need to confirm their email address before being added to your list)', 'thrive-visual-editor') ?></p>