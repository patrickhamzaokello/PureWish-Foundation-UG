$(document).ready(function () {
  $("form").submit(function (event) {
    var formData = {
      volusername: $("#volname").val(),
      voluseremail: $("#volemail").val(),
      volusermessage: $("#volmessage").val(),
    };

    $.ajax({
      type: "POST",
      url: "processvolunteers.php",
      data: formData,
      dataType: "json",
      encode: true,
    }).done(function (data) {
      if (!data.success) {
   
        if (data.errors.voluseremail) {
          
        }

        if (data.errors.volusermessage) {
          
        }
      } else {
        $(".messagediv").html(
          '<div class="alert alert-success">' + data.message + "</div>"
        );

        setTimeout(function () {
          $(".messagediv").html(
            ''
          );
        }, 5000);

        document.getElementById("myform").reset();

      }
    });

    event.preventDefault();
  });
});
