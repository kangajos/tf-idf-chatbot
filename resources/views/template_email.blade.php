<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style type="text/css">
body{background-color: #88BDBF;margin: 0px;}
</style>
<body>
	<table border="0" width="50%" style="margin:auto;padding:30px;background-color: #F3F3F3;border:1px solid #FF7A5A;">
		<tr>
			<td>
				<table border="0" width="100%">
					<tr>
						<td>
							<h1>APP Chat-Bot</h1>
						</td>
						<td>
							<p style="text-align: right;"><a href="{{url('/login')}}" target="_blank" style="text-decoration: none;">View In Website</a></p>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td>
				<table border="0" cellpadding="0" cellspacing="0" style="width:100%;background-color: #fff;">
					<tr>
						<td style="background-color:#FF7A5A;height:100px;font-size:50px;color:#fff;"><i class="fa fa-envelope-o" aria-hidden="true"></i></td>
					</tr>
					<tr>
						<td>
							<h1 style="padding-top:25px;" align="center">Konfirmasi email</h1>
						</td>
					</tr>
					<tr>
						<td>
							<p style="padding:0px 100px;">
								Berikut authentikasi akun yang anda miliki untuk masuk ke app chat-bot : <br>
								username : <b>{{$username}}</b> <br>
								password : <b>{{$password}}</b>
							</p>
						</td>
					</tr>
					<tr>
						<td align="center">
							<a href="{{url('/login')}}"><button style="margin:10px 0px 30px 0px;border-radius:4px;padding:10px 20px;border: 0;color:#fff;background-color:#FF7A5A; ">Login untuk mendapatkan hak akses</button></a>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td>
				<table border="0" width="100%" style="border-radius: 5px;text-align: center;">
					<tr>
						<td>
							<h3 style="margin-top:10px;">Stay in touch</h3>
						</td>
					</tr>
					<tr>
						<td>
							<div style="margin-top: 20px;">
								<span style="font-size:12px;">APP Caht-Bot</span><br>
								<span style="font-size:12px;">Copyright © 2019 Hello World</span>
							</div>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
</body>
</html>