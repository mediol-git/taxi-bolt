(function($)
{
  $(document).ready(function() {

    //$('#contact-form-tel').mask('9 (999) 999-99-99');

    $('#form-response-popup').popup();

    var request;

    $('#contact-form-city').change(function () {
      $(this).val() === 'РЎР°РЅРєС‚-РџРµС‚РµСЂР±СѓСЂРі' ? $('#company-car-check-container').show() : $('#company-car-check-container').hide();
    });

    var company_car_check = $('#company-car-check');
    var company_car_container = $('#company-car-container');
    var company_car = $('#contact-form-marka');

    company_car_check.click(function () {
      if (company_car_check.prop('checked')) {
        company_car.attr('disabled', true);
        company_car.val('Автомобиль компании');
        company_car_container.removeClass('has-error');
        company_car_container.removeClass('has-danger');
        $('#company-car-container li').text('');

      } else {
        company_car.attr('disabled', false);
        company_car.val('');
      }
    });

    $('#contact-form').validator().on('submit', function (event) {
      if (event.isDefaultPrevented()) {
        // handle the invalid form...
      } else {
        // everything looks good!
        yaCounter40469280.reachGoal('buttoncklick');
        gtag('event', 'click', {
          'event_category': 'button',
          'event_label': '1'
        });

        // Prevent default posting of form - put here to work in case of errors
        event.preventDefault();

        // Abort any pending request
        if (request) {
          request.abort();
        }
        // setup some local variables
        var $form = $(this);

        // Let's select and cache all the fields
        var $inputs = $form.find("input, select, textarea, button");

        // Serialize the data in the form
        var serializedData = $inputs.serialize();
        console.log("serializedData"+serializedData);

        // Let's disable the inputs for the duration of the Ajax request.
        // Note: we disable elements AFTER the form data has been serialized.
        // Disabled form elements will not be serialized.
        $inputs.prop("disabled", true);

        request = $.post('../../libs/contact-form.php', serializedData, function(response) {
          // Log the response to the console
          $("#form-response").html(response);
          console.log("response: "+response);
          $('#form-response-popup').popup('show');
          function closePopup(){
            $('#form-response-popup').popup('hide');
          }
          setTimeout(closePopup, 5000);
        });

        // Callback handler that will be called on success
        request.done(function (response, textStatus, jqXHR){
          // Log a message to the console
          console.log("No ajax error.");
          $form.trigger("reset");
          $(".chosen-select").trigger("chosen:updated");
        });

        // Callback handler that will be called on failure
        request.fail(function (jqXHR, textStatus, errorThrown){
          // Log the error to the console
          console.error(
            "The following ajax error occurred: "+
            textStatus, errorThrown
          );
        });

        // Callback handler that will be called regardless
        // if the request failed or succeeded
        request.always(function () {
          // Reenable the inputs
          $inputs.prop("disabled", false);
        });
      }
    });

    $('#terms').change(function () {
      if($(this).prop('checked')) {
        $('.yellow-button').prop('disabled', false);
      } else {
        $('.yellow-button').prop('disabled', true);
      }
    });
    $('#contact-form-city').change(function () {
      if($(this).val()=='РњРѕСЃРєРІР°') {
        $('#moscow-message').show();
      } else {
        $('#moscow-message').hide();
      }
    });
  
        if($('#contact-form-city').val()=='РњРѕСЃРєРІР°') {
        $('#moscow-message').show();
      } else {
        $('#moscow-message').hide();
      };
  });
})(jQuery);