@extends('app')
@section('content')

    <div class="col-md-6 col-md-offset-3">
<form method="post" enctype="multipart/form-data" action="create_form">

    @include('form')
</form></div>
@stop