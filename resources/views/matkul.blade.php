@extends('master')
@section('title', 'Mata kuliah')

@section('content')
<div class="container-fluid px-4">
    @if(Session::has('pesan'))
        <div class="alert alert-info" role="alert">
            {{Session::get('pesan')}}
        </div>
    @endif
    <h1 class="mt-4">{{__('tabelmatkul.title')}}</h1>
    <p><a href="/createmata kuliah">
        <button class="btn btn-primary mb-2">{{__('tabelmatkul.tampil.tambah')}}</button></a></p>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            {{__('tabelmatkul.tampil.tabel')}}
        </div>
        <div class="card-body">
            <table id="datatablesSimple" class="table-striped">
                <thead class="table-success">
                    <tr>
                        <th style="text-align: center">ID</th>
                        <th style="text-align: center">{{__('tabelmatkul.tampil.kode')}}</th>
                        <th style="text-align: center">{{__('tabelmatkul.tampil.nama')}}</th>
                        <th style="text-align: center">SKS</th>
                        <th style="text-align: center">{{__('tabelmatkul.tampil.prasyarat')}}</th>
                        <th style="text-align: center">{{__('tabelmatkul.tampil.edit')}}</th>
                        <th style="text-align: center">{{__('tabelmatkul.tampil.hapus')}}</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th style="text-align: center">ID</th>
                        <th style="text-align: center">{{__('tabelmatkul.tampil.kode')}}</th>
                        <th style="text-align: center">{{__('tabelmatkul.tampil.nama')}}</th>
                        <th style="text-align: center">SKS</th>
                        <th style="text-align: center">{{__('tabelmatkul.tampil.prasyarat')}}</th>
                        <th style="text-align: center">{{__('tabelmatkul.tampil.edit')}}</th>
                        <th style="text-align: center">{{__('tabelmatkul.tampil.hapus')}}</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($data_matkul as $matkul)
                    <tr>
                        <th style="text-align: center">{{$matkul->id}}</th>
                        <td>{{$matkul->kode}}</td>
                        <td>{{$matkul->nama}}</td>
                        <td style="text-align: center">{{$matkul->sks}}</td>
                        @if ($matkul->pra == null)
                            <td style="text-align: center">-</td>
                        @else
                            <td>{{$matkul->namapra}}</td>
                        @endif
                        <td style="text-align: center"><a href="{{route('ubahmatkul', $matkul->id)}}"><button class="btn btn-warning btn-sm">
                            <span class="material-symbols-outlined">
                                edit
                            </span>    
                        </button></a></td>
                        <td style="text-align: center">
                            <form action="{{route('hapusmatkul', $matkul->id)}}" method="post">
                                @csrf
                                <button class="btn btn-danger btn-sm" onclick="return confirm('{{__('tabelmatkul.tampil.popup')}}')">
                                    <span class="material-symbols-outlined">
                                        delete
                                    </span>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection