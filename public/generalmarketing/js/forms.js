// Main Form
$('#contactForm1').on('submit',function(e){
    e.preventDefault();
    let full_name = $('#full_name').val();
    let email = $('#email').val();
    let phone_number = $('#phone_number').val();
    let website = $('#website').val();
    let message = $('#message').val();

    $.ajax({
      url: "contact-form1",
      type:"POST",
      data:{
        full_name:full_name,
        email:email,
        phone_number:phone_number,
        website:website,
        message:message,
      },
      headers: {
		//Make sure Meta token in included in meta file!!!!!!!!!!
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }, 
      success:function(response){
        console.log(response);
          if (response) {
          $('#success-message1').text(response.success); 
          document.getElementById("success-message1").style.color = 'green';
          $("#contactForm1")[0].reset(); 

        }
      },
      error: function(response) {}
     });
});



// Footer
$('#contactForm2').on('submit',function(e){
    e.preventDefault();
    let email = $('#email').val();
    $.ajax({
      url: "contact-form2",
      type:"POST",
      data:{
        email:email,
      },
      headers: {
		 //Make sure Meta token in included in meta file!!!!!!!!!!
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }, 
      success:function(response){
        console.log(response);
          if (response) {
          $('#success-message2').text(response.success); 
          document.getElementById("success-message2").style.color = 'green';

          $("#contactForm2")[0].reset(); 

        }
      },
      error: function(response) {}
     });
});


// Unsubscribe
$('#contactForm3').on('submit',function(e){
  e.preventDefault();
  let email = $('#email').val();
  $.ajax({
    url: "contact-form3",
    type:"POST",
    data:{
      email:email,
    },
    headers: {
   //Make sure Meta token in included in meta file!!!!!!!!!!
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }, 
    success:function(response){
      console.log(response);
        if (response) {
        $('#success-message3').text(response.success); 
        document.getElementById("success-message3").style.color = 'green';

        $("#contactForm3")[0].reset(); 

      }
    },
    error: function(response) {}
   });
});