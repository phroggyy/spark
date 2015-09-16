<div class="panel panel-default">
	<div class="panel-heading">Address information</div>
	<div class="panel-body">
		<spark-errors form="@{{ registerForm }}"></spark-errors>

		<form class="form-horizontal" role="form" id="subscription-basics-form">

			<div class="form-group">
				<label class="col-md-4 control-label">Street</label>
				<div class="col-md-6">
					<input type="text" class="form-control" name="street" v-model="addressForm.street">
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-4 control-label">City</label>
				<div class="col-md-6">
					<input type="email" class="form-control" name="city" v-model="addressForm.city">
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-4 control-label">Postal code</label>
				<div class="col-md-6">
					<input type="password" class="form-control" name="password" v-model="addressForm.zip">
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-4 control-label">Country</label>
				<div class="col-md-6">
					<input type="password" class="form-control" name="country" v-model="addressForm.country">
				</div>
			</div>

		</form>
	</div>
</div>
