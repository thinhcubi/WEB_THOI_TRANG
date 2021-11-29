$(document).ready(function(){
    $("#error").hide()
    $("#confirmPassword").keyup(function (){
           $newPassword = $("#password").val();
           $confirmPassword = $("#confirmPassword").val();
           if ($newPassword === $confirmPassword){
               $("#error").hide()
           } else {
               $("#error").show()
           }
    })
})
