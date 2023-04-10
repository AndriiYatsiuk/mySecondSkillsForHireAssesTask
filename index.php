<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--link to CSS file-->
	<link rel="stylesheet" href="./css/style.css">
	<title>Halifax Canoe and Kayak</title>
</head>

<body>
	<div class="wrapper">



		<!--header, navbar-->
		<?php include('blocks/header.php'); ?>


		<!--main picture, content text-->
		<div class="content">
			<div class="content__picture">
				<div class="content__picture-img">
					<img src="./img/canoe.jpg" alt="canoe picture">
				</div>
				<div class="content__picture-text">Come Expirence Canada</div>
			</div>
			<div class="container">
				<div class="content__text">
					<div class="title">Upcoming Adventures</div>
					<div class="line"></div>
					<div class="topic">
						<div class="topic__title">Halifax</div>
						<div class="topic__date">
							Date: 2017-04-12
							<br>
							Duration: 4 days
						</div>
						<div class="topic__summary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi
							asperiores optio dolore soluta praesentium maxime tempore blanditiis tempora animi voluptate!
							Excepturi sed ipsum illum alias obcaecati animi molestias odio quasi praesentium. Nostrum quae
							natus, sapiente maiores nam ipsam possimus. Maiores quam fuga exercitationem omnis excepturi,
							similique hic molestias quaerat alias esse nesciunt, consequuntur sit magni. Ducimus alias deleniti
							voluptatem ratione! Minima perferendis, repellat esse dolor eaque quam sunt nihil asperiores est
							eligendi architecto veniam facilis dignissimos commodi doloribus enim corporis expedita quae soluta
							rem incidunt. Excepturi, dolor. Repellendus dicta aut eveniet cumque et rerum velit unde harum nam
							expedita! Iusto, odit asperiores!</div>
					</div>
					<div class="topic">
						<div class="topic__title">Sydney</div>
						<div class="topic__date">Date: 2017-04-12
							<br>
							Duration: 4 days
						</div>
						<div class="topic__summary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi
							asperiores optio dolore soluta praesentium maxime tempore blanditiis tempora animi voluptate!
							Excepturi sed ipsum illum alias obcaecati animi molestias odio quasi praesentium. Nostrum quae
							natus, sapiente maiores nam ipsam possimus. Maiores quam fuga exercitationem omnis excepturi,
							similique hic molestias quaerat alias esse nesciunt, consequuntur sit magni. Ducimus alias deleniti
							voluptatem ratione! Minima perferendis, repellat esse dolor eaque quam sunt nihil asperiores est
							eligendi architecto veniam facilis dignissimos commodi doloribus enim corporis expedita quae soluta
							rem incidunt. Excepturi, dolor. Repellendus dicta aut eveniet cumque et rerum velit unde harum nam
							expedita! Iusto, odit asperiores!</div>
					</div>
				</div>
			</div>
		</div>



		<!--footer-->
		<?php include('blocks/footer.php'); ?>
	</div>

	<!--jquery link-->
	<script src="https://code.jquery.com/jquery-3.6.4.slim.min.js"></script>
	<!--js connection-->
	<script src="js/script.js"></script>
</body>

</html>