@extends('layouts.app')

@section('title', 'Product')

@section('content')
<div class="flex justify-center items-center mt-16">
    <form action="{{ route('event_page') }}" method="POST" class="w-1/2 p-8 bg-gray-100 rounded-lg">
        @csrf
        <h2 class="text-2xl mb-4">Créer une nouvelle Catégorie</h2>
        <div class="mb-4">
            <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
            <input type="text"  name="title" value="{{ old('title') }}" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            @error('title')
                <span class="text-red-400">{{$message}}</span>
            @enderror 
            <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
            <input type="text"  name="description" value="{{ old('description') }}" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            @error('description')
                <span class="text-red-400">{{$message}}</span>
            @enderror 
            <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Start Date</label>
            <input type="date"  name="start_date" value="{{ old('start_date') }}" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            @error('start_date')
                <span class="text-red-400">{{$message}}</span>
            @enderror 
            <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">End Date</label>
            <input type="date"  name="end_date" value="{{ old('end_date') }}" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            @error('end_date')
                <span class="text-red-400">{{$message}}</span>
            @enderror 
            <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
            <input type="text"  name="price" value="{{ old('price') }}" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            @error('price')
                <span class="text-red-400">{{$message}}</span>
            @enderror 

            
        </div>
        <button class="text-white bg-black focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Enregistrer</button>
    </form>
</div>
@endsection