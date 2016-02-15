<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<table width="100%">
			<tr width="80%" height="100px" id="header" >
				<td width="10%"></td>
				<td width="80%" bgcolor="#00B800" padding-left="10px">
					&nbsp;&nbsp;
					<img src="http://deco3801-05.uqcloud.net/foundation-5.4.0/img/logos.png" width="75 px" height="75 px" alt="logo" />
					<img src="http://deco3801-05.uqcloud.net/foundation-5.4.0/img/font.png" height="75 px" width="auto" alt="MoneyLink" />
				</td>
				<td width="10%"></td>
			</tr>
			<tr id="body">
				<td></td>
				<td>
					<font color="#00B800">
						<h2>Your Loan on MoneyLink has been fully funded!</h2>
					</font>
					<p>Dear {{ $applicant[0]-> fname}}&nbsp;{{$applicant[0]-> lname}},</p>
					<p>The following loan request you applied for on MoneyLink has been fully funded.</p>
					<table width="50%">
						<tr>
							<td width="10%"></td>
							<td width="40%"><strong>Amount:</strong></td>
							<td width="50%">${{ $loan[0] -> amount}}</td>
						</tr>
						<tr>
							<td></td>
							<td><strong>Term:</strong></td>
							<td>{{ $loan[0] -> term }} Months</td>
						</tr>
						<tr>
							<td></td>
							<td><strong>Interest Rate:</strong></td>
							<td>{{ $loan[0] -> pref_rate }}%</td>
						</tr>
						<tr>
							<td></td>
							<td><strong>Purpose:</strong></td>
							<td>{{ $loan[0] -> purpose}}</td>
						</tr>
						<tr>
							<td></td>
							<td><strong>Description:</strong></td>
							<td>{{ $loan[0] -> description}}</td>
						</tr>
					</table>
					<p>Please click the link below and login to MoneyLink to get the contact details of your lenders.<p>
					<a href='{{ $link }}'>{{ $link }}</a>
				</td>
				<td></td>
			</tr>
			<tr id="footer">
				<td></td>
				<td bgcolor="#4C4C4C" height="75px">
					
					<table width="100%">
						<tr>
							<td width="60%">
								&nbsp;&nbsp;
								<img src="http://deco3801-05.uqcloud.net/foundation-5.4.0/img/logos.png" width="50 px" height="50 px" alt="logo" />
								<img src="http://deco3801-05.uqcloud.net/foundation-5.4.0/img/font.png" height="50 px" width="auto" alt="MoneyLink" />
							</td>

							<td width="40%">
								<font color="#ffffff" size="2">									
									<table width="100%">
										<tr>
											<td width="30%"><strong>Email:</strong></td>
											<td width="70%">moneylink@gmail.com</td>
										</tr>
										<tr>
											<td><strong>Website:</strong></td>
											<td>deco3801-05.uqcloud.net/</td>
										</tr>
										<tr>
											<td><strong>Phone:</strong></td>
											<td>0414 168 187</td>
										</tr>
									</table>
								</font>
							</td>
						</tr>
					</table>

					
				</td>
				<td></td>
			</tr>
		</table>
		
	</body>
</html>