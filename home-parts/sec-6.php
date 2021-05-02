<?php
/**
 * Template part for displaying section 6 on homepage
 *
 * @package Linza
 */
?>

<section class="sec-6">

    <div class="title">
        <div id="sostav"></div>
        <h2>Основной состав <span>группы компаний</span></h2>
        <button x-data @click="$dispatch('modal', { tenderOpen: true }); disableScroll(); $dispatch('overlay', { overlay: true })">
            <span>Пригласить нас на тендер</span>
        </button>
    </div>

    <div class="text">
        <p>ГК Авто Лидер — <span>это</span> единый <span>и</span> слаженный механизм, <span>который требует</span> чёткого соблюдение стандартов <span>и</span> контроля качества на каждом <span>этапе производства и работе с клиентами.</span></p>
        <p><span>Достигать</span> высоких показателей <span>нам позволяет</span> сплачённый коллектив и слаженная
        работа <span>всех компаний, которые входят в группу компаний Авто Лидер .</span></p>
        <p><span>Именно поэтому, наши</span> стандарты качества <span>часто</span> выше ожиданий <span>потребителей.
        И это</span> предмет для гордости.</p>
    </div>

</section>