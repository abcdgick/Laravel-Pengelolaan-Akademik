@extends('master')
@section('title', 'Dosen')

@section('content')
<div class="container-fluid px-4 mt-4">
    @if(Session::has('pesan'))
        <div class="alert alert-info" role="alert">
            {{Session::get('pesan')}}
        </div>
    @endif
    <h2 class="mt-4">{{__('tabeldosen.title')}}</h2>
    <p><a href="/createdosen">
        <button class="btn btn-primary mb-2">{{__('tabeldosen.tampil.tambah')}}</button></a></p>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            {{__('tabeldosen.tampil.tabel')}}
        </div>
        <div class="card-body">
            <table id="datatablesSimple" class="table-striped">
                <thead class="table-success">
                    <tr>
                        <th style="text-align: center">ID</th>
                        <th style="text-align: center">NIP</th>
                        <th style="text-align: center">{{__('tabeldosen.tampil.nama')}}</th>
                        <th style="text-align: center">{{__('tabeldosen.tampil.edit')}}</th>
                        <th style="text-align: center">{{__('tabeldosen.tampil.hapus')}}</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th style="text-align: center">ID</th>
                        <th style="text-align: center">NIP</th>
                        <th style="text-align: center">{{__('tabeldosen.tampil.nama')}}</th>
                        <th style="text-align: center">{{__('tabeldosen.tampil.edit')}}</th>
                        <th style="text-align: center">{{__('tabeldosen.tampil.hapus')}}</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($data_dosen as $dosen)
                    <tr>
                        <th style="text-align: center">{{$dosen->id}}</th>
                        <td style="text-align: center">{{$dosen->nip}}</td>
                        <td>{{$dosen->nama}}</td>
                        <td style="text-align: center"><a href="{{route('ubahdosen', $dosen->id)}}"><button class="btn btn-warning btn-sm">
                            <span class="material-symbols-outlined">
                                edit
                            </span>    
                        </button></a></td>
                        <td style="text-align: center">
                            <form action="{{route('hapusdosen', $dosen->id)}}" method="post">
                                @csrf
                                <button class="btn btn-danger btn-sm" onclick="return confirm('{{__('tabeldosen.tampil.popup')}}')">
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
        <a href="/dosen/en">English</a> | 
        <a href="/dosen">Indonesia</a> 
    </div>
</div>
@endsection