@extends('layouts.app')

@section('content')
	<div class="jumbotron text-center">
		<h1>Welcome to Blog</h1>
		<p></p>
		<p>	
			<a href="{{ route('login') }}" class="btn btn-primary btn-lg" role="button">Login</a>
			<a href="{{ route('register') }}" class="btn btn-success btn-lg" role="button">Register</a>
		</p>
	</div>
@endsection 