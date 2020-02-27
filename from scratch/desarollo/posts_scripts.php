<script>
    function increase(ID,button,likes,IP)
    {
        var increase_button='increase_button';
        var decrease_button='decrease_button';
        var likes=parseInt(likes);
        var return_message;
        if(button===increase_button){
            var dataString='ID='+ID+'&IP='+IP+'&increase_button='+increase_button;
            likes+=1;
        }
        else{
            var dataString='ID='+ID+'&IP='+IP+'&decrease_button='+decrease_button;
            likes-=1;
        }    
        $.ajax({
            type:"post",
            url: "increase_likes.php",
            dataType: "json",
            data:dataString,
            cache:false,
            success:function(data) {
                if(data !=='error'){
                    return_message=data;
                    change_likes(ID,return_message,likes.toString());
                }
                else{
                    location.href = "error.php";
                }
            },
            error: function (data) {
                location.href = "error.php";
            }

        });
        return false;
    }
    
    function change_likes(ID,return_message,likes){
        if(return_message!=='not inserted'){
            $('#likes'+ID).text(likes);
        }
        return false;
    }

</script>