@extends('default')
@section('content')
<body>
	<div class="container">
		<div class="grid">
			<div class="col-md-6">
				<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> <strong>Well done!</strong> Email anda sudah dikonfirmasi</div>
					
					<div class="panel panel-warning">
						<div class="panel-heading">
							<h3 class="panel-title">Step 3</h3>
						</div>
						<div class="panel-body">
							<h4>Syncronization</h4>

							<!-- Tombol ini memerlukan request POST jadi harus
							pake form -->
							<form id="skip" method="post" action="{{route('registration.skip')}}">
								<input type="submit" name="action" value="skip">
							</form>
						</div>
					</div>

					
			</div>
			
		</div>
		
	</div>
	
</body>
@stop