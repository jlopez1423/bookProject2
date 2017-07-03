<div class="container">
	
	<a href="/posts/{{ $post->id }}">
		<h2>{{  $post->title }}</h2>
	</a>

	<p>

		{{ $post->created_at->toFormattedDateString() }} 

	</p>
	<hr>

</div>