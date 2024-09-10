@section('indexpage')
<div class="container mt-5">
    <h2>Food Listings</h2>
    <div><a href="{{route('listing.create')}}" class="btn btn-primary">Add New Listing</a></div>
    {{-- <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Contact</th>
                <th>Date</th>
                <th>Time</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- Loop through food listings -->
            @foreach($foods as $listing)
            <tr>
                <td>{{ $listing->name }}</td>
                <td>{{ $listing->address }}</td>
                <td>{{ $listing->contact }}</td>
                <td>{{ $listing->date }}</td>
                <td>{{ $listing->time }}</td>
                <td>
                    <a href="/admin/food-listings/{{ $listing->id }}/edit" class="btn btn-sm btn-warning">Edit</a>
                    <form action="/admin/food-listings/{{ $listing->id }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table> --}}
</div>
@endsection