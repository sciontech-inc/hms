<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container"  id="printableArea">
    <div class="row">
        <div class="col-xs-12">
    		<div class="invoice-title">
    			<h2>BILLING</h2><h3 class="pull-right"></h3>
    		</div>
            <div class="row">
                <div class="col-12" style="font-family:system-ui !important; font-weight: bold; text-align: center; ">
                    <div>SAINT DOMINIC</div>
                    <div style="color:red;">GENERAL HOSPITAL</div>
                </div>
            </div>
    		<hr>
    		<div class="row">
    			<div class="col-xs-6">
    				<address>
    				<strong>Billed To:</strong><br>
                    <strong>Name:</strong> John Smith<br>
    				<strong>Address:</strong> 1234 Main<br>
                        Apt. 4B Springfield, ST 54321<br>

    				</address>
    			</div>
    			<div class="col-xs-6 text-right">
    				<address>
        			<strong>Billing Information:</strong><br>
    				 <strong>Billing No:</strong>	 INV-000235<br>
    				 <strong>Admission No:</strong>	 ADN-045545<br>
    				</address>
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-xs-6">
    				<address>
    					<strong>Date Issued:</strong><br>
    					March 04, 2023<br>
    				</address>
    			</div>
    			<div class="col-xs-6 text-right">
    				<address>
    					<strong>Due Date:</strong><br>
    					March 07, 2023<br><br>
    				</address>
    			</div>
    		</div>
    	</div>
    </div>

    <div class="row">
    	<div class="col-md-12">
    		<div class="panel panel-default">
    			<div class="panel-heading">
    				<h3 class="panel-title"><strong>Account Summary</strong></h3>
    			</div>
    			<div class="panel-body">
    				<div class="table-responsive">
    					<table class="table table-condensed">
    						<thead>
                                <tr>
        							<td><strong>Service Description</strong></td>
        							<td class="text-center"><strong>Date</strong></td>
        							<td class="text-center"><strong>Quantity</strong></td>
        							<td class="text-right"><strong>Unit Price</strong></td>
                                </tr>
    						</thead>
    						<tbody>
    							<!-- foreach ($order->lineItems as $line) or some such thing here -->
    							<tr>
    								<td>Room Charges</td>
    								<td class="text-center">03-05-2023</td>
    								<td class="text-center">1</td>
    								<td class="text-right">₱ 12,000.00</td>
    							</tr>
                                <tr>
    								<td>Lab Test</td>
    								<td class="text-center">03-05-2023</td>
    								<td class="text-center">2</td>
    								<td class="text-right">₱ 4,500.00</td>
    							</tr>
                                <tr>
    								<td>Diagnostic Imaging</td>
    								<td class="text-center">03-05-2023</td>
    								<td class="text-center">1</td>
    								<td class="text-right">₱ 3,000.00</td>
    							</tr>
                                <tr>
    								<td>Pharmacy</td>
    								<td class="text-center">03-06-2023</td>
    								<td class="text-center">5</td>
    								<td class="text-right">₱ 2,000.00</td>
    							</tr>

    							<tr>
    								<td class="thick-line"></td>
    								<td class="thick-line"></td>
    								<td class="thick-line text-center"><strong>Subtotal</strong></td>
    								<td class="thick-line text-right">₱ 21,500.00</td>
    							</tr>
    							<tr>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
    								<td class="no-line text-center"><strong>Add Tax</strong></td>
    								<td class="no-line text-right">800</td>
    							</tr>
    							<tr>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
    								<td class="no-line text-center"><strong>Total</strong></td>
    								<td class="no-line text-right">₱ 22,300.00</td>
    							</tr>
    						</tbody>
    					</table>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
</div>
