@extends('layouts.master')

@section('teatle', 'PT.Co Ba')

@section('content')

 	<h1>Di Web pertama ini dikau akan melihat betapa Suramnya Kami</h1>
	<dir></dir>

	<h2>{{ $blogGw }}</h2>
	
	<H2>Dan ini adalah users nya</H2>
	
	<?php foreach ($users as $user): ?>

		<li>{{$user->nama. ' '. $user->pasword }}</li>

	<?php endforeach ?>

	{!! $unescaped !!}


@endsection