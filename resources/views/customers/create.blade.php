@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Įrašykite kompaniją:</div>
               <div class="card-body">
                   <form action="{{ route('customers.store') }}" method="POST">
                       @csrf
                       <div class="form-group">
                           <label>Įveskite Vardą: </label>
                           <input type="text" name="name" class="form-control">
                       </div>
                       <div class="form-group">
                           <label>Įveskite Pavardę: </label>
                           <input type="text" name="surname" class="form-control"> 
                       </div>
                       <div class="form-group">
                        <label>Įveskite Tel Nr: </label>
                        <input type="text" name="phone" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Įveskite email: </label>
                        <input type="text" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Įveskite komentarą: </label>
                        <input type="text" name="comment" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Įveskite kompaniją: </label>
                        <input type="text" name="company_id" class="form-control">
                    </div>
                       <button type="submit" class="btn btn-primary">Submit</button>
                   </form>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection