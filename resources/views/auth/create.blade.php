<x-App-Layout>

    <x-slot name="title">
        Add Categories
    </x-slot>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">

                @if(session('status'))
                    <div class="alert alert-success">{{ session('status') }}</div>
                @endif

                <div class="card">
                    <div class="card-header">
                        <h4>Add Categories
                            <a href="{{ url('layouts/applayout') }}" class="btn btn-primary float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('layouts/create') }}" method="POST">
                            @csrf
                            
                            <div class="mb-3">
                                <label>Name</label>
                                <input type="text" name="Name" value="{{ old('name') }}" class="form-control"/>
                               
                                @error('Name')  
                                    <span class="text-danger">{{ $message }}</span> 
                                @enderror

                            </div>

                            <div class="mb-3">
                                <label>Description</label>
                                <textarea name="Description" class="form-control" rows="3">{{ old('description') }}</textarea>
                               
                                @error('Description')  
                                    <span class="text-danger">{{ $message }}</span> 
                                @enderror

                            </div>

                            <div class="mb-3">
                                <label>Is Active</label>
                                <input type="checkbox" name="Is_Active" {{ old('is_active') ? 'checked' : '' }}/>
                                
                                @error('Is_Ative')  
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
</x-App-Layout>
