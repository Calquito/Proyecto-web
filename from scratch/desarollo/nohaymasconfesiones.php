<div  class="mt-4">
    <h4 class="modal-title" style="text-align: center;" >
    Parece que no hay nada más que ver por aquí. Compártenos en tus redes para que más personas hagan sus confesiones :)
    </h4>
    <div class="d-flex justify-content-center">
        <?php
            $url=urlencode('http://confesionesdeu.com/');
            $text=urlencode('¡Mira las mejores confesiones universitarias aquí!');
            $facebook_url='https://www.facebook.com/sharer/sharer.php?u='.$url.'&t='.$text;
            $twitter_url='https://twitter.com/intent/tweet?text='.$text.'&url='.$url.'&via=user';
            $whatsapp_url='https://api.whatsapp.com/send?text='.$text.$url;
        ?>
        <div style="width:50px;height:50px;" class=" mr-3" >
            <a href="<?php echo $facebook_url;?>">
                <img style="width:100%;height:100%;"  alt="facebook url" src="images/facebook_icon.png" width="267" height="44">
            </a>
        </div>
        <div style="width:50px;height:50px;" class=" mr-3">
            <a href="<?php echo $twitter_url;?>">
                <img style="width:100%;height:100%;"  alt="twitter  url" src="images/twitter_icon.png" width="267" height="44">
            </a>
        </div>
        <div style="width:50px;height:50px;" class="  mr-3">
            <a href="<?php echo $whatsapp_url;?>" >
                <img style="width:100%;height:100%;"  alt="whatsapp url" src="images/whatsapp_icon.png" width="267" height="44">
            </a>
        </div>
    </div>
</div>