<?php if (empty($_POST['edit_custom_html'])) : ?>
    <h4>Connect with Service</h4>
    <hr class="tve_lightbox_line"/>
    <p>Your sign up form is connected to a service using custom HTML form code.</p>
    <div class="tve-sp"></div>
    <div class="tve_clearfix">
        <a href="javascript:void(0)" class="tve_click tve_editor_button tve_editor_button_cancel tve_right tve_button_margin"
           data-ctrl="function:auto_responder.remove_custom_html">
            <span>Delete Connection</span>
        </a>
        &nbsp;
        <a href="javascript:void(0)" class="tve_click tve_editor_button tve_editor_button_success tve_right"
           data-ctrl="function:auto_responder.dashboard" data-edit-custom="1">
            <span>Edit HTML form code</span>
        </a>
    </div>
<?php else : ?>
    <?php $show_textarea = true;
    include dirname(__FILE__) . '/autoresponder-code-fields.php' ?>
<?php endif ?>
