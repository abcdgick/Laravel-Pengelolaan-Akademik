@extends('master') 
@section('title', 'Edit Dosen') 

@section('content')
<div class="container px-4">
    <h2 class="mt-4">{{__('formdosen.title.edit')}}</h2>
    <form method="post" action="{{route('modifdosen', $dosen->id)}}">
        @csrf
		<input type="hidden" name="locale" value="{{$locale}}">
        <div class="mb-3 mt-3">
		    <label for="nip" class="form-label">NIP</label>
		    <input type="text" class="form-control @error('nip') is-invalid @enderror" 
			id="nip" name="nip" value="{{$dosen->nip}}">
			@error('nip')
			<div class="text-danger">{{$message}}</div>
			@enderror
	    </div>
	    <div class="mb-3 mt-3">
		    <label for="nama" class="form-label">{{__('formdosen.input.nama')}}</label>
		    <input type="text" class="form-control @error('nama') is-invalid @enderror" 
			id="nama" name="nama" value="{{$dosen->nama}}">
			@error('nama')
			<div class="text-danger">{{$message}}</div>
			@enderror
	    </div>   
  
        <div class="mb-3 mt-4">
	        <button class="btn btn-success mb-2" type="submit">Submit</button>
            <button class="btn btn-warning mb-2" type="reset">Reset</button>
        </div>
    </form>
	<a href="/editdosen/{{$dosen->id}}/en">English</a> | 
	<a href="/editdosen/{{$dosen->id}}">Indonesia</a> 
</div>
@endsection