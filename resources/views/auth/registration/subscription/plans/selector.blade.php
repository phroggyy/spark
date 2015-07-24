<!-- Registration Plan Selection -->
<div class="row spark-plan-selector-row" v-if="monthlyPlans.length > 0 && yearlyPlans.length > 0">
	<div class="col-md-6 col-md-offset-3 text-center">
		<span class="spark-plan-selector-interval">
			Monthly &nbsp;
		</span>

		<input type="checkbox"
		       id="plan-type-toggle"
		       class="spark-toggle spark-toggle-round-flat"
		       v-model="planTypeState">

		<label for="plan-type-toggle" v-on="click: alertStatus"></label>

		<span class="spark-plan-selector-interval">
			&nbsp; Yearly
		</span>
 	</div>
</div>

<div class="row" v-if="defaultPlans.length > 0 && shouldShowMonthlyPlans">
	<div class="col-md-@{{ getPlanColumnWidth(defaultPlans.length) }}" v-repeat="plan : defaultPlans">
		@include('spark::auth.registration.subscription.plans.plan')
	</div>
</div>

<div class="row" v-if="yearlyPlans.length > 0 && shouldShowYearlyPlans">
	<div class="col-md-@{{ getPlanColumnWidth(yearlyPlans.length) }}" v-repeat="plan : yearlyPlans">
		@include('spark::auth.registration.subscription.plans.plan')
	</div>
</div>
