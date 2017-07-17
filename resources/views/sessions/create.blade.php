@extends( 'layout' )



@section( 'content' )


	<div class="col-sm-8">
		
		<h1>Register</h1>

		{{-- registration form --}}
		<form method="POST" action="/register">

			{{  csrf_field()  }}
			
			<div class="form-group">

				<label for="name">Name:</label>

				<input type="text" name="form-control" id="name" name="name">
			
			</div>

			<div class="form-group">

				<label for="email">Email:</label>

				<input type="email" name="form-control" id="email" name="email">
			
			</div>			


			<div class="form-group">

				<label for="password">Password:</label>

				<input type="text" name="form-control" id="password" name="password">
			
			</div>	


			<div class="form-group">
				
				<button type="submit" class="btn btn-primary">Register</button>

			</div>
		
		</form>


	</div>



@endsection