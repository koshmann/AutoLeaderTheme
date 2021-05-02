<?php
/**
 * Template part for displaying section 2 on homepage
 *
 * @package Linza
 */
?>

<section class="sec-2">
    <div id="about-us" class="section-ankor"></div>

    <div class="title">
        <h2><span>Безусловная</span> защита <span>для&nbsp;каждого</span> автомобиля</h2>
        <button x-data @click=" setTimeout( () => { location.href='#sostav' }, 500), $dispatch('curtain', { curtain: true })">
            <span>Подробнее о нас</span>
            <svg width="14" height="8" fill="none" viewBox="0 0 14 8">
                <path stroke="#fff" d="M1 1l6 6 6-6" /></svg>
        </button>
    </div>

    <div class="text">
        <p>ГК Авто Лидер более — 15 лет <span>занимается производством</span> и продажей автоаксессуаров и доп. оборудования <span>для автомобилей.</span></p>
        <p><span>Мы</span> знаем <span>как</span> защитить картер двигателя <span>и</span> КПП, как сохранить бампер и
            радиатор, <span>что нужно сделать для</span> сохранения <span>первозданного вида</span> салона и внешнего
            вида автомобиля.
        </p>
    </div>
    
</section>