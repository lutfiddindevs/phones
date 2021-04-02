@extends('layouts.app')

@section('content')
	<div class="m-auto w-4/5 py-24">
		<div class="text-center">
			<h1 class="text-5xl uppercase bold">Phones</h1>
		</div>
	    <div class="pt-10">
	    	<a href="phones/create" class="border-b-2 pb-2 border-dotted italic text-gray-500">
	    		 Add a new Phone &rarr;
	    	</a>
	    </div>
		<div class="w-5/6 py-10">
			@foreach($phones as $phone)
			<div class="m-auto">
				<div class="float-right">
					<a href="{{ $phone->id }}/edit" class="border-b-2 pb-2 border-dotted italic text-green-500">Edit &rarr; </a>
				</div>
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