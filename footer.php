<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package autoleader
 */

?>
        </div> <!-- #content -->

        <footer id="footer" class="dark">
            <div id="footer-contacts" class="section-ankor"></div>

            <div id="footer-logo">
                <svg width="102" height="32" fill="none" viewBox="0 0 102 32">
                <path fill="#fff"
                    d="M37.848 10.5h63.694L102 9.167H37.29c.206.434.392.879.558 1.333zM37 23.417h60.11l.458-1.334H37.622c-.188.456-.395.9-.623 1.334zM43.18 16.089l.974-2.839h2.25l-1.033 3.011a1.25 1.25 0 001.182 1.656h3.584l-.357 1.041h-4.55a2.167 2.167 0 01-2.05-2.87zM61.116 13.25h-4.928a4.188 4.188 0 00-3.961 2.829 2.174 2.174 0 002.057 2.88h4.873l.357-1.042h-4.089a1.038 1.038 0 01-.982-1.375h5.543l.358-1.042H54.8a1.913 1.913 0 011.809-1.292h4.177l.329-.958zM88.664 18.958h-4.901a2.155 2.155 0 01-2.039-2.853 4.227 4.227 0 013.999-2.855h4.9l-.33.958H86.22c-.853 0-1.613.542-1.89 1.35h5.502l-.338.984h-5.501a1.07 1.07 0 001.012 1.416h4.003l-.343 1z" />
                <path fill="#fff" fill-rule="evenodd"
                    d="M61.688 16.684l-.78 2.274h2.208l.572-1.666h3.834l-.572 1.666h2.25l1.96-5.708h-4.663a5.084 5.084 0 00-4.81 3.434zm6.192-.434h-3.834l.082-.24a2.667 2.667 0 012.523-1.802h1.93l-.701 2.042zM72.952 13.25l-1.96 5.708h5.106a4.58 4.58 0 004.333-3.093 1.974 1.974 0 00-1.867-2.615h-5.612zm5.184 2.504a1.167 1.167 0 00-1.104-1.546h-2.2l-1.287 3.75h2.227a2.25 2.25 0 002.129-1.52l.235-.684zM98.624 18.958h-2.292l-.875-1.75h-2.15l-.6 1.75h-2.21l1.959-5.706h5.543c1.1.09 1.934.547 2.093 1.252.214.947-.864 2.014-2.468 2.515l1 1.94zm-4.974-2.75l.686-2h2.566c.499 0 .85.491.688.963a1.535 1.535 0 01-1.453 1.037H93.65z"
                    clip-rule="evenodd" />
                <g>
                    <path fill="#fff"
                    d="M35.561 22.083H5.948C8.343 27.903 14.07 32 20.755 32c6.684 0 12.411-4.097 14.806-9.917zM35.788 10.5H5.722C7.965 4.373 13.849 0 20.755 0c6.905 0 12.79 4.373 15.033 10.5zM17.962 18.958l1.96-5.708H17.67l-1.616 4.708h-1.958a1.25 1.25 0 01-1.183-1.655l1.047-3.053h-2.208l-.937 2.728a2.25 2.25 0 002.13 2.98h5.016zM29.84 13.25h-8.21l-.375.958h3.005l-1.63 4.75h2.25l1.63-4.75h3.001l.33-.958z" />
                    <path fill="#fff" fill-rule="evenodd"
                    d="M10.169 13.25L8.21 18.958H5.96l.596-1.666H2.78l-.572 1.666H0l.916-2.668a4.501 4.501 0 014.257-3.04h4.996zm-3.24 3l.73-2.042H5.803c-1.175 0-2.283.93-2.665 2.042h3.79zM34.365 13.25h3.34a2.15 2.15 0 012.035 2.848 4.235 4.235 0 01-4.006 2.86h-3.34a2.15 2.15 0 01-2.035-2.848 4.235 4.235 0 014.006-2.86zm3.039 2.978a2.5 2.5 0 01-2.366 1.689h-1.214a1.25 1.25 0 01-1.183-1.656l.125-.364a2.5 2.5 0 012.365-1.689h1.215a1.25 1.25 0 011.182 1.656l-.124.364z"
                    clip-rule="evenodd" />
                </g>
                </svg>
            </div>

            <div class="footer-top-grid">

                <div class="menu">
                
                    <div class="flex">
                        <div class="col">
                            <div class="title small">
                                <p>Разделы</p>
                            </div>
                            <ul>
                                <li> 
                                    <a 
                                    href="<?php echo esc_url( home_url( '/#about-us' ) ); ?>"
                                    x-data @click.prevent=" setTimeout( () => { location.href='<?php echo esc_url( home_url( '/#about-us' ) ); ?>' }, 500), $dispatch('curtain', { curtain: true })"
                                    > О нас </a> </li>
                                <li> 
                                    <a 
                                    href="<?php echo esc_url( home_url( '/#production' ) ); ?>"
                                    x-data @click.prevent=" setTimeout( () => { location.href='<?php echo esc_url( home_url( '/#production' ) ); ?>' }, 500), $dispatch('curtain', { curtain: true })"
                                    > Продукция </a> </li>
                                <li> 
                                    <a 
                                    href="<?php echo esc_url( home_url( '/#our-stats' ) ); ?>"
                                    x-data @click.prevent=" setTimeout( () => { location.href='<?php echo esc_url( home_url( '/#our-stats' ) ); ?>' }, 500), $dispatch('curtain', { curtain: true })"
                                    > Наши показатели </a> </li>
                                <li> 
                                    <a 
                                    href="<?php echo esc_url( home_url( '/#sostav' ) ); ?>"
                                    x-data @click.prevent=" setTimeout( () => { location.href='<?php echo esc_url( home_url( '/#sostav' ) ); ?>' }, 500), $dispatch('curtain', { curtain: true })"
                                    > Состав </a> </li>
                                <li> 
                                    <a 
                                    href="<?php echo esc_url( home_url( '/#blog' ) ); ?>"
                                    x-data @click.prevent=" setTimeout( () => { location.href='<?php echo esc_url( home_url( '/#blog' ) ); ?>' }, 500), $dispatch('curtain', { curtain: true })"
                                    > Новости </a> </li>
                                <li> 
                                    <a href="<?php echo esc_url( home_url( '/#footer-contacts' ) ); ?>"
                                    x-data @click.prevent=" setTimeout( () => { location.href='<?php echo esc_url( home_url( '/#footer-contacts' ) ); ?>' }, 500), $dispatch('curtain', { curtain: true })"
                                    > Контакты </a> </li>
                            </ul>
                        </div>
                        <div class="col">
                            <div class="title small">
                                <p>Сайты компаний</p>
                            </div>
                            <ul>
                                <li> <a href="https://td-alfeco.ru/"> Alf eco </a></li>
                                <li> <a href="https://www.save96.ru/"> Save96.ru </a></li>
                                <li> <a href="https://www.196.ru/"> 196.ru </a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="contact">
					<div class="title small">
						<p>Головной офис</p>
					</div>
					<div class="adress">
						<p>г. Екатеринбург, ул Малышева 44, 5 этаж</p>
					</div>
					<a href="tel:83433721299" class="phone">8 (343) 372-12-99</a>
					<a href="mailto:info@al-ekb.ru" class="email">info@al-ekb.ru</a>

					<div class="recvisites">
						<div class="title small">
							<p>Реквизиты</p>
						</div>
						<div class="adress">
							<p>ООО «Компания Авто Лидер»</p>
						</div>
						<div class="adress">
							<p>Юридический адрес: 620057, г. Екатеринбург, ул. Совхозная 20, литер ББ, оф. 103 </p>
						</div>
						<div class="adress">
							<p>ОГРН 1136686034033</p>
							<p>ОКПО 32118938</p>
							<p>ИНН/КПП 6686037651\668601001 </p>
						</div>
					</div>
				</div>

				<div class="cta">
					<button x-data="" @click="$dispatch('modal', { contactOpen: true, tenderOpen: false, menuOpen: false }); $dispatch('overlay', { overlay: true }); disableScroll()">
						<span>Написать нам</span>
						<svg width="16" height="16" fill="none" viewBox="0 0 16 16">
						<path fill="#fff"
							d="M15.636 0C8.244 0 2.163 5.213 1.518 11.839 2.747 10.25 4.252 8.723 6.13 6.966a.386.386 0 01.514-.005c.144.129.146.34.005.472a82.575 82.575 0 00-1.43 1.372C2.896 11.083 1.236 13.067.031 15.53c-.082.168 0 .365.182.44a.39.39 0 00.15.03.367.367 0 00.332-.197c.429-.876.927-1.69 1.487-2.481 5.08-.12 9.703-2.71 12.126-6.83a.311.311 0 00-.008-.33.375.375 0 00-.313-.162h-1.347l2.416-1.265a.343.343 0 00.163-.181c.518-1.38.78-2.8.78-4.22C16 .148 15.837 0 15.636 0z" />
						</svg>
					</button>
                </div>

            </div>

            <div class="divider">
                <div class="hr">
                <hr>
                </div>
            </div>


            <div class="footer-bottom-grid">

                <div class="newsletter-signup">
					<h3>Подпишитесь на наши новости!</h3>
					 <?php echo do_shortcode( '[contact-form-7 id="46" title="Новости"]' ) ?>
                </div>

            </div>

            <div class="absolute-footer">
                <p class="copyright">© ООО «Компания Авто Лидер», 2006 - 2021</p>
                <a href="<?php echo esc_url( home_url( '/privacy-policy' ) ); ?>" class="policy">Политика конфиденциальности</a>
                <div class="credit">
                    <a href="https://kodr.agency/">
                        <span>Сделано в KODR</span>
                        <svg class="footer-logo" width="50" height="26" viewBox="0 0 50 26" fill="none">
                            <path class="logo-border" fill-rule="evenodd" clip-rule="evenodd" d="M36.1272 0H13.8728C6.46858 0 0 5.32349 0 13C0 20.6765 6.46858 26 13.8728 26H36.1272C43.5314 26 50 20.6765 50 13C50 5.32348 43.5314 0 36.1272 0ZM13 21C8.58172 21 5 17.4182 5 13C5 8.58171 8.58174 5 13 5H37C41.4183 5 45 8.58172 45 13C45 17.4183 41.4183 21 37 21H13Z" fill="#F2F2F2"></path>
                            <circle class="logo-dot" opacity="0.2" cx="37" cy="13" r="12" fill="#FF3300"></circle>
                            <circle class="logo-dot" opacity="0.4" cx="37" cy="13" r="10" fill="#FF3300"></circle>
                            <circle class="logo-dot" opacity="0.6" cx="37" cy="13" r="8" fill="#FF3300"></circle>
                            <circle class="logo-dot" opacity="0.8" cx="37" cy="13" r="6" fill="#FF3300"></circle>
                            <circle class="logo-dot" cx="37" cy="13" r="4" fill="#FF3300"></circle>
                        </svg>
                    </a>
                </div>
            </div>

        </footer>


        <div class="overlay" 
            x-data="{ overlay: false }"
            @overlay.window="overlay = $event.detail.overlay"
            :class="{ 'active': overlay }"
            @click="overlay = false, enableScroll(), $dispatch('overlay-click', { menuOpen: false, tenderOpen: false, contactOpen: false, priceOpen: false }) ">
        </div>

        <div class="curtains"
        x-data="{ curtain: false }"
        :class="{ 'active': curtain }"
        @curtain.window="curtain = $event.detail.curtain, header.classList.add('sticky'), setTimeout( () => { curtain = !curtain }, 2000)">
            <div class="curtain-1"></div>
            <div class="curtain-2"></div>
        </div>


        <?php wp_footer(); ?>

    </div> <!-- wrapper -->
</div><!-- #page -->
</body>
</html>
