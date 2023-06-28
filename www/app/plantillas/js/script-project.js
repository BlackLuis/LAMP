// JavaScript Document


    $("#duplicado").on("change"," #input-dup",function()
    {
        var label = $(this).siblings('label');
        var content = $(this).find("input.form-control");
        var atrib = content.attr('name');
        var button = $("#regPac");
        $.get('validar'+atrib+'?atrib='+$(content).val(), function(data){
            console.log(data);
            if(data){
                label.addClass("duplicate-true");
                button.attr('disabled','disabled');
            }
            else{
                label.removeClass("duplicate-true");
                button.removeAttr('disabled','disabled');
            }
        },'json');
    });

//pagination guest

$(".pagination").on("click", function(){
  alert("karem");



});
