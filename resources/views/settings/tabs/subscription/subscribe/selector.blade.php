<div class="row">
	<!-- Monthly / Available Plans -->
	<div class="col-md-6">
		<div style="margin-bottom: 15px;">
			<span v-if="includesBothPlanIntervals"><strong>Monthly Plans</strong></span>
			<span v-if=" ! includesBothPlanIntervals"><strong>Available Plans</strong></span>
		</div>

		<div v-repeat="plan : defaultPlans" style="margin-bottom: 10px;">
			<div v-if="plan.price > 0" style="margin-bottom: 10px;">
				@include('spark::settings.tabs.subscription.subscribe.plan')
			</div>
		</div>
	</div>

	<!-- Yearly Plans -->
	<div class="col-md-6" v-if="includesBothPlanIntervals">
		<div style="margin-bottom: 15px;">
			<strong>Yearly Plans</strong>
		</div>

		<div v-repeat="plan : yearlyPlans" style="margin-bottom: 10px;">
			@include('spark::settings.tabs.subscription.subscribe.plan')
		</div>
	</div>
</div>
