<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                @include('layouts.partials.system._message')
                <div class="flex">
                    <div class="flex-1 w-1/3">
                        <h1>Users</h1>
                        @foreach($users as $user)
                            @if($user->getRoleNames()->first() == 'Admin')
                            <div class="w-5/6 p-2 h-16 bg-blue-500 text-white">
                            @else
                                <div class="w-5/6 p-2 h-16">
                            @endif
                                {{ $user->getRoleNames()->first() }}
                                <br>
                                {{ $user->email}}
                            </div>
                        @endforeach
                    </div>
                    <div class="shrink w-2/3">
                        <h1 class="p-2">Logs for Oct, 2016</h1>
                        <div class="border border-solid h-full w-full">
                            <table class="table-auto">
                                <div class="w-full bg-gray-200 h-14 pt-4 border-solid">
                                    &nbsp
                                </div>
                                <tr class="">
                                    <th class="py-3 px-16">Date</th>
                                    <th class="py-3 px-16">Time In</th>
                                    <th class="py-3 px-16">Time Out</th>
                                </tr>
                                @foreach($users_logs as $user_log)
                                    <tr class="border-collapse">
                                        <td class="py-3 px-16">{{ $user_log->created_at }} Hrs</td>
                                        <td class="py-3 px-16">{{ date('H:i:s', strtotime($user_log->time_in)) }} Hrs</td>
                                        <td class="py-3 px-16">{{ date('H:i:s', strtotime($user_log->time_out)) }} Hrs</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>

        </div>
    </div>
    </div>
</x-app-layout>
