<x-app-layout>
    <x-slot name="header" class="fixed insect-x-0">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight px-20">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 text-center font-semibold">
            <!-- display 24hr time-->
            <h1 class="text-8xl p-12 bold">{{ date('H:i') }} Hrs</h1>

            <!-- display day -->
            {{ $timestamp = date('Y-m-d H:i:s') }}

            @php

                // Get the current year
                $current_year = date('y');

                // Get the day name today
                $day_date = Carbon\Carbon::now()->format('l');

                // Get the current month name
                $current_month = Carbon\Carbon::now()->format('F');

                // Get the day date today
                $day_today = Carbon\Carbon::now()->format('d');

                // pick the first three letters of the day name
                $day_today_3_characters = substr($day_date, 0, 3);

                // pick the first three letters of the month name
                $month_3_characters = substr($current_month, 0, 3)

            @endphp
            <p>{{ $day_today_3_characters  }}, {{ $day_today  }}/{{ $month_3_characters  }}/{{ $current_year  }}</p>




        </div>
    </div>
</x-app-layout>
