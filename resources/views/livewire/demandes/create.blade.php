<div class="row p-4 pt-5">
    <div class="col-md-6">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title"><i class="fas fa-paper-plane fa-2x"></i>Formulaire de demande</h3>
            </div>
            <!-- /.card-header -->
            <form wire:submit.prevent="submitForm()" role="form" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                    @csrf
                    <!-- Champs pour les fichiers PDF -->
                    <div class="form-group">
                        <label>Acte de Naissance (PDF, taille maximale: 500 ko)</label>
                        <input type="file" wire:model="newDemande.acte_naissance" class="form-control-file" accept="application/pdf" required>
                        @error('acteNaissance') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label>Quittance (PDF, taille maximale: 500 ko)</label>
                        <input type="file" wire:model="newDemande.quittance" class="form-control-file" accept="application/pdf" required>
                        @error('quittance') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label>Reçu de Quittance (PDF, taille maximale: 500 ko)</label>
                        <input type="file" wire:model="newDemande.recue_quittance" class="form-control-file" accept="application/pdf" required>
                        @error('recuQuittance') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label>Quitus (PDF, taille maximale: 500 ko)</label>
                        <input type="file" wire:model="newDemande.quitus" class="form-control-file" accept="application/pdf" required>
                        @error('quitus') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label>Demande (PDF, taille maximale: 500 ko)</label>
                        <input type="file" wire:model="newDemande.demande" class="form-control-file" accept="application/pdf" required>
                        @error('demande') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Soumettre</button>
                    <button type="button" wire:click="goToVue()" class="btn btn-danger">Retouner</button>

                </div>
            </form>
        </div>
    </div>
</div>
