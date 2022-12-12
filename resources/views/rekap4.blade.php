@extends('master')
@section('title', 'Rekap 4')

@section('content')
<div class="container-fluid px-4">
    <h2 class="mt-4">{{__('rekap4.title')}}</h2>
    <div class="card mb-4 mt-4">
        <div class="card-header">
            <i class="fas fa-table me-4"></i>
            {{__('rekap4.tampil.tabel')}}
        </div>
        <div class="card-body">
            <table id="datatablesSimple" class="table-striped">
                <thead class="table-success">
                    <tr>
                        <th style="text-align: center">{{__('rekap4.tampil.namamaha')}}</th>
                        <th style="text-align: center">{{__('rekap4.tampil.jumlah')}}</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th style="text-align: center">{{__('rekap4.tampil.namamaha')}}</th>
                        <th style="text-align: center">{{__('rekap4.tampil.jumlah')}}</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($data_rekap4 as $rekap)
                    <tr>
                        <td>{{$rekap->nama}}</td>
                        <td style="text-align: center">{{$rekap->jumlah}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="container mb-4">
        <a href="/rekap4/en">English</a> | 
        <a href="/rekap4">Indonesia</a> 
    </div>
</div>
@endsection