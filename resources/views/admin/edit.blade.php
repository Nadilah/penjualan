@extends('admin.adm-main') 
@section('admin-content')

<div class="container">
    <h1> Halaman Edit Pemesanan </h1>
    <br>
    <!-- Default form register -->
<form class="text-center border border-light p-5" action="{{ route('update',$x->id)}}" method="post" >
@csrf

<p class="h4 mb-4">Pesan Ice-Cream Sekarang</p>

<div class="form-row mb-4">
    <div class="col">
        <!-- First name -->
        <input type="text" id="namadepan" class="form-control" placeholder="First name" name="namadepan" value="{{$x->nama_depan}}">
    </div>
    <div class="col">
        <!-- Last name -->
        <input type="text" id="namabel" class="form-control" placeholder="Last name" name="namabel" value="{{$x->nama_belakang}}">
    </div>
</div>

<!-- Pesan apa  -->

<input type="text" id="pesan" class="form-control mb-4" placeholder="Pesanan" name="pesan" value="{{$x->pesan}}">
  
<!-- E-mail -->
<input type="email" id="email" class="form-control mb-4" placeholder="E-mail" name="email" value="{{$x->email}}">


<!-- Phone number -->
<input type="text" id="nohp" class="form-control" placeholder="Phone number" name="nohp" value="{{$x->nohp}}">




<!-- Sign up button -->
<button class="btn btn-info my-4 btn-block" type="submit">Update</button>



</form>
<!-- Default form register -->

</div>
@endsection