@extends ( 'layout' )

@section ( 'content' )

    <div class="album text-muted">
      <div class="container">

      @foreach( $posts as $post )
       
        @include( 'posts.post' )
      
      @endforeach

      </div>
    </div>

@include( 'layouts.sidebar' )

@endsection