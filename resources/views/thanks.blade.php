@extends('layouts.main')
@section('content')
@if (session('successMsg'))
<div class="alert alert-success" role="alert">
    {{ session('successMsg') }}
</div>

@endif
 
    <h2> Terima Kasih kerana telah menggunakan perkhidmatan kami. </h2>
@endsection