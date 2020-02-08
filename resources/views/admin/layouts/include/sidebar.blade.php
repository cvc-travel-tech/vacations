		<!-- Main sidebar -->
			<div class="sidebar sidebar-main sidebar-fixed">
				<div class="sidebar-content">

					<!-- User menu -->
					<div class="sidebar-user">
						<div class="category-content">
							<div class="media">
                            <!--<a href="{{ url('/setting') }}" class="media-left"><img src="{{setting('admin', 'logo' , 'img')}}" class="img-circle img-sm" alt=""></a>-->
								<div class="media-body">
									<span class="media-heading text-semibold">{{setting('admin' , 'sitename')}}</span>
									<div class="text-size-mini text-muted">
										<i class="icon-pin text-size-small"></i> &nbsp;Istanbul
									</div>
								</div>

								<div class="media-right media-middle">
									<ul class="icons-list">
										<li>
											<a href="{{ url('backend/setting') }}"><i class="icon-cog3"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- /user menu -->


					<!-- Main navigation -->
					<div class="sidebar-category sidebar-category-visible">
						<div class="category-content no-padding">
							<ul class="navigation navigation-main navigation-accordion">

								<!-- Main -->
								<li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
								<li><a href="{{route('admin.home')}}"><i class="icon-home4"></i> <span>Home</span></a></li>
																<li><a href="{{route('admin.company')}}"><i class="icon-home4"></i> <span>company</span></a></li>

								<li>
									<!--<a href="#"><i class="icon-stack"></i> <span>Destination</span></a>-->
									<!--<span class="glyphicon glyphicon-plane" aria-hidden="true"></span>-->
									<a href="#"><i class="glyphicon glyphicon-plane"></i><span>Destination</span></a>
									<ul>
										<li class="{{ active('destination') }}" ><a href="{{route('admin.destination.index')}}"><i class="icon-stack"></i> All</a></li>
                                        <li  class="{{ active('destination' , 'create') }}"><a href="{{route('admin.destination.create')}}"><i class="icon-stack"></i> Create</a></li>

									</ul>
                                </li>
                               

                                    <li>
									<a href="#"><i class="glyphicon glyphicon-home
"></i> <span>Hotel</span></a>
									<ul>
										<li class="{{ active('hotel') }}" ><a href="{{route('admin.hotel.index')}}"><i class="icon-stack"></i> All</a></li>
                                        <li  class="{{ active('hotel' , 'create') }}"><a href="{{route('admin.hotel.create')}}"><i class="icon-stack"></i> Create</a></li>
									</ul>
								</li>
								<!-- /main -->

								<li>
									<a href="#"><i class="glyphicon glyphicon-tags"></i> <span>Blog</span></a>
									<ul>
										<li class="{{ active('Blog') }}" ><a href="{{route('admin.Blog.index')}}"><i class="icon-stack"></i> All</a></li>
                                        <li  class="{{ active('Blog' , 'create') }}"><a href="{{route('admin.Blog.create')}}"><i class="icon-stack"></i> Create</a></li>
									</ul>
								</li>

								<li>
								    
								    
									<a href="{{route('admin.booking.index')}}"><i class="glyphicon glyphicon-book"></i> <span>Boooking</span></a>
									<!--<ul>-->
										<!--<li class="{{ active('booking') }}" ><a href="{{route('admin.booking.index')}}"><i class="icon-stack"></i> All</a></li>-->
									<!--</ul>-->
								</li>


								<li>
									<a href="#"><i class="glyphicon glyphicon-pushpin
"></i> <span>Packages</span></a>
									<ul>
										<li class="{{ active('package') }}" ><a href="{{route('admin.package.index')}}"><i class="icon-stack"></i> All</a></li>
                                        <li  class="{{ active('package' , 'create') }}"><a href="{{route('admin.package.create')}}"><i class="icon-stack"></i> Create</a></li>
									</ul>
								</li>


								<li>
									<a href="{{route('admin.setting.index')}}"><i class="glyphicon glyphicon-cog
"></i> <span>Settings</span></a>
								
								</li>




								
							</ul>
						</div>
					</div>
					<!-- /main navigation -->

				</div>
			</div>
			<!-- /main sidebar -->
