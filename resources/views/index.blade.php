@extends('mainlayout')
 
@section('content')
	<div class="row align-items-center" id="index">
		<div class="col-md">
			<h2>Vyhladat v databaze obci</h2>
			<form>
				<input class="form-control typeahead" type="text" name="city" placeholder="Zadajte nazov" autocomplete="off">
			</form>
			
		</div>
	</div>

	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap3-typeahead.min.js"></script>
	<script src="js/app.js"></script>
@endsection