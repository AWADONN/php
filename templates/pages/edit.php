<h3>Edycja notatki</h3>
<div>
    <?php
    $note = $params['note']?>
    <?php if (!empty($params['note'])):?>
        <form action="/?action=edit" class="note-form" method="post">
            <input type="text" name="id" value="<?php echo $note['id']?>"hidden/>
            <ul>
                <li>
                    <label  for="title">tytuł<span class="required"></span></label>
                    <input type="text" name="title" id="title" class="firld-long" value="<?php echo $note['title']?>">
                </li>
                <li>
                    <label for="field5">Treść</label>
                    <textarea name="description" id="field5" class="firld-textarea"><?php echo $note['description']?></textarea>
                </li>
                <li>
                    <input type="submit" value="submit">
                </li>
            </ul>
        </form>
    <?php else :?>
        <div>
            brak nnotatki do wyświetlenia
            <a herf="/"><button>Powrót do listy notatek</button></a>
        </div>
    <?php endif;?>
</div>
    