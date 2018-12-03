/* code for the color border of the password fields */
$('#paswrd,#confirm_paswrd').on('keyup',function(){
  if($('#paswrd').val() == $('#confirm_paswrd').val()){
    $('#confirm_paswrd').css('border','1px solid #00ff00 ');
  }else{
    $('#confirm_paswrd').css('border','1px solid #ff0000');
  }
});
