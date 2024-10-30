<?php

if (!defined("ABSPATH")) {
    exit;
}

?>

<fieldset class="hide">
    <p class="form-row form-row-first">
        <label for="card_cpf_pix">
            <?php esc_html_e('CPF', 'appmax-woocommerce'); ?>
            <span class="required">*</span>
        </label>
        <input type="text" autocomplete="off" maxlength="14" class="input-text" id="cpf_pix" name="cpf_pix" placeholder="<?php esc_html_e('CPF', 'appmax-woocommerce'); ?>" style="font-size: 1.0em; padding: 8px;">
        <br><br>
    </p>

    <div class="clear"></div>

</fieldset>

<?php echo $display_script_payment; ?>