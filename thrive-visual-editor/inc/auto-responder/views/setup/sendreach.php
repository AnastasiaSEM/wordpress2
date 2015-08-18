<h2>SendReach</h2>
<form action="<?php echo admin_url('admin.php?page=tve_api_connect') ?>" method="post">
    <input type="hidden" name="api" value="<?php echo $this->getKey() ?>"/>
    <table class="form-table">
        <tbody>
        <tr>
            <th scope="row"><label>Key:</label></th>
            <td>
                <input placeholder="Key" type="text" class="text" name="connection[key]"
                       value="<?php echo $this->param('key', @$_POST['connection']['key']) ?>"/>
            </td>
        </tr>
        <tr>
            <th scope="row"><label>Secret:</label></th>
            <td>
                <input placeholder="Secret" type="text" class="text" name="connection[secret]"
                       value="<?php echo $this->param('key', @$_POST['connection']['secret']) ?>"/>
            </td>
        </tr>
        <tr>
            <th></th>
            <td>
                <button type="submit" class="tve-button tve-button-green">Connect to SendReach</button>
            </td>
        </tr>
        </tbody>
    </table>
</form>
