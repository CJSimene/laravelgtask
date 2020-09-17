<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Payments</title>

        <style>

        table {

        }

        table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        }
        th, td {
        padding: 5px 5px 5px 5px;
        text-align: left;    
        }

        .hta {
        margin-left: 550px;
        }
        .htb {
        margin-left: 525px;
        }


        img{

        }

        </style>

    </head>
    <body>

  <div>
        <h1 class="htb">Pay with this Cards!</h1>      
        <table style="width:15%" class="hta">
  <tr>
    <th>
    <img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png">
    </th>
  </tr>  
  <tr>    
    <th>
    <form action="/charge" method="POST" style="margin-left:40px;margin-top:20px;margin-bottom:20px;">
                        {{ csrf_field() }}
                        <script
                                src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                data-key="{{ env('STRIPE_PUB_KEY') }}"
                                data-amount="1999"
                                data-name="Stripe Demo"
                                data-description="Online course about integrating Stripe"
                                data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                                data-locale="auto"
                                data-currency="usd">
                        </script>
                        </form>

    </th>
  </tr>
</table>


        <!-- <div class="container">
                <h1>Pay with this Cards!</h1>
                        <div class="row">
                                <div class="col-md-6 col-md-offset-3">
                                        <div class="panel panel-default credit-card-box">
                                                <div class="panel-heading display-table" >
                                                        <div class="row display-tr" >
                                                                <h3 class="panel-title display-td" >Payment Details</h3>
                                                                <div class="display-td" >
                                                                        <img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png">
                                                                </div>
                                                        </div>
                                                </div>

                                                <div class="panel-body">
                                                <form action="/charge" method="POST" style="margin-left:40px;margin-top:20px;">
                                                {{ csrf_field() }}
                                                <script
                                                        src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                                        data-key="{{ env('STRIPE_PUB_KEY') }}"
                                                        data-amount="1999"
                                                        data-name="Stripe Demo"
                                                        data-description="Online course about integrating Stripe"
                                                        data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                                                        data-locale="auto"
                                                        data-currency="usd">
                                                </script>
                                                </form>
                                                </div>
                                        </div>
                                </div>

                        </div>
        </div> -->


    </body>
</html>