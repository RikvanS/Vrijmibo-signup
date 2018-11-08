@extends ('layout')
@section('title', 'Vrijmibo Signup')
@section('content')
<div class="display">
    <div class="signup-container">
<a href="/create" class="main-link">Meld je aan</a>
</div>
<p>Aanwezig!</p>
@foreach ($deelnemers as $deelnemer)

<li>{{ $deelnemer->naam }}</li>
@endforeach
</div>
@endsection

