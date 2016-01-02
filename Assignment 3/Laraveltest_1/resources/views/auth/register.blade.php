@extends('app')
@section('content')

					<form  id = "mForm" role="form" method="POST" action="{{ url('/auth/register') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<label>Set Name:</label>
							<input type="text"  name="name"  value="{{ old('name') }}"><br>
							<label>E-Mail Address:</label>
							<input type="email" name="email" value="{{ old('email') }}"><br>
							<label>Password:</label>							
							<input type="password" name="password"><br>
							<label>Confirm Password:</label>
							<input type="password" name="password_confirmation"><br>
							Role:
							<select type="text" name="role" value="{{ old('role') }}">
								  <option value="user">Volvo</option>
								  <option value="Moderator">Saab</option>
</select
							<button type="submit">
							Register
							</button>
							</form>
@endsection
