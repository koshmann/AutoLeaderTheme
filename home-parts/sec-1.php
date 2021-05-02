<?php
/**
 * Template part for displaying section 1 on homepage
 *
 * @package Linza
 */
?>

<section class="sec-1">

    <div class="bg">
        <img src="/wp-content/uploads/2021/04/image-26-1.jpg" alt="">
        <div class="bg-overlay"></div>
    </div>

    <div class="title dark">
        <h1><span class="light-accent">Группа компаний Авто Лидер</span> - производство и продажа автоаксессуаров и дополнительного оборудования</h1>
    </div>

    <div class="row">
        <p>Более 15 лет на автомобильном рынке</p>
        <button x-data @click=" setTimeout( () => { location.href='#sostav' }, 500), $dispatch('curtain', { curtain: true })">
            <span>Состав ГК Авто Лидер</span>
            <svg width="14" height="8" fill="none" viewBox="0 0 14 8">
                <path stroke="#fff" d="M1 .5l6 6 6-6" /></svg>
        </button>
    </div>

    <div class="white">
        <div class="bg"></div>
    </div>

</section>