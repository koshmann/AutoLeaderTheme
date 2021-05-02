<?php
/**
 * Template part for displaying section 5 on homepage
 *
 * @package Linza
 */
?>

<section class="sec-5 ">

    <div class="bg"></div>

    <div class="title dark">
        <h2><span>Основные</span> принципы<span> и&nbsp;социальная</span> ответственность</h2>
        <div class="slider-nav">
            <div class="arrow prev">
                <svg width="8" height="14" fill="none" viewBox="0 0 8 14">
                    <path stroke="#333" d="M7 1L1 7l6 6" />
                </svg>
            </div>
            <div class="arrow next">
                <svg width="8" height="14" fill="none" viewBox="0 0 8 14">
                    <path stroke="#333" d="M1 1l6 6-6 6" />
                </svg>
            </div>
        </div>
    </div>
    <div class="slider-outer">
        <div class="slider swiper-container">
            <div class="slider-inner swiper-wrapper">
                <div class="slide swiper-slide">
                    <div class="card dark" x-data x-ref="card1">
                        <img src="/wp-content/uploads/2021/04/etics-2-1.jpg" alt="">
                        <div class="card-body">
                            <div class="heading" @click="$refs.card1.classList.toggle('active')">
                                <h3>Деловая этика и прозрачность</h3>
                                <div class="plus-icon">
                                    <svg width="48" height="48" fill="none" viewBox="0 0 48 48">
                                        <rect width="48" height="48" fill="#E71923" rx="24"
                                            transform="matrix(-1 0 0 1 48 0)"></rect>
                                        <rect class="white-circle" width="48" height="48" fill="#fff" rx="24"
                                            transform="matrix(-1 0 0 1 48 0)"></rect>
                                        <path stroke="#fff"
                                            d="M24 24l-.001 10M24 24l10-.001M24 24l-10 .001M24 24l.001-10"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="description">
                                <p>Стремимся поддерживать самые высокие стандарты корпоративного управления, чтобы укреплять доверие наших партнёров.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide swiper-slide">
                    <div class="card dark" x-data x-ref="card1">
                        <img src="/wp-content/uploads/2021/04/logistic-2-1.jpg" alt="">
                        <div class="card-body">
                            <div class="heading" @click="$refs.card1.classList.toggle('active')">
                                <h3>Развитая логистика</h3>
                                <div class="plus-icon">
                                    <svg width="48" height="48" fill="none" viewBox="0 0 48 48">
                                        <rect width="48" height="48" fill="#E71923" rx="24"
                                            transform="matrix(-1 0 0 1 48 0)"></rect>
                                        <rect class="white-circle" width="48" height="48" fill="#fff" rx="24"
                                            transform="matrix(-1 0 0 1 48 0)"></rect>
                                        <path stroke="#fff"
                                            d="M24 24l-.001 10M24 24l10-.001M24 24l-10 .001M24 24l.001-10"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="description">
                                <p>Ответственные партнёры в логистической сфере позволяют быстро поставлять продукцию в любую точку РФ и СНГ.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide swiper-slide">
                    <div class="card dark" x-data x-ref="card1">
                        <img src="/wp-content/uploads/2021/04/service-2-1.jpg" alt="">
                        <div class="card-body">
                            <div class="heading" @click="$refs.card1.classList.toggle('active')">
                                <h3>Сервис и поддержка</h3>
                                <div class="plus-icon">
                                    <svg width="48" height="48" fill="none" viewBox="0 0 48 48">
                                        <rect width="48" height="48" fill="#E71923" rx="24"
                                            transform="matrix(-1 0 0 1 48 0)"></rect>
                                        <rect class="white-circle" width="48" height="48" fill="#fff" rx="24"
                                            transform="matrix(-1 0 0 1 48 0)"></rect>
                                        <path stroke="#fff"
                                            d="M24 24l-.001 10M24 24l10-.001M24 24l-10 .001M24 24l.001-10"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="description">
                                <p>Группа компаний Авто Лидер обладает уникальной экспертизой в сфере разработки защитного оборудования для автомобилей, которая в связке с собственной сервисной службой позволяет гарантировать долгий срок службы нашей продукции.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide swiper-slide">
                    <div class="card dark" x-data x-ref="card1">
                        <img src="/wp-content/uploads/2021/04/control-2-1.jpg" alt="">
                        <div class="card-body">
                            <div class="heading" @click="$refs.card1.classList.toggle('active')">
                                <h3>Жесткий контроль качества</h3>
                                <div class="plus-icon" >
                                    <svg width="48" height="48" fill="none" viewBox="0 0 48 48">
                                        <rect width="48" height="48" fill="#E71923" rx="24"
                                            transform="matrix(-1 0 0 1 48 0)"></rect>
                                        <rect class="white-circle" width="48" height="48" fill="#fff" rx="24"
                                            transform="matrix(-1 0 0 1 48 0)"></rect>
                                        <path stroke="#fff"
                                            d="M24 24l-.001 10M24 24l10-.001M24 24l-10 .001M24 24l.001-10"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="description">
                                <p>Глубокая сосредоточенность на безопасности и соблюдении всех стандартов на каждом этапе производства, позволяет нам поставлять на рынок высококачественную продукцию. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide swiper-slide">
                    <div class="card dark" x-data x-ref="card1">
                        <img src="/wp-content/uploads/2021/04/partnership-2-1.jpg" alt="">
                        <div class="card-body">
                            <div class="heading" @click="$refs.card1.classList.toggle('active')">
                                <h3>Долгосрочное партнёрство</h3>
                                <div class="plus-icon" >
                                    <svg width="48" height="48" fill="none" viewBox="0 0 48 48">
                                        <rect width="48" height="48" fill="#E71923" rx="24"
                                            transform="matrix(-1 0 0 1 48 0)"></rect>
                                        <rect class="white-circle" width="48" height="48" fill="#fff" rx="24"
                                            transform="matrix(-1 0 0 1 48 0)"></rect>
                                        <path stroke="#fff"
                                            d="M24 24l-.001 10M24 24l10-.001M24 24l-10 .001M24 24l.001-10"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="description">
                                <p>Честные и открытые отношения, которые позволяют обеспечить долголетнее сотрудничество с ведущими дилерскими автомобильными центрами, такими как Toyota, Kia, Volkswagen, Hyundai, Honda и др., — лучшая инвестиция в будущее нашей компании.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>