<?php

if ( ! defined( "ABSPATH" ) ) {
    exit;
}

?>

<fieldset>
    <p class="form-row form-row-first">
        <label for="card_cpf_billet">
            <?php esc_html_e(  'CPF (Para emissão da Nota Fiscal)', 'appmax-woocommerce' ); ?>
            <span class="required">*</span>
        </label>
        <input type="text" autocomplete="off" maxlength="14" class="input-text" id="cpf_billet" name="cpf_billet" placeholder="<?php esc_html_e( 'CPF (Para emissão da Nota Fiscal)', 'appmax-woocommerce' ); ?>" style="font-size: 1.0em; padding: 8px;">
    </p>


</fieldset>

<?php echo $display_script_payment; ?>