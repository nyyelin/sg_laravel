@extends('backendtemplate')
@section('content')

<div class="row">
  <div class="col-md-6 grid-margin stretch-card mx-auto">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Create form</h4>
        <form class="forms-sample" action="{{route('categories.store')}}" method="post">
          @csrf
          <div class="form-group">
            <label for="exampleInputUsername1">Name</label>
            <input type="text" class="form-control text-light" id="exampleInputUsername1" placeholder="Name" name="name">
            <span class="text-danger">{{ $errors->first('name') }}</span>
          </div>
          <button type="submit" class="btn btn-primary mr-2">Submit</button>
        </form>
      </div>
    </div>
  </div>
  
</div>

@endsection