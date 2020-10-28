<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice Bid Win</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <style>
        body{margin-top:20px;
background:#eee;
}

/*Invoice*/
.invoice .top-left {
    font-size:65px;
	color:#3ba0ff;
}

.invoice .top-right {
	text-align:right;
	padding-right:20px;
}

.invoice .table-row {
	margin-left:-15px;
	margin-right:-15px;
	margin-top:25px;
}

.invoice .payment-info {
	font-weight:500;
}

.invoice .table-row .table>thead {
	border-top:1px solid #ddd;
}

.invoice .table-row .table>thead>tr>th {
	border-bottom:none;
}

.invoice .table>tbody>tr>td {
	padding:8px 20px;
}

.invoice .invoice-total {
	margin-right:-10px;
	font-size:16px;
}

.invoice .last-row {
	border-bottom:1px solid #ddd;
}

.invoice-ribbon {
	width:85px;
	height:88px;
	overflow:hidden;
	position:absolute;
	top:-1px;
	right:14px;
}

.ribbon-inner {
	text-align:center;
	-webkit-transform:rotate(45deg);
	-moz-transform:rotate(45deg);
	-ms-transform:rotate(45deg);
	-o-transform:rotate(45deg);
	position:relative;
	padding:7px 0;
	left:-5px;
	top:11px;
	width:120px;
	background-color:#66c591;
	font-size:15px;
	color:#fff;
}

.ribbon-inner:before,.ribbon-inner:after {
	content:"";
	position:absolute;
}

.ribbon-inner:before {
	left:0;
}

.ribbon-inner:after {
	right:0;
}

@media(max-width:575px) {
	.invoice .top-left,.invoice .top-right,.invoice .payment-details {
		text-align:center;
	}

	.invoice .from,.invoice .to,.invoice .payment-details {
		float:none;
		width:100%;
		text-align:center;
		margin-bottom:25px;
	}

	.invoice p.lead,.invoice .from p.lead,.invoice .to p.lead,.invoice .payment-details p.lead {
		font-size:22px;
	}

	.invoice .btn {
		margin-top:10px;
	}
}

@media print {
	.invoice {
		width:900px;
		height:800px;
	}
}
    </style>

</head>
<body>


    <div class="container bootstrap snippets bootdeys">
        <div class="row">
          <div class="col-sm-12">
                  <div class="panel panel-default invoice" id="invoice">
                  <div class="panel-body">
                    <div class="invoice-ribbon"><div class="ribbon-inner">PAID</div></div>
                    <div class="row">

                        <div class="col-sm-6 top-left">
                            <i class="fa fa-rocket"></i>
                        </div>

                        <div class="col-sm-6 top-right">
                                <h3 class="marginright">INVOICE-1234578</h3>
                                <span class="marginright">14 April 2014</span>
                        </div>

                        <button class="btn btn-success  mx-5 " id="invoice-print"><i class="fa fa-print"></i> Print Invoice</button>
                        <button class="btn btn-danger "><i class="fa fa-envelope-o"></i> Mail Invoice</button>

                    </div>
                    <hr>


                    <div class="container">
                        <div class="card">

                      <div class="card-body">
                      <div class="row mb-4">
                      <div class="col-sm-6">
                      <h6 class="mb-3">From:</h6>
                      <div>
                      <strong>Webz Poland</strong>
                      </div>
                      <div>Madalinskiego 8</div>
                      <div>71-101 Szczecin, Poland</div>
                      <div>Email: info@webz.com.pl</div>
                      <div>Phone: +48 444 666 3333</div>
                      </div>

                      <div class="col-sm-6">
                      <h6 class="mb-3">To:</h6>
                      <div>
                      <strong>Bob Mart</strong>
                      </div>
                      <div>Attn: Daniel Marek</div>
                      <div>43-190 Mikolow, Poland</div>
                      <div>Email: marek@daniel.com</div>
                      <div>Phone: +48 123 456 789</div>
                      </div>



                      </div>

                      <div class="table-responsive-sm">
                      <table class="table table-striped">
                      <thead>
                      <tr>
                      <th class="center">#</th>
                      <th>Item</th>
                      <th>Description</th>

                      <th class="right">Unit Cost</th>
                        <th class="center">Qty</th>
                      <th class="right">Total</th>
                      </tr>
                      </thead>
                      <tbody>
                      <tr>
                      <td class="center">1</td>
                      <td class="left strong">Origin License</td>
                      <td class="left">Extended License</td>

                      <td class="right">$999,00</td>
                        <td class="center">1</td>
                      <td class="right">$999,00</td>
                      </tr>
                      <tr>
                      <td class="center">2</td>
                      <td class="left">Custom Services</td>
                      <td class="left">Instalation and Customization (cost per hour)</td>

                      <td class="right">$150,00</td>
                        <td class="center">20</td>
                      <td class="right">$3.000,00</td>
                      </tr>
                      <tr>
                      <td class="center">3</td>
                      <td class="left">Hosting</td>
                      <td class="left">1 year subcription</td>

                      <td class="right">$499,00</td>
                        <td class="center">1</td>
                      <td class="right">$499,00</td>
                      </tr>
                      <tr>
                      <td class="center">4</td>
                      <td class="left">Platinum Support</td>
                      <td class="left">1 year subcription 24/7</td>

                      <td class="right">$3.999,00</td>
                        <td class="center">1</td>
                      <td class="right">$3.999,00</td>
                      </tr>
                      </tbody>
                      </table>
                      </div>
                      <div class="row">
                      <div class="col-lg-4 col-sm-5">

                      </div>

                      <div class="col-lg-4 col-sm-5 ml-auto">
                      <table class="table table-clear">
                      <tbody>
                      <tr>
                      <td class="left">
                      <strong>Subtotal</strong>
                      </td>
                      <td class="right">$8.497,00</td>
                      </tr>
                      <tr>
                      <td class="left">
                      <strong>Discount (20%)</strong>
                      </td>
                      <td class="right">$1,699,40</td>
                      </tr>
                      <tr>
                      <td class="left">
                       <strong>VAT (10%)</strong>
                      </td>
                      <td class="right">$679,76</td>
                      </tr>
                      <tr>
                      <td class="left">
                      <strong>Total</strong>
                      </td>
                      <td class="right">
                      <strong>$7.477,36</strong>
                      </td>
                      </tr>
                      </tbody>
                      </table>

                      </div>

                      </div>

                      </div>
                      </div>
                      </div>





                  </div>
                </div>
            </div>
        </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</body>
</html>
