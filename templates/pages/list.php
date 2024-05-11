<div>
    <div>
        <?php
        if (!empty($prams['before'])){
            switch($params['before']){
                case'created':
                    echo"Notatka została utworzona!";
                    break;
                default:
                    echo "Błędy adres url!";\
                    break;
            } 
        }
        ?>
    </div>
    <b><?php echo $params['resultlist']??""?></b>

    <h3>lista notatek</h3>
    
</div>