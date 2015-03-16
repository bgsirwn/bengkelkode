@extends('default')
@section('content')
<body>
	<div class="container">
		<div class="grid">
			<div class="col-md-6">
				
				<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> <strong>Well done!</strong> Email anda sudah dikonfirmasi</div>

				<!-- <div class="modal">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
								<h4 class="modal-title">Profil</h4>
							</div>
							<div class="modal-body">
								<p>Feel free to contact us for any issues you might have with our products.</p>
								<div class="row">
									<div class="col-xs-6">
										<label>Name</label>
										<input class="form-control" placeholder="Name">
									</div>
									<div class="col-xs-6">
										<label>Email</label>
										<input class="form-control" placeholder="Email">
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12">
										<label>Message</label>
										<textarea class="form-control" rows="3">Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac</textarea>
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button> 
								<button type="button" class="btn btn-success">Send</button>
							</div>
						</div>
					</div>
				</div>
 -->

 	<div class="panel panel-warning">
 		<div class="panel-heading">
 			<h3 class="panel-title">Step 1</h3>
 		</div>
 		<div class="panel-body">
 			<h4>Profile</h4>
			{{Form::open(array('files'=>true))}}
			{{Form::text('bio','',array('placeholder'=>'bio', 'class'=>'form-control'))}}
			{{Form::file('photo')}}
			{{Form::submit('Update')}}
			
			{{Form::close()}}

			<form id="skip" method="post" action="{{route('registration.skip')}}">
		<input type="submit" name="action" value="skip">
	</form>
 		</div>
 	</div>


	
	

	

			</div>
		</div>
	</div>


	
	<!-- Tombol ini memerlukan request POST jadi harus
	pake form -->
	
</body>
@stop