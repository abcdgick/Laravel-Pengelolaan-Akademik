@extends('master')
@section('title', 'Rekap 1')

@section('content')
<div class="container-fluid px-4">
    <h2 class="mt-4">{{__('rekap1.title')}}</h2>
    <div class="card mb-4 mt-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            {{__('rekap1.tampil.tabel')}}
        </div>
        <div class="card-body">
            <table id="datatablesSimple" class="table-striped">
                <thead class="table-success">
                    <tr>
                        <th style="text-align: center">{{__('rekap1.tampil.namadosen')}}</th>
                        <th style="text-align: center">{{__('rekap1.tampil.jumlah')}}</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th style="text-align: center">{{__('rekap1.tampil.namadosen')}}</th>
                        <th style="text-align: center">{{__('rekap1.tampil.jumlah')}}</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($data_rekap1 as $rekap)
                    <tr>
                        <td>{{$rekap->namadosen}}</td>
                        <td style="text-align: center">{{$rekap->jumlah}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="container mb-4">
        <a href="/rekap1/en">English</a> | 
        <a href="/rekap1">Indonesia</a> 
    </div>
</div>
@endsection