@extends('layout.main')

@section('title','tambah data mahasiswa')

 
@section('container')
<div class="container">
      <div class="row">
          <div class="col-8">
            
            <div class="col-lg-12">
                        <div class="card mt-3">
                            <div class="card-header bg-info">
                                <h4 class="m-b-0 text-white">Form tambah data mahasiswa</h4>
                            </div>
                            <div class="card-body">
            <form method="post" action="/students">  
            @csrf         
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nama ">Name</label>
                    <input type="text" name="name" class="form-control" id="nama" placeholder="masukan nama">
                </div>
                
                    <div class="form-group">
                    <label for="gender">gender</label>
                            <select id="gender" name="gender" class="form-control">
                                <option selected>male</option>
                                <option>female</option>
                            </select>
                    </div>
                    <div class="form-group">
                    <label for="majors">jurusan</label>
                            <select id="majors" name="majors" class="form-control">
                                <option selected>teknik informatika</option>
                                <option>sistem infromasi</option>
                            </select>
                    </div>
                   
                <div class="form-group">
                    <label for="nim ">NIM</label>
                    <input type="text" name="nim" class="form-control" id="nim" placeholder="NIM">
                </div>
               
                <div class="form-group">
                     <label class="control-label">Date of Birth</label>
                       <input type="date"  name="birth" class="form-control">
                 </div>
                
                

                <div class="form-group">
                    <label for="email ">Email</label>
                    <input type="text" name="email" class="form-control" id="email" placeholder="email">
                </div>

                <div class="form-group">
                    <label for="phone ">No. Hp</label>
                    <input type="text" name="phone" class="form-control" id="phone" placeholder="No. hp">
                </div>
                <button type="submit" class="btn btn-primary" >Tambah Data!</button>
                </div>
                </div>

            </form>
                
                         </div>
                        </div>
                    </div>
                 </div>
             </div>
         </div>

           </div>
      </div>
</div>
@endsection 
   