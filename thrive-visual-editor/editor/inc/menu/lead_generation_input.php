<span class="tve_options_headline">Text Input Options</span>
<ul class="tve_menu">
    <?php
    $css_selector = $css_padding_selector = "input[type='text']";
    $margin_right_hide = $margin_left_hide = true;
    include dirname(__FILE__) . '/_margin.php';
    ?>

    <li class="tve_ed_btn tve_btn_text">
        <div class="tve_option_separator">
            <span class="tve_ind tve_left" data-default="Border Type">Border Type</span><span
                class="tve_caret tve_icm tve_left"></span>

            <div class="tve_clear"></div>
            <div class="tve_sub_btn">
                <div class="tve_sub active_sub_menu">
                    <ul>
                        <li id="tve_brdr_none" class="tve_click" data-args="input" data-ctrl="controls.lead_generation.add_border_style" data-border="1">none</li>
                        <li id="tve_brdr_dotted" class="tve_click" data-args="input" data-ctrl="controls.lead_generation.add_border_style" data-border="1">dotted</li>
                        <li id="tve_brdr_dashed" class="tve_click" data-args="input" data-ctrl="controls.lead_generation.add_border_style" data-border="1">dashed</li>
                        <li id="tve_brdr_solid" class="tve_click" data-args="input" data-ctrl="controls.lead_generation.add_border_style" data-border="1">solid</li>
                        <li id="tve_brdr_double" class="tve_click" data-args="input" data-ctrl="controls.lead_generation.add_border_style" data-border="1">double</li>
                        <li id="tve_brdr_groove" class="tve_click" data-args="input" data-ctrl="controls.lead_generation.add_border_style" data-border="1">groove</li>
                        <li id="tve_brdr_ridge" class="tve_click" data-args="input" data-ctrl="controls.lead_generation.add_border_style" data-border="1">ridge</li>
                        <li id="tve_brdr_inset" class="tve_click" data-args="input" data-ctrl="controls.lead_generation.add_border_style" data-border="1">inset</li>
                        <li id="tve_brdr_outset" class="tve_click" data-args="input" data-ctrl="controls.lead_generation.add_border_style" data-border="1">outset</li>
                    </ul>
                </div>
            </div>
        </div>
    </li>
    <li class="tve_ed_btn_text clearfix">
        <label class="tve_left" style="color: #878787">
            <input id="tl_input_border_width" class="tve_change" value="0" type="text" size="3"> px
        </label>
    </li>

    <?php
    $change_class_target = ".edit_mode input[type='text']";
    include dirname(__FILE__) . '/_custom_class.php';
    ?>

    <li class="tve_text tve_slider_config" data-min-value="100" data-property="max-width" data-max-value="available"
        data-selector="function:controls.lead_generation.inputs_width_selector"
        data-input-selector="#tve_lg_input">
        <label for="tve_lg_input" class="tve_left">Max Width</label>

        <div class="tve_slider tve_left">
            <div class="tve_slider_element" id="tve_lg_input_slider"></div>
        </div>
        <input class="tve_left" type="text" id="tve_lg_input" value="">

        <div class="clear"></div>
    </li>
    <li>
        <div class="tve_ed_btn tve_btn_text tve_center tve_left tve_click"
             data-ctrl="function:controls.lead_generation.clear_width"
             data-args=".tve_lg_input,input[type='text'],lead_generation_input">Full Width
        </div>
    </li>

    <?php include dirname(__FILE__) . '/_font_size.php' ?>
</ul>