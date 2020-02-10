@extends('main')

@section('title', '| Register')

@section('content')
	
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			{!! Form::open() !!}

				{{ Form::label('name', "Name:") }}
				{{ Form::text('name', null, ['class' => 'form-control input-lg']) }}

				{{ Form::label('email', 'Email:') }}
				{{ Form::email('email', null, ['class' => 'form-control input-lg']) }}

				{{ Form::label('password', 'Password:') }}
				{{ Form::password('password', ['class' => 'form-control input-lg']) }}

				{{ Form::label('password_confirmation', 'Confirm Password:') }}
				{{ Form::password('password_confirmation', ['class' => 'form-control input-lg']) }}
			
				{{ Form::submit('Register', ['class' => 'btn btn-primary btn-lg form-spacing-top']) }}

			{!! Form::close() !!}
		</div>
	</div>

@endsection