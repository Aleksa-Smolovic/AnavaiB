@extends('layouts.index')
@extends('layouts.modal')

@section('content')
<div class="container-fluid ">
	<div class="dashboard-content">
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="page-header" id="top">
					<h2 class="pageheader-title">Objekti</h2>
					<p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				
				@include('partials.success')
     
		<div class="card">
					<h5 class="card-header">Objekti</h5>
					<div class="card-body">
						<div class="table-responsive">
							<a id="add" class="btn btn-sm btn-info float-right ml-3" href="javascript:void(0)" data-toggle="modal" data-target="#myModal">
								Dodaj objekat
							</a>
							<table class="table table-striped table-bordered first">
								<thead>
									<tr>
										<th class="text-center">No</th>
										<th class="text-center">Title</th>
										<th class="text-center">Image</th>
										<th class="text-center">Category</th>
										<th class="text-center">Actors</th>
										<th class="text-center">Edit</th>
										<th class="text-center">Delete</th>
									</tr>
								</thead>
								<tbody>
									@foreach($objects as $object)
										<tr>
											<td class="text-center">{{ $object->id }}</td>
											<td class="text-center">{{ $object->title }}</td>
                <td class="text-center">
                            <img class="rounded" src="{{ $object->image}}" width="60">
                        </td><td class="text-center">{{ $object->category_id }}</td>
					<td class="text-center"><a href="movies/{{$object->id}}/actors" class="btn btn-sm btn-primary">Actors</a></td>
											<td class="text-center">
												<form>
													<a href="javascript:void(0)" data-toggle="modal" data-id="{{$object->id}}" data-route="movies/{{$object->id}}"
														data-target="#myModal" class="edit show-object-data btn btn-sm btn-success">Edit</a>
												</form>
                                            </td>
											<td class="text-center">
												<form class="deleteForm" action="{{ route('movies/delete', $object->id) }}" method="POST">
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
						<a class="btn btn-sm btn-warning" href="{{ route('admin/movies/deleted') }}">Deleted movies</a href="{{ route('admin/movies/deleted') }}">
					</div>
				</div>
			</div>
        </div>

	</div>
</div>
@endsection

@section('js')

<script>
var route = "movies/store";

$('#myModal').on('hidden.bs.modal', function () {
	$(".submitForm")[0].reset();
	var $image = $("#imageHolder");
            $("#imageHolder").removeAttr("src").replaceWith($image.clone());
});

$("#add").click(function(){
	route = "movies/store";
});

$(".edit").click(function(){
	route = "movies/edit";
});

$('.table').DataTable({
    "order": [[ 0, "desc" ]]
});

function showData(returndata){
	$('#id').val(returndata.id);
	$('#title').val(returndata.title );
                $('#imageHolder').attr({ 'src': returndata.image });
                $('#text').val(returndata.text );
                $('#trailer').val(returndata.trailer );
                $('#category_id').val(returndata.category_id );
                
	$('#myModal').modal('show'); 
}

</script>

@section('modal-body')
<div class="modal-header">
          <h4 class="modal-title">Objekat</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
		<form class="submitForm">
		@csrf
        <div class="modal-body">
			<div class="container">
				<input type="hidden" name="id" id="id">


				
                <div class="row">
                    <div class="col-12"> 
                        <div class="form-group">
                            <label class="col-form-label" for="title">Title *</label>
                            <input id="title" class="form-control" type="text" placeholder="Title" name="title">
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-12">
                        <img width="100%" style="max-height:25%" id="imageHolder"/>
                    </div>
                </div>
                
                    <div class="row">
						<div class="col-12"> 
							<div class="form-group">
								<label class="col-form-label" for="image">Image *</label>
								<input type="file" id="image" class="form-control" name="image"/>
							</div>
						</div>
                    </div>
                    
                    <div class="row">
                        <div class="col-12"> 
                            <div class="form-group">
                                <label class="col-form-label" for="text">Text *</label>
                                <textarea class="form-control" id="text" name="text" placeholder="Text"></textarea>
                            </div>
                        </div>
                    </div>
                    
                <div class="row">
                    <div class="col-12"> 
                        <div class="form-group">
                            <label class="col-form-label" for="trailer">Trailer *</label>
                            <input id="trailer" class="form-control" type="text" placeholder="Trailer" name="trailer">
                        </div>
                    </div>
                </div>
                
                    <div class="row">
                        <div class="col-12"> 
                            <div class="form-group">
                                <label class="col-form-label" for="category_id">Category *</label>
                                <select class="form-control" id="category_id" name="category_id">
                                    <option selected disabled>Odaberite</option>
                                    @foreach($category as $singleCategory)
                                        <option value="{{$singleCategory->id}}">{{$singleCategory->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    




		</div>
    </div>
        
@endsection

@endsection
