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
	
	{{ HTML::heading("Featured","Packages") }}
	<div id="featured_packages">
		
	</div>
	
	{{ HTML::heading("Customer","Feedback") }}
	<div id="customer_quote">
		<ul id="controls">
		@foreach($quotes as $key => $quote)
			<li><a href=# data-id="{{ $quote -> ID }}" class="{{ $key == 0 ? 'active' : '' }}"></a></li>
		@endforeach	
		</ul>
		<div class="quote_container">
			<?php include("assets/icons/quote.svg") ?>
			@foreach($quotes as $key => $quotes)
			<div data-id="{{ $quotes->ID }}" class="{{ $key == 0 ? 'active' : '' }}">
				<p class="quote_text">{{{ $quotes -> Text }}}</p>
				<p class="quote_name">{{{ $quotes -> Name }}}</p>
			</div>
			@endforeach
			<?php include("assets/icons/quote.svg") ?>
		</div>
	</div>
@stop
