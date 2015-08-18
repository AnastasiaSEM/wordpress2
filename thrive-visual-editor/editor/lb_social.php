<?php
$config = isset($_POST['config']) ? $_POST['config'] : array();
$selected = isset($config['selected']) ? $config['selected'] : array();
/**
 * {tcb_post_url} is just a placeholder that will get replaced at runtime, and it will also be automatically added from javascript
 * if any of the links are set to this, we need to clear it out, as the default post link is presented to the user as an empty input box
 */
foreach ($config as $network => $settings) {
    if (isset($settings['href']) && $settings['href'] == '{tcb_post_url}') {
        $config[$network]['href'] = '';
    }
}
$is_custom = isset($config['type']) && $config['type'] == 'custom';
?>
<h4>Social Options</h4>
<hr class="tve_lightbox_line"/>
<h6><?php if ($config['type'] == 'custom') : ?><b>Step 1. </b><?php endif ?>Select which buttons to display using the
    checkboxes below:</h6>
<div class="tve-social-items tve_gray_box">
    <span class="tve-social-item">
        <span class="thrv-icon-facebook2 thrv-social-option-icon"></span>
        <?php if (!$is_custom) : ?>
            <div class="tve_lightbox_input_holder">
                <input type="checkbox" class="config-enabled tve_change" id="fb_like"
                       data-ctrl="function:social.enabledChange"
                       value="fb_like"<?php echo in_array('fb_like', $selected) ? ' checked' : '' ?>>
                <label for="fb_like">Facebook like</label>
            </div>
        <?php endif ?>
        <div class="tve_lightbox_input_holder">
            <input type="checkbox" class="config-enabled tve_change" id="fb_share"
                   data-ctrl="function:social.enabledChange"
                   value="fb_share"<?php echo in_array('fb_share', $selected) ? ' checked' : '' ?>>
            <label for="fb_share">Facebook share</label>
        </div>
    </span>
    <span class="tve-social-item">
        <span class="thrv-icon-google-plus2 thrv-social-option-icon"></span>
        <?php if (!$is_custom) : ?>
            <div class="tve_lightbox_input_holder">
                <input type="checkbox" class="config-enabled tve_change" id="g_plus"
                       data-ctrl="function:social.enabledChange"
                       value="g_plus"<?php echo in_array('g_plus', $selected) ? ' checked' : '' ?>>
                <label for="g_plus">Google +1</label>
            </div>
        <?php endif ?>
        <div class="tve_lightbox_input_holder">
            <input type="checkbox" class="config-enabled tve_change" id="g_share"
                   data-ctrl="function:social.enabledChange"
                   value="g_share"<?php echo in_array('g_share', $selected) ? ' checked' : '' ?>>
            <label for="g_share">Google share</label>
        </div>
    </span>
    <span class="tve-social-item">
        <span class="thrv-icon-twitter2 thrv-social-option-icon"></span>
        <div class="tve_lightbox_input_holder">
            <input type="checkbox" class="config-enabled tve_change" id="t_share"
                   data-ctrl="function:social.enabledChange"
                   value="t_share"<?php echo in_array('t_share', $selected) ? ' checked' : '' ?>>
            <label for="t_share">Twitter tweet</label>
        </div>
        <?php if (!$is_custom) : ?>
            <div class="tve_lightbox_input_holder">
                <input type="checkbox" class="config-enabled tve_change" id="t_follow"
                       data-ctrl="function:social.enabledChange"
                       value="t_follow"<?php echo in_array('t_follow', $selected) ? ' checked' : '' ?>>
                <label for="t_follow">Twitter follow</label>
            </div>
        <?php endif ?>
    </span>
    <span class="tve-social-item">
        <span class="thrv-icon-linkedin thrv-social-option-icon"></span>
        <div class="tve_lightbox_input_holder">
            <input type="checkbox" class="config-enabled tve_change" id="in_share"
                   data-ctrl="function:social.enabledChange"
                   value="in_share"<?php echo in_array('in_share', $selected) ? ' checked' : '' ?>>
            <label for="in_share">Linked in share</label>
        </div>
    </span>
    <span class="tve-social-item">
        <span class="thrv-icon-pinterest2 thrv-social-option-icon"></span>
            <div class="tve_lightbox_input_holder">
                <input type="checkbox" class="config-enabled tve_change" id="pin_share"
                       data-ctrl="function:social.enabledChange"
                       value="pin_share"<?php echo in_array('pin_share', $selected) ? ' checked' : '' ?>>
                <label for="pin_share">Pinterest pin</label>
            </div>
    </span>
    <span class="tve-social-item">
        <span class="thrv-icon-xing thrv-social-option-icon"></span>
        <div class="tve_lightbox_input_holder">
            <input type="checkbox" class="config-enabled tve_change" id="xing_share"
                   data-ctrl="function:social.enabledChange"
                   value="xing_share"<?php echo in_array('xing_share', $selected) ? ' checked' : '' ?>>
            <label for="xing_share">Xing share</label>
        </div>
    </span>

    <div class="tve_clear"></div>
