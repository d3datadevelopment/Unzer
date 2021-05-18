
(function($){
    $.fn.d3HeidelpayValidateMissingUserParameter = function () {
        let isFormValid = true;

        /**
         * this is only for flow
         * TODO: update for wave
         **/

        const checkedRadioButton = $('#payment').find('input[name="paymentid"]:checked');
        const missingFields = checkedRadioButton.parent('.well dl').find('.d3HeidelpayMissingFields input:required');
        missingFields.each(function () {
            if (!this.value){
                isFormValid = false;
            }
        });

        return isFormValid;
    }

})(jQuery);
