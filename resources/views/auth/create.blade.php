<x-App-Layout>

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
                            <a href="{{ url('layouts/applayout') }}" class="btn btn-primary float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('layouts/create') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label>Date</label>
                                <input type="date" name="Date" value="{{ old('Date') }}" class="form-control" />

                                @error('Date')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>


                            <div class="mb-3">
                                <label for="expense_type" class="form-label">Expense Types</label>
                                <select name="ExpenseType" id="expense_type" class="form-select">
                                    <option value="">Select an Expense Type</option><hr>
                                    <option value="another_action" {{ old('ExpenseType') == 'Daily_Expences' ? 'selected' : '' }}>Daily Expences</option>
                                    <option value="something_else" {{ old('ExpenseType') == 'grocery' ? 'selected' : '' }}>grocery</option>
                                    <option value="separated_link" {{ old('ExpenseType') == 'unwanted' ? 'selected' : '' }}>unwanted</option>
                                </select>
                                @error('ExpenseType')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Name</label>
                                <input type="text" name="Name" value="{{ old('Name') }}" class="form-control" />
                                @error('Name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Purpose</label>
                                <textarea name="Purpose" class="form-control">{{ old('Purpose') }}</textarea>
                                @error('Purpose')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Amount</label>
                                <input type="number" name="Amount" value="{{ old('Amount') }}" class="form-control" />
                                @error('Amount')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Reciept</label>
                                <input type="text" name="Reciept" value="{{ old('Reciept') }}" class="form-control" />
                                @error('Reciept')
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
