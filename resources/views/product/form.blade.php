<div class="form-wrap px-4 pt-0 pb-3">
    <div class="md-form mb-2">
        <input type="text" name="name" class="form-control" value="{{ old('name') ?? $customer->name }}">
        <label for="name">Name</label>
        <span class="text-danger">{{ $errors->first('name') }}</span>
    </div>

    <div class="md-form mt-3">
        <input type="text" name="email" class="form-control" value="{{ old('email') ?? $customer->email }}">
        <label for="email">Email</label>
        <span class="text-danger">{{ $errors->first('email') }}</span>
    </div>
    
    <div class="form-group">
        <label for="">Status</label>
        <select name="status" id="" class="custom-select">
            @foreach ($customer->statusOptions() as $key => $statusOptionValue)
                {{ $key }}
                <option value="{{ $key }}" {{ $customer->status == $statusOptionValue ? 'selected' : '' }}>{{ $statusOptionValue }}</option>
            @endforeach
            {{-- <option value="1" {{ $customer->status == 'Active' ? 'selected' : '' }}>Active</option>
            <option value="0" {{ $customer->status == 'Inactive' ? 'selected' : '' }}>Inactive</option> --}}
        </select>
    </div>

    <div class="form-group">
        <label for="">Company</label>
        <select name="company_id" id="" class="form-control custom-select">
            <option value="" disabled>Select your company</option>
            @foreach ($companies as $company)                                
                <option value="{{ $company->id }}" {{ $company->id == $customer->company_id ? 'selected' : '' }}>{{ $company->name }}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" name="submit" class="btn teal lighten-2 text-white btn-rounded btn-sm" style="padding: 0.7rem 1rem"><h6 class="mb-0"><i class="fas fa-paper-plane mr-2"></i><span class="font-weight-normal">send</span></h6></button>
</div>
@csrf