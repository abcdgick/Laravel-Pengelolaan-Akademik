@extends('master')
@section('title', 'Jurusan')

@section('content')
<div class="container-fluid px-4">
    @if(Session::has('pesan'))
        <div class="alert alert-info mt-4" role="alert">
            {{Session::get('pesan')}}
        </div>
    @endif
    <h2 class="mt-4">{{__('tabeljur.title')}}</h2>
    <p><a href="/createjurusan">
        <button class="btn btn-primary mb-2">{{__('tabeljur.tampil.tambah')}}</button></a></p>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            {{__('tabeljur.tampil.tabel')}}
        </div>
        <div class="card-body">
            <table id="datatablesSimple" class="table-striped">
                <thead class="table-success">
                    <tr>
                        <th style="text-align: center">ID</th>
                        <th style="text-align: center">{{__('tabeljur.tampil.nama')}}</th>
                        <th style="text-align: center">{{__('tabeljur.tampil.ket')}}</th>
                        <th style="text-align: center">{{__('tabeljur.tampil.edit')}}</th>
                        <th style="text-align: center">{{__('tabeljur.tampil.hapus')}}</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th style="text-align: center">ID</th>
                        <th style="text-align: center">{{__('tabeljur.tampil.nama')}}</th>
                        <th style="text-align: center">{{__('tabeljur.tampil.ket')}}</th>
                        <th style="text-align: center">{{__('tabeljur.tampil.edit')}}</th>
                        <th style="text-align: center">{{__('tabeljur.tampil.hapus')}}</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($data_jurusan as $jurusan)
                    <tr>
                        <th style="text-align: center">{{$jurusan->id}}</th>
                        <td>{{$jurusan->nama}}</td>
                        <td>{{$jurusan->ket}}</td>
                        <td style="text-align: center"><a href="{{route('ubahjurusan', $jurusan->id)}}"><button class="btn btn-warning btn-sm">
                            <span class="material-symbols-outlined">
                                edit
                            </span>    
                        </button></a></td>
                        <td style="text-align: center">
                            <form action="{{route('hapusjurusan', $jurusan->id)}}" method="post">
                                @csrf
                                <button class="btn btn-danger btn-sm" onclick="return confirm('{{__('tabeljur.tampil.popup')}}')">
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
    <div class="container mb-4">
        <a href="/jurusan/en">English</a> | 
        <a href="/jurusan">Indonesia</a> 
    </div>
</div>
@endsection