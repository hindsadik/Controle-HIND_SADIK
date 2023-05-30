@extends('layouts.app')

@section('title', 'EditPage')

@section('content')
<div class="flex justify-center items-center mt-32">
    <form action="{{ route('update_event' , $event->id) }}" method="POST"  class="w-1/2 p-8 bg-gray-100 rounded-lg">
        @csrf
        @method('PUT')
        <h2 class="text-2xl mb-4">Modifier</h2>
        <div class="mb-4">
            <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"><Title></Title></label>
            <input type="text" name="title" value="{{$event->title}}" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            @error('title')
                <span class="text-red-400">{{$message}}</span>
            @enderror
            <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
            <input type="text" name="description" value="{{$event->description}}"   id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date Start</label>
            <input type="date" name="start_date" value="{{$event->start_date}}"   id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date End</label>
            <input type="date" name="end_date" value="{{$event->end_date}}"   id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">price</label>
            <input type="text" name="price" value="{{$event->price}}"   id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <button class="text-white bg-black focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Enregistrer</button>
    </form>
</div>
@endsection