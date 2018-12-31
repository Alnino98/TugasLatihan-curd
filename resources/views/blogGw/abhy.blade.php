@extends('layouts.master')

@section('teatle', 'PT.Co Ba')


@section('content')

<h1>Selamat datang di blog Suram Saya</h1>
<p>Apa yang ingin kita lihat</p>

<hr>
<?php foreach ($blogs as $blog): ?>
	<li>{{$blog->nama}}</li>	
<?php endforeach ?>


@endsection