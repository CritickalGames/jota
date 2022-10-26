function algo() {
    $(document).ready(function(){
        
        var user_CI = $('#CI').val();
        var user_pass = $('#Contraseña').val();
        $("#table").css("border", "3");
        alert(user_CI);
        /*$.ajax({
            type:'POST',
            url:'prob1.php',
            dataType: "json",
            data:{user_CI:user_CI, user_pass:user_pass},
            success:function(data){
                if(data.status == 'ok'){
                    $("table").css("border", "3");
                    $('#ide').text(data.result.name);
                    $('#idu').text(data.result.name);
                    $('#idg').text(data.result.name);

                }else{
                    alert("LOOSER");
                } 
            }
        });*/
        
    });
}
