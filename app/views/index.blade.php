@extends('layouts.layout')

@section('main')

		<div class="breadcrumb">
			<div class="container">
				<div class="breadcrumb-inner">
					<ul class="list-inline list-unstyled">
						<li><a href="#">Inicio</a></li>
						<li class='active'>Smart Phone</li>
					</ul>
				</div><!-- /.breadcrumb-inner -->
			</div><!-- /.container -->
		</div><!-- /.breadcrumb -->

		<div class="body-content outer-top-xs">
			<div class='container'>
				<div class='row outer-bottom-sm'>
					<div class='col-md-3 sidebar'>
	    <!-- ================================== TOP NAVIGATION ================================== -->
						<div class="side-menu animate-dropdown outer-bottom-xs">
						    <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Categor&iacute;as</div>        
						    <nav class="yamm megamenu-horizontal" role="navigation">
						        <ul class="nav">
						            <li class="dropdown menu-item">
						                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-desktop fa-fw"></i>Computer</a>
						                 <ul class="dropdown-menu mega-menu">
										    <li class="yamm-content">
										        <div class="row">
										            <div class="col-sm-12 col-md-3">
										                <ul class="list-unstyled">  
										                    <li><a href="category.html">Lenovo</a></li>
										                    <li><a href="category.html">Microsoft</a></li>    
										                    <li><a href="category.html">Fuhlen</a></li>                                        
										                    <li><a href="category.html">Longsleeves</a></li>    
										                </ul>
										            </div><!-- /.col -->
										            <div class="col-sm-12 col-md-3">
										                <ul class="list-unstyled">
										                    <li><a href="category.html">Microsoft</a></li>
										                    <li><a href="category.html">Apple</a></li>    
										                    <li><a href="category.html">Tees & Tanks</a></li>                                        
										                    <li><a href="category.html">Graphic Tees</a></li>  
										                </ul>
										            </div><!-- /.col -->
										            <div class="col-sm-12 col-md-3">
										                <ul class="list-unstyled">
										                    <li><a href="category.html">Polos</a></li>
										                    <li><a href="category.html">Sweaters</a></li>    
										                    <li><a href="category.html">Shirts</a></li>                                        
										                    <li><a href="category.html">Hoodies</a></li>  
										                </ul>
										            </div><!-- /.col -->
										            <div class="col-sm-12 col-md-3">
										                <ul class="list-unstyled">
										                    <li><a href="category.html">Microsoft</a></li>
										                    <li><a href="category.html">Apple</a></li>    
										                    <li><a href="category.html">Tees & Tanks</a></li>                                        
										                    <li><a href="category.html">Graphic Tees</a></li>  
										                </ul>
										            </div><!-- /.col -->
										        </div><!-- /.row -->
										    </li><!-- /.yamm-content -->                    
										</ul><!-- /.dropdown-menu -->            
									</li><!-- /.menu-item -->

						            <li class="dropdown menu-item">
						                 <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-mobile fa-fw"></i>Smart Phone</a>
         <!-- ================================== MEGAMENU VERTICAL ================================== -->
											<ul class="dropdown-menu mega-menu">
											    <li class="yamm-content">
											        <div class="row">
											            <div class="col-xs-12 col-sm-12 col-lg-4">
											                <ul>
											                    <li><a href="#">Computer Cases &amp; Accessories</a></li>
											                    <li><a href="#">CPUs, Processors</a></li>
											                    <li><a href="#">Fans, Heatsinks &amp; Cooling</a></li>
											                    <li><a href="#">Graphics, Video Cards</a></li>
											                    <li><a href="#">Interface, Add-On Cards</a></li>
											                    <li><a href="#">Laptop Replacement Parts</a></li>
											                    <li><a href="#">Memory (RAM)</a></li>
											                    <li><a href="#">Motherboards</a></li>
											                    <li><a href="#">Motherboard &amp; CPU Combos</a></li>
											                    <li><a href="#">Motherboard Components &amp; Accs</a></li>
											                </ul>
											            </div>

											            <div class="col-xs-12 col-sm-12 col-lg-4">
											                <ul>
											                    <li><a href="#">Power Supplies Power</a></li>
											                    <li><a href="#">Power Supply Testers Sound</a></li>
											                    <li><a href="#">Sound Cards (Internal)</a></li>
											                    <li><a href="#">Video Capture &amp; TV Tuner Cards</a></li>
											                    <li><a href="#">Other</a></li>
											                </ul>
											            </div>

											            <div class="dropdown-banner-holder">
											                <a href="#"><img alt="" src="assets/images/banners/banner-side.png" /></a>
											            </div>
											        </div><!-- /.row -->
											    </li><!-- /.yamm-content -->                    
											</ul><!-- /.dropdown-menu -->
        <!-- ================================== MEGAMENU VERTICAL ================================== -->            
                                    </li><!-- /.menu-item -->

						            <li class="dropdown menu-item">
						                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-apple fa-fw"></i>Apple Store</a>         
									</li><!-- /.menu-item -->

						            <li class="dropdown menu-item">
						                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-camera fa-fw"></i>Camera</a>           
									</li><!-- /.menu-item -->

						            <li class="dropdown menu-item">
						                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-headphones fa-fw"></i>TV & Audio</a>          
									</li><!-- /.menu-item -->

						            <li class="dropdown menu-item">
						                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-gamepad fa-fw"></i>Game & Video</a>          
									</li><!-- /.menu-item -->

						            <li class="dropdown menu-item">
						                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-location-arrow fa-fw"></i>Car Electronic</a>          
									</li><!-- /.menu-item -->

						            <li class="dropdown menu-item">
						                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-history fa-fw"></i>Old Products</a>
                                    </li><!-- /.menu-item -->

						            <li class="dropdown menu-item">
						                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-microphone fa-fw"></i>Accessories</a>           
									</li><!-- /.menu-item -->
          
						        </ul><!-- /.nav -->
						    </nav><!-- /.megamenu-horizontal -->
						</div><!-- /.side-menu -->
       <!-- ================================== TOP NAVIGATION : END ================================== -->	            
		            </div><!-- /.sidebar -->

			        <div class='col-md-9'><!--  EMPIEZA CONTENIDO CENTRAL -->
		<!-- ========================================== SECTION – HERO ========================================= -->

						<div id="category" class="category-carousel hidden-xs">
							<div class="item">	
								<div class="image">
									<img src="assets/images/banners/cat-banner-1.jpg" alt="" class="img-responsive">
								</div>
								<div class="container-fluid">
									<div class="caption vertical-top text-left">
										<div class="big-text">
											Sale
										</div>

										<div class="excerpt hidden-sm hidden-md">
											up to 50% off
										</div>

									</div><!-- /.caption -->
								</div><!-- /.container-fluid -->
							</div>
						</div>

		

			
        <!-- ========================================= SECTION – HERO : END ========================================= -->
				        <div class="clearfix filters-container m-t-10">
							<div class="row">
								<div class="col col-sm-6 col-md-2">
									<div class="filter-tabs">
										<ul id="filter-tabs" class="nav nav-tabs nav-tab-box nav-tab-fa-icon">
											<li class="active">
												<a data-toggle="tab" href="#grid-container"><i class="icon fa fa-th-list"></i>Cuadr&iacute;cula</a>
											</li>
											<li><a data-toggle="tab" href="#list-container"><i class="icon fa fa-th"></i>Lista</a></li>
										</ul>
									</div><!-- /.filter-tabs -->
								</div><!-- /.col -->

								<div class="col col-sm-12 col-md-6">
									<div class="col col-sm-3 col-md-6 no-padding">
										<div class="lbl-cnt">
											<span class="lbl">Ordenar por</span>
											<div class="fld inline">
												<div class="dropdown dropdown-small dropdown-med dropdown-white inline">
													<button data-toggle="dropdown" type="button" class="btn dropdown-toggle">
														Posici&oacute;n <span class="caret"></span>
													</button>

													<ul role="menu" class="dropdown-menu">
														<li role="presentation"><a href="#">position</a></li>
														<li role="presentation"><a href="#">Price:Lowest first</a></li>
														<li role="presentation"><a href="#">Price:HIghest first</a></li>
														<li role="presentation"><a href="#">Product Name:A to Z</a></li>
													</ul>
												</div>
											</div><!-- /.fld -->
										</div><!-- /.lbl-cnt -->
									</div><!-- /.col -->
									<div class="col col-sm-3 col-md-6 no-padding">
										<div class="lbl-cnt">
											<span class="lbl">Show</span>
											<div class="fld inline">
												<div class="dropdown dropdown-small dropdown-med dropdown-white inline">
													<button data-toggle="dropdown" type="button" class="btn dropdown-toggle">
														1 <span class="caret"></span>
													</button>

													<ul role="menu" class="dropdown-menu">
														<li role="presentation"><a href="#">1</a></li>
														<li role="presentation"><a href="#">2</a></li>
														<li role="presentation"><a href="#">3</a></li>
														<li role="presentation"><a href="#">4</a></li>
														<li role="presentation"><a href="#">5</a></li>
														<li role="presentation"><a href="#">6</a></li>
														<li role="presentation"><a href="#">7</a></li>
														<li role="presentation"><a href="#">8</a></li>
														<li role="presentation"><a href="#">9</a></li>
														<li role="presentation"><a href="#">10</a></li>
													</ul>
												</div>
											</div><!-- /.fld -->
										</div><!-- /.lbl-cnt -->
									</div><!-- /.col -->
								</div><!-- /.col -->
								<div class="col col-sm-6 col-md-4 text-right">
									<div class="pagination-container">
										<ul class="list-inline list-unstyled">
											<li class="prev"><a href="#"><i class="fa fa-angle-left"></i></a></li>
											<li><a href="#">1</a></li>	
											<li class="active"><a href="#">2</a></li>	
											<li><a href="#">3</a></li>	
											<li><a href="#">4</a></li>	
											<li class="next"><a href="#"><i class="fa fa-angle-right"></i></a></li>
										</ul><!-- /.list-inline -->
									</div><!-- /.pagination-container -->		
								</div><!-- /.col -->
							</div><!-- /.row -->
                        </div>
						<div class="search-result-container">
							<div id="myTabContent" class="tab-content">
								<div class="tab-pane active" id="grid-container">
									<div class="category-product  inner-top-vs">
										<div class="row">	
											<!-- =========================== INICIO LISTADO DE PRODUCTOS =============================== -->
											@if ($productos->count())
                                            	@foreach ($productos as $producto)
											<div class="col-sm-6 col-md-4 wow fadeInUp">
												<div class="products">
				
													<div class="product">		
														<div class="product-image">
															<div class="image">
																<a href="detail.html"><img  src="assets/images/blank.gif" data-echo="assets/images/products/c1.jpg" alt=""></a>
															</div><!-- /.image -->			

															<div class="tag new"><span>20%</span></div>                        		   
														</div><!-- /.product-image -->


														<div class="product-info text-left">
															<h3 class="name"><a href="detail.html">{{ $producto->nombre }}</a></h3>
															<div class="rating rateit-small"></div>
															<div class="description"></div>

															<div class="product-price">	
																<span class="price">
																	{{ $producto->precio }}			
																</span>
																<span class="price-before-discount">$ 800</span>

															</div><!-- /.product-price -->

														</div><!-- /.product-info -->
														<div class="cart clearfix animate-effect">
															<div class="action">
																<ul class="list-unstyled">
																	<li class="add-cart-button btn-group">
																		<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
																			<i class="fa fa-shopping-cart"></i>													
																		</button>
																		<button class="btn btn-primary" type="button">A&ntilde;adir al carro</button>

																	</li>

																	<li class="lnk wishlist">
																		<a class="add-to-cart" href="detail.html" title="Wishlist">
																			<i class="icon fa fa-heart"></i>
																		</a>
																	</li>

																	<li class="lnk">
																		<a class="add-to-cart" href="detail.html" title="Compare">
																			<i class="fa fa-retweet"></i>
																		</a>
																	</li>
																</ul>
															</div><!-- /.action -->
														</div><!-- /.cart -->
													</div><!-- /.product -->

												</div><!-- /.products -->
											</div><!-- /.item -->
										@endforeach
									@endif
										</div><!-- /.row -->
									</div><!-- /.category-product -->

								</div><!-- /.tab-pane -->
							
								<div class="tab-pane"  id="list-container">
									<div class="category-product  inner-top-vs">
									
									
										<div class="category-product-inner wow fadeInUp">
											<div class="products">				
												<div class="product-list product">
													<div class="row product-list-row">
														<div class="col col-sm-4 col-lg-4">
															<div class="product-image">
																<div class="image">
																	<img data-echo="assets/images/products/c1.jpg" src="assets/images/blank.gif" alt="">
																</div>
															</div><!-- /.product-image -->
														</div><!-- /.col -->
														<div class="col col-sm-8 col-lg-8">
															<div class="product-info">
																<h3 class="name"><a href="detail.html">Simple Products Demo Showcase</a></h3>
																<div class="rating rateit-small"></div>
																<div class="product-price">	
																	<span class="price">
																		$650.99					
																	</span>
																	<span class="price-before-discount">$ 800</span>

																</div><!-- /.product-price -->
																<div class="description m-t-10">Suspendisse posuere arcu diam, id accumsan eros pharetra ac. Nulla enim risus, facilisis bibendum gravida eget, lacinia id purus. Suspendisse posuere arcu diam, id accumsan eros pharetra ac. Nulla enim risus, facilisis bibendum gravida eget.</div>
																<div class="cart clearfix animate-effect">
																	<div class="action">
																		<ul class="list-unstyled">
																			<li class="add-cart-button btn-group">
																				<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
																					<i class="fa fa-shopping-cart"></i>													
																				</button>
																				<button class="btn btn-primary" type="button">Add to cart</button>

																			</li>

																			<li class="lnk wishlist">
																				<a class="add-to-cart" href="detail.html" title="Wishlist">
																					<i class="icon fa fa-heart"></i>
																				</a>
																			</li>

																			<li class="lnk">
																				<a class="add-to-cart" href="detail.html" title="Compare">
																					<i class="fa fa-retweet"></i>
																				</a>
																			</li>
																		</ul>
																	</div><!-- /.action -->
																</div><!-- /.cart -->

															</div><!-- /.product-info -->	
														</div><!-- /.col -->
													</div><!-- /.product-list-row -->
													<div class="tag new"><span>new</span></div>       
												</div><!-- /.product-list -->
											</div><!-- /.products -->
										</div><!-- /.category-product-inner -->


										<div class="category-product-inner wow fadeInUp">
											<div class="products">				
												<div class="product-list product">
													<div class="row product-list-row">
														<div class="col col-sm-4 col-lg-4">
															<div class="product-image">
																<div class="image">
																	<img data-echo="assets/images/products/c2.jpg" src="assets/images/blank.gif" alt="">
																</div>
															</div><!-- /.product-image -->
														</div><!-- /.col -->
														<div class="col col-sm-8 col-lg-8">
															<div class="product-info">
																<h3 class="name"><a href="detail.html">Samsung Galaxy S4</a></h3>
																<div class="rating rateit-small"></div>
																<div class="product-price">	
																	<span class="price">
																		$650.99					
																	</span>
																	<span class="price-before-discount">$ 800</span>

																</div><!-- /.product-price -->
																<div class="description m-t-10">Suspendisse posuere arcu diam, id accumsan eros pharetra ac. Nulla enim risus, facilisis bibendum gravida eget, lacinia id purus. Suspendisse posuere arcu diam, id accumsan eros pharetra ac. Nulla enim risus, facilisis bibendum gravida eget.</div>
																<div class="cart clearfix animate-effect">
																	<div class="action">
																		<ul class="list-unstyled">
																			<li class="add-cart-button btn-group">
																				<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
																					<i class="fa fa-shopping-cart"></i>													
																				</button>
																				<button class="btn btn-primary" type="button">Add to cart</button>

																			</li>

																			<li class="lnk wishlist">
																				<a class="add-to-cart" href="detail.html" title="Wishlist">
																					<i class="icon fa fa-heart"></i>
																				</a>
																			</li>

																			<li class="lnk">
																				<a class="add-to-cart" href="detail.html" title="Compare">
																					<i class="fa fa-retweet"></i>
																				</a>
																			</li>
																		</ul>
																	</div><!-- /.action -->
																</div><!-- /.cart -->

															</div><!-- /.product-info -->	
														</div><!-- /.col -->
													</div><!-- /.product-list-row -->
													<div class="tag sale"><span>sale</span></div>    
												</div><!-- /.product-list -->
											</div><!-- /.products -->
										</div><!-- /.category-product-inner -->


										<div class="category-product-inner wow fadeInUp">
											<div class="products">				
												<div class="product-list product">
													<div class="row product-list-row">
														<div class="col col-sm-4 col-lg-4">
															<div class="product-image">
																<div class="image">
																	<img data-echo="assets/images/products/c3.jpg" src="assets/images/blank.gif" alt="">
																</div>
															</div><!-- /.product-image -->
														</div><!-- /.col -->
														<div class="col col-sm-8 col-lg-8">
															<div class="product-info">
																<h3 class="name"><a href="detail.html">Samsung Galaxy S4</a></h3>
																<div class="rating rateit-small"></div>
																<div class="product-price">	
																	<span class="price">
																		$650.99					
																	</span>
																	<span class="price-before-discount">$ 800</span>

																</div><!-- /.product-price -->
																<div class="description m-t-10">Suspendisse posuere arcu diam, id accumsan eros pharetra ac. Nulla enim risus, facilisis bibendum gravida eget, lacinia id purus. Suspendisse posuere arcu diam, id accumsan eros pharetra ac. Nulla enim risus, facilisis bibendum gravida eget.</div>
																<div class="cart clearfix animate-effect">
																	<div class="action">
																		<ul class="list-unstyled">
																			<li class="add-cart-button btn-group">
																				<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
																					<i class="fa fa-shopping-cart"></i>													
																				</button>
																				<button class="btn btn-primary" type="button">Add to cart</button>

																			</li>

																			<li class="lnk wishlist">
																				<a class="add-to-cart" href="detail.html" title="Wishlist">
																					<i class="icon fa fa-heart"></i>
																				</a>
																			</li>

																			<li class="lnk">
																				<a class="add-to-cart" href="detail.html" title="Compare">
																					<i class="fa fa-retweet"></i>
																				</a>
																			</li>
																		</ul>
																	</div><!-- /.action -->
																</div><!-- /.cart -->

															</div><!-- /.product-info -->	
														</div><!-- /.col -->
													</div><!-- /.product-list-row -->
													<div class="tag hot"><span>hot</span></div></div><!-- /.product-list -->
											</div><!-- /.products -->
										</div><!-- /.category-product-inner -->


										<div class="category-product-inner wow fadeInUp">
											<div class="products">				
												<div class="product-list product">
													<div class="row product-list-row">
														<div class="col col-sm-4 col-lg-4">
															<div class="product-image">
																<div class="image">
																	<img data-echo="assets/images/products/c4.jpg" src="assets/images/blank.gif" alt="">
																</div>
															</div><!-- /.product-image -->
														</div><!-- /.col -->
														<div class="col col-sm-8 col-lg-8">
															<div class="product-info">
																<h3 class="name"><a href="detail.html">Nokia</a></h3>
																<div class="rating rateit-small"></div>
																<div class="product-price">	
																	<span class="price">
																		$650.99					
																	</span>
																	<span class="price-before-discount">$ 800</span>

																</div><!-- /.product-price -->
																<div class="description m-t-10">Suspendisse posuere arcu diam, id accumsan eros pharetra ac. Nulla enim risus, facilisis bibendum gravida eget, lacinia id purus. Suspendisse posuere arcu diam, id accumsan eros pharetra ac. Nulla enim risus, facilisis bibendum gravida eget.</div>
																<div class="cart clearfix animate-effect">
																	<div class="action">
																		<ul class="list-unstyled">
																			<li class="add-cart-button btn-group">
																				<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
																					<i class="fa fa-shopping-cart"></i>													
																				</button>
																				<button class="btn btn-primary" type="button">Add to cart</button>

																			</li>

																			<li class="lnk wishlist">
																				<a class="add-to-cart" href="detail.html" title="Wishlist">
																					<i class="icon fa fa-heart"></i>
																				</a>
																			</li>

																			<li class="lnk">
																				<a class="add-to-cart" href="detail.html" title="Compare">
																					<i class="fa fa-retweet"></i>
																				</a>
																			</li>
																		</ul>
																	</div><!-- /.action -->
																</div><!-- /.cart -->

															</div><!-- /.product-info -->	
														</div><!-- /.col -->
													</div><!-- /.product-list-row -->
													<div class="tag hot"><span>hot</span></div></div><!-- /.product-list -->
											</div><!-- /.products -->
										</div><!-- /.category-product-inner -->


										<div class="category-product-inner wow fadeInUp">
											<div class="products">				
												<div class="product-list product">
													<div class="row product-list-row">
														<div class="col col-sm-4 col-lg-4">
															<div class="product-image">
																<div class="image">
																	<img data-echo="assets/images/products/c5.jpg" src="assets/images/blank.gif" alt="">
																</div>
															</div><!-- /.product-image -->
														</div><!-- /.col -->
														<div class="col col-sm-8 col-lg-8">
															<div class="product-info">
																<h3 class="name"><a href="detail.html">Apple Iphone 5s 32GB</a></h3>
																<div class="rating rateit-small"></div>
																<div class="product-price">	
																	<span class="price">
																		$650.99					
																	</span>
																	<span class="price-before-discount">$ 800</span>

																</div><!-- /.product-price -->
																<div class="description m-t-10">Suspendisse posuere arcu diam, id accumsan eros pharetra ac. Nulla enim risus, facilisis bibendum gravida eget, lacinia id purus. Suspendisse posuere arcu diam, id accumsan eros pharetra ac. Nulla enim risus, facilisis bibendum gravida eget.</div>
																<div class="cart clearfix animate-effect">
																	<div class="action">
																		<ul class="list-unstyled">
																			<li class="add-cart-button btn-group">
																				<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
																					<i class="fa fa-shopping-cart"></i>													
																				</button>
																				<button class="btn btn-primary" type="button">Add to cart</button>

																			</li>

																			<li class="lnk wishlist">
																				<a class="add-to-cart" href="detail.html" title="Wishlist">
																					<i class="icon fa fa-heart"></i>
																				</a>
																			</li>

																			<li class="lnk">
																				<a class="add-to-cart" href="detail.html" title="Compare">
																					<i class="fa fa-retweet"></i>
																				</a>
																			</li>
																		</ul>
																	</div><!-- /.action -->
																</div><!-- /.cart -->

															</div><!-- /.product-info -->	
														</div><!-- /.col -->
													</div><!-- /.product-list-row -->
													<div class="tag sale"><span>sale</span></div>    
												</div><!-- /.product-list -->
											</div><!-- /.products -->
										</div><!-- /.category-product-inner -->


										<div class="category-product-inner wow fadeInUp">
											<div class="products">				
												<div class="product-list product">
													<div class="row product-list-row">
														<div class="col col-sm-4 col-lg-4">
															<div class="product-image">
																<div class="image">
																	<img data-echo="assets/images/products/c6.jpg" src="assets/images/blank.gif" alt="">
																</div>
															</div><!-- /.product-image -->
														</div><!-- /.col -->
														<div class="col col-sm-8 col-lg-8">
															<div class="product-info">
																<h3 class="name"><a href="detail.html">Nokia</a></h3>
																<div class="rating rateit-small"></div>
																<div class="product-price">	
																	<span class="price">
																		$650.99					
																	</span>
																	<span class="price-before-discount">$ 800</span>

																</div><!-- /.product-price -->
																<div class="description m-t-10">Suspendisse posuere arcu diam, id accumsan eros pharetra ac. Nulla enim risus, facilisis bibendum gravida eget, lacinia id purus. Suspendisse posuere arcu diam, id accumsan eros pharetra ac. Nulla enim risus, facilisis bibendum gravida eget.</div>
																<div class="cart clearfix animate-effect">
																	<div class="action">
																		<ul class="list-unstyled">
																			<li class="add-cart-button btn-group">
																				<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
																					<i class="fa fa-shopping-cart"></i>													
																				</button>
																				<button class="btn btn-primary" type="button">Add to cart</button>

																			</li>

																			<li class="lnk wishlist">
																				<a class="add-to-cart" href="detail.html" title="Wishlist">
																					<i class="icon fa fa-heart"></i>
																				</a>
																			</li>

																			<li class="lnk">
																				<a class="add-to-cart" href="detail.html" title="Compare">
																					<i class="fa fa-retweet"></i>
																				</a>
																			</li>
																		</ul>
																	</div><!-- /.action -->
																</div><!-- /.cart -->

															</div><!-- /.product-info -->	
														</div><!-- /.col -->
													</div><!-- /.product-list-row -->
													<div class="tag new"><span>new</span></div>        
												</div><!-- /.product-list -->
											</div><!-- /.products -->
										</div><!-- /.category-product-inner -->


										<div class="category-product-inner wow fadeInUp">
											<div class="products">				
												<div class="product-list product">
													<div class="row product-list-row">
														<div class="col col-sm-4 col-lg-4">
															<div class="product-image">
																<div class="image">
																	<img data-echo="assets/images/products/c5.jpg" src="assets/images/blank.gif" alt="">
																</div>
															</div><!-- /.product-image -->
														</div><!-- /.col -->
														<div class="col col-sm-8 col-lg-8">
															<div class="product-info">
																<h3 class="name"><a href="detail.html">Sony Ericson Vaga</a></h3>
																<div class="rating rateit-small"></div>
																<div class="product-price">	
																	<span class="price">
																		$650.99					
																	</span>
																	<span class="price-before-discount">$ 800</span>

																</div><!-- /.product-price -->
																<div class="description m-t-10">Suspendisse posuere arcu diam, id accumsan eros pharetra ac. Nulla enim risus, facilisis bibendum gravida eget, lacinia id purus. Suspendisse posuere arcu diam, id accumsan eros pharetra ac. Nulla enim risus, facilisis bibendum gravida eget.</div>
																<div class="cart clearfix animate-effect">
																	<div class="action">
																		<ul class="list-unstyled">
																			<li class="add-cart-button btn-group">
																				<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
																					<i class="fa fa-shopping-cart"></i>													
																				</button>
																				<button class="btn btn-primary" type="button">Add to cart</button>

																			</li>

																			<li class="lnk wishlist">
																				<a class="add-to-cart" href="detail.html" title="Wishlist">
																					<i class="icon fa fa-heart"></i>
																				</a>
																			</li>

																			<li class="lnk">
																				<a class="add-to-cart" href="detail.html" title="Compare">
																					<i class="fa fa-retweet"></i>
																				</a>
																			</li>
																		</ul>
																	</div><!-- /.action -->
																</div><!-- /.cart -->

															</div><!-- /.product-info -->	
														</div><!-- /.col -->
													</div><!-- /.product-list-row -->
													<div class="tag new"><span>new</span></div>       
												</div><!-- /.product-list -->
											</div><!-- /.products -->
										</div><!-- /.category-product-inner -->


										<div class="category-product-inner wow fadeInUp">
											<div class="products">				
												<div class="product-list product">
													<div class="row product-list-row">
														<div class="col col-sm-4 col-lg-4">
															<div class="product-image">
																<div class="image">
																	<img data-echo="assets/images/products/c3.jpg" src="assets/images/blank.gif" alt="">
																</div>
															</div><!-- /.product-image -->
														</div><!-- /.col -->
														<div class="col col-sm-8 col-lg-8">
															<div class="product-info">
																<h3 class="name"><a href="detail.html">Samsung Galaxy S4</a></h3>
																<div class="rating rateit-small"></div>
																<div class="product-price">	
																	<span class="price">
																		$650.99					
																	</span>
																	<span class="price-before-discount">$ 800</span>

																</div><!-- /.product-price -->
																<div class="description m-t-10">Suspendisse posuere arcu diam, id accumsan eros pharetra ac. Nulla enim risus, facilisis bibendum gravida eget, lacinia id purus. Suspendisse posuere arcu diam, id accumsan eros pharetra ac. Nulla enim risus, facilisis bibendum gravida eget.</div>
																<div class="cart clearfix animate-effect">
																	<div class="action">
																		<ul class="list-unstyled">
																			<li class="add-cart-button btn-group">
																				<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
																					<i class="fa fa-shopping-cart"></i>													
																				</button>
																				<button class="btn btn-primary" type="button">Add to cart</button>

																			</li>

																			<li class="lnk wishlist">
																				<a class="add-to-cart" href="detail.html" title="Wishlist">
																					<i class="icon fa fa-heart"></i>
																				</a>
																			</li>

																			<li class="lnk">
																				<a class="add-to-cart" href="detail.html" title="Compare">
																					<i class="fa fa-retweet"></i>
																				</a>
																			</li>
																		</ul>
																	</div><!-- /.action -->
																</div><!-- /.cart -->

															</div><!-- /.product-info -->	
														</div><!-- /.col -->
													</div><!-- /.product-list-row -->
													<div class="tag sale"><span>sale</span></div>   
												</div><!-- /.product-list -->
											</div><!-- /.products -->
										</div><!-- /.category-product-inner -->


										<div class="category-product-inner wow fadeInUp">
											<div class="products">				
												<div class="product-list product">
													<div class="row product-list-row">
														<div class="col col-sm-4 col-lg-4">
															<div class="product-image">
																<div class="image">
																	<img data-echo="assets/images/products/c1.jpg" src="assets/images/blank.gif" alt="">
																</div>
															</div><!-- /.product-image -->
														</div><!-- /.col -->
														<div class="col col-sm-8 col-lg-8">
															<div class="product-info">
																<h3 class="name"><a href="detail.html">Samsung Galaxy S4</a></h3>
																<div class="rating rateit-small"></div>
																<div class="product-price">	
																	<span class="price">
																		$650.99					
																	</span>
																	<span class="price-before-discount">$ 800</span>

																</div><!-- /.product-price -->
																<div class="description m-t-10">Suspendisse posuere arcu diam, id accumsan eros pharetra ac. Nulla enim risus, facilisis bibendum gravida eget, lacinia id purus. Suspendisse posuere arcu diam, id accumsan eros pharetra ac. Nulla enim risus, facilisis bibendum gravida eget.</div>
																<div class="cart clearfix animate-effect">
																	<div class="action">
																		<ul class="list-unstyled">
																			<li class="add-cart-button btn-group">
																				<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
																					<i class="fa fa-shopping-cart"></i>													
																				</button>
																				<button class="btn btn-primary" type="button">Add to cart</button>

																			</li>

																			<li class="lnk wishlist">
																				<a class="add-to-cart" href="detail.html" title="Wishlist">
																					<i class="icon fa fa-heart"></i>
																				</a>
																			</li>

																			<li class="lnk">
																				<a class="add-to-cart" href="detail.html" title="Compare">
																					<i class="fa fa-retweet"></i>
																				</a>
																			</li>
																		</ul>
																	</div><!-- /.action -->
																</div><!-- /.cart -->

															</div><!-- /.product-info -->	
														</div><!-- /.col -->
													</div><!-- /.product-list-row -->
													<div class="tag hot"><span>hot</span></div></div><!-- /.product-list -->
											</div><!-- /.products -->
										</div><!-- /.category-product-inner -->


										<div class="category-product-inner wow fadeInUp">
											<div class="products">				
												<div class="product-list product">
													<div class="row product-list-row">
														<div class="col col-sm-4 col-lg-4">
															<div class="product-image">
																<div class="image">
																	<img data-echo="assets/images/products/c2.jpg" src="assets/images/blank.gif" alt="">
																</div>
															</div><!-- /.product-image -->
														</div><!-- /.col -->
														<div class="col col-sm-8 col-lg-8">
															<div class="product-info">
																<h3 class="name"><a href="detail.html">Sony Ericson Vaga</a></h3>
																<div class="rating rateit-small"></div>
																<div class="product-price">	
																	<span class="price">
																		$650.99					
																	</span>
																	<span class="price-before-discount">$ 800</span>

																</div><!-- /.product-price -->
																<div class="description m-t-10">Suspendisse posuere arcu diam, id accumsan eros pharetra ac. Nulla enim risus, facilisis bibendum gravida eget, lacinia id purus. Suspendisse posuere arcu diam, id accumsan eros pharetra ac. Nulla enim risus, facilisis bibendum gravida eget.</div>
																<div class="cart clearfix animate-effect">
																	<div class="action">
																		<ul class="list-unstyled">
																			<li class="add-cart-button btn-group">
																				<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
																					<i class="fa fa-shopping-cart"></i>													
																				</button>
																				<button class="btn btn-primary" type="button">Add to cart</button>

																			</li>

																			<li class="lnk wishlist">
																				<a class="add-to-cart" href="detail.html" title="Wishlist">
																					<i class="icon fa fa-heart"></i>
																				</a>
																			</li>

																			<li class="lnk">
																				<a class="add-to-cart" href="detail.html" title="Compare">
																					<i class="fa fa-retweet"></i>
																				</a>
																			</li>
																		</ul>
																	</div><!-- /.action -->
																</div><!-- /.cart -->

															</div><!-- /.product-info -->	
														</div><!-- /.col -->
													</div><!-- /.product-list-row -->
													<div class="tag new"><span>new</span></div>        
												</div><!-- /.product-list -->
											</div><!-- /.products -->
										</div><!-- /.category-product-inner -->


										<div class="category-product-inner wow fadeInUp">
											<div class="products">				
												<div class="product-list product">
													<div class="row product-list-row">
														<div class="col col-sm-4 col-lg-4">
															<div class="product-image">
																<div class="image">
																	<img data-echo="assets/images/products/c6.jpg" src="assets/images/blank.gif" alt="">
																</div>
															</div><!-- /.product-image -->
														</div><!-- /.col -->
														<div class="col col-sm-8 col-lg-8">
															<div class="product-info">
																<h3 class="name"><a href="detail.html">Samsung Galaxy S4</a></h3>
																<div class="rating rateit-small"></div>
																<div class="product-price">	
																	<span class="price">
																		$650.99					
																	</span>
																	<span class="price-before-discount">$ 800</span>

																</div><!-- /.product-price -->
																<div class="description m-t-10">Suspendisse posuere arcu diam, id accumsan eros pharetra ac. Nulla enim risus, facilisis bibendum gravida eget, lacinia id purus. Suspendisse posuere arcu diam, id accumsan eros pharetra ac. Nulla enim risus, facilisis bibendum gravida eget.</div>
																<div class="cart clearfix animate-effect">
																	<div class="action">
																		<ul class="list-unstyled">
																			<li class="add-cart-button btn-group">
																				<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
																					<i class="fa fa-shopping-cart"></i>													
																				</button>
																				<button class="btn btn-primary" type="button">Add to cart</button>

																			</li>

																			<li class="lnk wishlist">
																				<a class="add-to-cart" href="detail.html" title="Wishlist">
																					<i class="icon fa fa-heart"></i>
																				</a>
																			</li>

																			<li class="lnk">
																				<a class="add-to-cart" href="detail.html" title="Compare">
																					<i class="fa fa-retweet"></i>
																				</a>
																			</li>
																		</ul>
																	</div><!-- /.action -->
																</div><!-- /.cart -->

															</div><!-- /.product-info -->	
														</div><!-- /.col -->
													</div><!-- /.product-list-row -->
													<div class="tag sale"><span>sale</span></div>    
												</div><!-- /.product-list -->
											</div><!-- /.products -->
										</div><!-- /.category-product-inner -->


										<div class="category-product-inner wow fadeInUp">
											<div class="products">				
												<div class="product-list product">
													<div class="row product-list-row">
														<div class="col col-sm-4 col-lg-4">
															<div class="product-image">
																<div class="image">
																	<img data-echo="assets/images/products/c3.jpg" src="assets/images/blank.gif" alt="">
																</div>
															</div><!-- /.product-image -->
														</div><!-- /.col -->
														<div class="col col-sm-8 col-lg-8">
															<div class="product-info">
																<h3 class="name"><a href="detail.html">Samsung Galaxy S4</a></h3>
																<div class="rating rateit-small"></div>
																<div class="product-price">	
																	<span class="price">
																		$650.99					
																	</span>
																	<span class="price-before-discount">$ 800</span>

																</div><!-- /.product-price -->
																<div class="description m-t-10">Suspendisse posuere arcu diam, id accumsan eros pharetra ac. Nulla enim risus, facilisis bibendum gravida eget, lacinia id purus. Suspendisse posuere arcu diam, id accumsan eros pharetra ac. Nulla enim risus, facilisis bibendum gravida eget.</div>
																<div class="cart clearfix animate-effect">
																	<div class="action">
																		<ul class="list-unstyled">
																			<li class="add-cart-button btn-group">
																				<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
																					<i class="fa fa-shopping-cart"></i>													
																				</button>
																				<button class="btn btn-primary" type="button">Add to cart</button>

																			</li>

																			<li class="lnk wishlist">
																				<a class="add-to-cart" href="detail.html" title="Wishlist">
																					<i class="icon fa fa-heart"></i>
																				</a>
																			</li>

																			<li class="lnk">
																				<a class="add-to-cart" href="detail.html" title="Compare">
																					<i class="fa fa-retweet"></i>
																				</a>
																			</li>
																		</ul>
																	</div><!-- /.action -->
																</div><!-- /.cart -->

															</div><!-- /.product-info -->	
														</div><!-- /.col -->
													</div><!-- /.product-list-row -->
												<div class="tag hot"><span>hot</span></div></div><!-- /.product-list -->
											</div><!-- /.products -->
										</div><!-- /.category-product-inner -->


									</div><!-- /.category-product -->
								</div><!-- /.tab-pane #list-container -->
							</div><!-- /.tab-content -->
							<div class="clearfix filters-container">

								<div class="text-right">
									<div class="pagination-container">
										<ul class="list-inline list-unstyled">
											<li class="prev"><a href="#"><i class="fa fa-angle-left"></i></a></li>
											<li><a href="#">1</a></li>	
											<li class="active"><a href="#">2</a></li>	
											<li><a href="#">3</a></li>	
											<li><a href="#">4</a></li>	
											<li class="next"><a href="#"><i class="fa fa-angle-right"></i></a></li>
										</ul><!-- /.list-inline -->
									</div><!-- /.pagination-container -->						    
								</div><!-- /.text-right -->

							</div><!-- /.filters-container -->

						</div><!-- /.search-result-container -->

					</div><!-- /.col -->
				</div><!-- /.row -->
		<!-- ============================================== BRANDS CAROUSEL ============================================== -->
                <div id="brands-carousel" class="logo-slider wow fadeInUp">

                    <h3 class="section-title">Our Brands</h3>
                    <div class="logo-slider-inner"> 
                        <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
                            <div class="item m-t-15">
                                <a href="#" class="image">
                                    <img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt="">
                                </a>    
                            </div><!--/.item-->

                            <div class="item m-t-10">
                                <a href="#" class="image">
                                    <img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt="">
                                </a>    
                            </div><!--/.item-->

                            <div class="item">
                                <a href="#" class="image">
                                    <img data-echo="assets/images/brands/brand3.png" src="assets/images/blank.gif" alt="">
                                </a>    
                            </div><!--/.item-->

                            <div class="item">
                                <a href="#" class="image">
                                    <img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt="">
                                </a>    
                            </div><!--/.item-->

                            <div class="item">
                                <a href="#" class="image">
                                    <img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt="">
                                </a>    
                            </div><!--/.item-->

                            <div class="item">
                                <a href="#" class="image">
                                    <img data-echo="assets/images/brands/brand6.png" src="assets/images/blank.gif" alt="">
                                </a>    
                            </div><!--/.item-->

                            <div class="item">
                                <a href="#" class="image">
                                    <img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt="">
                                </a>    
                            </div><!--/.item-->

                            <div class="item">
                                <a href="#" class="image">
                                    <img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt="">
                                </a>    
                            </div><!--/.item-->

                            <div class="item">
                                <a href="#" class="image">
                                    <img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt="">
                                </a>    
                            </div><!--/.item-->

                            <div class="item">
                                <a href="#" class="image">
                                    <img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt="">
                                </a>    
                            </div><!--/.item-->
                        </div><!-- /.owl-carousel #logo-slider -->
                    </div><!-- /.logo-slider-inner -->

                </div><!-- /.logo-slider -->
       <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
           </div><!-- /.container -->
        </div><!-- /#top-banner-and-menu -->

@stop