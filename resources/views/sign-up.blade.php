@extends('layouts.app')

@section('content')
    <div style="text-align: center;">
        <h2>Sign up for Giscus</h2>

        <form action="" method="POST">
          <script
            src="https://checkout.stripe.com/checkout.js" class="stripe-button"
            data-key="pk_test_n6DGsMoQvW8pXRjsDIxC9ZWo"
            data-amount="300"
            data-name="Giscus"
            data-description="Monthly Subscription ($3.00)"
            data-image="/giscus-stripe.png">
          </script>
        </form>
    </div>
@stop
