<ul class="lots__list">
            <!--заполните этот список из массива с товарами-->
            <?php foreach($cards as $card): ?>
            <li class="lots__item lot">
                <div class="lot__image">
                    <img src="<?= $card['url'];?>" width="350" height="260" alt="<?= esc($card['name']);?>">
                </div>
                <div class="lot__info">
                    <span class="lot__category"><?= esc($card['category']);?></span>
                    <h3 class="lot__title"><a class="text-link" href="pages/lot.html"><?= esc($card['name']);?></a></h3>
                    <div class="lot__state">
                        <div class="lot__rate">
                            <span class="lot__amount">Стартовая цена</span>
                            <span class="lot__cost"><?= esc(price_format($card['price'])).' ₽';?></span>
                                                     
                        </div>
                        <div class="lot__timer timer <?php if (get_time($card['closedata']) < 1): ?> timer--finishing <?php endif ?>">
                            <?= get_time($card['closedata']); ?>                     
                        </div>
                    </div>
                </div>
            </li>
        <?php endforeach; ?>
        </ul>