</div>
<div class="tve_clear"></div>
<br/><br/>
<div id="tve-social-custom-config">
    <h><b>Step 2.</b> Configure the options for each button:</h>

    <div id="tve-lb-form">
        <div class="thrv_wrapper thrv_tabs_shortcode">
            <div class="tve_scT tve_vtabs tve_green">
                <ul class="tve_clearfix">
                    <?php if (!$is_custom) : ?>
                        <li data-ctrl="function:social.configTabClick"
                            class="tve_click tve_tab_fb_like"<?php if (!in_array('fb_like', $selected)) echo ' style="display:none"' ?>>
                            <span class="tve_scTC1">Facebook Like</span></li>
                    <?php endif ?>
                    <li data-ctrl="function:social.configTabClick"
                        class="tve_click tve_tab_fb_share"<?php if (!in_array('fb_share', $selected)) echo ' style="display:none"' ?>>
                        <span class="tve_scTC1">Facebook Share</span></li>
                    <?php if (!$is_custom) : ?>
                        <li data-ctrl="function:social.configTabClick"
                            class="tve_click tve_tab_g_plus"<?php if (!in_array('g_plus', $selected)) echo ' style="display:none"' ?>>
                            <span class="tve_scTC1">Google +1</span></li>
                    <?php endif ?>
                    <li data-ctrl="function:social.configTabClick"
                        class="tve_click tve_tab_g_share"<?php if (!in_array('g_share', $selected)) echo ' style="display:none"' ?>>
                        <span class="tve_scTC1">Google Share</span></li>
                    <li data-ctrl="function:social.configTabClick"
                        class="tve_click tve_tab_t_share"<?php if (!in_array('t_share', $selected)) echo ' style="display:none"' ?>>
                        <span class="tve_scTC1">Twitter Tweet</span></li>
                    <?php if (!$is_custom) : ?>
                        <li data-ctrl="function:social.configTabClick"
                            class="tve_click tve_tab_t_follow"<?php if (!in_array('t_follow', $selected)) echo ' style="display:none"' ?>>
                            <span class="tve_scTC1">Twitter Follow</span></li>
                    <?php endif ?>
                    <li data-ctrl="function:social.configTabClick"
                        class="tve_click tve_tab_in_share"<?php if (!in_array('in_share', $selected)) echo ' style="display:none"' ?>>
                        <span class="tve_scTC1">Linked In Share</span></li>
                    <li data-ctrl="function:social.configTabClick"
                        class="tve_click tve_tab_pin_share"<?php if (!in_array('pin_share', $selected)) echo ' style="display:none"' ?>>
                        <span class="tve_scTC1">Pinterest Pin</span></li>
                    <li data-ctrl="function:social.configTabClick"
                        class="tve_click tve_tab_xing_share"<?php if (!in_array('xing_share', $selected)) echo ' style="display:none"' ?>>
                        <span class="tve_scTC1">Xing Share</span></li>

                </ul>

                <?php if (!$is_custom) : ?>
                    <div class="tve_scTC tve_tc_fb_like tve_social_config_container"
                         style="display: none;padding: 20px; min-height: 226px;" data-config="fb_like">
                        <h4>
                            Facebook Like Settings
                        </h4>

                        <div class="social-settings">

                            <label class="tve_lightbox_label">URL to like</label>
                            <input type="text" class="tve_lightbox_input tve_lightbox_input_inline social-config-text"
                                   name="href"
                                   value="<?php echo isset($config['fb_like']['href']) ? $config['fb_like']['href'] : '' ?>"/>
                            <button data-ctrl="function:social.copyLink"
                                    class="tve_click tve-btn-inline tve_editor_button tve_editor_button_default"><span>Use this URL for all social networks</span>
                            </button>
                            <div class="tve-sp"></div>
                            <label class="tve_lightbox_label">&nbsp;</label>
                            <span class="tve_comment">You can leave this empty to use the URL on which the button is
                                    located</span>

                            <div class="tve-sp"></div>
                        </div>
                    </div>
                <?php endif ?>

                <div class="tve_scTC tve_tc_fb_share tve_social_config_container"
                     style="display: none;padding: 20px; min-height: 226px;" data-config="fb_share">
                    <h4>Facebook Share Settings</h4>

                    <div class="social-settings">

                        <?php if ($is_custom) : ?>
                            <div class="tve_message tve_success">
                                Please note: in order to use the Facebook "Feed Dialog" (this is the default option),
                                you need to create a Facebook App for your website.
                                <a class="tve_lightbox_link tve_lightbox_link_create" target="_blank" href="https://thrivethemes.com/tkb_item/facebook-app-id/">Click
                                    here to learn how to set up a Facebook App.</a>
                                <br>
                                Alternatively, you can just use the "Share Dialog" from the
                                    <a href="javascript:void(0)" class="tve_click tve_lightbox_link tve_lightbox_link_info" data-target="#tve-s-fb-advanced" data-ctrl="function:social.toggleDisplay">Advanced options</a>.
                            </div>
                            <div class="tve-sp"></div>

                            <label class="tve_lightbox_label">App ID</label>
                            <input
                                type="text"<?php echo !empty($_POST['social_fb_app_id']) ? ' readonly="readonly"' : '' ?>
                                class="tve_lightbox_input tve_lightbox_input_inline tve_change" name="app_id"
                                data-ctrl-change="function:social.syncValue"
                                data-update-selector=".tve_tc_fb_like input[name='app_id']"
                                value="<?php echo isset($_POST['social_fb_app_id']) ? $_POST['social_fb_app_id'] : '' ?>"/>
                            <a<?php echo !empty($_POST['social_fb_app_id']) ? ' style="display:none"' : '' ?>
                                href="javascript:void(0)"
                                class="tve_editor_button tve_editor_button_success tve_fb_id_invalid tve_click tve-inline"
                                data-ctrl="function:networks.fb_share.validateAppID">
                                Validate App ID
                            </a>
                            <a<?php echo empty($_POST['social_fb_app_id']) ? ' style="display:none"' : '' ?>
                                href="javascript:void(0)"
                                class="tve_editor_button tve_editor_button_success tve_fb_id_valid tve_btn_success tve_click tve-inline"
                                data-ctrl="function:networks.fb_share.changeAppID">
                                Change
                            </a>
                            <span<?php echo empty($_POST['social_fb_app_id']) ? ' style="display:none"' : '' ?>
                                class="tve_fb_id_valid tve_span_success">Facebook App ID validated.</span>
                            <div class="tve-sp"></div>
                        <?php endif ?>
                        <div class="tve-sp"></div>

                        <label class="tve_lightbox_label">URL to share</label>
                        <input type="text" class="social-config-text tve_lightbox_input tve_lightbox_input_inline"
                               name="href"
                               value="<?php echo isset($config['fb_share']['href']) ? $config['fb_share']['href'] : '' ?>"/>
                        <button data-ctrl="function:social.copyLink"
                                class="tve_click tve-btn-inline tve_editor_button tve_editor_button_default"><span>Use this URL for all social networks</span>
                        </button>
                        <div class="tve-sp"></div>
                        <label class="tve_lightbox_label">&nbsp;</label>
                        <span class="tve_comment">You can leave this empty to use the URL on which the button is
                                located</span>

                        <div class="tve-sp"></div>
                        <?php if ($is_custom) : ?>
                            <label class="tve_lightbox_label">Button label</label>
                            <input type="text" class="social-config-text tve_lightbox_input tve_lightbox_input_inline"
                                   name="label"
                                   value="<?php echo isset($config['fb_share']['label']) ? $config['fb_share']['label'] : 'Share' ?>"/>
                            <div class="tve-sp"></div>
                            <label class="tve_lightbox_label">&nbsp;</label>
                            <span class="tve_comment">Give the text to be shown on the button</span>
                            <div class="tve-sp"></div>
                            <label class="tve_lightbox_label"></label>
                            <a href="javascript:void(0)" class="tve_click tve_lightbox_link tve_lightbox_link_toggle"
                               data-ctrl="function:social.toggleDisplay"
                               data-target="#tve-s-fb-advanced">Show / hide advanced options</a>
                            <div class="tve-sp"></div>
                            <div id="tve-s-fb-advanced" style="display:none">
                                <h6 class="tve_text_center">
                                    Which Sharing Method Would You Like To Use?
                                </h6>

                                <div class="tve-fb-share-types tve_clearfix">
                                    <div
                                        class="tve_text_center tve_click tve-half tve_selectable<?php if (empty($config['fb_share']['type']) || $config['fb_share']['type'] == 'feed') echo ' tve_selected' ?>"
                                        data-ctrl="function:networks.fb_share.setup.type" data-type="feed">
                                        <img src="<?php echo tve_editor_css() . '/images/fb-share.png' ?>" alt=""/">
                                        <div class="tve-sp"></div>
                                        <h6>
                                            Feed Dialog
                                        </h6>

                                        <p>
                                            This is the default Facebook sharing option. Using the feed dialog is
                                            the right choice in most cases.
                                        </p>
                                    </div>
                                    <div
                                        class="tve_text_center tve_click tve-half tve_selectable<?php if (!empty($config['fb_share']['type']) && $config['fb_share']['type'] == 'share') echo ' tve_selected' ?>"
                                        data-ctrl="function:networks.fb_share.setup.type" data-type="share">
                                        <img src="<?php echo tve_editor_css() . '/images/fb-feed.png' ?>" alt=""/">
                                        <div class="tve-sp"></div>
                                        <h6>
                                            Share Dialog
                                        </h6>

                                        <p>
                                            This is an older method of Facebook sharing. Use this if you have a
                                            specific reason not to use the feed dialog.
                                        </p>
                                    </div>
                                </div>
                                <input type="hidden" name="type" id="social-config-fb_share-type"
                                       class="social-config-text"
                                       value="<?php echo isset($config['fb_share']['type']) ? $config['fb_share']['type'] : 'feed' ?>">

                                <div class="tve-sp"></div>
                                <div
                                    id="fb-feed-options"<?php if (!empty($config['fb_share']['type']) && $config['fb_share']['type'] == 'share') echo ' style="display: none"' ?>>
                                    <div class="tve-sp"></div>
                                    <p>
                                        By default, the shared message is extracted from the open graph meta tags in the
                                        page content. You can, however, override this by adding custom information
                                        below.
                                    </p>

                                    <div class="tve-sp"></div>
                                    <label class="tve_lightbox_label">Link name</label>
                                    <input type="text"
                                           class="social-config-text tve_lightbox_input tve_lightbox_input_inline"
                                           name="name"
                                           value="<?php echo isset($config['fb_share']['name']) ? $config['fb_share']['name'] : '' ?>"/>

                                    <div class="tve-sp"></div>
                                    <label class="tve_lightbox_label">&nbsp;</label>
                                    <span class="tve_comment">
                                        This is the main title of the link that is to be shared.
                                            Quick tip: for maximum exposure, choose a name that gets the interest of
                                            people so that they click through to the URL that you are sharing.
                                    </span>

                                    <div class="tve-sp"></div>
                                    <label class="tve_lightbox_label">Caption</label>
                                    <input type="text"
                                           class="social-config-text tve_lightbox_input tve_lightbox_input_inline"
                                           name="caption"
                                           value="<?php echo isset($config['fb_share']['caption']) ? $config['fb_share']['caption'] : '' ?>"/>

                                    <div class="tve-sp"></div>
                                    <label class="tve_lightbox_label">&nbsp;</label>
                                    <span class="tve_comment">
                                        This is shown immediately under the link name. If left
                                        blank this will be the URL of the link.
                                    </span>

                                    <div class="tve-sp"></div>
                                    <label class="tve_lightbox_label">Description</label>
                                    <textarea class="social-config-text tve_lightbox_textarea tve_lightbox_input_inline"
                                              name="description"><?php echo isset($config['fb_share']['description']) ? $config['fb_share']['description'] : '' ?></textarea>

                                    <div class="tve-sp"></div>
                                    <label class="tve_lightbox_label">&nbsp;</label>
                                    <span class="tve_comment">
                                        Give a description of the link. If not set then this is
                                        automatically populated using data from the linked page.
                                    </span>

                                    <div class="tve-sp"></div>

                                    <div class="tve-field-value">
                                        <label for="" class="tve_lightbox_label">Image URL</label>
                                        <a href="javascript:void(0)"
                                           class="tve_editor_button tve_editor_button_success tve_mousedown"
                                           data-ctrl="function:social.openMedia">
                                            Choose image
                                        </a>
                                        &nbsp;
                                        <?php $fb_image = isset($config['fb_share']['image']) ? $config['fb_share']['image'] : '' ?>
                                        <a href="javascript:void(0)"<?php if (!$fb_image) echo ' style="display:none"' ?>
                                           class="tve_editor_button tve_editor_button_cancel tve-s-remove-img tve_click"
                                           data-ctrl="function:social.removeMedia">
                                            Remove image
                                        </a>
                                        <div class="tve-sp"></div>
                                        <label class="tve_lightbox_label">&nbsp;</label>
                                        <input type="hidden" class="social-config-text tve-image-value" name="image"
                                               value="<?php echo $fb_image ?>"/>
                                        <img src="<?php echo $fb_image ?>" class="tve-s-custom-image"
                                             style="max-width:200px;<?php if (!$fb_image) echo ' display: none' ?>">

                                        <div class="tve-sp"></div>
                                        <label class="tve_lightbox_label">&nbsp;</label>
                                        <span class="tve_comment">
                                            The URL of a picture attached to this post. Recommended
                                            image size is 200px x 200px with a maximum aspect ratio of 3:1.
                                        </span>
                                        <div class="tve-sp"></div>
                                    </div>

                                </div>
                            </div>
                        <?php endif ?>
                    </div>
                </div>

                <?php if (!$is_custom) : ?>
                    <div class="tve_scTC tve_tc_g_plus tve_social_config_container"
                         style="display: none;padding: 20px; min-height: 226px;" data-config="g_plus">
                        <div class="social-settings">
                            <h4>Google +1 Settings</h4>

                            <div class="tve-sp"></div>
                            <div class="tve-sp"></div>
                            <label class="tve_lightbox_label">URL to +1</label>
                            <input type="text" class="social-config-text tve_lightbox_input tve_lightbox_input_inline"
                                   name="href"
                                   value="<?php echo isset($config['g_plus']['href']) ? $config['g_plus']['href'] : '' ?>"/>
                            <button data-ctrl="function:social.copyLink"
                                    class="tve_click tve-btn-inline tve_editor_button tve_editor_button_default">
                                Use this URL for all social networks
                            </button>
                            <div class="tve-sp"></div>
                            <label class="tve_lightbox_label">&nbsp;</label>
                                <span class="tve_comment">
                                    You can leave this empty to use the URL on which the button is located
                                </span>

                            <div class="tve-sp"></div>
                        </div>
                    </div>
                <?php endif ?>

                <div class="tve_scTC tve_tc_g_share tve_social_config_container"
                     style="display: none;padding: 20px; min-height: 226px;" data-config="g_share">
                    <div class="social-settings">
                        <h4>
                            Google Share Settings
                        </h4>

                        <div class="tve-sp"></div>
                        <div class="tve-sp"></div>
                        <label class="tve_lightbox_label">URL to share</label>
                        <input type="text" class="social-config-text tve_lightbox_input tve_lightbox_input_inline"
                               name="href"
                               value="<?php echo isset($config['g_share']['href']) ? $config['g_share']['href'] : '' ?>"/>
                        <button data-ctrl="function:social.copyLink"
                                class="tve_click tve_editor_button tve_editor_button_default">
                            Use this URL for all social networks
                        </button>

                        <div class="tve-sp"></div>
                        <label class="tve_lightbox_label">&nbsp;</label>
                            <span class="tve_comment">
                                You can leave this empty to use the URL on which the button is located.
                            </span>

                        <div class="tve-sp"></div>

                        <?php if ($is_custom) : ?>
                            <label class="tve_lightbox_label">Button label</label>
                            <input type="text" class="social-config-text tve_lightbox_input tve_lightbox_input_inline"
                                   name="label"
                                   value="<?php echo isset($config['g_share']['label']) ? $config['g_share']['label'] : 'Share +1' ?>"/>
                            <div class="tve-sp"></div>
                            <label class="tve_lightbox_label">&nbsp;</label>
                            <span class="tve_comment">
                                    Give the text to be shown on the button
                                </span>
                            <div class="tve-sp"></div>
                        <?php endif ?>
                    </div>
                </div>

                <div class="tve_scTC tve_tc_t_share tve_social_config_container"
                     style="display: none;padding: 20px; min-height: 226px;" data-config="t_share">
                    <div class="social-settings">
                        <h4>
                            Twitter Tweet Settings
                        </h4>
                        <label class="tve_lightbox_label">URL to tweet</label>
                        <input id="ts-url" type="text" data-ctrl="function:networks.t_share.setup.tweetLength"
                               class="tve_keyup social-config-text tve_lightbox_input tve_lightbox_input_inline"
                               name="href"
                               value="<?php echo isset($config['t_share']['href']) ? $config['t_share']['href'] : '' ?>"/>
                        <button data-ctrl="function:social.copyLink"
                                class="tve_click tve-btn-inline tve_editor_button tve_editor_button_default">
                            Use this URL for all social networks
                        </button>
                        <div class="tve-sp"></div>
                        <label class="tve_lightbox_label">&nbsp;</label>
                            <span class="tve_comment">
                                You can leave this empty to use the URL on which the button is located
                            </span>

                        <div class="tve-sp"></div>
                        <label class="tve_lightbox_label">Tweet</label>
                        <textarea id="ts-tweet" data-ctrl="function:networks.t_share.setup.tweetLength"
                                  class="tve_keyup social-config-text tve_lightbox_textarea tve_lightbox_input_inline"
                                  name="tweet"><?php echo isset($config['t_share']['tweet']) ? $config['t_share']['tweet'] : '' ?></textarea>

                        <div class="tve-sp"></div>
                        <label class="tve_lightbox_label">&nbsp;</label>
                            <span class="tve_comment">
                            <span id="tve-s-t-counter" class="tve_comment"><span
                                    class="c-cnt">140</span> characters remaining</span>
                            </span>

                        <div class="tve-sp"></div>
                        <div class="tve-sp"></div>
                        <label class="tve_lightbox_label">&nbsp;</label>
                            <span class="tve_comment">
                                Type a message to tweet. If left empty then it will use the
                                default tweet text extracted from the URL to be tweeted. You can use the
                                {tcb_post_title} shortcode to post a title into the tweet.
                            </span>

                        <div class="tve-sp"></div>
                        <label class="tve_lightbox_label">Via</label>
                        <input id="ts-via" data-ctrl="function:networks.t_share.setup.tweetLength" type="text"
                               class="tve_keyup social-config-text tve_lightbox_input tve_lightbox_input_inline"
                               name="via"
                               value="<?php echo isset($config['t_share']['via']) ? $config['t_share']['via'] : '' ?>"/>

                        <div class="tve-sp"></div>
                        <label class="tve_lightbox_label">&nbsp;</label>
                            <span class="tve_comment">
                                Optional. Screen name of the user to attribute the Tweet to
                                (without @)
                            </span>

                        <div class="tve-sp"></div>
                        <?php if ($is_custom) : ?>
                            <label class="tve_lightbox_label">Counter URL</label>
                            <input type="text" class="social-config-text tve_lightbox_input tve_lightbox_input_inline"
                                   name="counter"
                                   value="<?php echo isset($config['t_share']['counter']) ? $config['t_share']['counter'] : '' ?>"/>
                            <div class="tve-sp"></div>
                            <label class="tve_lightbox_label">&nbsp;</label>
                            <span class="tve_comment">
                                Optional. If you've shortened your link, add the full URL for the
                                share counter here.
                            </span>
                            <div class="tve-sp"></div>
                            <label class="tve_lightbox_label">Button Label</label>
                            <input type="text" class="social-config-text tve_lightbox_input tve_lightbox_input_inline"
                                   name="label"
                                   value="<?php echo isset($config['t_share']['label']) ? $config['t_share']['label'] : 'Tweet' ?>"/>
                            <div class="tve-sp"></div>
                            <label class="tve_lightbox_label">&nbsp;</label>
                            <span class="tve_comment">
                                Optional. Give the text to be shown on the button
                            </span>
                            <div class="tve-sp"></div>
                        <?php endif ?>
                    </div>
                </div>

                <?php if (!$is_custom) : ?>
                    <div class="tve_scTC tve_tc_t_follow tve_social_config_container"
                         style="display: none;padding: 20px; min-height: 226px;" data-config="t_follow">

                        <div class="social-settings">
                            <h4>
                                Twitter Follow Settings
                            </h4>
                            <label class="tve_lightbox_label">User to Follow</label>
                            <input type="text" class="social-config-text tve_lightbox_input tve_lightbox_input_inline"
                                   name="username"
                                   value="<?php echo isset($config['t_follow']['username']) ? $config['t_follow']['username'] : '' ?>"/>

                            <div class="tve-sp"></div>
                            <label class="tve_lightbox_label">&nbsp;</label>
                            <span class="tve_comment">
                                    Add here the username you want to be follow. Example:
                                    myusername
                            </span>

                            <div class="tve-sp"></div>
                            <label class="tve_lightbox_label">Hide Username</label>
                            <label class="tve_switch">
                                <input type="checkbox" class="social-config-text" name="hide_username"
                                       value="1" <?php echo isset($config['t_follow']['hide_username']) && $config['t_follow']['hide_username'] == 1 ? 'checked="checked"' : "" ?> />
                                <span></span>
                            </label>

                            <div class="tve-sp"></div>
                            <label class="tve_lightbox_label">&nbsp;</label>
                            <span class="tve_comment">
                                Set on to hide the username on the button
                            </span>

                            <div class="tve-sp"></div>
                        </div>
                    </div>
                <?php endif ?>

                <div class="tve_scTC tve_tc_in_share tve_social_config_container"
                     style="display: none;padding: 20px; min-height: 226px;" data-config="in_share">

                    <div class="social-settings">
                        <h4>
                            Linked In Share Settings
                        </h4>
                        <label class="tve_lightbox_label">Url to Share</label>
                        <input type="text" class="social-config-text tve_lightbox_input tve_lightbox_input_inline"
                               name="href"
                               value="<?php echo isset($config['in_share']['href']) ? $config['in_share']['href'] : '' ?>"/>
                        <button data-ctrl="function:social.copyLink"
                                class="tve_click tve-btn-inline tve_editor_button tve_editor_button_default">
                            Use this URL for all social networks
                        </button>
                        <div class="tve-sp"></div>
                        <label class="tve_lightbox_label">&nbsp;</label>
                            <span class="tve_comment">
                                You can leave this empty to use the URL on which the button is
                                located
                            </span>

                        <div class="tve-sp"></div>

                        <?php if ($is_custom) : ?>
                            <label class="tve_lightbox_label">Button label</label>
                            <input type="text" class="social-config-text tve_lightbox_input tve_lightbox_input_inline"
                                   name="label"
                                   value="<?php echo isset($config['in_share']['label']) ? $config['in_share']['label'] : 'Share' ?>"/>
                            <div class="tve-sp"></div>
                            <label class="tve_lightbox_label">&nbsp;</label>
                            <span class="tve_comment">
                                Give the text to be shown on the button
                            </span>
                            <div class="tve-sp"></div>
                        <?php endif ?>

                    </div>
                </div>

                <div class="tve_scTC tve_tc_pin_share tve_social_config_container"
                     style="display: none;padding: 20px; min-height: 226px;" data-config="pin_share">

                    <div class="social-settings">
                        <h4>
                            Pinterest Pin Settings
                        </h4>
                        <label class="tve_lightbox_label">Url to Share</label>
                        <input type="text" class="social-config-text tve_lightbox_input tve_lightbox_input_inline"
                               name="href"
                               value="<?php echo isset($config['pin_share']['href']) ? $config['pin_share']['href'] : '' ?>"/>
                        <button data-ctrl="function:social.copyLink"
                                class="tve_click tve-btn-inline tve_editor_button tve_editor_button_default"><span>Use this URL for all social networks</span>
                        </button>
                        <div class="tve-sp"></div>
                        <label class="tve_lightbox_label">&nbsp;</label>
                            <span class="tve_comment">
                                You can leave this empty to use the URL on which the button is
                                located
                            </span>

                        <div class="tve-sp"></div>
                        <div class="tve-field-value">
                            <label class="tve_lightbox_label">Image URL</label>
                            <a href="javascript:void(0)" class="tve_editor_button tve_editor_button_success tve_mousedown"
                               data-ctrl="function:social.openMedia">
                                Choose image
                            </a>
                            &nbsp;
                            <?php $pin_image = isset($config['pin_share']['media']) && $config['pin_share']['media'] != '{tcb_post_image}' ? $config['pin_share']['media'] : '' ?>
                            <a href="javascript:void(0)"<?php if (!$pin_image) echo ' style="display:none"' ?>
                               class="tve-s-remove-img tve_click tve_editor_button tve_editor_button_cancel"
                               data-ctrl="function:social.removeMedia">
                                Remove image
                            </a>
                            <div class="tve-sp"></div>
                            <label class="tve_lightbox_label">&nbsp;</label>
                            <input type="hidden" class="social-config-text tve-image-value"
                                   data-value-if-empty="{tcb_post_image}" name="media"
                                   value="<?php echo $pin_image ?>"/>
                            <img src="<?php echo $pin_image ?>" class="tve-s-custom-image"
                                 style="max-width:200px;<?php if (!$pin_image) echo 'display: none' ?>">

                        </div>
                        <div class="tve-sp"></div>

                        <label class="tve_lightbox_label">Description</label>
                        <textarea class="social-config-text tve_lightbox_textarea tve_lightbox_input_inline"
                                  name="description"><?php echo isset($config['pin_share']['description']) ? $config['pin_share']['description'] : '' ?></textarea>

                        <div class="tve-sp"></div>
                        <label class="tve_lightbox_label">&nbsp;</label>
                            <span class="tve_comment">
                                Give a description of the link. If not set then this is automatically
                                populated using data from current link
                            </span>

                        <div class="tve-sp"></div>
                    </div>
                </div>

                <div class="tve_scTC tve_tc_xing_share tve_social_config_container"
                     style="display: none;padding: 20px; min-height: 226px;" data-config="xing_share">

                    <div class="social-settings">
                        <h4>
                            Xing Share Settings
                        </h4>
                        <label class="tve_lightbox_label">Url to Share</label>
                        <input type="text" class="social-config-text tve_lightbox_input tve_lightbox_input_inline"
                               name="href"
                               value="<?php echo isset($config['xing_share']['href']) ? $config['xing_share']['href'] : '' ?>"/>
                        <button data-ctrl="function:social.copyLink"
                                class="tve_click tve-btn-inline tve_editor_button tve_editor_button_default">
                            <span>Use this URL for all social networks</span>
                        </button>
                        <div class="tve-sp"></div>
                        <label class="tve_lightbox_label">&nbsp;</label>
                            <span class="tve_comment">
                                You can leave this empty to use the URL on which the button is
                                located
                            </span>

                        <div class="tve-sp"></div>
                        <?php if ($is_custom) : ?>
                            <label class="tve_lightbox_label">Button label</label>
                            <input type="text" class="social-config-text tve_lightbox_input tve_lightbox_input_inline"
                                   name="label"
                                   value="<?php echo isset($config['xing_share']['label']) ? $config['xing_share']['label'] : 'Share' ?>"/>
                            <div class="tve-sp"></div>
                            <label class="tve_lightbox_label">&nbsp;</label>
                            <span class="tve_comment">
                                    Give the text to be shown on the button
                            </span>
                            <div class="tve-sp"></div>
                        <?php endif ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="tve_right right">
    <a href="javascript:void(0)" class="tve_click tve_editor_button tve_editor_button_success"
       data-ctrl="function:social.save">
        Save
    </a>
    &nbsp;
    <a href="javascript:void(0)" class="tve_click tve_editor_button tve_editor_button_default"
       data-ctrl="function:controls.lb_close">
        Cancel
    </a>
</div>