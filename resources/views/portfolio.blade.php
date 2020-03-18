@extends('layouts.app')

@section('content')

<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li class="active">Portfolio</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h4 class="heading">Trabajos realizados</h4>

				<div id="filters-container" class="cbp-l-filters-button">
					<div data-filter="*" class="cbp-filter-item-active cbp-filter-item">All
						<div class="cbp-filter-counter"></div>
					</div>
					<div data-filter=".identity" class="cbp-filter-item">Identidad
						<div class="cbp-filter-counter"></div>
					</div>
					<div data-filter=".web-design" class="cbp-filter-item">Diseño
						<div class="cbp-filter-counter"></div>
					</div>
					<div data-filter=".graphic" class="cbp-filter-item">Grafica
						<div class="cbp-filter-counter"></div>
					</div>
					<div data-filter=".logo" class="cbp-filter-item">Logo
						<div class="cbp-filter-counter"></div>
					</div>
				</div>


				<div id="grid-container" class="cbp-l-grid-projects">
					<ul>
						<li class="cbp-item graphic">
							<div class="cbp-caption">
								<div class="cbp-caption-defaultWrap">
									<img src="{{asset('img/works/1.jpg')}}" alt="" />
								</div>
								<div class="cbp-caption-activeWrap">
									<div class="cbp-l-caption-alignCenter">
										<div class="cbp-l-caption-body">
											<a href="{{asset('img/works/1big.jpg')}}" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Dashboard<br>by Paul Flavius Nechita">ampliar</a>
										</div>
									</div>
								</div>
							</div>
							<div class="cbp-l-grid-projects-title">Dashboard</div>
							<div class="cbp-l-grid-projects-desc">Web Design / Graphic</div>
						</li>
						<li class="cbp-item web-design logo">
							<div class="cbp-caption">
								<div class="cbp-caption-defaultWrap">
									<img src="{{asset('img/works/2.jpg')}}" alt="" />
								</div>
								<div class="cbp-caption-activeWrap">
									<div class="cbp-l-caption-alignCenter">
										<div class="cbp-l-caption-body">
											<a href="{{asset('img/works/2big.jpg')}}" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="World Clock Widget<br>by Paul Flavius Nechita">ampliar</a>
										</div>
									</div>
								</div>
							</div>
							<div class="cbp-l-grid-projects-title">World Clock Widget</div>
							<div class="cbp-l-grid-projects-desc">Logo / Web Design</div>
						</li>
						<li class="cbp-item graphic logo">
							<div class="cbp-caption">
								<div class="cbp-caption-defaultWrap">
									<img src="{{asset('img/works/3.jpg')}}" alt="" />
								</div>
								<div class="cbp-caption-activeWrap">
									<div class="cbp-l-caption-alignCenter">
										<div class="cbp-l-caption-body">

											<a href="http://vimeo.com/14912890" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="To-Do Dashboard<br>by Tiberiu Neamu">view video</a>
										</div>
									</div>
								</div>
							</div>
							<div class="cbp-l-grid-projects-title">To-Do Dashboard</div>
							<div class="cbp-l-grid-projects-desc">Graphic / Logo</div>
						</li>
						<li class="cbp-item web-design graphic">
							<div class="cbp-caption">
								<div class="cbp-caption-defaultWrap">
									<img src="{{asset('img/works/4.jpg')}}" alt="" />
								</div>
								<div class="cbp-caption-activeWrap">
									<div class="cbp-l-caption-alignCenter">
										<div class="cbp-l-caption-body">

											<a href="{{asset('img/works/4big.jpg')}}" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Events and  More<br>by Tiberiu Neamu">ampliar</a>
										</div>
									</div>
								</div>
							</div>
							<div class="cbp-l-grid-projects-title">Events and More</div>
							<div class="cbp-l-grid-projects-desc">Web Design / Graphic</div>
						</li>
						<li class="cbp-item identity web-design">
							<div class="cbp-caption">
								<div class="cbp-caption-defaultWrap">
									<img src="{{asset('img/works/5.jpg')}}" alt="" />
								</div>
								<div class="cbp-caption-activeWrap">
									<div class="cbp-l-caption-alignCenter">
										<div class="cbp-l-caption-body">

											<a href="{{asset('img/works/5big.jpg')}}" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="WhereTO App<br>by Tiberiu Neamu">ampliar</a>
										</div>
									</div>
								</div>
							</div>
							<div class="cbp-l-grid-projects-title">WhereTO App</div>
							<div class="cbp-l-grid-projects-desc">Web Design / Identity</div>
						</li>
						<li class="cbp-item identity web-design">
							<div class="cbp-caption">
								<div class="cbp-caption-defaultWrap">
									<img src="{{asset('img/works/6.jpg')}}" alt="" />
								</div>
								<div class="cbp-caption-activeWrap">
									<div class="cbp-l-caption-alignCenter">
										<div class="cbp-l-caption-body">

											<a href="{{asset('img/works/6big.jpg')}}" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Ski * Buddy<br>by Tiberiu Neamu">ampliar</a>
										</div>
									</div>
								</div>
							</div>
							<div class="cbp-l-grid-projects-title">Ski * Buddy</div>
							<div class="cbp-l-grid-projects-desc">Identity / Web Design</div>
						</li>
						<li class="cbp-item graphic logo">
							<div class="cbp-caption">
								<div class="cbp-caption-defaultWrap">
									<img src="{{asset('img/works/7.jpg')}}" alt="" />
								</div>
								<div class="cbp-caption-activeWrap">
									<div class="cbp-l-caption-alignCenter">
										<div class="cbp-l-caption-body">

											<a href="{{asset('img/works/7big.jpg')}}" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Seemple* Music for iPad<br>by Tiberiu Neamu">ampliar</a>
										</div>
									</div>
								</div>
							</div>
							<div class="cbp-l-grid-projects-title">Seemple* Music for iPad</div>
							<div class="cbp-l-grid-projects-desc">Graphic / Logo</div>
						</li>
						<li class="cbp-item graphic logo">
							<div class="cbp-caption">
								<div class="cbp-caption-defaultWrap">
									<img src="{{asset('img/works/8.jpg')}}" alt="" />
								</div>
								<div class="cbp-caption-activeWrap">
									<div class="cbp-l-caption-alignCenter">
										<div class="cbp-l-caption-body">

											<a href="{{asset('img/works/8big.jpg')}}" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Seemple* Music for iPad<br>by Tiberiu Neamu">ampliar</a>
										</div>
									</div>
								</div>
							</div>
							<div class="cbp-l-grid-projects-title">Seemple* Music for iPad</div>
							<div class="cbp-l-grid-projects-desc">Graphic / Logo</div>
						</li>
					</ul>
				</div>



			</div>
		</div>
	</div>
</section>
@endsection