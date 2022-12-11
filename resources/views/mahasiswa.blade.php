@extends('master')
@section('title', 'Mahasiswa')

@section('content')
<div class="container-fluid px-4">
    @if(Session::has('pesan'))
        <div class="alert alert-info" role="alert">
            {{Session::get('pesan')}}
        </div>
    @endif
    <h1 class="mt-4">{{__('tabelmaha.title')}}</h1>
    <p><a href="/createmahasiswa">
        <button class="btn btn-primary mb-2">{{__('tabelmaha.tampil.tambah')}}</button></a></p>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            {{__('tabelmaha.tampil.tabel')}}
        </div>
        <div class="card-body">
            <table id="datatablesSimple" class="table-striped">
                <thead class="table-success">
                    <tr>
                        <th style="text-align: center">ID</th>
                        <th style="text-align: center">NPM</th>
                        <th style="text-align: center">{{__('tabelmaha.tampil.nama')}}</th>
                        <th style="text-align: center">{{__('tabelmaha.tampil.gender')}}</th>
                        <th style="text-align: center">{{__('tabelmaha.tampil.angkatan')}}</th>
                        <th style="text-align: center">{{__('tabelmaha.tampil.jenjang')}}</th>
                        <th style="text-align: center">{{__('tabelmaha.tampil.jurusan')}}</th>
                        <th style="text-align: center">{{__('tabelmaha.tampil.edit')}}</th>
                        <th style="text-align: center">{{__('tabelmaha.tampil.hapus')}}</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th style="text-align: center">ID</th>
                        <th style="text-align: center">NPM</th>
                        <th style="text-align: center">{{__('tabelmaha.tampil.nama')}}</th>
                        <th style="text-align: center">{{__('tabelmaha.tampil.gender')}}</th>
                        <th style="text-align: center">{{__('tabelmaha.tampil.angkatan')}}</th>
                        <th style="text-align: center">{{__('tabelmaha.tampil.jenjang')}}</th>
                        <th style="text-align: center">{{__('tabelmaha.tampil.jurusan')}}</th>
                        <th style="text-align: center">{{__('tabelmaha.tampil.edit')}}</th>
                        <th style="text-align: center">{{__('tabelmaha.tampil.hapus')}}</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($data_mahasiswa as $mahasiswa)
                    <tr>
                        <th style="text-align: center">{{$mahasiswa->idmaha}}</th>
                        <td>{{$mahasiswa->npm}}</td>
                        <td>{{$mahasiswa->namamaha}}</td>
                        @if ($mahasiswa->kodegender == 'L')
                            <td>{{__('tabelmaha.tampil.pilgen.laki')}}</td>
                        @else
                            <td>{{__('tabelmaha.tampil.pilgen.perempuan')}}</td>
                        @endif
                        @php
                            $ta = Str::substr($mahasiswa->npm, 0, 4);
                            $kje = $mahasiswa->npm[4];
                            switch ($kje) {
                                case '0':
                                    $jenjang = __('tabelmaha.tampil.piljen.diploma');
                                    break;
                                case '1':
                                    $jenjang = __('tabelmaha.tampil.piljen.sarjana');;
                                    break;
                                case '2':
                                    $jenjang = __('tabelmaha.tampil.piljen.magister');;
                                    break;
                                default:
                                    $jenjang = __('tabelmaha.tampil.piljen.ngaco');;
                                    break;
                            }
                        @endphp
                        <td>{{$ta}}</td>
                        <td>{{$jenjang}}</td>
                        <td>{{$mahasiswa->namajur}}</td>
                        <td style="text-align: center"><a href="{{route('ubahmahasiswa', $mahasiswa->idmaha)}}"><button class="btn btn-warning btn-sm">
                            <span class="material-symbols-outlined">
                                edit
                            </span>    
                        </button></a></td>
                        <td style="text-align: center">
                            <form action="{{route('hapusmahasiswa', $mahasiswa->idmaha)}}" method="post">
                                @csrf
                                <button class="btn btn-danger btn-sm" onclick="return confirm('{{__('tabelmaha.tampil.popup')}}')">
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