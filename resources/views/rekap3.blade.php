@extends('master')
@section('title', 'Rekap 3')

@section('content')
<div class="container-fluid px-4">
    <h2 class="mt-4">{{__('rekap3.title')}}</h2>
    <div class="card mb-4 mt-4">
        <div class="card-header">
            <i class="fas fa-table me-3"></i>
            {{__('rekap3.tampil.tabel')}}
        </div>
        <div class="card-body">
            <table id="datatablesSimple" class="table-striped">
                <thead class="table-success">
                    <tr>
                        <th style="text-align: center">{{__('rekap3.tampil.jurusan')}}</th>
                        <th style="text-align: center">{{__('rekap3.tampil.jumlah')}}</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th style="text-align: center">{{__('rekap3.tampil.jurusan')}}</th>
                        <th style="text-align: center">{{__('rekap3.tampil.jumlah')}}</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($data_rekap3 as $rekap)
                    <tr>
                        <td>{{$rekap->jurusan}}</td>
                        <td style="text-align: center">{{$rekap->jumlah}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="container mb-4">
        <a href="/rekap3/en">English</a> | 
        <a href="/rekap3">Indonesia</a> 
    </div>
</div>
@endsection