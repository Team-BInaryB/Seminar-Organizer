$(function () {
  "use strict";

  // Form

  var contactForm = function () {
    if ($("#contactForm").length > 0) {
      $("#contactForm").validate({
        rules: {
          f_name: "required",
          l_name: "required",
          gender: "required",
          education: "required",
          email: {
            required: true,
            email: true,
          },
        },
        messages: {
          f_name: "Please enter your first name",
          l_name: "Please enter your last name",
          email: "Please enter a valid email address",
          gender: "Please select gender",
          education: "Please select education",
        },
        /* submit via ajax */
        submitHandler: function (form) {
          var $submit = $(".submitting"),
            waitText = "Aquiring your spot...";

          $.ajax({
            type: "POST",
            url: "HandleRequest.php",
            data: $(form).serialize(),

            beforeSend: function () {
              $submit.css("display", "block").text(waitText);
            },
            success: function (msg) {
              if (msg == "OK") {
                $("#form-message-warning").hide();
                setTimeout(function () {
                  $("#contactForm").fadeOut();
                }, 1000);
                setTimeout(function () {
                  $("#form-message-success").fadeIn();
                }, 1400);
              } else {
                $("#form-message-warning").html(msg);
                $("#form-message-warning").fadeIn();
                $submit.css("display", "none");
              }
            },
            error: function () {
              $("#form-message-warning").html(
                "Something went wrong. Please try again."
              );
              $("#form-message-warning").fadeIn();
              $submit.css("display", "none");
            },
          });
        },
      });
    }
  };
  contactForm();
});
