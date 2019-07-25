<div class="header-bottom" style="background-color: #0277b8;">
			<div class="container">
				<a class="visible-xs beta-menu-toggle pull-right" href="#"><span class='beta-menu-toggle-text'>Menu</span> <i class="fa fa-bars"></i></a>
				<div class="visible-xs clearfix"></div>
				<nav class="main-menu">
					<ul class="l-inline ov">
						<li><a href="{{route('home')}}">Trang chủ</a></li>
						<li><a href="{{route('danhmuc')}}">Sản phẩm</a>
							
							<ul class="sub-menu">
								@foreach($menus as $all)
								<li><a href="{{route('danhmuc',$all->slug)}}">{{$all->name}}</a></li>
								@endforeach
							</ul>
							
						</li>
						<li><a href="about.html">Giới thiệu</a></li>
						<li><a href="contacts.html">Liên hệ</a></li>
					</ul>
					<div class="clearfix"></div>
				</nav>
			</div> <!-- .container -->
		</div>