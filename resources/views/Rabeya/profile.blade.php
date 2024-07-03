@extends('Rabeya.layouts.main')
@section('main-container')


<h2>hello {{ session('student_id') }} , </h2>


<a href="/logout">logout</a>





@endsection
