<!DOCTYPE html>
<html>
<head>
	@include('Trangchitiet.head')
</head>
<body>
	@include('Trangchitiet.module18')
	<div class="module_19">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="hinh">
						<img src="{{ asset('images/image9_md19.jpg') }}" />
					</div>

					<div class="row abc">

						<div class="hinh1">
							<div class="col-md-4 mot">
								<img src="{{ asset('images/product-gallery3-185x185.jpg') }}" />
							</div>
						</div>
						<div class="col-md-4 hai">
							<img src="{{ asset('images/product-gallery3-185x185.jpg') }}" />
						</div>
						<div class="col-md-4 ba">
							<img src="{{ asset('images/product-gallery3-185x185.jpg') }}" />
						</div>

					</div>
				</div>
				<div class="col-md-6">
					<div class="chu">
						<h3>Seafood</h3>
						<div class="nut">
							<samp class="button"><i class="fa fa-share-alt" aria-hidden="true"></i> SHARE</samp>
							<samp class="button"><i class="fa fa-heart-o" aria-hidden="true"></i> LIKE</samp>
						</div>
						<h4><?php echo $pabulum[8]['pabulum_name'] ?></h4>
						<div class="canhle">
							<samp><i class="fa fa-star" aria-hidden="true"></i></samp>
							<samp><i class="fa fa-star" aria-hidden="true"></i></samp>
							<samp><i class="fa fa-star" aria-hidden="true"></i></samp>
							<samp><i class="fa fa-star" aria-hidden="true"></i></samp>
							<samp><i class="fa fa-star" aria-hidden="true"></i></samp>
							<samp class="chu1"> ( 1 customer review) </samp>
						</div>
						<div class="gach"></div>
						<div class="gia">
							<h5><?php echo $pabulum[8]['pabulum_price'] ?></h5>
						</div>
						<div class="gach"></div>
						<h4><?php echo $pabulum[8]['pabulum_introduce'] ?>
						</h4>
						<div class="add">
							<h4><a href="#">ADD TO CART</a></h4>
						</div>
						<div class="nut1">
							<samp class="ban1"><?php echo $pabulum[8]['pabulum_category'] ?></samp>
							<samp><?php echo $pabulum[8]['pabulum_tags'] ?></samp>
						</div>

						<div class="mota">
							<samp ><?php echo $title[20]['title_content'] ?></samp>
						</div>
						<div class="gach"></div>
					</div>
					<h4><?php echo $pabulum[8]['pabulum_description'] ?>
					<div class="mota">
						<samp><?php echo $title[21]['title_content'] ?></samp>
					</div>
					<div class="gach"></div>
					<h4><?php echo $pabulum[8]['pabulum_reviews'] ?></h4>
				</div>
			</div>
		</div>
	</div>
	@include('Trangchitiet.module20')
	@include('Trangchitiet.module13')
</body>
</html>

