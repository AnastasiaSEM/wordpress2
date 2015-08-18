<h2>Sendy</h2>
<form action="<?php echo admin_url('admin.php?page=tve_api_connect') ?>" method="post">
    <input type="hidden" name="api" value="<?php echo $this->getKey() ?>"/>
    <table class="form-table">
        <tbody>
        <tr>
            <th scope="row"><label>Installation URL:</label></th>
            <td>
                <input placeholder="http://" type="text" class="text" name="connection[url]"
                       value="<?php echo $this->param('url', @$_POST['connection']['url']) ?>"/>
            </td>
        </tr>
        <tr>
            <th scope="row"><label>List ID:</label></th>
            <td>
                <input placeholder="List ID" type="text" class="text" name="connection[lists][]"
                       value=""/>
                <button type="button" class="tve-sendy-add-list-input">Add</button>
                <?php foreach ($this->param('lists', !empty($_POST['connection']['lists']) ? $_POST['connection']['lists'] : array()) as $id) : ?>
                    <?php if (empty($id)) continue; ?>
                    <input placeholder="Secret" type="text" class="text" name="connection[lists][]"
                           value="<?php echo $id ?>"/>
                    <button type="button" class="tve-sendy-remove-list-input">Remove</button>
                <?php endforeach; ?>
            </td>
        </tr>
        <tr>
            <th></th>
            <td>
                <button type="submit" class="tve-button tve-button-green">Connect to Sendy</button>
            </td>
        </tr>
        </tbody>
    </table>
</form>
<script type="text/javascript">
    (function ($) {

        var remove_button = function () {
            $(this).prev().remove();
            $(this).remove();
        };

        jQuery(function () {
            $(".tve-sendy-add-list-input").click(function () {
                var _input = $(this).prev().clone();
                var _container = $(this).parent();
                var _remove = $('<button type="button" class="tve-sendy-remove-list-input">Remove</button>');
                _container.append(_input.val('')).append(_remove);
                _remove.click(remove_button);
            });
            $(".tve-sendy-remove-list-input").click(remove_button);
        });
    })(jQuery);
</script>
