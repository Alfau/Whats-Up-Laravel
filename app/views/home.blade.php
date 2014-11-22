@extends("layouts.default")

@section("content")
	<div id="slideshow">
		<ul id="controls">
		@foreach($slideshow as $key => $value)
			<li><a href=# data-id="{{ $value->ID }}" class="{{ $key == 0 ? 'active' : 'inactive' }}"></a></li>
		@endforeach	
		</ul>
		<ul id="slides">	
		@foreach($slideshow as $key => $value)
			<li data-id="{{ $value->ID }}" class="{{ $key == 0 ? 'active' : 'inactive' }}">
				<div class="slide" style="background:url('{{{ $value->Image }}}')"></div>
				<div class="text">
					<p class="emphasis_large">{{{ $value->Title }}}</p>
					<p class="emphasis_small">{{{ $value->Text }}}</p>
					<a href=# class="details">Details</a>
				</div>
			</li>
		@endforeach
		</ul>
	</div>
	<div id="customer_quote">
		<p class="customer_quote">"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam"</p>
		<p class="customer_name"></p>
	</div>
@stop
