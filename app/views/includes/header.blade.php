<header id="large">
	<div id="header_top">
		<a href=#><img src="assets/icons/logo.svg" alt="What's Up? Maldives"/></a>
		<ul>
			<li><a href=#><?php include("assets/icons/instagram.svg"); ?></a></li>
			<li><a href=#><?php include("assets/icons/twitter.svg"); ?></a></li>
			<li><a href=#><?php include("assets/icons/facebook.svg"); ?></a></li>
		</ul>
		<a href=# id="menu"><?php include("assets/icons/menu.svg") ?></a>
	</div>
	<div id="header_bottom">
		<nav id="left">
			<ul>
				<?php
					$mainNav=Header::wherePosition("1")->orderby("Order","ASC")->get();
				?>
				@foreach($mainNav as $nav)
					<li><a href='{{{ URL::to($nav -> HREF) }}}'>{{{ $nav -> Name }}}</a></li>
				@endforeach
			</ul>
		</nav>
		<nav id="right">
			<ul>
				<?php
					$sideNav=Header::wherePosition("2")->orderby("Order","ASC")->get();
				?>
				
				@foreach($sideNav as $nav)
					<li><a href='{{{ URL::to($nav -> HREF) }}}'>{{{ $nav -> Name }}}</a></li>
				@endforeach
			</ul>
		</nav>
	</div>
</header>
<header id="small">
	 <nav id="left">
		<ul>
			<?php
				$mainNav=Header::wherePosition("1")->orderby("Order","ASC")->get();
			?>
			@foreach($mainNav as $nav)
				@if($nav -> HREF == "/book")
					<li><a href='{{{ URL::to($nav -> HREF) }}}' class="book">{{{ $nav -> Name }}}</a></li>
				@else
					<li><a href='{{{ URL::to($nav -> HREF) }}}'>{{{ $nav -> Name }}}</a></li>
				@endif
			@endforeach
		</ul>
	</nav>
	<a href=#><img src="assets/icons/logo.svg" alt="What's Up? Maldives"/></a>
	<div id="header_right">
		<nav id="right">
			<ul>
				<?php
					$sideNav=Header::wherePosition("2")->orderby("Order","ASC")->get();
				?>
				
				@foreach($sideNav as $nav)
					<li><a href='{{{ URL::to($nav -> HREF) }}}'>{{{ $nav -> Name }}}</a></li>
				@endforeach
			</ul>
		</nav>
		<ul>
			<li><a href=#><?php include("assets/icons/instagram.svg"); ?></a></li>
			<li><a href=#><?php include("assets/icons/twitter.svg"); ?></a></li>
			<li><a href=#><?php include("assets/icons/facebook.svg"); ?></a></li>
		</ul>
	</div>
</header>