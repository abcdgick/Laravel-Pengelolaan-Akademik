@extends('master')
@section('title', 'Nilai')

@section('content')
<div class="container-fluid px-4">
    <h2 class="mt-4">{{__('tabelnilai.title')}}</h2>
    <div class="card mb-4 mt-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            {{__('tabelnilai.tampil.tabel')}}
        </div>
        <div class="card-body">
            <table id="datatablesSimple" class="table-striped">
                <thead class="table-success">
                    <tr>
                        <th style="text-align: center">ID</th>
                        <th style="text-align: center">{{__('tabelnilai.tampil.namamaha')}}</th>
                        <th style="text-align: center">{{__('tabelnilai.tampil.namadosen')}}</th>
                        <th style="text-align: center">{{__('tabelnilai.tampil.namamatkul')}}</th>
                        <th style="text-align: center">{{__('tabelnilai.tampil.tugas')}}</th>
                        <th style="text-align: center">{{__('tabelnilai.tampil.uts')}}</th>
                        <th style="text-align: center">{{__('tabelnilai.tampil.uas')}}</th>
                        <th style="text-align: center">{{__('tabelnilai.tampil.na')}}</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th style="text-align: center">ID</th>
                        <th style="text-align: center">{{__('tabelnilai.tampil.namamaha')}}</th>
                        <th style="text-align: center">{{__('tabelnilai.tampil.namadosen')}}</th>
                        <th style="text-align: center">{{__('tabelnilai.tampil.namamatkul')}}</th>
                        <th style="text-align: center">{{__('tabelnilai.tampil.tugas')}}</th>
                        <th style="text-align: center">{{__('tabelnilai.tampil.uts')}}</th>
                        <th style="text-align: center">{{__('tabelnilai.tampil.uas')}}</th>
                        <th style="text-align: center">{{__('tabelnilai.tampil.na')}}</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($data_nilai as $nilai)
                    <tr>
                        <th style="text-align: center">{{$nilai->id}}</th>
                        <td>{{$nilai->namamaha}}</td>
                        <td>{{$nilai->namadosen}}</td>
                        <td>{{$nilai->namamatkul}}</td>
                        <td style="text-align: center">{{$nilai->tugas}}</td>
                        <td style="text-align: center">{{$nilai->uts}}</td>
                        <td style="text-align: center">{{$nilai->uas}}</td>
                        <td style="text-align: center">
                            {{0.2 * $nilai->tugas + 0.3 * $nilai->uts + 0.5 * $nilai->uas}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="container mb-4">
        <a href="/lapnilai/en">English</a> | 
        <a href="/lapnilai">Indonesia</a> 
    </div>
</div>
@endsection