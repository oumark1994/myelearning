@extends('global.template')
@section('contents')
<div class="container mt-5">
<div class="row justify-content-center align-content-center">
<div class="col-md-10 text-center">
<div class="card">
<div class="card-title">Application Successfull</div>
<div class="card-body">
Hello <b>{{request()->name}}</b>,thank you for joining us,soon we will approve your application.<br>
When approved,you will receive your a message on <b>{{request()->email}}<br><br>
Thank you<br><br>
<a href="{{url('/')}}" class="btn btn-outline-primary">Back to explore more course</a>
</div>
</div>
</div>
</div>
</div>
@endsection