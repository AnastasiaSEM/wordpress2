<?php /* lists all the events assigned to an element */ ?>
    <h4>
        <?php if ($scope == 'page') : ?>
            Page Event Manager
        <?php else : ?>
            Event Manager
        <?php endif ?>
    </h4>
    <hr class="tve_lightbox_line"/>
    <h5>Existing Events</h5>
<?php $error_indexes = array() ?>
<?php if (empty($events)) : ?>
    <?php if ($scope == 'page') : ?>
        <p>There are no events currently set up for this page</p>
    <?php else : ?>
        <p>There are no events currently set up for this element</p>
    <?php endif ?>
<?php else : ?>
    <div class="tve_event_manager">
        <table>
            <thead>
            <th width="20%">Trigger</th>
            <th width="50%">Action</th>
            <th width="30%">&nbsp;</th>
            </thead>
            <tbody>
            <?php foreach ($events as $index => $event) : ?>
                <?php $actions[$event['a']]->setConfig(empty($event['config']) ? array() : $event['config']) ?>
                <?php if (!$actions[$event['a']]->validateConfig()) : /* we need to make sure that the current event is not corrupted. Example: user deleted a lightbox */
                    $error_indexes [] = $index ?>
                <?php else : ?>
                    <tr>
                        <td><?php echo $triggers[$event['t']]->getName() ?></td>
                        <td>
                            <?php echo $actions[$event['a']]->getName();
                            if (!empty($event['config'])) echo $actions[$event['a']]->getSummary() ?>
                            <?php if (method_exists($actions[$event['a']], 'getRowActions')) : ?>
                                <?php echo $actions[$event['a']]->getRowActions() ?>
                            <?php endif ?>
                        </td>
                        <td style="text-align: right">
                            <a href="javascript:void(0)" data-action="edit" data-index="<?php echo $index ?>"
                               class="tve_event_onclick tve_lightbox_link tve_lightbox_link_edit">Edit</a> &nbsp; &nbsp;
                            <a href="javascript:void(0)" data-action="remove" data-index="<?php echo $index ?>"
                               class="tve_event_onclick tve_lightbox_link tve_lightbox_link_remove">Remove</a>
                        </td>
                    </tr>
                <?php endif ?>
            <?php endforeach ?>
            </tbody>
        </table>
    </div>
<?php endif ?>
    <div class="tve_clear" style="height: 20px;"></div>
    <div class="tve_landing_pages_actions">
        <div class="tve_editor_button tve_editor_button_default tve_button_margin tve_right tve_event_onclick"
             data-action="close">
            Close
        </div>
        <div class="tve_editor_button_success tve_editor_button tve_right tve_event_onclick" data-action="add">
            Add Event
        </div>
    </div>
    <div class="tve_clear"></div>
<?php if (!empty($error_indexes)) : ?>
    <input type="hidden" id="tve_event_list_errors" value="<?php echo implode(',', $error_indexes) ?>"/>
<?php endif ?>