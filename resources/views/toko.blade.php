<?php
function rupiah($angka)
{

    $hasil_rupiah = "Rp " . number_format($angka, 0, ',', '.');
    return $hasil_rupiah;
}
?>
@extends('layouts.app')

@section('content')
<section class="page-section" id="services">
    <div class="container mt-5 pt-5">
        <div class="row mx-auto">
            <div class="col-md-12">
                <div class="card" style="position:relative;background-image:url({{asset('storage/' . $store->photo)}}); border-radius: 7px;background-repeat:no-repeat;background-size:cover;background-position:center center;">
                    <div class="content-banner">
                        <div class="text-center my-5">
                            <img src="{{$user->photo === null ? asset('img/bima.jpg') : asset('storage/' . $user->photo)}}" alt="" class="rounded-circle" style="max-width: 150px;min-width: 80px">
                        </div>
                        <!-- <div class="d-flex flex-column justify-content-evenly" style="position:absolute;top:0;right:0; height:70%;margin-right: 30px;"> -->
                            <!-- <a href="" class="btn btn-danger">SERTIFIKAT</a>
                            <a href="" class="btn btn-danger">SERTIFIKAT</a>
                            <a href="" class="btn btn-danger">SERTIFIKAT</a> -->
                        <!-- </div> -->
                        
                    </div>
                    <div class="card card-toko text-center p-5 mx-auto" style="border-radius: 10px 10px 0 0;border: 0; margin-bottom: -1px;background-color: rgba(255, 255, 255, 0.8);">
                        <h2 class="card-title text-dark mb-4">{{$store->name}}</h2>
                        <div class="button-toko d-flex justify-content-evenly">
                            <a href="https://maps.google.com/?q={{$store->lat}},{{$store->lang}}" class="btn btn-danger d-inline-block" target="_blank">MAP</a>
                            <a href="https://wa.me/{{$store->phone_number}}" target="_blank" class="btn btn-danger d-inline-block">HUBUNGI</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<div class="container">
    <div class="border border-dark w-100 mx-auto"></div>
</div>
<section class="page-section" id="services">
    <div class="container mt-3">
        <h3 class="mx-auto" style="padding-bottom: 10px; border-bottom-style: solid; border-bottom-width: 3px;width: fit-content;">TENTANG TOKO INI</h3>
        <div class="row mx-auto">
            <div class="col-xl-12 col-sm-12 py-3">
                <div class="card" style="position:relative;background-image:url({{asset('img/il_tentang_toko.png')}}); border-radius: 7px;background-repeat:no-repeat;background-size:cover;background-position:center center;">
                    <div class="card card-secondary mx-auto my-5" style="background-color: rgba(255, 255, 255, 0.9);width: 60%;">
                        <div class="card-body">
                            <p>{{$store->history}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="page-section" id="services">
    <div class="container mt-3 px-0">
        <h3 class="mx-auto" style="padding-bottom: 10px; border-bottom-style: solid; border-bottom-width: 3px;width: fit-content;">KATEGORI</h3>
        <div class="row">
            @foreach($category as $cy)
            <div class="col-md-4 py-3">
                <div class="card bg-light">
                    <img src="{{asset('storage/' . $cy->photo)}}" style="object-fit: cover;" alt="" height="150px" class="card-img-top">
                    <div class="card-body text-center">
                        <b>{{$cy->name}}</b>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="page-section" id="services">
    <div class="container px-0">
        <h3 class="mx-auto" style="padding-bottom: 10px; border-bottom-style: solid; border-bottom-width: 3px;width: fit-content;">PRODUK</h3>
        <div class="row">
            @foreach($product as $pt)
            <div class="col-md-6 col-xl-3 mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    <img class="card-img-top" src="{{asset('storage/' . $pt->photo)}}" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">{{$pt->title}}</h5>
                            <!-- Product price-->
                            <h4 class="fw-bolder-price">{{rupiah($pt->price)}}</h4>
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-danger mt-auto" href="{{route('detailProduk', $pt->id )}}">PESAN SEKARANG</a></div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection