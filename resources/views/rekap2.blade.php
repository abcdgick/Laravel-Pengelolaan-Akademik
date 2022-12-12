@extends('master')
@section('title', 'Rekap 2')

@section('content')
<div class="container-fluid px-4">
    <h2 class="mt-4">{{__('rekap2.title')}}</h2>
    <div class="card mb-4 mt-4">
        <div class="card-header">
            <i class="fas fa-table me-2"></i>
            {{__('rekap2.tampil.tabel')}}
        </div>
        <div class="card-body">
            <table id="datatablesSimple" class="table-striped">
                <thead class="table-success">
                    <tr>
                        <th style="text-align: center">{{__('rekap2.tampil.namadosen')}}</th>
                        <th style="text-align: center">{{__('rekap2.tampil.namamatkul')}}</th>
                        <th style="text-align: center">{{__('rekap2.tampil.rata')}}</th>
                        <th style="text-align: center">{{__('rekap2.tampil.lulus')}}</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th style="text-align: center">{{__('rekap2.tampil.namadosen')}}</th>
                        <th style="text-align: center">{{__('rekap2.tampil.namamatkul')}}</th>
                        <th style="text-align: center">{{__('rekap2.tampil.rata')}}</th>
                        <th style="text-align: center">{{__('rekap2.tampil.lulus')}}</th>
                    </tr>
                </tfoot>
                <tbody>
                    @php
                        $i = 0;
                    @endphp
                    @foreach ($data_rekap2 as $rekap)
                    <tr>
                        <td>{{$rekap->namadosen}}</td>
                        <td>{{$rekap->namamatkul}}</td>
                        <td style="text-align: center">{{number_format($data_rata[$i]->rata,0)}}</td>
                        <td style="text-align: center">{{$rekap->jumlah}}</td>
                    </tr>
                    @php
                        $i += 1;
                    @endphp
                    @endforeach
                    {{-- @foreach ($data_rata as $rata)
                        <td style="text-align: center">{{$rata->rata}}</td>
                    @endforeach --}}
                </tbody>
            </table>
        </div>
    </div>
    <div class="container mb-4">
        <a href="/rekap2/en">English</a> | 
        <a href="/rekap2">Indonesia</a> 
    </div>
</div>
@endsection