<x-one-app-layout>
    <x-slot name="title">
        Add Categories
    </x-slot>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">

                @if (session('status'))
                    <div class="alert alert-success">{{ session('status') }}</div>
                @endif

                <div class="card">
                    <div class="card-header">
                        <h4>Add Categories
                            <a href="{{ url('layouts/createcatapp') }}" class="btn btn-primary float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('layouts/createtwo') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label">Category Name</label>
                                <input type="text" name="Category_Name" class="form-control" />
                                @error('Category_Name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="Product_Description" class="form-label">Category Description</label>
                                <input type="text" name="Category_Description" class="form-control" />
                                @error('Category_Description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-one-app-layout>
