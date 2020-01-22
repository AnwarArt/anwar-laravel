@extends('layout.main')

@section('title','data mahasiswa')

 
@section('container')
<div class="container">
      <div class="row">
          <div class="col-6">
            <h1 class="mt-3">daftar mahasiswa</h1>  
            
            <a href="/students/create" class="btn btn-primary my-3" > tambah data mahasiswa</a>
                 @foreach ($students as $student )
                    <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                   {{$student-> name}}                   

                    <a href="/students/ {{$student-> id}} " class="badge badge-info"> Detail</a>
                    </li>
                @endforeach
                    </ul>
           </div>
      </div>
</div>
@endsection 
   