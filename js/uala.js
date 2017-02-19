// A $( document ).ready() block.
$( document ).ready(function() {
  	$('.carousel').carousel();

  	$("#contact").validate({
      rules: {
        contact_Name: { required: true, minlength: 2},
        contact_Email: { required:true, email: true},
        contact_Comment: { required:true, minlength: 2},
        contact_datos: { required:true}
      },
      messages: {
        contact_Name: "Debe introducir su nombre.",
        contact_Email : "Debe introducir un email válido.",
        contact_Comment : "El campo Mensaje es obligatorio.",
      }
    });
});