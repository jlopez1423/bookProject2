@extends ( 'layout' )

@section ( 'content' )

	<div class="col-sm-8">

		<h1>{{ $post->title }} </h1>
	
		{{  $post->body }}

	</div>

	<hr>

	<div class="comments">
		
		@foreach( $post->comments as $comment )

			<ul class="list-group">
				
				<article>
					
					<li class="list-group-item">
					
						<strong>
							
							{{  $comment->created_at->diffForHumans() }}: &nbsp;

						</strong>
			
						{{  $comment->body }}
					
					</li>

				</article>

			@endforeach
			</ul>
	</div>
	
@endsection