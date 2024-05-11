<div>
    <section>
    <div class="message">
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
    <div class="tbl-header">
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Tytuł</th>
                    <th>Data</th>
                    <th>Opcje</th>
                </tr>
            </thead> 
        </table> 
    </div>
    <div class="tbl-content">
        <table>
            <tbody>
            <?php foreach($params['notes'] as $note) :?>
                <tr>
                    <td><?php echo $note['id']?></td>
                    <td><?php echo $note['title']?></td>
                    <td><?php echo $note['created']?></td>
                    <td>szczegóły</td>
                </tr>
            <?php endforeach; ?>
            </tbody>   
        </table>
    </div>
    </section>
</div>