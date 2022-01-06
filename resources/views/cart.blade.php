<?php
use App\Products;
?>
@extends('layouts.app')
@section('content')
    <div class="hero-wrap ftco-degree-bg" style="background-image: url('{{ asset('img/bg_1.jpg') }}');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
                <div class="col-lg-8 ftco-animate">
                    <div class="text w-100 text-center mb-md-5 pb-md-5">
                        <h1 class="mb-4">Your cart</h1>
                        <p style="font-size: 18px;">A small river named Duden flows by their place and supplies it with the
                            necessary regelialia. It is a paradisematic country, in which roasted parts</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row">
                <table class="table table-bordered data-table text-center">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Product</th>
                            <th>Start</th>
                            <th>Duration</th>
                            <th>Total Price</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($order as $or)
                            <tr>
                                <td>{{ $or->id }}</td>
                                @php
                                    $product = Products::find($or->id_product);
                                @endphp
                                <td>{{ $product->title }}</td>
                                <td>{{ $or->start }}</td>
                                <td>{{ $or->duration }} Days</td>
                                <td>{{ 'Rp ' . number_format($or->price, 2, ',', '.') }}</td>
                                <td>{{ $or->status }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>


@endsection
