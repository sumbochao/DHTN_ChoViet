﻿<?php
	//goi thu vien
	include('class.smtp.php');
	include "class.phpmailer.php"; 
	include "functions.php"; 
	
	$title = $_POST['topic'];
	$content = '<!DOCTYPE html>
	<html lang="en">
	
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Document</title>
		<style>
			* {
				box-sizing: border-box;
			}
			
			body {
				margin: 0px auto;
				width: 80%;
			}
			
			header {
				background-color: #f1f1f1;
				padding: 20px;
				text-align: center;
			}
			
			.column {
				float: left;
				width: 50%;
				padding: 15px;
			}
			
			.bang {
				width: 100%;
				text-align: center;
			}
			
			.bang table {
				margin: 0 auto;
			}
			
			.row:after {
				content: "";
				display: table;
				clear: both;
			}
			/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
			
			@media screen and (max-width:600px) {
				.column {
					width: 100%;
				}
			}
			
			@media screen and (max-width:1000px) {
				.bang {
					width: 100%;
				}
			}
		</style>
	</head>
	
	<body>
		<header>
			<img src="http://choviet.xyz/images/4.png" alt="Logo" style="width:300px;text-align: center; margin: 0px auto;">
			<h1>Chào quý khách</h4>
				<p>Chợ Việt gửi đến khách hàng hóa đơn từ bên shop, Quý khách vui lòng kiểm tra hóa đơn điện tử bên dưới phần chi tiết đơn hàng.</p>
		</header>
		<div class=row>
			<div class="column">
				<h3>Thông tin thanh toán</h3>
				<p name="name">Lê Nhật Hào</p>
				<a href="" name="email">lenhathao3112@gmail.com</a>
				<p>0815777721</p>
			</div>
			<div class="column">
				<h3>Địa chỉ giao hàng</h3>
				<p name="name">Lê Nhật Hào</p>
				<p name="address">334 Chu Văn An, P12, Bình Thạnh</p>
				<p name="city">Hồ Chí Minh</p>
				<p name="state">Việt Nam</p>
			</div>
			<h3>Xuất hóa đơn điện tử từ Chợ Việt </h3>
		</div>
		<div class="bang">
			<h2 style="color:blue;">Chi tiết đơn hàng</h2>
			<table style="width:80%;display: table;
				border-collapse: separate;
				border-spacing: 0px;
				border-color: gray;
				background-color: burlywood;">
				<tr style="background-color: cornflowerblue;height: 50px;width: 800px;">
					<th>Sản phẩm</th>
					<th>Đơn giá</th>
					<th>Số lượng</th>
					<th>Giảm giá</th>
					<th>Tổng tạm tính</th>
				</tr>
				<tr style="height:70px;width: 80%;">
					<td>IP 11 Pro Max 256 GB</td>
					<td>30.000.000 VNĐ</td>
					<td>1</td>
					<td>0 VNĐ</td>
					<td>30.000.000 VNĐ</td>
				</tr>
				<tr style="height: 30px;">
					<td></td>
					<td></td>
					<td></td>
					<td>Tổng giá trị sản phẩm chưa giảm</td>
					<td>30.000.000 VNĐ</td>
				</tr>
				<tr style="height: 30px;">
					<td></td>
					<td></td>
					<td></td>
					<td>Giảm giá phiếu quà tặng</td>
					<td>0 VNĐ</td>
				</tr>
				<tr style="height: 30px;">
					<td></td>
					<td></td>
					<td></td>
					<td>Chi phí vận chuyển</td>
					<td>15.000 VNĐ</td>
				</tr>
				<tr style="height: 30px;">
					<td></td>
					<td></td>
					<td></td>
					<td>Phí xử lý đơn hàng</td>
					<td>0 VNĐ</td>
				</tr>
				<tr style="height: 30px;">
					<td></td>
					<td></td>
					<td></td>
					<td>Tổng giá trị đơn hàng</td>
					<td>30.015.000 VNĐ</td>
				</tr>
			</table>
		</div>
		<h3>Thông tin chi tiết: </h2>
			<a href="?act=product_detail"></a>
			<h3>Mua tiếp: </h2>
				<a href="?act=product"></a>
	</body>
	
	</html>';
	$nTo = $_POST['name'];
	$mTo = $_POST['email'];
	$diachi = 'lenhathao3112@gmail.com';
	//test gui mail
	$mail = sendMail($title, $content, $nTo, $mTo,$diachicc='');
	if($mail==1)
	$erro = 'Bạn đã thanh toán thành công mời vào email xem đơn hàng của bạn.';
	else $erro = 'Có lỗi!';
?>