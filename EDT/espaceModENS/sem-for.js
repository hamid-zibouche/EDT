$(document).ready(function(){
    $('#idformation').on('change',function(){
      var formationID = $(this).val();
    //  console.log(formationID);
      if (formationID) {
        $.get("ajax.php",{formation:formationID}, function (data) {
            $('#idsemestre').html(data);  
        });
      } else {
        $('#idsemestre').html('<option> Choisir au pemier la formation</option>')
        
      }
    });




});