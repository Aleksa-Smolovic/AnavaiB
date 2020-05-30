@extends('layouts.index')
@extends('layouts.modal')

@section('content')
<div class="container-fluid ">
	<div class="dashboard-content">
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="page-header" id="top">
					<h2 class="pageheader-title">Actors</h2>
					<p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				
				@include('partials.success')
     
		<div class="card">
					<h5 class="card-header">Actors</h5>
					<div class="card-body">
						<div class="table-responsive">
							<a id="add" class="btn btn-sm btn-info float-right ml-3" href="javascript:void(0)" data-toggle="modal" data-target="#myModal">
								Add actor
							</a>
							<table class="table table-striped table-bordered first">
								<thead>
									<tr>
										<th class="text-center">No</th>
                                        <th class="text-center">Character</th>
                                        <th class="text-center">Image</th>
										<th class="text-center">Actor</th>
										<th class="text-center">Delete</th>
									</tr>
								</thead>
								<tbody>
									@foreach($objects as $object)
										<tr>
											<td class="text-center">{{ $object->id }}</td>
                                            <td class="text-center">{{ $object->character }}</td>
                                            <td class="text-center"><img class="rounded" src="{{ $object->image}}" width="60">
                                            </td>
                                            <td class="text-center">{{ $object->full_name }}</td>
											<td class="text-center">
												<form class="deleteForm" action="{{ route('movies/actors/delete', $object->id) }}" method="POST">
													@method('DELETE')
													@csrf
													<button type="button" class="delBtn btn btn-sm btn-danger">Delete</button>
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
        </div>

	</div>
</div>
@endsection

@section('js')

<script>

$('#myModal').on('hidden.bs.modal', function () {
	$(".submitForm")[0].reset();
});

$('.table').DataTable({
    "order": [[ 0, "desc" ]]
});

var route = "actors/store";

</script>

@section('modal-body')
<div class="modal-header">
          <h4 class="modal-title">Actors</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
		<form class="submitForm">
		@csrf
        <div class="modal-body">
			<div class="container">

                <div class="row">
                    <div class="col-12"> 
                        <div class="form-group">
                            <label class="col-form-label" for="title">Character *</label>
                            <input id="character" class="form-control" type="text" placeholder="Character" name="character">
                        </div>
                    </div>
                </div>
                
                    <div class="row">
                        <div class="col-12"> 
                            <div class="form-group">
                                <label class="col-form-label" for="actor_id">Actor *</label>
                                <select class="form-control" id="actor_id" name="actor_id">
                                    <option selected disabled>Choose actor</option>
                                    @foreach($allActors as $actor)
                                        <option value="{{$actor->id}}">{{$actor->full_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    




		</div>
    </div>
        
@endsection

@endsection
