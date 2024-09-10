<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <div class="flex justify-start">
                <a href="{{ route('home') }}"
                    class="px-5 py-2 border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none">Home</a>

            </div>

        </h2>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{-- @include('AdminPanel.index') --}}
                    <div class="flex justify-end">
                        <a href="{{ route('listing.create') }}"
                            class="px-5 py-2 border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none">Add
                            Food Item</a>

                    </div>
                    <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 pr-10 lg:px-8">

                        <div
                            class="align-middle inline-block min-w-full shadow overflow-hidden bg-white shadow-dashboard px-8 pt-3 rounded-bl-lg rounded-br-lg">
                            <table class="min-w-full">
                                <thead>
                                    <tr>
                                        <th
                                            class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">
                                            Name</th>
                                        <th
                                            class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                            Address</th>
                                        <th
                                            class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                            Contact</th>
                                        <th
                                            class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                            Date</th>
                                        <th
                                            class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                            Time</th>
                                        <th
                                            class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                            Actions</th>
                                        <th class="px-6 py-3 border-b-2 border-gray-300"></th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white">
                                    @foreach ($foods as $food)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                                <div class="flex items-center">
                                                    <div>
                                                        <div class="text-sm leading-5 text-black">{{ $food->name }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                                <div class="text-sm leading-5 text-black">{{ $food->address }}</div>
                                            </td>
                                            <td
                                                class="px-6 py-4 whitespace-no-wrap border-b text-black border-gray-500 text-sm leading-5">
                                                {{ $food->contact }}</td>
                                            <td
                                                class="px-6 py-4 whitespace-no-wrap border-b text-black border-gray-500 text-sm leading-5">
                                                {{ $food->date }}</td>
                                            <td
                                                class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-black text-sm leading-5">
                                                {{ $food->time }}</td>
                                            <td
                                                class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-500 text-sm leading-5">
                                                <a href="{{ route('listing.edit', $food->id) }}"
                                                    class="px-5 py-2 border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none">Edit</a>
                                            </td>
                                            <td
                                                class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-500 text-sm leading-5">

                                                <a href="{{ route('listing.destroy', $food->id) }}"
                                                    class="px-5 py-2 border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none">Delete</a>
                                            </td>
                                            <td
                                            class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-500 text-sm leading-5">

                                            <a href="{{ route('acceptor.show') }}"
                                                class="px-5 py-2 border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none">Acceptor</a>
                                        </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="sm:flex-1 sm:flex sm:items-center sm:justify-between mt-4 work-sans">
                                <div>
                                </div>
                            </div>
                        </div>

                        <hr>
                        <!-- component -->


                        </p>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
