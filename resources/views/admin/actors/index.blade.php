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
										<th class="text-center">Redni broj</th>
										<th class="text-center">Full name</th>
                <th class="text-center">Country</th>
                <th class="text-center">Birth date</th>
                <th class="text-center">Image</th>
                
										<th class="text-center">Izmijeni</th>
										<th class="text-center">Obriši</th>
									</tr>
								</thead>
								<tbody>
									@foreach($objects as $object)
										<tr>
											<td class="text-center">{{ $object->id }}</td>
											<td class="text-center">{{ $object->full_name }}</td>
                <td class="text-center">{{ $object->country }}</td>
                <td class="text-center">{{ $object->birth_date }}</td>
                <td class="text-center">
                            <img class="rounded" src="{{ $object->image}}" width="60">
                        </td>
											<td class="text-center">
												<form>
													<a href="javascript:void(0)" data-toggle="modal" data-id="{{$object->id}}" data-route="actors/{{$object->id}}"
														data-target="#myModal" class="edit show-object-data btn btn-sm btn-success">Izmijeni</a>
												</form>
                                            </td>
											<td class="text-center">
												<form class="deleteForm" action="{{ route('actors/delete', $object->id) }}" method="POST">
													@method('DELETE')
													@csrf
													<button type="button" class="delBtn btn btn-sm btn-danger">Obriši</button>
												</form>
											</td>
										</tr>
									@endforeach
								</tbody>
							</table>
						</div>
						<a class="btn btn-sm btn-warning" href="{{ route('admin/actors/deleted') }}">Izbrisani objekti</a href="{{ route('admin/actors/deleted') }}">
					</div>
				</div>
			</div>
        </div>

	</div>
</div>
@endsection

@section('js')

<script>
var route = "actors/store";

$('#myModal').on('hidden.bs.modal', function () {
	$(".submitForm")[0].reset();
	var $image = $("#imageHolder");
            $("#imageHolder").removeAttr("src").replaceWith($image.clone());
});

$("#add").click(function(){
	route = "actors/store";
});

$(".edit").click(function(){
	route = "actors/edit";
});

$('.table').DataTable({
    "order": [[ 0, "desc" ]]
});

function showData(returndata){
	$('#id').val(returndata.id);
	$('#full_name').val(returndata.full_name );
                $('#country').val(returndata.country );
                $('#birth_date').val(returndata.birth_date );
                $('#imageHolder').attr({ 'src': returndata.image });
                $('#overview').val(returndata.overview );
                $('#biography').val(returndata.biography );
                
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
                            <label class="col-form-label" for="full_name">Full name *</label>
                            <input id="full_name" class="form-control" type="text" placeholder="Full name" name="full_name">
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-12"> 
                        <div class="form-group">
                            <label class="col-form-label" for="country">Country *</label>
                            <input id="country" class="form-control" type="text" placeholder="Country" name="country">
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-12"> 
                        <div class="form-group">
                            <label class="col-form-label" for="birth_date">Birth date *</label>
                            <div class="input-group date" id="datetimepicker4" data-target-input="nearest">
                                <input name="birth_date" id="birth_date" type="text" class="form-control datetimepicker-input" data-target="#datetimepicker4" />
                                <div class="input-group-append" data-target="#datetimepicker4" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                </div>
                            </div>
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
                                <label class="col-form-label" for="overview">Overview *</label>
                                <textarea class="form-control" id="overview" name="overview" placeholder="Overview"></textarea>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-12"> 
                            <div class="form-group">
                                <label class="col-form-label" for="biography">Biography *</label>
                                <textarea class="form-control" id="biography" name="biography" placeholder="Biography"></textarea>
                            </div>
                        </div>
                    </div>
                    




		</div>
    </div>
        
@endsection

@endsection
