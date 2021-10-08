$(document).ready(function () {
  $("form").submit(function (event) {
    var formData = {
      childname: $("#childnameinput").val(),
      sponsorname: $("#name").val(),
      sponsoremail: $("#email").val(),
      sponsoramount: $("#amount").val(),
      sponsormessage: $("#sponsormessage").val(),

    };

    console.log(formData);

    $.ajax({
      type: "POST",
      url: "processsponsorss.php",
      data: formData,
      dataType: "json",
      encode: true,
    }).done(function (data) {
      if (!data.success) {
   
      
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
