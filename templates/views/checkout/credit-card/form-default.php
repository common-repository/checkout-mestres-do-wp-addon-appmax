<?php echo "<script type='text/javascript' src='".CWMP_APPMAX_PLUGIN_URL."assets/js/card.js'></script>"; ?>
<div class="card-container-appmax jp-card-container" style="width:100% !important;"></div>
<fieldset>
    <p class="form-row form-row-first">
        <input type="tel" autocomplete="off" maxlength="19" class="input-text jp-card-number" id="card_number" name="card_number"  placeholder="<?php esc_html_e( 'Número do Cartão', 'appmax-woocommerce' ); ?>" style="font-size: 1.0em; padding: 8px;">
    </p>
    <p class="form-row form-row-last">
        <input type="text" autocomplete="off" class="input-text jp-card-name" id="card_name" name="card_name" placeholder="<?php esc_html_e( 'Nome do Titular', 'appmax-woocommerce' ); ?>" style="font-size: 1.0em; padding: 8px;">
    </p>
    <div class="clear"></div>
    <p class="form-row form-row-first">
        <input type="tel" autocomplete="off" maxlength="14" class="input-text" id="card_cpf" name="card_cpf" placeholder="<?php esc_html_e( 'CPF do Titular', 'appmax-woocommerce' ); ?>" style="font-size: 1.0em; padding: 8px;">
    </p>
    <p class="form-row form-row-last">
        <input type="text" autocomplete="off" class="input-text jp-card-expiry" id="card_security_code" name="card_security_code" maxlength="4" placeholder="<?php esc_html_e( 'CVV', 'appmax-woocommerce' ); ?>" style="font-size: 1.0em; padding: 8px;">
    </p>
    <div class="clear"></div>
    <p class="form-row form-row-first">
        <select id="card_month" name="card_month" style="font-size: 1.0em; padding: 8px; width: 100%;">
            <?php echo $display_options_card_expiration_month; ?>
        </select>
    </p>
    <p class="form-row form-row-last">
        <select id="card_year" name="card_year" style="font-size: 1.0em; padding: 8px; width: 100%;">
            <?php echo $display_options_card_expiration_year; ?>
        </select>
		<input type="hidden" name="expiry" class="jp-card-expiry" />
    </p>
    <div class="clear"></div>
    <p class="form-row form-row-wide">
        <select id="installments" name="installments" style="font-size: 1.0em; padding: 8px; width: 100%;">
            <?php echo $display_installments; ?>
        </select>
    </p>
    <div class="clear"></div>
</fieldset>
<?php echo $display_script_payment; ?>
<script type="text/javascript">
var card = new Card({
    form: 'form.checkout',
    container: '.card-container-appmax',
    formSelectors: {
        numberInput: 'input#card_number',
		expiryInput: 'input#expiry',
        cvcInput: 'input#card_security_code',
        nameInput: 'input#card_name'
    }
});
</script>
