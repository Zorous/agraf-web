@extends('layout.layouts')

@section('title')
liste des Ouvriers
@endsection

@section('content')
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('/storage/assets/img/services.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>Ouvriers</h2>
      <ol>
        <li><a href="/">Home</a></li>
        <li>Ouvriers</li>
      </ol>

    </div>
  </div>
  
<div class="container-fluid" style="position:relative;top:50px;min-height:992px;">
    <div class="row">
        <div class="col-xl-12">
            @if (session()->has('success'))
            <div class="alert alert-success">
             {{session()->get('success')}}
            </div>
            @endif
            <h4>Nombre de Ouvriers: {{count($ouvriers)}}</h4>
            <table class="table table-secondary table-striped">
                <tr>
                    <th>nom_projet</th>
                    <th>nom</th>
                    <th>prenom</th>
                    <th>telephone</th>
                    <th>cin</th>
                    <th>type</th>
                    <th>salaire_par_semaine</th>
                    <th>action</th>
                </tr>
                @foreach($ouvriers as $ouvrier)
                <tr>
                    <td>{{$ouvrier->chantier->designation}}</td>
                    <td>{{$ouvrier->nom}}</td>
                    <td>{{$ouvrier->prenom}}</td>
                    <td>{{$ouvrier->telephone}}</td>
                    <td>{{$ouvrier->cin}}</td>
                    <td>{{$ouvrier->type}}</td>
                    <td>{{$ouvrier->salaire_par_semaine}}</td>
                    <td>
                      @if(auth()->check())
                        @if(auth()->user()->is_admin)
                      <button title="Modifier" class="btn btn-success"><a href="{{route('ouvriers.edit',$ouvrier->id)}}"><span class="material-symbols-outlined">
                        edit
                        </span></a></button>
                        <form action="{{route('ouvriers.destroy',$ouvrier->id)}}" style="display: inline-block;" method="post" id="{{$ouvrier->id}}">
                        @csrf
                        @method('DELETE')    
                        </form>

                        <button title="Supprimer" class="btn btn-danger" onclick="event.preventDefault();
                        if(confirm('vous etez sure pour la suppression ?'))
                        document.getElementById('{{$ouvrier->id}}').submit();" type="submit"><span class="material-symbols-outlined">
                        delete
                        </span> </button>
                        <button title="View" class="btn btn-info"> <a href="{{route('ouvriers.show',$ouvrier->id)}}"> <span class="material-symbols-outlined">
                            visibility
                            </span></a></button>
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