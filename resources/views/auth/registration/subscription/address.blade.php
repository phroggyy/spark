<div class="panel panel-default">
	<div class="panel-heading">Address information</div>
	<div class="panel-body">
		<spark-errors form="@{{ registerForm }}"></spark-errors>

		<form class="form-horizontal" role="form" id="subscription-address-form" data-amount="@{{ selectedPlan.price * 100 }}">

			<div class="col-md-6 col-md-offset-4">
				<div class="form-group">
					<div class="radio radio-inline">
						<label>
							<input type="radio" name="customer_type" id="customer_type1" value="consumer" v-model="addressForm.customerType" checked>
							Private
						</label>
					</div>
					<div class="radio radio-inline">
						<label>
							<input type="radio" name="customer_type" id="customer_type2" value="company" v-model="addressForm.customerType">
							Company
						</label>
					</div>
				</div>
			</div>

			<template v-if="addressForm.customerType == 'company'">
				<div class="form-group">
					<label class="col-md-4 control-label">Company</label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="company" v-model="addressForm.company">
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label">EU VAT ID</label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="vat_id" data-vat="vat_number" v-model="addressForm.vatId">
						<span class="help-block">If you do not have an EU VAT ID, you will be charged with the VAT of your country of residence.</span>
					</div>
				</div>
			</template>

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
					<input type="text" class="form-control" name="zip" v-model="addressForm.zip">
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-4 control-label">Country</label>
				<div class="col-md-6">
					<input type="text" class="form-control" name="country" v-model="addressForm.country">
				</div>
			</div>

		</form>
	</div>
</div>
