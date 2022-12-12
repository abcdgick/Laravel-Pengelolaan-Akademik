@extends('master') 
@section('title', 'Tambah Mata Kuliah') 

@section('content')
<div class="container px-4">
    <h2 class="mt-4">{{__('formmatkul.title.tambah')}}</h2>
    <form method="post" action="/savematkul">
        @csrf
		<input type="hidden" name="locale" value="{{$locale}}">
        <div class="mb-3 mt-3">
		    <label for="prasyarat" class="form-label">{{__('formmatkul.input.prasyarat')}}</label>
			<select class="form-select" aria-label="Default select example" id="prasyarat" name="prasyarat">
				<option value="0" selected>None</option>
                @foreach ($data_prasyarat as $pra)
                    <option value={{$pra->id}}>{{$pra->nama}}</option>
                @endforeach
			</select>
		</div>
        <div class="row mb-3 mt-3">
            <div class="col">
                <label for="kode" class="form-label">{{__('formmatkul.input.kode')}}</label>
                <input type="text" class="form-control @error('kode') is-invalid @enderror" 
                id="kode" name="kode" value="{{old('kode')}}">
                @error('kode')
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="col">
                <label for="sks" class="form-label">{{__('formmatkul.input.sks')}}</label>
                <input type="text" class="form-control @error('sks') is-invalid @enderror" 
                id="sks" name="sks" value="{{old('sks')}}">
                @error('sks')
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
	    </div>
	    <div class="mb-3 mt-3">
		    <label for="nama" class="form-label">{{__('formmatkul.input.nama')}}</label>
		    <input type="text" class="form-control @error('nama') is-invalid @enderror" 
			id="nama" name="nama" value="{{old('nama')}}">
			@error('nama')
			<div class="text-danger">{{$message}}</div>
			@enderror
	    </div>   
  
        <div class="mb-3 mt-4">
	        <button class="btn btn-success mb-2" type="submit">Submit</button>
            <button class="btn btn-warning mb-2" type="reset">Reset</button>
        </div>
    </form>
	<a href="/creatematkul/en">English</a> | 
	<a href="/creatematkul">Indonesia</a> 
</div>
@endsection