<script>
    function increase(ID,button,likes,IP)
    {
        var increase_button='increase_button';
        var decrease_button='decrease_button';
        var likes=parseInt(likes);
        var return_message;
        if(button.localeCompare('increase_button')==0){
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
                    return_message=data;
                    change_likes(ID,return_message,likes.toString());
            }

        });
        return false;
    }
    
    function change_likes(ID,return_message,likes){
        if(return_message=='not inserted'){
            $('#likes'+ID).text(likes);
        }
        return false;
    }

    function send_report(ID){
        var ID=document.getElementById('ID' + ID).value;
        var IP=document.getElementById('IP' + ID).value;
        var increase_button='increase_button';
        var decrease_button='decrease_button';
        var likes=parseInt(likes);
        var return_message;
        if(button.localeCompare('increase_button')==0){
            var dataString='ID='+ID+'&IP='+IP+'&increase_button='+increase_button;
            likes+=1;
        }
        else{
            var dataString='ID='+ID+'&IP='+IP+'&decrease_button='+decrease_button;
            likes-=1;
        }
        var dataString='ID='+ID+'&IP='+IP+'&increase_button='+increase_button;
        $.ajax({
            type:"post",
            url: "increase_likes.php",
            dataType: "json",
            data:dataString,
            cache:false,
            success:function(data) {
                    return_message=data;
                    change_likes(ID,return_message,likes.toString());
            }

        });
        return false;

    }
</script>