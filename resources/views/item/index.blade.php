@extends('backendtemplate')
@section('content')

<div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Item table</h4>

        <div class="table-responsive">
          <table class="table table-dark text-white">
            <thead>
              <tr>
                <th > # </th>
                <th> Name </th>
                <th> Action </th>
              </tr>
            </thead>
            <tbody>
	        	@php
	        		$i = 1;
	        	@endphp
	             @foreach($items as $item)
	                <tr>
		                <td> {{$i++}} </td>
		                <td> {{$item->name}} </td>
		                <td> <a href="{{route('items.edit',$item->id)}}" class="d-inline-block btn">
			                	<span class="menu-icon">
					                <i class="mdi mdi-briefcase-edit text-warning" style="font-size:20px"></i>
					            </span>
		                	</a> 
		                	<form action="{{route('items.destroy',$item->id)}}" method="post" class="d-inline-block my-0 py-0">
		                		@method('DELETE')
		                		@csrf
		                		<button type="submit" class="btn" onclick="return confirm('Are you sure to delete')">
				                	<span class="menu-icon">
						                <i class="mdi mdi-delete text-danger" style="font-size:20px"></i>
						            </span>
			                	</button>
		                	</form> 
		                </td>
	                </tr>
	            @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

@endsection