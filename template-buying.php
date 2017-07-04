<?php /* Template Name: Buying Template */ ?>
<?php get_header(); ?>

<section class="sec-top buying" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/tmp/buying-top-bg.jpg')">
	<div class="container">
		<div class="tbl">
			<div class="tbl-cell">
				<h1 class="page-title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.1s">Some conversion friendly descriptive headline goes here…</h1>
			</div>
		</div>
	</div>
</section>

<div class="content-wrap content-wrap-buying">

	<section class="sec-featured filters">
		<div class="container">
			<div class="sec-featured-search">
				<input id="sec-featured-search-input" class="sec-featured-search-input" type="text" name="sec_featured_search" placeholder="Where Are You Looking To Buy?">
				<button id="btn-close-search" type="button" class="btn btn-close-search">Close Search</button>
			</div>
			<div id="sec-featured-search-form-wrap" class="sec-featured-search-form-wrap">
				<div class="sec-featured-search-form">
					<form>
						<div class="row">
							<div class="col-one-fifth">
								<div class="form-group select-form-group">
									<select class="formstyler">
										<option>Home Type</option>
										<option>Answer 1</option>
										<option>Answer 2</option>
										<option>Answer 3</option>
										<option>Answer 4</option>
									</select>
								</div>
							</div>
							<div class="col-one-fifth">
								<div class="form-group select-form-group">
									<select class="formstyler">
										<option>All Beds&nbsp;</option>
										<option>Answer 1</option>
										<option>Answer 2</option>
										<option>Answer 3</option>
										<option>Answer 4</option>
									</select>
								</div>
							</div>
							<div class="col-one-fifth">
								<div class="form-group select-form-group">
									<select class="formstyler">
										<option>Any Price&nbsp;</option>
										<option>Answer 1</option>
										<option>Answer 2</option>
										<option>Answer 3</option>
										<option>Answer 4</option>
									</select>
								</div>
							</div>
							<div class="col-one-fifth">
								<div class="form-group select-form-group">
									<select class="formstyler">
										<option>Ownership Type</option>
										<option>Answer 1</option>
										<option>Answer 2</option>
										<option>Answer 3</option>
										<option>Answer 4</option>
									</select>
								</div>
							</div>
							<div class="col-one-fifth">
								<div class="form-group select-form-group">
									<select class="formstyler">
										<option>Construction Status</option>
										<option>Answer 1</option>
										<option>Answer 2</option>
										<option>Answer 3</option>
										<option>Answer 4</option>
									</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<p class="bl-title">Size</p>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Min">
								</div>
							</div>
							<div class="col-md-3">
								<p class="bl-title mobile-hide">&nbsp;</p>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Max">
								</div>
							</div>
							<div class="col-md-3 offset">
								<p class="bl-title">Bathrooms</p>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Any">
								</div>
							</div>
						</div>
						<div class="bottom-wrap">
							<button type="reset" class="btn btn-reset">Reset</button>
							<button type="submit" class="btn btn-submit">Search</button>
						</div>
					</form>
				</div>
			</div>
			<div class="sec-filters">
				<!--<ul id="filters">-->
				<!--<li class="filter" data-filter=".featured">Featured Listings</li>-->
				<!--<li class="filter" data-filter=".exclusive">Exclusive Listings</li>-->
				<!--<li class="filter" data-filter=".new">New Homes</li>-->
				<!--</ul>-->
				<ul id="filters">
					<li class="filter active" data-filter="featured">Featured Listings</li>
					<li class="filter" data-filter="exclusive">Exclusive Listings</li>
					<li class="filter" data-filter="new">New Homes</li>
				</ul>
			</div>
			<div id="listings_list" class="row">
				<div class="listing col-md-4 bl exclusive" data-cat="exclusive">
					<div class="bl-inner">
						<div class="bl-img">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tmp/sec-featured-img-1.jpg" alt="">
						</div>
						<div class="bl-price">$1,588,000</div>
						<div class="bl-title">122 Hudson Estate Suite 918</div>
						<div class="bl-loc">Toronto, ON</div>
						<div class="bl-icons">
							<div class="bed">
								<div class="icon"></div><div class="txt">3 + 2</div>
							</div>
							<div class="bath">
								<div class="icon"></div><div class="txt">3</div>
							</div>
						</div>
						<div class="bl-hover">
							<a href="#" class="btn btn-learn-more">Learn More</a>
						</div>
					</div>
				</div>
				<div class="listing col-md-4 bl new" data-cat="new">
					<div class="bl-inner">
						<div class="bl-img">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tmp/sec-featured-img-1.jpg" alt="">
						</div>
						<div class="bl-price">$1,588,000</div>
						<div class="bl-title">122 Hudson Estate Suite 918</div>
						<div class="bl-loc">Toronto, ON</div>
						<div class="bl-icons">
							<div class="bed">
								<div class="icon"></div><div class="txt">3 + 2</div>
							</div>
							<div class="bath">
								<div class="icon"></div><div class="txt">3</div>
							</div>
						</div>
						<div class="bl-hover">
							<a href="#" class="btn btn-learn-more">Learn More</a>
						</div>
					</div>
				</div>
				<div class="listing col-md-4 bl featured" data-cat="featured">
					<div class="bl-inner">
						<div class="bl-img">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tmp/sec-featured-img-1.jpg" alt="">
						</div>
						<div class="bl-price">$1,588,000</div>
						<div class="bl-title">122 Hudson Estate Suite 918</div>
						<div class="bl-loc">Toronto, ON</div>
						<div class="bl-icons">
							<div class="bed">
								<div class="icon"></div><div class="txt">3 + 2</div>
							</div>
							<div class="bath">
								<div class="icon"></div><div class="txt">3</div>
							</div>
						</div>
						<div class="bl-hover">
							<a href="#" class="btn btn-learn-more">Learn More</a>
						</div>
					</div>
				</div>
				<div class="listing col-md-4 bl exclusive" data-cat="exclusive">
					<div class="bl-inner">
						<div class="bl-img">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tmp/sec-featured-img-1.jpg" alt="">
						</div>
						<div class="bl-price">$1,588,000</div>
						<div class="bl-title">122 Hudson Estate Suite 918</div>
						<div class="bl-loc">Toronto, ON</div>
						<div class="bl-icons">
							<div class="bed">
								<div class="icon"></div><div class="txt">3 + 2</div>
							</div>
							<div class="bath">
								<div class="icon"></div><div class="txt">3</div>
							</div>
						</div>
						<div class="bl-hover">
							<a href="#" class="btn btn-learn-more">Learn More</a>
						</div>
					</div>
				</div>
				<div class="listing col-md-4 bl featured" data-cat="featured">
					<div class="bl-inner">
						<div class="bl-img">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tmp/sec-featured-img-1.jpg" alt="">
						</div>
						<div class="bl-price">$1,588,000</div>
						<div class="bl-title">122 Hudson Estate Suite 918</div>
						<div class="bl-loc">Toronto, ON</div>
						<div class="bl-icons">
							<div class="bed">
								<div class="icon"></div><div class="txt">3 + 2</div>
							</div>
							<div class="bath">
								<div class="icon"></div><div class="txt">3</div>
							</div>
						</div>
						<div class="bl-hover">
							<a href="#" class="btn btn-learn-more">Learn More</a>
						</div>
					</div>
				</div>
				<div class="listing col-md-4 bl featured" data-cat="featured">
					<div class="bl-inner">
						<div class="bl-img">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tmp/sec-featured-img-1.jpg" alt="">
						</div>
						<div class="bl-price">$1,588,000</div>
						<div class="bl-title">122 Hudson Estate Suite 918</div>
						<div class="bl-loc">Toronto, ON</div>
						<div class="bl-icons">
							<div class="bed">
								<div class="icon"></div><div class="txt">3 + 2</div>
							</div>
							<div class="bath">
								<div class="icon"></div><div class="txt">3</div>
							</div>
						</div>
						<div class="bl-hover">
							<a href="#" class="btn btn-learn-more">Learn More</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="sec-featured filters fix-3">
		<div class="container">
			<p class="text-center wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.1s">
				<button type="button" class="btn btn-view-all filter" data-filter="all">View All</button>
			</p>
		</div>
	</section>

</div>

<?php get_footer(); ?>
