<x-app-layout>
    <x-slot name="title">
        demo
    </x-slot>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Expences
                            <a href="{{ url('layouts/create') }}" class="btn btn-success float-end">Add Category</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Date</th>
                                    <th>Name</th>
                                    <th>ExpenseType</th>
                                    <th>Purpose</th>
                                    <th>Amount</th>
                                    <th>Reciept</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->Date }}</td>
                                        <td>{{ $item->Name }}</td>
                                        <td>{{ $item->ExpenseType}}</td>
                                        <td>{{ $item->Purpose }}</td>
                                        <td>{{ $item->Amount }}</td>
                                        <td>{{ $item->Reciept }}</td>
                                        <td>
                                            <a href="{{url('layouts/'.$item->id.'/edit')}}" class="btn btn-sm btn-warning">Edit</a>
                                            <a href="{{url('layouts/'.$item->id.'/delete')}}" class="btn btn-sm btn-danger"
                                                onclick="return confirm('Are you shure to to delete the category?')">Delete</a>
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
</x-app-layout>
