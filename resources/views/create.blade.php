@extends ('layout')
@section('title', 'Vrijmibo Signup')
@section('content')

<div class="signup-main">
<form action="/" method="POST" class="signup-form">
{{ csrf_field() }}
<div class="form-content">
<input type="text" name='naam' placeholder='Je naam' class='form-input'> <br>
<button type="submit">Bevestig</button>
</div>
</form>

<a href="/" class="main-link">Terug</a>

</div>
@endsection
