<div class="container">
	
	<a href="/posts/{{ $post->id }}">
		<h2>{{  $post->title }}</h2>
	</a>

	<p>
		{{ $post->user->name }} on

		{{ $post->created_at->toFormattedDateString() }} 

	</p>

	<hr>

</div>