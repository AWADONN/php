<div class="show">
    <?php $note=$params['note']??null;?>
    <?php if ($note) : ?>
        <ul>
            <li> Id:<?php echo (int) $note['id']?></li>
            <li>
                Tytuł: <?php echo htmlentities($note['title'])?>
            </li>
            <li>
                opis:<?php echo htmlentities($note['description']) ?>
            </li>
            <li>Utworzono: <?php echo htmlentities($note ['created'])?></li>
            <li>
                <button><a href="/">powrót do listy notatek </a></buton>
            </li>
        </ul>
    <?php else :?>
        <div>brak notatki do wyświetlenia </div>
    <?php endif; ?>
</div> 
