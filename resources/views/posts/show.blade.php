@extends ( 'layout' )

@section ( 'content' )

	<div class="col-sm-8 blog-main">

		<h1>{{ $post->title }} </h1>
	
		{{  $post->body }}


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
	</div>
		{{-- Add a comment --}}
		<hr>

	<div class="row">

		<div class="card">
			
			<div class="card-block">
				
				<form method="POST" action="/posts/{{  $post->id }}/comments">
					
					{{  csrf_field() }}

					<div class="form-group">

						<textarea name="body" placeholder="Your Comment Here" class="form-control" required></textarea>					
					</div>

					<div class="form-group">
						
						<button type="submit" class="btn btn-primary">Add Comment</button>

					</div>

				</form>

				@include( 'layouts.errors' )


			</div>

		</div>

	</div>

	
@endsection









