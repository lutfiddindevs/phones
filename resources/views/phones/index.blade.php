@extends('layouts.app')

@section('content')
	<div class="m-auto w-4/5 py-24">
		<div class="text-center">
			<h1 class="text-5xl uppercase bold">Phones</h1>
		</div>
	
		<div class="w-5/6 py-10">
			@foreach($phones as $phone)
			<div class="m-auto">
				<span class="uppercase text-blue-500 font-bold text-xs italic">
					Founded: {{ $phone->founded }} 
				</span>
				<h2 class="text-gray-700 text-5xl">
					{{ $phone->name }}
				</h2>
				<p class="text-lg text-gray-700 py-6">
					{{ $phone->description }}
				</p>
				<hr class="mt-4 mb-8">
			</div>
			@endforeach
		</div>
	</div>
@endsection