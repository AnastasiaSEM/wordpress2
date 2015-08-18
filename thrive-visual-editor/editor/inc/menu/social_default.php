<span class="tve_options_headline"><span class="tve_icm tve-ic-move"></span>Default Social Sharing options</span>
<ul class="tve_menu">
    <li class="tve_ed_btn tve_btn_text tve_click" data-ctrl="function:social.openOptions">Social Options</li>
    <li class="tve_text tve_text_ctrl">
        <label class="tve_left">Button type: &nbsp;</label>
    </li>
    <li class="tve_ed_btn tve_btn_text">
        <div class="tve_option_separator">
            <span class="tve_ind tve_left" data-default="Button">Button</span><span
                class="tve_caret tve_icm tve_left"></span>

            <div class="tve_clear"></div>
            <div class="tve_sub_btn">
                <div class="tve_sub active_sub_menu">
                    <ul>
                        <li id="tve_social_btn" data-type="btn" class="tve_click" data-ctrl="function:social.defaultButtonType">Button</li>
                        <li id="tve_social_btn_count" data-type="btn_count" class="tve_click" data-ctrl="function:social.defaultButtonType">Button + count</li>
                    </ul>
                </div>
            </div>
        </div>
    </li>
    <li class="tve_ed_btn tve_btn_text tve_click" data-ctrl="function:social.enableSortable">Modify Order of Buttons</li>
    <?php include dirname(__FILE__) . '/_margin.php' ?>
</ul>