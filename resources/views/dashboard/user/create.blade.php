@extends('dashboard.master')
@section('content')
@include('dashboard.partials.validation-errors')
<form action="{{ route("user.store") }}" method="POST">
    @include('dashboard.user._form', ['pasw'=> true])
</form>
@endsection

