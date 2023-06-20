@extends('layouts.app')

@section('content') 
<div class="container">
<br/>
<br/>
<br/>
    <div class="row justify-content-center">
        <div class="d-flex justify-content-center">
            <img src="{{ url('images/Logo(4).png') }}" class="rounded mx-auto d-block" width="200" alt="">
        </div>
        <!--slider-->
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <br/>
        <br/>
          <div class="carousel-inner">
            <div class="carousel-item active row justify-center">
              <div class="col-md-12 mb-5">
                <img src="{{ url('images/1.jpg') }}" class="rounded mx-auto d-block "width="500" alt="...">
              </div>
            </div>
            <div class="carousel-item">
              <div class="col-md-12 mb-5">
                <img src="{{ url('images/2.jpg') }}" class="rounded mx-auto d-block "width="500" alt="...">
              </div>
            </div>
            <div class="carousel-item">
              <div class="col-md-12 mb-5">
                <img src="{{ url('images/3.jpg') }}" class="rounded mx-auto d-block "width="500" alt="...">
              </div>
            </div>
            <div class="carousel-item">
              <div class="col-md-12 mb-5">
                <img src="{{ url('images/4.jpg') }}" class="rounded mx-auto d-block "width="500" alt="...">
              </div>
            </div>
            <div class="carousel-item">
              <div class="col-md-12 mb-5">
                <img src="{{ url('images/5.jpg') }}" class="rounded mx-auto d-block "width="500" alt="...">
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        <br>
        @foreach($barangs as $barang)
        <br/>
        <br/>
        <div class="col-md-2">
            <div class="card">
              
                <img src="{{ url('uploads')}}/{{ $barang->gambar }}" class="rounded mx-auto d-block" width="163" alt="">
                <div class="card-body mx-auto d-block">
                    <h7 class="card-title">{{ $barang->nama_barang }}</h7>
                    <br/>
                    <p class="card-text">
                        <strong>Harga :</strong> Rp. {{ number_format($barang->harga)}} <br>
                        
                         
                    </p>
                    <a href="{{ url('pesan')}}/{{ $barang->id }}" class="btn btn-light text-white" style="background-color: #FF7A00;"><i class="fa fa-shopping-cart text-white"></i> Pesan</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
