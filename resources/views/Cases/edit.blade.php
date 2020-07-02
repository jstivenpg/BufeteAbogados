@extends('layouts.layout')
@section('content')
<div class="row">
	<section class="content">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Edit Case</h3>
				</div>
				<div class="panel-body">					
					<div class="table-container">
						<form method="POST" action="{{ route('cases.store') }}"  role="form">
							{{ csrf_field() }}
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="name" id="name" class="form-control input-sm" placeholder="Case name">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="client_id" id="client_id" class="form-control input-sm" placeholder="Client id">
									</div>
								</div>
							</div>

                            <div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="cost" id="cost" class="form-control input-sm" placeholder="Cost">
									</div>
								</div>
	                            <div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="status_id" id="status_id" class="form-control input-sm" placeholder="Status id">
									</div>
								</div>
							<div class="row">
 
								<div class="col-xs-12 col-sm-12 col-md-12">
									<input type="submit"  value="Save" class="btn btn-success btn-block">
									<a href="{{ route('index') }}" class="btn btn-info btn-block" >Back</a>
								</div>	
 
							</div>
						</form>
					</div>
				</div>
 
			</div>
		</div>
	</section>
	@endsection