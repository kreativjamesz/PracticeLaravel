@csrf
<div class="form-group row">
  <div class="col-md-12">
    <label for="name">Name</label>
    <div class="input-group">
      <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name" value="{{old('name') ?? $customer->name}}">
    </div>
    <small class="text-danger">{{$errors->first('name')}}</small>
  </div>
</div>
<div class="form-group row">
  <div class="col-md-12">
    <label for="email">Email</label>
    <div class="input-group">
      <input type="text" class="form-control" name="email" id="email" placeholder="Enter your email" value="{{old('email') ?? $customer->email}}">
    </div>
    <small class="text-danger">{{$errors->first('email')}}</small>
  </div>
</div>
<div class="form-group row">
  <div class="col-md-12">
    <label for="status">Status</label>
    <select class="form-control" name="status" id="status">
      @foreach ($customer->activeOptions() as $activeOptionKey => $activeOptionValue)
        <option value="{{$activeOptionKey}}" {{ $customer->status == $activeOptionValue ? 'selected': ''}}>{{$activeOptionValue}}</option>
      @endforeach
    </select>
    <small class="text-danger">{{$errors->first('status')}}</small>
  </div>
</div>
<div class="form-group row">
  <div class="col-md-12">
    <label for="company_id">Company</label>
    <select class="form-control" name="company_id" id="company_id">
      @foreach ($companies as $company)
        <option value="{{$company->id}}" {{$company->id == $customer->company_id ? 'selected': ''}}>{{$company->name}}</option>
      @endforeach
    </select>
    <small class="text-danger">{{$errors->first('status')}}</small>
  </div>
</div>
