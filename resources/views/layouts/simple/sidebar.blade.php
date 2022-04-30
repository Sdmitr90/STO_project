<div class="sidebar-wrapper">
	<div>
		<div class="logo-wrapper">
			<a href="{{route('index')}}"><img class="img-fluid for-light" src="{{asset('assets/images/logo/logo.png')}}" alt=""><img class="img-fluid for-dark" src="{{asset('assets/images/logo/logo_dark.png')}}" alt=""></a>
			<div class="back-btn"><i class="fa fa-angle-left"></i></div>
			<div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
		</div>
		<div class="logo-icon-wrapper"><a href="{{route('index')}}"><img class="img-fluid" src="{{asset('assets/images/logo/logo-icon.png')}}" alt=""></a></div>
		<nav class="sidebar-main">
			<div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
			<div id="sidebar-menu">
				<ul class="sidebar-links" id="simple-bar">
					<li class="back-btn">
						<a href="{{route('index')}}"><img class="img-fluid" src="{{asset('assets/images/logo/logo-icon.png')}}" alt=""></a>
						<div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
					</li>
					<li class="sidebar-main-title">
						<div>
							<h6 class="lan-1">{{ __('Админ.раздел') }}  </h6>
							<p class="lan-2">{{ __('Менеджеры, клиенты') }}</p>
						</div>
					</li>
					<li class="sidebar-list">
						<a class="sidebar-link sidebar-title {{request()->route()->getPrefix() == '/manager' ? 'active' : '' }}"
                        <a href="{{ route('admin.tech_service.index') }}">Категории работ</a></span>
							<div class="according-menu"><i
										class="fa fa-angle-{{request()->route()->getPrefix() == '/manager' ? 'down' : 'right' }}"></i>
							</div>
						</a>


					</li>
					<li class="sidebar-list">
						<a class="sidebar-link sidebar-title {{request()->route()->getPrefix() == '/leads' ? 'active' : '' }}"
                         href="{{ route('admin.services.index') }}">Виды работ</a></span>
							<div class="according-menu"><i
										class="fa fa-angle-{{request()->route()->getPrefix() == '/leads' ? 'down' : 'right' }}"></i>
							</div>
						</a>

						<ul class="sidebar-submenu"
							style="display: {{ request()->route()->getPrefix() == '/leads' ? 'block;' : 'none;' }}">

							<li><a href="{{--route('leads')--}}"
								   class="lan-4 {{ Route::currentRouteName()=='leads' ? 'active' : '' }}">{{ __('Лиды')}}</a>
							</li>
							<li><a href="{{--route('vk.leads')--}}"
								   class="lan-4 {{ Route::currentRouteName()=='vk.leads' ? 'active' : '' }}">{{ __('Vk форма')}}</a>
							</li>
							{{--							@endcan--}}
						</ul>
					</li>


				</ul>
			</div>
			<div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
		</nav>
	</div>
</div>
