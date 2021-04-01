@extends('layouts.app')

@section('content')
	<div class="m-auto w-4/8 py-24">
		<div class="text-center">
			<h1 class="text-5xl uppercase bold">Create phone</h1>
		</div>
	</div>
	<div class="flex justify-center pt-15">
		<form action="/phones" method="post">
			@csrf
			<div class="block">
				<input type="text" class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400" name="name" placeholder="Enter brand name">
				<input type="text" class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400" name="founded" placeholder="Enter Founded Year">
				<input type="text" class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400" name="description" placeholder="Enter phone description">
				<button  type="submit" class="bg-green-500 block shadow-5xl mb-10 p-2 w-80 uppercase font-bold">
					Submit
				</button>
			</div>
		</form>
	</div>
@endsection