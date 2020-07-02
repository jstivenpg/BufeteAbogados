@extends('layouts.layout')
@section('content')
<div class="row">
	<section class="content">
		<div class="col-md-8 col-md-offset-2">
			@if (count($errors) > 0)
			<div class="alert alert-danger">
				<strong>Error!</strong> Revise los campos obligatorios.<br><br>
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
			@if(Session::has('success'))
			<div class="alert alert-info">
				{{Session::get('success')}}
			</div>
			@endif
 
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">New Lawyer</h3>
				</div>
				<div class="panel-body">					
					<div class="table-container">
						<form method="POST" action="{{ route('lawyer.store') }}"  role="form">
							{{ csrf_field() }}
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="names" id="names" class="form-control input-sm" placeholder="Name Lawyer">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="lastname" id="lastname" class="form-control input-sm" placeholder="Lastname">
									</div>
								</div>
							</div>

                            <div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="document_type_id" id="document_type_id" class="form-control input-sm" placeholder="Document type id">
									</div>
								</div>
	                            <div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="document_number" id="document_number" class="form-control input-sm" placeholder="Document number">
									</div>
								</div>
                            
							
 
						
							<div class="row">
 
								<div class="col-xs-12 col-sm-12 col-md-12">
									<input type="submit"  value="Guardar" class="btn btn-success btn-block">
									<a href="{{ route('libro.index') }}" class="btn btn-info btn-block" >Atrás</a>
								</div>	
 
							</div>
						</form>
					</div>
				</div>
 
			</div>
		</div>
	</section>
	@endsection