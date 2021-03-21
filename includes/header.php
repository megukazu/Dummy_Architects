<header class="l-header js-header">
	<div class="l-container__full">
		<div class="p-header">
			<a href="<?php echo home_url() ?>">
				<h1 class="p-header__title">Dummy<br>Architects</h1>
			</a>
		</div>
		<nav class="l-header__nav" role="navigation">
			<h2 class="screen-reader-text">サイト内メニュー</h2>
			<button type="button" class="js-button-hamburger c-button p-button--hamburger" aria-controls="global-nav" aria-expanded="false">
				<span class="p-button--hamburger__line">
					<span class="screen-reader-text">メニューを開閉する</span>
				</span>
			</button>
			<ul id="global-nav" class="p-globalNav">
				<?php wp_nav_menu(array(
					'theme_location' => 'place_global',
					'container'     => '',
					'menu_class'    => '',
					'items_wrap' => '%3$s', //<ul>を出力しない
				));
				?>
			</ul>
		</nav>
	</div>
</header>