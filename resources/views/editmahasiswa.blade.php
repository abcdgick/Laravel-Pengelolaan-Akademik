@extends('master') 
@section('title', 'Edit Mahasiswa') 

@section('content')
<div class="container px-4">
    <h2 class="mt-4">{{__('formmaha.title.edit')}}</h2>
    <form method="post" action="{{route('modifmahasiswa', $mahasiswa->id)}}">
        @csrf
		<input type="hidden" name="locale" value="{{$locale}}">
        <div class="mb-3 mt-3">
		    <label for="npm" class="form-label">NPM</label>
		    <input type="text" class="form-control @error('npm') is-invalid @enderror" 
			id="npm" name="npm" value="{{$mahasiswa->npm}}">
			@error('npm')
			<div class="text-danger">{{$message}}</div>
			@enderror
	    </div>
	    <div class="mb-3 mt-3">
		    <label for="nama" class="form-label">{{__('formmaha.input.nama')}}</label>
		    <input type="text" class="form-control @error('nama') is-invalid @enderror" 
			id="nama" name="nama" value="{{$mahasiswa->nama}}">
			@error('nama')
			<div class="text-danger">{{$message}}</div>
			@enderror
	    </div>
        <div class="mb-3 mt-3">
		    <label for="radio1" class="form-label">{{__('formmaha.input.gender')}}</label>
                <div class="form-check">
			        <input type="radio" class="form-check-input" id="radio1" name="kodegender" value="L" @php if($mahasiswa->kodegender == 'L'){print('checked');} @endphp>
			        <label class="form-check-label" for="radio1">{{__('formmaha.input.pil.laki')}}</label>
		        </div>
		    <div class="form-check">
			    <input type="radio" class="form-check-input" id="radio2" name="kodegender" value="P" @php if($mahasiswa->kodegender == 'P'){print('checked');} @endphp>
			    <label class="form-check-label" for="radio2">{{__('formmaha.input.pil.perempuan')}}</label>
		    </div>
	    </div>  	   
  
        <div class="mb-3 mt-4">
	        <button class="btn btn-success mb-2" type="submit">Submit</button>
            <button class="btn btn-warning mb-2" type="reset">Reset</button>
        </div>
    </form>
	<a href="/editmahasiswa/{{$mahasiswa->id}}/en">English</a> | 
	<a href="/editmahasiswa/{{$mahasiswa->id}}">Indonesia</a> 
</div>
@endsection