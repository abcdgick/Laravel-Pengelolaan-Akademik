@extends('master') 
@section('title', 'Edit Jurusan') 

@section('content')
<div class="container px-4">
    <h2 class="mt-4">{{__('formjur.title.edit')}}</h2>
    <form method="post" action="{{route('modifjurusan', $jurusan->id)}}">
        @csrf
		<input type="hidden" name="locale" value="{{$locale}}">
	    <div class="mb-3 mt-3">
		    <label for="nama" class="form-label">{{__('formjur.input.nama')}}</label>
		    <input type="text" class="form-control @error('nama') is-invalid @enderror" 
			id="nama" name="nama" value="{{$jurusan->nama}}">
			@error('nama')
			<div class="text-danger">{{$message}}</div>
			@enderror
	    </div>   
	    <div class="mb-3 mt-3">
		    <label for="ket" class="form-label">{{__('formjur.input.ket')}}</label>
		    <textarea type="text" class="form-control  @error('ket') is-invalid @enderror" id="ket" name="ket" rows="3">{{$jurusan->ket}}</textarea>
			@error('ket')
			<div class="text-danger">{{$message}}</div>
			@enderror
	    </div> 
  
        <div class="mb-3 mt-4">
	        <button class="btn btn-success mb-2" type="submit">Submit</button>
            <button class="btn btn-warning mb-2" type="reset">Reset</button>
        </div>
    </form>
	<a href="/editjurusan/{{$jurusan->id}}/en">English</a> | 
	<a href="/editjurusan/{{$jurusan->id}}">Indonesia</a> 
</div>
@endsection