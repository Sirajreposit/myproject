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
                            <a href="{{ url('layouts/oneapplayout') }}" class="btn btn-primary float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('layouts/' . $catgry->id . '/edyt') }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="Product_Category" class="form-label">Product Category</label>
                                <div class="input-group gap-3">
                                    <select name="Product_Category" id="Product_Category" class="form-select">
                                        <option value="">Select Product Category Type</option>
                                        @foreach ($productCategories as $product)
                                            <option value="{{ $product->Category_Name }}"
                                                {{ old('Product_Category',$catgry->Product_Category) == $product->Category_Name ? 'selected' : '' }}>
                                                {{ $product->Category_Name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('Product_Category')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            


                            <div class="mb-3">
                                <label for="Product_Name" class="form-label">Product Name</label>
                                <input type="text" name="Product_Name" id="Product_Name"
                                value="{{ $catgry->Product_Name }}" class="form-control" />
                                @error('Product_Name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="Price" class="form-label">Price</label>
                                <input type="text" name="Price" id="Price"  value="{{ $catgry->Price }}"
                                    class="form-control" />
                                @error('Price')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="Offer" class="form-label">Offer</label>
                                <input type="number" name="Offer" id="Offer"  value="{{ $catgry->Offer }}"
                                    class="form-control" />
                                @error('Offer')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="Product_Description" class="form-label">Product Description</label>
                                <input type="text" name="Product_Description" id="Product_Description"
                                value="{{ $catgry->Product_Description }}" class="form-control" />
                                @error('Product_Description')
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
</x-one-app-layout>
