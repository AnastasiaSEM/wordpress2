<?php if (isset($show_textarea)) : ?>
    <textarea name="tve_lead_generation_code" placeholder="Insert your code here"
              class="tve_lightbox_textarea"></textarea>
    <div class="tve_clearfix">
        <a href="javascript:void(0)" class="tve_editor_button tve_editor_button_default tve_right tve_button_margin tve_click "
           data-ctrl="function:auto_responder.dashboard">Cancel</a>
        <a href="javascript:void(0)"
           class="tve_editor_button tve_editor_button_success tve_right tve_lead_generate_fields tve_click"
           data-ctrl="function:auto_responder.generate_fields">Generate Fields</a>
    </div>
<?php endif ?>
<div class="tve_large_lightbox<?php echo isset($show_textarea) ? ' tve_lead_gen_html_lightbox' : '' ?>">
    <?php unset($show_textarea) ?>
    <div id="generated_inputs_container"
         class="tve_clearfix">
        <?php echo isset($fields_table) ? $fields_table : '' ?>
    </div>
    <div id="tve_lg_icon_list" style="display: none">
        <table>
            <tfoot>
                <tr>
                    <td style="width: 10%;">Choose an icon</td>
                    <td>
                        <?php $icon_click = 'function:auto_responder.choose_icon';
                        $icon_hide_header = true;
                        include_once plugin_dir_path(dirname(dirname(dirname(dirname(__FILE__))))) . 'editor/lb_icon.php' ?>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
