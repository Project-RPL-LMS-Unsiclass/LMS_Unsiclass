@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('About') }}</h1>

    <div class="row justify-content-center">

        <div class="col-lg-6">

            <div class="card shadow mb-4">

                <div class="card-profile-image mt-4">
                    <img src="{{ asset('img/unsiclass.jpg') }}"  alt="user-image">
                </div>

                <div class="card-body">

                    <div class="row">
                        <div class="col-lg-12">
                            <h5 class="font-weight-bold">Unsiclass</h5>
                            <p>LMS Unsiclass Project dibuat untuk memenuhi tugas akhir mata kuliah rekayasa perangkat lunak and</p>
                            <p>If you found this project useful, then please consider giving it a ⭐</p>
                            <a href="https://github.com/Project-RPL-LMS-Unsiclass" target="_blank" class="btn btn-github">
                                <i class="fab fa-github fa-fw"></i> Go to repository
                            </a>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-lg-12">
                            <h5 class="font-weight-bold">Credits</h5>
                            <p>Big thanks to everyone who helped make this project possible and also to our lecture who have guided us Dr.Oman Komarudin,S.kom.</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>

@endsection
