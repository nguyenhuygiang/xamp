function loadajax(){
    var text = $("#text").val();
    $.ajax({
        url: "result.php",
        type: 'POST',
        dataType: 'text',
        data:{
           title : text 
        },
        success: function (result) {
            $("#result").html(result);
        }
    });
}

