<x-app-layout>
    <x-slot name="header" class="fixed insect-x-0">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight px-20">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 text-center font-semibold">
        @include('layouts.partials.system._message')
            <!-- display the 24hr time-->
            <h1 class="text-7xl p-4 bold">{{ date('H:i') }} Hrs</h1>

            <!-- Display the current date -->
            <h2 class="text-4xl font-semibold text-gray-400 text-center">
                {{ $day_today }}
            </h2>

            <div class="p-4">
                @if(!$has_time_in)
                    <!-- capture time in -->
                    <form method="POST" action="{{ url('logs') }}">
                        @csrf
                        <input type="hidden" name="time_in" value="{{ date('Y-m-d H:i:s') }}">
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="status" value="0">
                        <x-button class="bg-green-500">
                            {{ __('TimeIn') }}
                        </x-button>
                    </form>
                @else
                    <!-- capture time out -->
                        <form method="POST" action="{{ url('logs/'.$has_time_in->id) }}">
                            @csrf
                            {{ method_field('PUT') }}
                            <input type="hidden" name="time_out" value="{{ date('Y-m-d H:i:s') }}">
                            <input type="hidden" name="time_in" value="{{ $has_time_in->time_in }}">
                            <input type="hidden" name="user_id" value="{{ $has_time_in->user_id }}">
                            <input type="hidden" name="status" value="1">
                            <button class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded" type="submit">
                                {{ __('TimeOut') }}
                            </button>
                        </form>
                @endif
            </div>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Add User
            </button>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Understood</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
