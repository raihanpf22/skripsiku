@extends('master')
@section('content')
<br>
<h1 style="text-align: center;">Visualisasi Data Produk Ketam</h1>
<br>
<br>
<br>
    <div class="col" style="text-align: center;">
        <div class="row-6">
            
            <img src = "{{ asset('asset_ketam/PieChart.png')}}" class="img-fluid">
        </div>
        <div class="row-6">

            <h4>Visualisasi Sentimen Pada Produk Ketam Dengan Metode Klasifikasi Naive Bayes</h4>
        </div>
    </div>

@endsection