jQuery(document).ready(function($) {
var appmaxCpf = $("#billing_cpf");
var handleFieldsAPPMAX = function () {
$("#cpf_billet").val(appmaxCpf.val());
$("#cpf_pix").val(appmaxCpf.val());
};
$('form[name="checkout"]').focusout(handleFieldsAPPMAX);
$('form[name="checkout"]').focusin(handleFieldsAPPMAX);
$(".payment_method_woo-mercado-pago-ticket").click(handleFieldsAPPMAX);
handleFieldsAPPMAX();
});