<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="dashboard">
          <i class="bi bi-grid"></i>
          <span>MENU</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Gestion Docteur</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('docteur.index')}}">
              <i class="bi bi-circle"></i><span>Liste Docteur</span>
            </a>
          </li>
          <li>
            <a href="{{route('docteur.create')}}">
              <i class="bi bi-circle"></i><span>Ajouter Docteur</span>
            </a>
          </li>

        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Gestion Patient</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('patient.index')}}">
              <i class="bi bi-circle"></i><span>Liste Patient</span>
            </a>
          </li>
          <li>
            <a href="{{route('patient.create')}}">
              <i class="bi bi-circle"></i><span>Ajouter Patient</span>
            </a>
          </li>

        </ul>
    </li><!-- End Charts Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nave" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Gestion Rendez-vous</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nave" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('rendezvous.index')}}">
              <i class="bi bi-circle"></i><span>Liste Rensez-vous</span>
            </a>
          </li>
          <li>
            <a href="{{route('rendezvous.create')}}">
              <i class="bi bi-circle"></i><span>Ajouter Rendez-vous</span>
            </a>
          </li>
          <li>
          </li>
        </ul>
      </li><!-- End Icons Nave -->


      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav_2" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Gestion Specialité</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav_2" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('specialite.index')}}">
              <i class="bi bi-circle"></i><span>Liste specialité</span>
            </a>
          </li>
          <li>
            <a href="{{route('specialite.create')}}">
              <i class="bi bi-circle"></i><span>Ajouter specialité</span>
            </a>
          </li>

        </ul>








    </ul>

  </aside>
