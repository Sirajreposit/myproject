<x-App-Layout>

    <x-slot name="title">
        Edit Categories
    </x-slot>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">

                @if (session('status'))
                    <div class="alert alert-success">{{ session('status') }}</div>
                @endif

                <div class="card">
                    <div class="card-header">
                        <h4>Edit Categories
                            <a href="{{ route('bro') }}" class="btn btn-primary float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('layouts/' . $categories->id . '/edited') }}" method="POST">

                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label>Category Name</label>
                                <input type="Category_Name" name="Category_Name" value="{{ $categories->Category_Name }}" class="form-control" />
                                @error('Category_Name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>


                            <div class="mb-3">
                                <label>Category Description</label>
                                <input type="text" name="Category_Description" value="{{ $categories->Category_Description }}" class="form-control" />
                                @error('Category_Description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>

                       

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</x-App-Layout>
