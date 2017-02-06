@extends ('layouts.main')

@section('content')



		<table class="table table-striped table-hover ">
		  <thead>
		    <tr>
		      <th>#</th>
		      <th>Name</th>
		      <th>Email</th>
		      <th>Created</th>
		    </tr>
		  </thead>

		  <tbody>
		  	@foreach ($users as $user)
			    <tr>
			      <td>{{$user->id}}</td>
			      <td>{{$user->name}}</td>
			      <td>{{$user->email}}</td>
			      <td>{{$user->created_at}}</td>
			    </tr>
			@endforeach
		  </tbody>
		</table> 



@endsection