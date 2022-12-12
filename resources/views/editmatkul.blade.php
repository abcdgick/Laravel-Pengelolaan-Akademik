@extends('master') 
@section('title', 'Edit Mata Kuliah') 

@section('content')
<div class="container px-4">
    <h2 class="mt-4">{{__('formmatkul.title.edit')}}</h2>
    <form method="post" action="{{route('modifmatkul', $matkul->id)}}">
        @csrf
		<input type="hidden" name="locale" value="{{$locale}}">
        <div class="mb-3 mt-3">
		    <label for="prasyarat" class="form-label">{{__('formmatkul.input.prasyarat')}}</label>
			<select class="form-select" aria-label="Default select example" id="prasyarat" name="prasyarat">
				<option value="0" @php if($matkul->prasyarat == '0'){print('selected');} @endphp>None</option>
                @foreach ($data_prasyarat as $pra)
                @if ($pra->id != $matkul->id)
                    <option value={{$pra->id}} @php if($matkul->prasyarat == $pra->id){print('selected');} @endphp>{{$pra->nama}}</option>
                @endif
                @endforeach
			</select>
		</div>
        <div class="row mb-3 mt-3">
            <div class="col">
                <label for="kode" class="form-label">{{__('formmatkul.input.kode')}}</label>
                <input type="text" class="form-control @error('kode') is-invalid @enderror" 
                id="kode" name="kode" value="{{$matkul->kode}}">
                @error('kode')
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="col">
                <label for="sks" class="form-label">{{__('formmatkul.input.sks')}}</label>
                <input type="text" class="form-control @error('sks') is-invalid @enderror" 
                id="sks" name="sks" value="{{$matkul->sks}}">
                @error('sks')
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
	    </div>
	    <div class="mb-3 mt-3">
		    <label for="nama" class="form-label">{{__('formmatkul.input.nama')}}</label>
		    <input type="text" class="form-control @error('nama') is-invalid @enderror" 
			id="nama" name="nama" value="{{$matkul->nama}}">
			@error('nama')
			<div class="text-danger">{{$message}}</div>
			@enderror
	    </div>   
  
        <div class="mb-3 mt-4">
	        <button class="btn btn-success mb-2" type="submit">Submit</button>
            <button class="btn btn-warning mb-2" type="reset">Reset</button>
        </div>
    </form>
	<a href="/editmatkul/{{$matkul->id}}/en">English</a> | 
	<a href="/editmatkul/{{$matkul->id}}">Indonesia</a> 
</div>
@endsection