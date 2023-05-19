@extends('layout.layouts')
@section('title')
l'ajout des charges.
@endsection
@section('content')
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('/storage/assets/img/projects/construction-1.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
  
      <h2>Matieres</h2>
      <ol>
        <li><a href="/">Home</a></li>
        <li><a href="/dashboard">Dashboard</a></li>
        <li>Matieres</li>
      </ol>
  
    </div>
  </div>

  <div class="container-fluid" style="position:relative;top:50px;min-height:992px;">
    <button class="go-back" onclick="history.back();">
      <span class="material-symbols-outlined">
      arrow_back
      </span></button> 
    <div class="row d-flex justify-content-center align-items-center">
          <div class="col-md-6 " data-aos="fade">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
  
      <form action="{{route('charges.store')}}" enctype="multipart/form-data"  method="post" >
        @csrf
        <h3 class="text-center">Formulaire des charges :</h3>
        <p class="text-center">Modifier  les Champ s'il vous plait. </p>
        <div class="row gy-3 ">
  
          <div class="col-md-12">
            <input type="text" name="mod" class="form-control" placeholder="MOD" value="{{old('mod')}}">
          </div>
  
          <div class="col-md-12">
            <input type="text" name="mp" class="form-control" placeholder="MP" value="{{old('mp')}}" >
          </div>
  
          <div class="col-md-12">
            <input type="text" name="montant_charges_matier" class="form-control" placeholder="montant_charges_matier" value="{{old('montant_charges_matier')}}" >
          </div>
  
  
          <div class="col-md-12">
            <label for="date_charge">Date charge</label>
              <input type="date" id="date_charge" name="date_charge" class="form-control" value="{{old('date_charge')}}" >
            </div>
  
           
  
            <div class="col-md-12">
                <select name="mode_paiement" class="form-select"  >
                    <option selected>Choisir Mode de Paiement</option>
                    <option value="cheque">cheque</option>
                    <option value="crédit">crédit</option>
                    <option value="espece">espece</option>
                </select>
            </div>
          
  
          <div class="col-md-12">
              <select name="devi_id" class="form-select"  >
                  <option selected>Choisir le Nom de devis</option>
                 @foreach($devis as $devi)
                  <option value="{{$devi->id}}">{{$devi->nom_devi}}</option>
                  @endforeach
                </select>
          </div>
  
          <div class="col-md-12">
              <select name="fournisseur_id" class="form-select"  >
                  <option selected>Choisir le nom de Fournisseur</option>
                 @foreach($fournisseurs as $fournisseur)
                  <option value="{{$fournisseur->id}}">{{$fournisseur->nom}}</option>
                  @endforeach
                </select>
          </div>
          <div class="col-md-12">
            <select name="matier_id" class="form-select"  >
                <option selected>Choisir le nom de matiere</option>
               @foreach($matiers as $matier)
                <option value="{{$matier->id}}">{{$matier->designation}}</option>
                @endforeach
              </select>
        </div>
  
          
  
          <div class="col-md-12 text-center">
            
          
           
            <button class="btn btn-warning" type="submit">Valider</button>
          </div>
  
        </div>
      </form>
    </div><!-- End Quote Form -->
  
      </div>
  </div>
    
@endsection