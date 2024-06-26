@extends('layouts.home')

@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('../../images/bg_3.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate mb-0 text-center">
                    <p class="breadcrumbs mb-0"><span class="mr-2"><a href="{{ route('index') }}">Bosh sahifa <i class="fa fa-chevron-right"></i></a></span> 
                    <span class="mr-2"><a href="{{ route('cours') }}">Kurslar <i class="fa fa-chevron-right"></i></a></span> 
                    <span>Kurs <i class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-0 bread">Kursning nomi</h1>
                </div>
            </div>
        </div>
    </section>
		
	<section class="ftco-section ftco-degree-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 ftco-animate">
                    <p class="w-100 text-center"><img src="../../images/{{ $Cours['image'] }}" alt="" class="w-50"></p>
                    <h2 class="mb-3">{{ $Cours['cours_name'] }}</h2>
                    <p>{{ $Cours['max_text'] }}</p>
                </div> 
                <div class="col-lg-4 sidebar pl-lg-5 ftco-animate">
                    <div class="sidebar-box ftco-animate">
                        <div class="categories">
                            <h3>Mavzular</h3>
                            @foreach($Mavzu as $item)
                            <li><a href="{{ route('profel_show_video',$item['id']) }}">{{ $item['mavzu_name'] }}<span class="fa fa-chevron-right"></span></a></li>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 


@endsection