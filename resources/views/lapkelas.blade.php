@extends('master')
@section('title', 'Kelas')

@section('content')
<div class="container-fluid px-4">
    <h2 class="mt-4">{{__('tabelkelas.title')}}</h2>
    <div class="card mb-4 mt-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            {{__('tabelkelas.tampil.tabel')}}
        </div>
        <div class="card-body">
            <table id="datatablesSimple" class="table-striped">
                <thead class="table-success">
                    <tr>
                        <th style="text-align: center">ID</th>
                        <th style="text-align: center">{{__('tabelkelas.tampil.namadosen')}}</th>
                        <th style="text-align: center">{{__('tabelkelas.tampil.namamatkul')}}</th>
                        <th style="text-align: center">{{__('tabelkelas.tampil.hari')}}</th>
                        <th style="text-align: center">{{__('tabelkelas.tampil.mulai')}}</th>
                        <th style="text-align: center">{{__('tabelkelas.tampil.selesai')}}</th>
                        <th style="text-align: center">{{__('tabelkelas.tampil.ruangan')}}</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th style="text-align: center">ID</th>
                        <th style="text-align: center">{{__('tabelkelas.tampil.namadosen')}}</th>
                        <th style="text-align: center">{{__('tabelkelas.tampil.namamatkul')}}</th>
                        <th style="text-align: center">{{__('tabelkelas.tampil.hari')}}</th>
                        <th style="text-align: center">{{__('tabelkelas.tampil.mulai')}}</th>
                        <th style="text-align: center">{{__('tabelkelas.tampil.selesai')}}</th>
                        <th style="text-align: center">{{__('tabelkelas.tampil.ruangan')}}</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($data_kelas as $kelas)
                    <tr>
                        <th style="text-align: center">{{$kelas->id}}</th>
                        <td>{{$kelas->namadosen}}</td>
                        <td>{{$kelas->namamatkul}}</td>
                        <td>{{$kelas->hari}}</td>
                        <td style="text-align: center">{{$kelas->mulai}}</td>
                        <td style="text-align: center">{{$kelas->selesai}}</td>
                        <td style="text-align: center">
                            {{$kelas->ruangan}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="container mb-4">
        <a href="/lapkelas/en">English</a> | 
        <a href="/lapkelas">Indonesia</a> 
    </div>
</div>
@endsection