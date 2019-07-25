@extends('layout_home.main')
@section('title','product')
@section('content')
<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Sản phẩm</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="index.html">Home</a> / <span>Sản phẩm</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					{{-- menu --}}
					<div class="col-sm-3">
						<ul class="aside-menu">
							@foreach($cates as $all_cate)
							<li><a href="{{route('danhmuc',$all_cate->slug)}}">{{$all_cate->name}}</a></li>
							@endforeach
						</ul>
					</div>

					{{-- product --}}

					@if(!empty($all))

					<div class="col-sm-9">
						<div class="beta-products-list">
							<h4>New Products</h4>
							<div class="beta-products-details">
								<p class="pull-left">{{count($all)}} styles found</p>
								<div class="clearfix"></div>
							</div>

							<div class="row">
								@foreach($all as $new)
								<div class="col-sm-3" style="margin-bottom: 5px">
									<div class="single-item">
										<div class="single-item-header">
											<a href="product.html"><img src="{{asset($new->image)}}" alt="" height="150"></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$new->name}}</p>
											<p class="single-item-price">
												<span>$34.55</span>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="{{route('detail',$new->slug)}}">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								@endforeach
								
							</div>
	
						</div> <!-- .beta-products-list -->

						<div class="space50">&nbsp;</div>

						<div class="beta-products-list">
							<h4>Top Products</h4>
							<div class="beta-products-details">
								<p class="pull-left">438 styles found</p>
								<div class="clearfix"></div>
							</div>
							<div class="row">
								@foreach($top as $tops)
								<div class="col-sm-3" style="margin-bottom: 5px">
									<div class="single-item">
										<div class="single-item-header">
											<a href="product.html"><img src="{{asset($tops->image)}}" alt="" height="150"></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">Sample Woman tops</p>
											<p class="single-item-price">
												<span>{{$tops->unit_price}}</span>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="{{route('detail',$tops->slug)}}">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								@endforeach
								<div>{{$top->links()}}</div>
							</div>

							<div class="space40">&nbsp;</div>
							
						</div> <!-- .beta-products-list -->
					</div>
					@else
					<div class="col-sm-9">
						<div class="beta-products-list">
							<h4>{{$cate->name}}</h4>
							<div class="beta-products-details">
								<p class="pull-left">{{count($products)}} styles found</p>
								<div class="clearfix"></div>
							</div>
							<div class="row">
								@foreach($products as $top)
								<div class="col-sm-3" style="margin-bottom: 5px">
									<div class="single-item">
										<div class="single-item-header">
											<a href="product.html"><img src="{{asset($top->image)}}" alt="" height="150"></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">Sample Woman Top</p>
											<p class="single-item-price">
												<span>{{$top->unit_price}}</span>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="{{route('detail',$top->slug)}}">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>

								@endforeach
								
							</div>
							<br>
							<div>{{$products->links()}}</div>
							<div class="space40">&nbsp;</div>
							
						</div> <!-- .beta-products-list -->
					</div>
					@endif	
					
				</div> <!-- end section with sidebar and main content -->


			</div> <!-- .main-content -->
		</div> <!-- #content -->
	</div>
@endsection