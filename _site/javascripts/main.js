$(document).ready(function(){
    $('#lien_externe p a').attr('target','_blank');
});  

$(document).ready(function(){
    $("#ajax_form").submit(function(e){
        var scope = $(this);
        var nom = $("#nom").val();
        var email = $("#email").val();
        var message = $("#message").val();
 
        $.ajax({
            type: scope.attr("method"),
            url: scope.attr("action"),
            data: scope.serialize(),
            dataType: "json",
            success: function(data){
                if(data.result)
                {
                    scope.html("Message envoyé, merci");
                }
                else
                {
                    alert(data.message);
                    $(data.input).focus();
                }
            }
        });
 
        e.preventDefault();
    });
 
});
