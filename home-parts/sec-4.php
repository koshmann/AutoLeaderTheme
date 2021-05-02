<?php
/**
 * Template part for displaying section 4 on homepage
 *
 * @package Linza
 */
?>

<section class="sec-4">
    <div id="our-stats" class="section-ankor"></div>

    <div class="text-col">

        <h2>
            Собственные разработки <span>и уверенные позиции на рынке</span>
        </h2>

        <p><span>Компании, которые входят в состав группы компаний Авто Лидер,</span> занимаются собственным проектированием
            <span>и</span> разработкой <span>навесного ооборудования, такого как:</span> </p>

        <ul>
            <li>защита картера и КПП; </li>
            <li>решетки и защита радиатора;</li>
            <li>защита бампера; </li>
            <li><span>и</span> многое другое. </li>
        </ul>

        <p><span>Кроме того, мы</span> тесно сотрудничаем <span>с</span> лидирующими дилерскими автоцентрами <span>РФ и
                СНГ.</span></p>

        <button x-data @click=" setTimeout( () => { location.href='#blog' }, 500), $dispatch('curtain', { curtain: true })">Узнать новости компании</button>

    </div>

    <div class="graph-col" x-data="{ tab: 'dolya', dropdownOpen: false }">

        <div class="tabs">
            <div class="tab" :class="{ 'active': tab === 'dolya' }" @click="tab = 'dolya', chartOne()">
                <span>Доля рынка</span>
            </div>
            <div class="tab" :class="{ 'active': tab === 'inventions' }" @click="tab = 'inventions', chartTwo()">
                <span>Собственных разработок</span>
            </div>
        </div>

        <div class="dropdown graph-tabs-dropdown" @click.away="dropdownOpen = false">
            <div class="dropdown-head" @click="dropdownOpen = true, disableScroll(), $dispatch('overlay', { overlay: true })">
                <span x-text="tab === 'dolya' ? 'Доля рынка' : 
                tab === 'inventions' ? 'Собственных разработок' : tab === 'network' ? 'Региональная сеть РФ' :
                'Другая вкладка' ">Категория</span>
                <svg width="14" height="8" fill="none" viewBox="0 0 14 8">
                    <path stroke="#333" d="M1 1l6 6 6-6" />
                </svg>
            </div>
            <div class="dropdown-body" :class="{ 'opened': dropdownOpen }">
                <div class="dropdown-item" :class="{ 'active': tab === 'dolya' }"
                    @click="tab = 'dolya', chartOne(), dropdownOpen = false, enableScroll(), $dispatch('overlay', { overlay: false })"> Доля рынка
                </div>
                <div class="dropdown-item" :class="{ 'active': tab === 'inventions' }"
                    @click="tab = 'inventions', chartTwo(), dropdownOpen = false, enableScroll(), $dispatch('overlay', { overlay: false })">
                    Собственных разработок
                </div>
            </div>
        </div>

        <canvas id="chart1"></canvas>

        <div x-show="tab === 'dolya'" class="chart-description">
            <p>продукция группы компаний <span>Авто Лидер</span> от общей доли рынка</p>
        </div>
        <div x-show="tab === 'inventions'" class="chart-description inventions">
            <p>доля собественных разработок <span>Авто Лидер</span> от общей доли продукции</p>
        </div>
    </div>

</section>