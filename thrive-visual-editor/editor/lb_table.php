<h4>Insert Table</h4>
<hr class="tve_lightbox_line"/>
<input type="hidden" name="tve_lb_type" value="tve_table">
<input type="hidden" name="tve_table_style" value="<?php echo $_POST['table_style'] ?>">
<div class="tve_lb_fields">
    <label for="tve_table_rows_number">Number of rows (1 - 15)</label>
    <input class="tve_lightbox_input" type="text" name="tve_table_rows" id="tve_table_rows_number" maxlength="2" value="4">
    <br/><br/>
    <label for="tve_general_label tve_table_cols_number">Number of columns (1 - 15)</label>
    <input class="tve_lightbox_input" type="text" name="tve_table_cols" id="tve_table_cols_number" maxlength="2" value="4">
</div>