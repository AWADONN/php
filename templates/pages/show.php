<div class="show">
    <?php $note=$params['note']??null;?>
    <?php if ($note) : ?>
        <ul>
            <li> Id:<?php echo (int) $note['id']?></li>
            <li>
                Tytuł: <?php echo $note['title']?>
            </li>
            <li>
                opis:<?php echo $note['description'] ?>
            </li>
            <li>Utworzono: <?php echo $note ['created']?></li>
            <li>
                <button><a href="/">powrót do listy notatek </a></buton>
            </li>
            <li>
            <button><a href="/?action=edit&id=<?php echo (int) $note['id']?>">edytuj </a></buton>
            </li>
        </ul>
    <?php else :?>
        <div>brak notatki do wyświetlenia </div>
    <?php endif; ?>
</div> 
