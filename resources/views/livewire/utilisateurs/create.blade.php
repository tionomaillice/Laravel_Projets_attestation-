<div class="row p-4 pt-5">
    <div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title"><i class="fas fa-user-plus fa-2x"></i> Formulaire de création d'un nouvel utilisateur</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form role="form" wire:submit.prevent="addUser()" method="POST">
        <div class="card-body">
             <div class="d-flex">
                <div class="form-group flex-grow-1 mr-2">
                    <label >Nom</label>
                    <input type="text" wire:model="newUser.nom" class="form-control @error('newUser.nom') is-invalid @enderror">

                    @error("newUser.nom")
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group flex-grow-1">
                    <label >Prenom</label>
                    <input type="text" wire:model="newUser.prenom" class="form-control @error('newUser.prenom') is-invalid @enderror">

                    @error("newUser.prenom")
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group flex-grow-1">
                <label >INE</label>
                <input type="text" wire:model="newUser.ine" class="form-control @error('newUser.ine') is-invalid @enderror">

                @error("newUser.ine")
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>

          <div class="form-group">
            <label >Sexe</label>
            <select class="form-control @error('newUser.sexe') is-invalid @enderror" wire:model="newUser.sexe">
                <option value="">---------</option>
                <option value="0">Homme</option>
                <option value="1">Femme</option>
            </select>
            @error("newUser.sexe")
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
          </div>

          <div class="form-group">
            <label >Adresse e-mail</label>
            <input type="text" class="form-control @error('newUser.email') is-invalid @enderror" wire:model="newUser.email">
            @error("newUser.email")
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
          </div>

          <div class="d-flex">
                <div class="form-group flex-grow-1 mr-2">
                    <label >Telephone 1</label>
                    <input type="text" class="form-control @error('newUser.telephone1') is-invalid @enderror" wire:model="newUser.telephone1">
                    @error("newUser.telephone1")
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group flex-grow-1">
                    <label >Telephone 2</label>
                    <input type="text" class="form-control" wire:model="newUser.telephone2">
                </div>
            </div>
          <!-- ... Autres champs de formulaire ... -->
            <div class="form-group">
            <label>Mot de passe</label>
            <input type="password" class="form-control @error('editUser.password') is-invalid @enderror" wire:model="editUser.password">
                    @error("editUser.password")
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
            </div>
<!-- ... Suite du formulaire ... -->



        </div>
        <!-- /.card-body -->

        <div class="card-footer">

        <button type="submit" wire:click="addUser()"class="btn btn-primary">Enregistrer</button>
        <button type="button" wire:click="goToListUser()" class="btn btn-danger">Retouner à la liste des utilisateurs</button>
        </div>
      </form>
    </div>
    <!-- /.card -->

  </div>
</div>
