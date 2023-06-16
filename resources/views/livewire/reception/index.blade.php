
<div class="row p-4 pt-5">
    <div class="col-12">
      <div class="card">
        <div class="card-header bg-gradient-primary d-flex align-items-center">
          <h3 class="card-title flex-grow-1"><i class="fas fa-list fa-2x"></i> Liste des demandes</h3>

          <div class="card-tools d-flex align-items-center ">
          <a class="btn btn-link text-white mr-4 d-block"><i class="fas fa-user-plus"></i>Reception</a>
            <div class="input-group input-group-md" style="width: 250px;">
              <input type="text" name="table_search"  wire:model='search' class="form-control float-right" placeholder="Search">

              <div class="input-group-append">
                <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0 table-striped" style="height: 300px;">
          <table class="table table-head-fixed">
            <thead>
              <tr>
                <th style="width:5%;">Nom</th>
                <th style="width:20%;">Date</th>
                <th style="width:15%;">Numero</th>
                <th  style="width:30%;">Status</th>
                <th class="text-center"  style="width:30%;"></i>Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($demandes as $demande )
                <tr >
                    <td>{{$demande->nom}}</td>
                    <td>{{$demande->date}}</td>
                    <td>{{$demande->numero}}</td>
                    <td> <span class="tag tag-success">{{ ($demande->created_at)}}</span></td>
                    <td class="text-center">
                        {{-- <a href="{{ route('demandes.download', $demandes->id) }}" download class="btn btn-link"> --}}
                        <button class="btn btn-link" wire:click="goToDowDemandes()"><i class="fas fa-arrow-down"></i> </button>
                        <button class="btn btn-link"> <i class="far fa-trash-alt"></i> </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <div class="float-right">
            {{-- {{$demandes->links()}} --}}
          </div>
        </div>
      </div>
      <!-- /.card -->
    </div>
  </div>





