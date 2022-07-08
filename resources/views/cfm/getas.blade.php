@extends('master')
@section('content')
<br>
<h1 style="text-align: center;">Visualisasi Confusion Matrix Data Produk Getas</h1>
<br>
<br>
<br>
    <div class="col" style="text-align: center;">
        <div class="row-6">
            
            <img src = "{{ asset('asset_getas/CFM.png')}}" class="img-fluid" height="500px" width="500px">
        </div>
        <div class="row-6">

            <h4>Visualisasi Confusion Matrix Sentimen Pada Produk Getas Dengan Metode Klasifikasi Naive Bayes</h4>
        </div>
    </div>

@endsection