<div id="thrive-api-connections">
    <?php if (empty($connected_apis)) : ?>
        <h6>You currently don't have any API integrations set up.</h6>
        <a href="<?php echo admin_url('admin.php?page=tve_api_connect') ?>" target="_blank"
           class="tve_lightbox_link tve_lightbox_link_create">Click here to set up a new
            API connection</a>
    <?php else : ?>
        <h6>Choose from your list of existing API connections or  <a
                href="<?php echo admin_url('admin.php?page=tve_api_connect') ?>" target="_blank"
                class="tve_lightbox_link tve_lightbox_link_create">add a new
                integration</a></h6>
        <div class="tve_lightbox_select_holder tve_lightbox_input_inline tve_lightbox_select_inline">
            <select id="thrive-api-connections-select" class="tve_change"
                    data-ctrl="function:auto_responder.api.api_get_lists" autocomplete="off">
                <?php foreach ($connected_apis as $key => $api) : ?>
                    <option
                        value="<?php echo $key ?>"<?php echo $edit_api_key == $key ? ' selected="selected"' : '' ?>><?php echo $api->getTitle() ?></option>
                <?php endforeach ?>
            </select>
        </div>
        &nbsp;&nbsp;&nbsp;
        <a href="javascript:void(0)" data-ctrl="function:auto_responder.api.reload_apis" class="tve_click tve_lightbox_link tve_lightbox_link_refresh">Reload</a>
    <?php endif ?>
</div>
