@extends('layouts.main')
@section('content')

<div class="container">
    <h1> Halaman Pemesanan </h1>
    <br>
    <!-- Default form register -->
<form class="text-center border border-light p-5" action="{{ route('simpan')}}" method="post" >
@csrf

<p class="h4 mb-4">Pesan Ice-Cream Sekarang</p>

<div class="form-row mb-4">
    <div class="col">
        <!-- First name -->
        <input type="text" id="namadepan" class="form-control" placeholder="First name" name="namadepan">
    </div>
    <div class="col">
        <!-- Last name -->
        <input type="text" id="namabel" class="form-control" placeholder="Last name" name="namabel">
    </div>
</div>

<!-- Alamat apa  -->

<input type="text" id="alamat" class="form-control mb-4" placeholder="Alamat" name="alamat">
  
<!-- Label for menu options  -->
<label for="barang_id"> Pesan Rasa Apa </label>
<select name="barang_id" id="barang" class="form-control mb-4">
    @foreach($list as $item)
    <option value="{{$item->id}}">
    {{$item->nama_barang}} - RM{{ number_format($item->harga)}}
    </option>
    @endforeach
</select>

<!-- E-mail -->
<input type="email" id="email" class="form-control mb-4" placeholder="E-mail" name="email">


<!-- Phone number -->
<input type="text" id="nohp" class="form-control" placeholder="Phone number" name="nohp">




<!-- Sign up button -->
<button class="btn btn-info my-4 btn-block" type="submit">Pesan Sekarang</button>



</form>
<!-- Default form register -->

</div>
@endsection