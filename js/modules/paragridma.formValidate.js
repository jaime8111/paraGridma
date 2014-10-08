/* ================================
   VALIDADOR
 * ================================ */

var formErrors = {
    'fieldRequired': 'Field Required',
    'notValidPassword': 'Not valid password format',
    'notValidEmail': 'Please, enter a valid e-mail',
    'notValidNumber': 'This field must be a number',
    'notValidDocNumber': 'Document number is not valid',
    'notValidDate': 'Please, enter a valid date',
    'notValidPhone': 'Please, entar a valid phone number',
    'notValidURL': 'Not valid URL'
};

// Validador de campos de formulario marcados con clases identificativas:
// required, isEmail, isNumber,...
var formValidate = {
    formOk      : true,
    passRegxp   : /(?=^.{8,}$)((?=.*\d))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/,
    emailRegxp  : /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/,
    numberRegxp : /^[0-9]+$/,
    nifRegxp    : /^(\d{1,8})([trwagmyfpdxbnjzsqvhlcke])$/,
    cifRegxp    : /^[abcdefghjklmnpqs]\d{7}[0-9,a-j]$/,
    nieRegExp   : /^[x-z]{1}(\d{7})([a-z]{1})$/,
    dateRegxp  :  /^(0?[1-9]|[12][0-9]|3[01])[\/](0?[1-9]|1[012])[\/]\d{4}$/,
    phoneRegxp :  /^[6-7]{1}[0-9]{8}$/,
    urlRegxp   :  /^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \?=.-]*)*\/?$/,
    emailMultipleRegxp : function(fieldValue) {
        var result = fieldValue.split(","),
            resultLength = result.length;
        for(var i = 0; i < resultLength; i++) {
            if(!this.emailRegxp.test(result[i].toLowerCase())) {
                return false;
            }
        }
        return true;
    },
    showError   : function($elem, txt) {
        this.formOk = false;
        console.log($elem);
        console.log($elem.parent());
        $elem.parent().addClass('error')
             .append('<small class="error">' + txt + '</small>');
    },
    init        : function($form) {
        $form.find('small.error').remove();
        $form.find('.error').removeClass('error');

        this.formOk = true;
        var that = this;

        $form.find(':input').not('.disabled, :disabled').each(function() {
            var $field = $(this),
                fieldValue = $.trim($field.val()),
                isRequired = $field.prop('required') || $field.hasClass('required'),
                test = isRequired || fieldValue !== '';

            if ($field.is(':checkbox') && isRequired && !$field.is(':checked')) {
                formValidate.showError($field, formErrors.fieldRequired);
            } else if (isRequired && fieldValue === '') {
                formValidate.showError($field, formErrors.fieldRequired);
            } else if ($field.hasClass('isPassword')  && !that.passRegxp.test(fieldValue)) {
                formValidate.showError($field, formErrors.notValidPassword);
            } else if ($field.hasClass('isEmail')  && !that.emailRegxp.test(fieldValue.toLowerCase()) && test) {
                formValidate.showError($field, formErrors.notValidEmail);
            } else if ($field.hasClass('isNumber') && !that.numberRegxp.test(fieldValue.toLowerCase()) && test) {
                formValidate.showError($field, formErrors.notValidNumber);
            } else if ($field.hasClass('isDocument') && (!that.nifRegxp.test(fieldValue.toLowerCase()) && !that.cifRegxp.test(fieldValue.toLowerCase()) && !that.nieRegExp.test(fieldValue.toLowerCase())) && test) {
                formValidate.showError($field, formErrors.notValidDocNumber);
            } else if (isRequired && $field.hasClass('selectOne') && !$field.parent().hasClass("disabled") && fieldValue === '-1') {
                formValidate.showError($field.parent(), formErrors.fieldRequired);
            } else if ($field.hasClass('isDate') && !that.dateRegxp.test(fieldValue.toLowerCase()) && test) {
                formValidate.showError($field, formErrors.notValidDate);
            } else if ($field.hasClass('isPhone') && !that.phoneRegxp.test(fieldValue.toLowerCase()) && test) {
                formValidate.showError($field, formErrors.notValidPhone);
            } else if ($field.hasClass('isUrl') && !that.urlRegxp.test(fieldValue.toLowerCase()) && test) {
                formValidate.showError($field, formErrors.notValidURL);
            }
            //return false;
        });
        return that.formOk;
    }
}

