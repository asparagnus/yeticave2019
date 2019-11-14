<section class="promo">
        <h2 class="promo__title">Нужен стафф для катки?</h2>
        <p class="promo__text">На нашем интернет-аукционе ты найдёшь самое эксклюзивное сноубордическое и горнолыжное снаряжение.</p>
        <ul class="promo__list">
            <!--заполните этот список из массива категорий-->
            
            <?php
            $index = 0;
            $num = count ($categories);
            while($index < $num): ?>
            <li class="promo__item promo__item--boards">
                <a class="promo__link" href="pages/all-lots.html"><?= esc($categories[$index]['name']); ?></a>
            </li>
            <?php $index++; ?>
            <?php endwhile; ?>
        
        </ul>
    </section>
    <section class="lots">
        <div class="lots__header">
            <h2>Открытые лоты</h2>
        </div>

        <?php 
        foreach($cards as $card): ?>
			<?=include_template('lots.php', ['card' => $card]); ?>
		<?php endforeach; ?>  

    </section>