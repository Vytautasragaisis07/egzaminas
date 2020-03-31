        <!-- Main Navbar -->
        <nav class="navbar justify-content-md-end flex-md-nowrap p-0">
            @foreach($accounts as $account)
                <tr>
                    <td>Balansas</td>
                    <td>{{$account->balance}}</td>
                    <td>$</td>
                </tr>
            @endforeach
            <li class="nav-item dropdown">
                <span class="d-none d-md-inline-block"> {{ Account::user()->name }} </span>
                <a class="nav-link dropdown-toggle text-nowrap px-3" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <img class="user-avatar rounded-circle mr-2" src="../../images/avatars/0.png" alt="User Avatar">
                    <span class="d-none d-md-inline-block"> {{ Auth::user()->name }} </span>

                </a>
                <div class="dropdown-menu dropdown-menu-small">

                    <a class="dropdown-item" href="/make_transfer">
                        <i class="material-icons">vertical_split</i>Atlikti pavedima</a>
                    <a class="dropdown-item" href="/transfer_summary">
                        <i class="material-icons">view_module</i>Pavedimu istorija</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="/logout">
                        <i class="material-icons text-danger">&#xE879;</i> Atsijungti </a>
                </div>
            </li>

            <nav class="nav">
                <a href="#" class="nav-link nav-link-icon toggle-sidebar d-md-inline d-lg-none text-center border-left" data-toggle="collapse" data-target=".header-navbar" aria-expanded="false" aria-controls="header-navbar">
                    <i class="material-icons">&#xE5D2;</i>
                </a>
            </nav>
        </nav>

