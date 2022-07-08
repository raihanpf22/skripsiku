@extends('master')
@section('content')
<br>
<h1 style="text-align: center;">Visualisasi World Cloud Data Produk Getas</h1>
<br>
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col">
            <img src = "{{ asset('asset_getas/WCPositif.png')}}" class="img-fluid mr-5" height="500px" width="500px">
            <br>
            <br>
            <h4 class=" d-flex justify-content-center">Visualisasi World Positif</h4>
        </div>
        <div class="col">
            <img src = "{{ asset('asset_getas/WCNegatif.png')}}" class="img-fluid mr-5" height="500px" width="500px">
            <br>
            <br>

            <h4 class="d-flex justify-content-center">Visualisasi World Negatif</h4>
        </div>
    </div>
</div>


        


            
            
    
    
    

@endsection