@extends('master')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">
    

<div class="card mb-4 py-3 border-left-primary">
        <div class="card-body">
           <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800"><i class="fas fa-fw fa-tachometer-alt"></i> Preprocessing Normalization Otak-otak</h1>
            <p class="mb-4">
                Pada tahap ini proses yang dilakukan adalah proses 
                mengubah kata agar sesuai dengan KBBI. Setiap dijumpai 
                kata yang penggunaan huruf berlebihan dan kata yang tidak 
                baku akan diubah. 
            </p>
        </div>
</div>
    
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Normalization Dataset Otak-otak</h6>
        <br>
        
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead style="text-align: center;">
                    <tr>
                        <th>Id</th>
                        <th>Filtering</th>
                        <th>Normalization</th>
                       
                    </tr>
                </thead>
                <tfoot style="text-align: center;">
                    <tr>
                        <th>Id</th>
                        <th>Filtering</th>
                        <th>Normalization</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($datas as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->filtering}}</td>
                        <td>{{$item->normalisasi}}</td>
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

@endsection