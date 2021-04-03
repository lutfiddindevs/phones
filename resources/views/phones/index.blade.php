@extends('layouts.app')

@section('content')
	<div class="m-auto w-4/5 py-24">
		<div class="text-center">
			<h1 class="text-5xl uppercase bold">Phones</h1>
		</div>
		@if(Session::has('d_message'))
           <div class="alert pt-3 pb-3 bg-green-500 mt-4">
           	   {{ Session::get('d_message') }}
           </div>
		@endif
		@if(Session::has('e_message'))
           <div class="alert pt-3 pb-3 bg-green-500 mt-4">
           	   {{ Session::get('e_message') }}
           </div>
		@endif
		@if(Session::has('c_message'))
           <div class="alert pt-3 pb-3 bg-green-500 mt-4">
           	   {{ Session::get('c_message') }}
           </div>
		@endif
	    <div class="pt-10">
	    	<a href="phones/create" class="border-b-2 pb-2 border-dotted italic text-gray-500">
	    		 Add a new Phone &rarr;
	    	</a>
	    </div>
		<div class="w-5/6 py-10">
			@foreach($phones as $phone)
			<div class="m-auto">
				<div class="float-right">
					<a href="phones/{{ $phone->id }}/edit" class="border-b-2 pb-2 border-dotted italic text-green-500">Edit &rarr; </a>
					<form action="phones/{{ $phone->id }}" method="post" class="pt-3"> 
						@csrf
						@method('delete')
						<button type="submit" class="border-b-2 pb-2 border-dotted italic text-red-500">
							Delete &rarr;
						</button>
					</form>
				</div>
				<span class="uppercase text-blue-500 font-bold text-xs italic">
					Founded: {{ $phone->founded }} 
				</span>
				<h2 class="text-gray-700 text-5xl hover:text-gray-500">
					<a href="/phones/{{ $phone->id }}">{{ $phone->name }}</a>
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