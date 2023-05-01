@extends('layout.layouts')

@section('title')
liste des ouvrages
@endsection

@section('content')
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('/storage/assets/img/projects/construction-1.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>ouvrages</h2>
      <ol>
        <li><a href="/">Home</a></li>
        <li><a href="/dashboard">Dashboard</a></li>
        <li>ouvragees</li>
      </ol>

      <a href={{route('ouvrages.create')}} class="btn btn-warning">
        + Ajouter un ouvrage
      </a>


    </div>
  </div>

  <div class="container-fluid" style="position:relative;top:150px;min-height:992px;">
    <button class="go-back" onclick="history.back();">
      <span class="material-symbols-outlined">
      arrow_back
      </span></button>
      
      <div class="card">
          <div class="card-header">
            @if (session()->has('success'))
            <div class="alert alert-success">
             {{session()->get('success')}}
            </div>
            @endif
            <h4>Nombre d'ouvrages: {{count($ouvrages)}}</h4>        </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Devi</th>
                  <th>Designation</th>
                  <th>Prix Unitaire</th>
                  <th>Qte</th>
                  <th>Unité</th>
              </tr>
              </thead>
              <tbody>
                @foreach($ouvrages as $ouvrage)
                <tr>
                    <td>{{$ouvrage->designation_ouvrage}}</td>
                    <td>{{$ouvrage->prix_unitaire}}</td>
                    <td>{{$ouvrage->qte}}</td>
                    <td>{{$ouvrage->unite}}</td>
                    <td>{{$ouvrage->devis->nom_devi}}</td>
                    <td>
                      @if(auth()->check())
                        @if(auth()->user()->is_admin)
                      <button title="Modifier" class="btn btn-success"><a href="{{route('ouvrages.edit',$ouvrage->id)}}"><span class="material-symbols-outlined">
                        edit
                        </span></a></button>
                        <form action="{{route('ouvrages.destroy',$ouvrage->id)}}" style="display: inline-block;" method="post" id="{{$ouvrage->id}}">
                        @csrf
                        @method('DELETE')    
                        </form>

                        <button title="Supprimer" class="btn btn-danger" onclick="event.preventDefault();
                        if(confirm('vous êtes sure pour la suppression ?'))
                        document.getElementById('{{$ouvrage->id}}').submit();" type="submit"><span class="material-symbols-outlined">
                        delete
                        </span> </button>
                        <button title="View" class="btn view"> <a href="{{route('ouvrages.show',$ouvrage->id)}}"> <span class="material-symbols-outlined">
                            visibility
                            </span></a></button>
                            @else
                        <span style="color:red;"> vous n'êtes pas l'accès pour les actions !</span>
                            @endif
                            @endif
                          </td>
                </tr>
                @endforeach
            </table>
          </div>
          </div>
          </div>








@endsection