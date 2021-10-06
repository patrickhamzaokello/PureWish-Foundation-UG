$(document).ready(function () {
  $("form").submit(function (event) {
    var formData = {
      contactname: $("#contactname").val(),
      contactemail: $("#contactemail").val(),
      contactsubject: $("#contactsubject").val(),
      contactmessage: $("#contactmessage").val(),

    };

    console.log(formData);

    $.ajax({
      type: "POST",
      url: "processcontacts.php",
      data: formData,
      dataType: "json",
      encode: true,
    }).done(function (data) {
      if (!data.success) {
   
        // if (data.errors.contactemail) {
          
        // }

        // if (data.errors.contactsubject) {
          
        // }
        // if (data.errors.contactmessage) {
          
        // }
      } else {
        $(".contactmessagediv").html(
          '<div class="alert alert-success">' + data.message + "</div>"
        );

        document.getElementById("mycontact").reset();

      }
    });

    event.preventDefault();
  });
});
