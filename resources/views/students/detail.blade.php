@extends('layout.main')

@section('title','detail mahasiswa')

 
@section('container')
<div class="container">
      <div class="row">
          <div class="col-6">
            <h1 class="mt-3">detail mahasiswa</h1>  
            
              
                 <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $student-> name}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{$student-> gender}}</h6>
                        <p class="card-text">{{ $student-> majors}}</p>
                        <p class="card-text">{{ $student-> nim}}</p>
                        <p class="card-text">{{ $student-> birth}}</p>
                        <p class="card-text">{{ $student-> email}}</p>
                        <p class="card-text">{{ $student-> phone}}</p>
                        <a href="" class="badge badge-success"> edit</a>
                        <a href="" class="badge badge-danger"> delete</a>
                        <a href="/students" class="badge badge-primary"> kembali</a>
                    </div>
                    </div>
           </div>
      </div>
</div>
@endsection 
   