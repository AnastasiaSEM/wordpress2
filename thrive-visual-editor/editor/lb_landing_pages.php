<?php

$landing_pages = !empty($_POST['landing_pages']) ? $_POST['landing_pages'] : array();
$tags = array();
foreach ($landing_pages as $code => $_item) {
    if (empty($_item['tags'])) {
        continue;
    }
    foreach ($_item['tags'] as $index => $tag) {
        $clean = strtolower(str_replace(' ', '-', $tag));
        $tags[$clean] = $tag;
        $landing_pages[$code]['tags_classes'][$index] = $clean;
    }
}
?>
<div class="tve_large_lightbox">
    <div class=" thrv_columns tve_clearfix">
        <div class="tve_colm tve_foc tve_df tve_ofo">
            <?php if (!empty($_POST['landing_page'])) : ?>
                <div class="tve_message tve_warning" id="tve_landing_page_msg">
                    <h6>Warning - your changes will be lost</h6>

                    <p>
                        If you change your landing page template without saving the current revision, you won't be able
                        to revert back to it later.
                    </p>
                    <input id="tve_landing_page_name" type="text" value="" placeholder="Template Name"
                           class="tve_lightbox_input"><br><br>
                    <a id="tve_landing_page_save" class="tve_click tve_editor_button tve_editor_button_success"
                       href="javascript:void(0)">Save Landing Page</a>
                </div>
            <?php endif ?>
            <div class="tve_header_box">
                <div class="tve_header_box_headline">
                    <h6>Filter by Tag</h6>
                </div>
                <div class="tve_header_box_content tve_landing_page_filters">
                    <?php foreach ($tags as $value => $label) : ?>
                        <div class="tve_lightbox_input_holder">
                            <input type="checkbox" class="tve_change tve_landing_page_tag" name="<?php echo $value ?>"
                                   id="<?php echo $value ?>"
                                   value="<?php echo $value ?>"/><label
                                for="<?php echo $value ?>"> <?php echo $label ?></label>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
        <div class="tve_colm tve_tfo tve_df tve_lst">
            <div class="tve_grid tve_landing_pages" id="tve_landing_page_selector">
                <div class="tve_right tve_lb_fields">
                    <input class="tve_keyup tve_lightbox_input"
                           data-ctrl="controls.filter_lp"
                           type="text"
                           style="width: 170px"
                           placeholder="Quick filter..."
                           value=""
                           id="tve_landing_page_filter">
                </div>
                <div class="tve_scT tve_green">
                    <ul class="tve_clearfix">
                        <li class="tve_tS tve_click"><span class="tve_scTC1">Default Landing Pages</span></li>
                        <li id="tve_saved_landing_pages" class="tve_click"><span
                                class="tve_scTC2">Your saved Landing Pages</span></li>
                    </ul>
                    <div class="tve_scTC tve_scTC1" style="display: block">

                        <div class="tve_clear" style="height: 5px;"></div>
                        <div class="tve_overflow_y" id="tve_default_landing_pages">
                            <?php foreach ($landing_pages as $code => $data) : ?>
                                <span
                                    class="<?php echo empty($data['tags_classes']) ? '' : implode(' ', $data['tags_classes']) ?> tve_grid_cell tve_landing_page_template tve_click<?php echo $_POST['landing_page'] == $code ? ' tve_cell_selected' : '' ?>"
                                    title="Choose <?php echo $data['name'] ?>">
                <input type="hidden" class="lp_code" value="<?php echo $code ?>"/>
                <img src="<?php echo $data['thumbnail'] ?>" width="180" height="152"/>
                <span class="tve_cell_caption_holder"><span class="tve_cell_caption"><?php echo $data['name'] ?></span></span>
                <span class="tve_cell_check tve_icm tve-ic-checkmark"></span>
            </span>
                            <?php endforeach ?>
                        </div>
                        <div class="tve_clear" style="height: 5px;"></div>
                    </div>
                    <div class="tve_scTC tve_scTC2" style="display: none;">
                        <a href="javascript:void(0)" id="tve_landing_page_delete"
                           class="tve_click tve_editor_button tve_editor_button_cancel tve_right">
                            Delete Template
                        </a>
                        <h6>Choose from your saved Landing Pages</h6>
                        <div class="tve_lightbox_input_holder">
                            <input type="checkbox" id="tve_landing_page_user_filter" class="tve_change tve_lightbox_input" value="1"/>
                            <label for="tve_landing_page_user_filter">Show only saved versions of the current template</label>
                        </div>
                        <div class="tve_clear" style="height: 15px;"></div>
                        <div class="tve_overflow_y" id="tve_user_landing_pages">
                            <p>
                                No saved Templates found.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="tve_clear" style="height: 15px;"></div>
                <div class="tve_landing_pages_actions">
                    <div id="tve_landing_page_select"
                         class="tve_click tve_editor_button tve_editor_button_success tve_right">
                        Load Landing Page
                    </div>
                    <?php if (!empty($_POST['landing_page'])) : ?>
                        <div id="tve_landing_page_disable"
                             class="tve_click tve_editor_button tve_editor_button_default tve_right">
                            Revert to theme template
                        </div>
                    <?php endif ?>
                </div>
                <div class="tve_clear"></div>
            </div>
        </div>
    </div>
</div>
<script data-cfasync="false" type="text/javascript">
    jQuery(function () {
        setTimeout(function () {
            jQuery('#tve_landing_page_filter').focus();
        }, 200);
    });
</script>