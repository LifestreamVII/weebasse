$(document).ready(()=>{

    $("form").submit(function(e){
        e.preventDefault();

        $.ajax({
            url: 'connect.php',
            type: 'POST',
            
            data: $("form").serialize(),
            dataType: 'text'
          })

          .done(function(data) {
            if (data == "Success") {
              $("#statustxt").fadeOut(400, function() {
                $(this).html("Connected.").fadeIn(400);
                setTimeout(() => {
                  window.location.reload();
                }, 600);
            });
            }
            else if (data == "Failed") {
              $("#statustxt").fadeOut(400, function() {
                $(this).html("Incorrect credentials.").fadeIn(400);
              })
            }
            else {
              $("#statustxt").fadeOut(400, function() {
                $(this).html("Unknown Error.").fadeIn(400);
              })
            }
    });
    })

    $.ajax({
      url: "sessionchk.php",
      type: "POST",
      dataType: "text",
    }).done(function (data) {
      if (data == "Active") {
        $.ajax({
          url: "index-reg.php",
          success: function (result) {
            $("#contain").html(result);
          },
        });
      }
    });

})
