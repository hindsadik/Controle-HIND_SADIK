@extends('layouts.app')

@section('title', 'ListEvent')

@section('content')
    <div class="flex justify-center ">

        
        <div class=" w-[90%] overflow-x-auto shadow-md sm:rounded-lg mt-20">
            <div class="flex justify-end">
                <a href="{{ route('event_page') }}"><button type="button" class="text-white bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 ">Add a product</button></a>
            </div>
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400  mt-8">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            id
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Title
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Description
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Start_Date
                        </th>
                        <th scope="col" class="px-6 py-3">
                            End_Date
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Created_up
                        </th>
                        <th scope="col" class="px-6 py-3">
                            updated_up
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($events as $event)
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $event->id }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $event->title }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $event->description }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $event->start_date }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $event->end_date }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $event->created_at->diffforhumans() }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $event->updated_at->diffforhumans() }}
                        </td>
                        <td class="flex px-6 py-4 space-x-8">
                            <a href="{{ route('edit_event' , $event->id) }}" type="submit"  class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            


                            <div x-data="{ showModal: false }">
                                <!-- Button to open the modal -->
                                <!-- Modal overlay -->
                                <form action="{{ route('delete_event', $event->id) }}" method="POST"
                                    class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <a href="#" onclick="toggleModal('modal-id{{ $event->id }}')" class="font-medium text-red-600 dark:text-blue-500 hover:underline">Delet</a>
                                    <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-10 outline-none focus:outline-none justify-center items-center"
                                        id="modal-id{{ $event->id }}">
                                        <div class="relative w-auto mx-auto max-w-[30%]">
                                            <!--content-->
                                            <div
                                                class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                                                <!--header-->
                                                <div
                                                    class="flex items-start justify-between p-5 border-b border-solid border-slate-200 rounded-t">
                                                    <h3 class="text-3xl font-semibold">
                                                        Modal Title
                                                    </h3>
                                                    <button
                                                        class="p-1 ml-auto bg-transparent border-0 text-black opacity-5 float-right text-3xl leading-none font-semibold outline-none focus:outline-none"
                                                        onclick="toggleModal('modal-id{{ $event->id }}')">
                                                        <span
                                                            class="bg-transparent text-black opacity-5 h-6 w-6 text-2xl block outline-none focus:outline-none">
                                                            ×
                                                        </span>
                                                    </button>
                                                </div>
                                                <!--body-->
                                                <div class="relative p-3 flex-auto">
                                                    <p class="my-4 text-slate-500 text-lg leading-relaxed">
                                                        confirmation
                                                    </p>
                                                </div>
                                                <!--footer-->
                                                <div
                                                    class="flex items-center justify-end p-6 border-t border-solid border-slate-200 rounded-b">
                                                    <button
                                                        class="text-red-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                                        type="button"
                                                        onclick="toggleModal('modal-id{{ $event->id }}')">
                                                        Close
                                                    </button>
                                                    <button
                                                        class="bg-emerald-500 text-white active:bg-emerald-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                                        type="submit"
                                                        onclick="toggleModal('modal-id{{ $event->id }}')">
                                                        Save Changes
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-id-backdrop">
                                    </div>
                                    <script type="text/javascript">
                                        function toggleModal(modalID) {
                                            document.getElementById(modalID).classList.toggle("hidden");
                                            document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
                                            document.getElementById(modalID).classList.toggle("flex");
                                            document.getElementById(modalID + "-backdrop").classList.toggle("flex");
                                        }
                                    </script>
                                </form>
                            </div>
                            
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
