<section class="bg-light">
    <script src="https://cdn.tailwindcss.com"></script>
<div class="container mt-5">
    <div class="flex justify-end">
        <a href="{{route('dashboard')}}" class="px-4 py-2 bg-indigo-600 text-white font-semibold rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Back</a>
    
    </div>
    <br>
    <br>
    @if (session()->has('message'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
        {{ session()->get('message') }}
    </div>
    @endif
    </div>



<div class="bg-gray-100 mt-10 flex items-center justify-center h-screen">

    <div class="bg-white shadow-md rounded-lg p-8 w-full max-w-lg">
        <h2 class="text-2xl font-bold mb-6 text-gray-800">Create Food Listing</h2>
        
        <form action="{{route('listing.update', $foods->id)}}" method="POST" enctype="multipart/form-data">
            <!-- Food Name -->
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Food Name</label>
                <input type="text" id="name" name="name" value="{{$foods->name}}" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Enter food name">
            </div>

            <!-- Food Type -->
            <div class="mb-4">
                <label for="food_type" class="block text-sm font-medium text-gray-700">Food Type</label>
                <input type="text" id="food_type" name="food_type" value="{{$foods->food_type}}" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Enter food type">
            </div>

            <!-- Quantity -->
            <div class="mb-4">
                <label for="quantity" class="block text-sm font-medium text-gray-700">Quantity</label>
                <input type="number" id="quantity" name="quantity" value="{{$foods->quantity}}" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Enter quantity">
            </div>

            <!-- Contact Information -->
            <div class="mb-4">
                <label for="contact" class="block text-sm font-medium text-gray-700">Contact Information</label>
                <input type="text" id="contact" name="contact" value="{{$foods->contact}}" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Enter contact information">
            </div>

            <!-- Address -->
            <div class="mb-4">
                <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                <textarea id="address" name="address" value="{{$foods->address}}" rows="3" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Enter address"></textarea>
            </div>

            <!-- Food Image -->
            <div class="mb-4">
                <label for="image" class="block text-sm font-medium text-gray-700">Food Image</label>
                <input type="file" id="image" name="image" value="/foods/{{$foods->image}}" class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:border file:border-gray-300 file:rounded-lg file:text-sm file:font-semibold file:bg-gray-50 file:text-gray-700 hover:file:bg-gray-100">
            </div>

            <!-- Date -->
            <div class="mb-4">
                <label for="date" class="block text-sm font-medium text-gray-700">Date</label>
                <input type="date" id="date" name="date" value="{{$foods->date}}" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <!-- Time -->
            <div class="mb-6">
                <label for="time" class="block text-sm font-medium text-gray-700">Time</label>
                <input type="time" id="time" name="time" value="{{$foods->time}}" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <!-- Submit Button -->
            <div class="flex justify-end">
                <button type="submit" class="px-4 py-2 bg-indigo-600 text-white font-semibold rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Update Listing</button>
            </div>
        </form>
    </div>

</div>
</section>