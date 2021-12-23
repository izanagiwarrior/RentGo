@extends('layouts.app')

@section('content')
<!-- Header-->
<header class="bg-light py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-black">
            <h1 class="display-4 fw-bolder">Toko</h1>
            <p class="lead fw-normal text-black-50 mb-0">Dalam Toko terdapat lebih dari 100 produk yang menjadi karya orisinil pengerajin bangsa.</p>
        </div>
        <div class="Search my-5">
            <div class="row height d-flex justify-content-center align-items-center">
                <div class="col-md-6">
                    <form action="{{route('showToko')}}">
                        <div class="form"> <i class="fa fa-search"></i> <input type="text" class="form-control form-input" name="search" placeholder="Search anything..." value="{{(isset($search)) ? $search : '' }}"> <span class="left-pan"></span> </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- <div class="Kategori">
                    @foreach($category as $cy)
                    <a class="btn btn-danger btn-xl text-uppercase" href="#services">{{$cy->name}}</a>
                    @endforeach
                </div> -->
    </div>
</header>
<!-- Section-->
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            @foreach($store as $st)
            <div class="col-md-6 col-xl-3 mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    <img class="card-img-top" src="{{$st->photo === null ? asset('img/il_login.png') : asset('storage/' . $st->photo)}}" style="object-fit:cover;" height='200px' alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">{{$st->name}}</h5>
                            <!-- Product price-->
                            <p class="font-weight-normal">{{$st->address}}</p>
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-danger mt-auto" href="{{route('toko', $st->slug )}}">Kunjungi Toko</a></div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Pagination -->
<!-- <nav class="d-flex justify-content-center" aria-label="Page navigation example">
    <ul class="pagination mx-auto">
        <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
            </a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
            </a>
        </li>
    </ul>
</nav> -->
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="{{asset('js/theme.js')}}"></script>
</body>

</html>
@endsection