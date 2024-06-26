<x-pcat>
    <x-slot name="title">
        demoone
    </x-slot>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Expenses
                            <a href="{{ url('layouts/createtwo') }}" class="btn btn-success float-end">Add Category</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Category Name</th>
                                    <th>Category Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pcategories as $items)
                                    <tr>
                                        <td>{{ $items->id }}</td>
                                        <td>{{ $items->Category_Name}}</td>
                                        <td>{{ $items->Category_Description }}</td>
                                        <td>
                                            <a href="{{ url('layouts/' . $items->id . '/edited') }}" class="btn btn-sm btn-warning">Edit</a>
                                            <a href="{{ url('layouts/' . $items->id . '/deleted') }}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete the category?')">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-pcat>
