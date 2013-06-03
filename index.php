<html>
	<head>
		<title>Pesapal Integration</title>
	</head>
	<body>
		<h1>Customer Details</h1>
		<hr>
		<form action="api/pesapal-iframe.php" method="post">
			<table>
				<tr>
					<td>Amount:</td><td><input type="text" name="amount" value="5000" />(in Kshs)</td>
				</tr>
				<tr>
					<td>Type:</td><td><input type="text" name="type" value="MERCHANT" readonly="readonly" />(leave as default - MERCHANT)</td>
				</tr>
				<tr>
					<td>Description:</td><td><input type="text" name="description" value="Order Description" /></td>
				</tr>
				<tr>
					<td>Reference:</td><td><input type="text" name="reference" value="001" />(the Order ID )</td>
				</tr>
				<tr>
					<td>First Name:</td><td><input type="text" name="first_name" value="John" /></td>
				</tr>
				<tr>
					<td>Last Name:</td><td><input type="text" name="last_name" value="Doe" /></td>
				</tr>
				<tr>
					<td>Email Address:</td><td><input type="text" name="email" value="john@yahoo.com" /></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" value="Make Payment" /></td>
				</tr>
			</table>
		</form>
	</body>	
</html>