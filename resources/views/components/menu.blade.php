<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link {{ setMenuClass('home', 'active') }}">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Accueil
              </p>
            </a>
          </li>

        @can("admin")
        <li class="nav-item {{ setMenuClass('admin.habilitations.', 'menu-open') }}">
            <a href="#"
            class="nav-link {{ setMenuClass('admin.habilitations.', 'active') }}">
              <i class=" nav-icon fas fa-user-shield"></i>
              <p>
                Habilitations
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a
                href="{{ route('admin.habilitations.users.index') }}"
                class="nav-link {{ setMenuClass('admin.habilitations.users.index', 'active') }} "
                >
                  <i class=" nav-icon fas fa-users-cog"></i>
                  <p>Utilisateurs</p>
                </a>
              </li>
            </ul>
        </li>
        {{-- <li class="nav-item {{ setMenuClass('admin.gestattestations.', 'menu-open') }}">
            <a href="#"
                    class="nav-link {{ setMenuClass('admin.gestattestations.', 'active') }}">
                  <i class=" nav-icon fas fa-user-shield"></i>
                  <p>
                    Gestion des attestations
                    <i class="right fas fa-angle-left"></i>
                  </p>
            </a>
            <li class="nav-item">
                    <a href="{{ route('admin.gestattestations.app.index') }}"
                        class="nav-link {{ setMenuClass('admin.gestattestations.app.index', 'active') }}">
                        <i class="nav-icon fas fa-list-ul"></i>
                        <p>Attestations</p>
                    </a>
            </li>
           <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('admin.gestattestations.add.index') }}"
                        class="nav-link {{ setMenuClass('admin.gestattestations.add.index', 'active') }}"
                        >
                        <i class="nav-icon far fa-circle"></i>
                     <p>Reception</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.gestattestations.opp.index') }}"
                        class="nav-link {{ setMenuClass('admin.gestattestations.opp.index', 'active') }}">
                        <i class="nav-icon fas fa-list-ul"></i>
                        <p>Traitement</p>
                    </a>
                </li>
            </ul>
        </li> --}}
        <li class="nav-item  {{ setMenuClass('admin.gestattestations.', 'menu-open') }}">
            <a href="#" class="nav-link  {{ setMenuClass('admin.gestattestations.', 'active') }}">
                <i class="nav-icon fas fa-cogs"></i>
                <p>
                Gestion des attestations
                <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('admin.gestattestations.app.index') }}"
                        class="nav-link {{ setMenuClass('admin.gestattestations.app.index', 'active') }}"
                        >
                    <i class="nav-icon far fa-circle"></i>
                    <p>Attestations</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.gestattestations.add.index') }}" class="nav-link {{ setMenuClass('admin.gestattestations.add.index', 'active') }}">
                    <i class="nav-icon far fa-circle"></i>
                    <p>Reception</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.gestattestations.opp.index') }}"
                        class="nav-link  {{ setMenuClass('admin.gestattestations.opp.index', 'active') }}">
                    <i class="nav-icon fas fa-list-ul"></i>
                    <p>Traitement</p>
                    </a>
                </li>
            </ul>
        <li class="nav-item {{ setMenuClass('admin.duplicatas.', 'menu-open') }}">
            <a href="#"  class="nav-link {{ setMenuClass('admin.duplicatas.', 'active') }}">
                <i class="nav-icon fas fa-cogs"></i>
                <p>
                Duplicatas
                <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('admin.duplicatas.use.index') }}"
                        class="nav-link {{ setMenuClass('admin.duplicatas.opp.index', 'active') }}"
                        >
                    <i class="nav-icon far fa-circle"></i>
                    <p>Reception</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.duplicatas.cat.index') }}"
                        class="nav-link  {{ setMenuClass('admin.duplicatas.cat.index', 'active') }}">
                    <i class="nav-icon fas fa-list-ul"></i>
                    <p>Traitement</p>
                    </a>
                </li>
            </ul>
        <li class="nav-item {{ setMenuClass('admin.tableau.', 'menu-open') }}">
            <a href="#" class="nav-link {{ setMenuClass('admin.tableau.', 'active') }} ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Tableau de bord
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.tableau.view.index')}}"

                class="nav-link {{ setMenuClass('admin.tableau.view.index', 'active') }}">
                {{--  --}}
                  <i class="nav-icon fas fa-chart-line"></i>
                  <p>Vue globale</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-swatchbook"></i>
                  <p>Retraits</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-swatchbook"></i>
                  <p>Statistique</p>
                </a>
              </li>
            </ul>
        </li>
    </li>
    @endcan
        @can('etudiant')
        <li class="nav-item {{ setMenuClass('etudiant.Retrait.', 'menu-open') }}">
        {{--  --}}
            <a href="#"
            class="nav-link {{ setMenuClass('etudiant.Retrait.', 'active') }}">
             {{--  --}}
              <i class=" nav-icon fas fa-user-shield"></i>
              <p>
                Retrait
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a
                href="{{ route('etudiant.Retrait.create.index')}}  "
                {{----}}
                class="nav-link {{ setMenuClass('etudiant.Retrait.create.index', 'active') }}  ">
                {{--  --}}

                  <i class=" nav-icon fas fa-users-cog"></i>
                  <p>Demandes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-fingerprint"></i>
                  <p>Status</p>
                </a>
              </li>
            </ul>
        </li>
        @endcan
        @can("authentificateur")

        <li class="nav-header">AUTH</li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-coins"></i>
                <p>
                    Authentications
                </p>
            </a>
        </li>

        @endcan
        </ul>
      </nav>
