
    <div class="row p-4 pt-5">
        <div class="col-12">
          <div class="card">
            <div class="card-header bg-gradient-primary d-flex align-items-center">
              <h3 class="card-title flex-grow-1"><i class="fas fa-list fa-2x"></i> Liste de type attestations</h3>

              <div class="card-tools d-flex align-items-center ">
              <a class="btn btn-link text-white mr-4 d-block" wire:click='toggleShowAddTypeAttestationsForm'><i class="fas fa-user-plus"></i> Nouveau</a>
                <div class="input-group input-group-md" style="width: 250px;">
                  <input type="text" name="table_search" wire:model.debounce.500ms='search' class="form-control float-right" placeholder="Search">

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
                    <th style="width:50%;">Type attestations</th>
                    <th style="width:20%;" class="text-center">Ajouté</th>
                    <th style="width:30%;" class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @if($isAddTypeAttestations)
                        <tr>
                            <td colspan="2" >
                                <input type="text" class="form-control" @error('newTypeAttestationsName') is-invalid @enderror  wire:model="newTypeAttestationsName"/>
                                @error('newTypeAttestationsName')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </td>
                            <td class="text-center">
                                <button class="btn btn-link" wire:click='addNewTypeAttestations'> <i class="fa fa-check"></i>valider</button>
                                <button class="btn btn-link"  wire:click='toggleShowAddTypeAttestationsForm'> <i class="far fa-trash-alt"></i>Annuler</button>
                            </td>
                        </tr>
                        @endif
                    @foreach ($type_attestations as $type_attestation)
                    <tr>
                        <td>{{$type_attestation->nom_type_attestations}}</td>
                        <td class="text-center">{{ optional($type_attestation->created_at)->diffForHumans()}}</td>

                        <td class="text-center">
                            <button class="btn btn-link" > <i class="far fa-edit"></i> </button>
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
                {{$type_attestations->links()}}
              </div>
            </div>
          </div>
          <!-- /.card -->
        </div>
      </div>




