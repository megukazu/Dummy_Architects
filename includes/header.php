<header class="l-header">
	<div class="l-container__full">
		<div class="p-header">
			<h1 class="p-header__title js-header"> <a href="<?php echo home_url() ?>">Dummy<br>Architects</a></h1>
			<nav class="l-header__nav" role="navigation">
				<h2 class="screen-reader-text">サイト内メニュー</h2>
				<button type="button" class="js-button-hamburger c-button p-button--hamburger" aria-controls="global-nav" aria-expanded="false">
					<span class="p-button--hamburger__line">
						<span class="screen-reader-text">メニューを開閉する</span>
					</span>
				</button>
				<div class="c-gridFlex p-globalNav__wrap">
					<div class="c-gridFlex__item -tab6Of12 p-globalNav__thumbnail --menu"></div>
					<ul id="global-nav" class="p-globalNav c-gridFlex__item -tab6Of12">
						<?php wp_nav_menu(array(
							'theme_location' => 'place_global',
							'container'     => '',
							'menu_class'    => '',
							'items_wrap' => '%3$s', //<ul>を出力しない
						));
						?>
					</ul>
				</div>
			</nav>
		</div>
	</div>
</header>