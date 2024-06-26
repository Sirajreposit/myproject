<x-one-app-layout>
    <x-slot name="title">
        demoone
    </x-slot>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Expenses
                            <a href="{{ url('layouts/createcat') }}" class="btn btn-success float-end">Add Category</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Product Category</th>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Offer</th>
                                    <th>Product Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($product_cats as $itum)
                                    <tr>
                                        <td>{{ $itum->id }}</td>
                                        <td>{{ $itum->Product_Category }}</td>
                                        <td>{{ $itum->Product_Name }}</td>
                                        <td>{{ $itum->Price }}</td>
                                        <td>{{ $itum->Offer }}</td>
                                        <td>{{ $itum->Product_Description }}</td>
                                        <td>
                                            <a href="{{ url('layouts/' .$itum->id. '/edyt' ) }}" class="btn btn-sm btn-warning">Edit</a>
                                            <a href="{{ url('layouts/' .$itum->id. '/delet' ) }}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete the category?')">Delete</a>
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
</x-one-app-layout>
