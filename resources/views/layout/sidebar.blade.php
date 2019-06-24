<div class="sidebar" data-color="purple" data-image="{{asset('assets/img/sidebar-5.jpg')}}">
            
    <!--
        
        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag
        
    -->
    
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="http://www.creative-tim.com" class="simple-text">
                GESTION SEN FORAGE
            </a>
        </div>
        
        <ul class="nav">
            <li class="active">
                <a href="default">
                    <i class="pe-7s-graph"></i>
                    <p>Home</p>
                </a>
            </li>
            <li>
                    <a href="{{ route('villages.index')}}">
                           <i class="pe-7s-news-paper"></i>
                           <p>Villages</p>
                       </a>
                   </li>
            <li>
                    <a href="{{ route('gestionnaires.index')}}">
                        <i class="pe-7s-user"></i>
                        <p>Gestionnaires</p>
                    </a>
                </li>

                <li>
                    <a href="{{ route('comptables.index')}}">
                        <i class="pe-7s-user"></i>
                        <p>Comptables</p>
                    </a>
                </li>
            <li>
                <a href="{{ route('administrateurs.index')}}">
                    <i class="pe-7s-user"></i>
                    <p>Administrateurs</p>
                </a>
            </li>
            <li>
                    <a href="{{ route('clients.index')}}">
                        <i class="pe-7s-user"></i>
                        <p>clients</p>
                    </a>
                </li>
            {{-- <li>
                <a href="clients">
                    <i class="pe-7s-note2"></i>
                    <p><i class="fas fa-user"></i>Clients</p>
                </a>
            </li> --}}

            <li>
                    <a href="{{ route('agents.index')}}">
                        <i class="pe-7s-user"></i>
                        <p>agents</p>
                    </a>
                </li>
            {{-- <li>
                    <a href="agents">
                        <i class="pe-7s-note2"></i>
                        <p><i class="fas fa-user"></i>Agents</p>
                    </a>
                </li> --}}
            {{-- <li>
             <a href="{{ route('villages.index')}}">
                    <i class="pe-7s-news-paper"></i>
                    <p>Villages</p>
                </a>
            </li> --}}
            <li>
                    <a href="{{ route('abonnements.index')}}">
                        <i class="pe-7s-science"></i>
                        <p>Abonnements</p>
                    </a>
                </li>
            <li>
                    <a href="{{ route('compteurs.index')}}">
                        <i class="pe-7s-science"></i>
                        <p>Compteurs</p>
                    </a>
                </li>
            <li>
                <a href="{{ route('consommations.index')}}">
                    <i class="pe-7s-science"></i>
                    <p>Consommations</p>
                </a>
            </li>
            <li>
                    <a href="{{ route('factures.index')}}">
                        <i class="pe-7s-science"></i>
                        <p>Facturations</p>
                    </a>
                {{-- </li>
            <li>
                <a href="{{ route('villages.index')}}">
                    <i class="pe-1s-map-marker"></i>
                    <p>villages</p>
                </a>
            </li> --}}
            {{-- <li>
                <a href="abonnements">
                    <i class="pe-7s-bell"></i>
                    <p>Abonnements</p>
                </a> --}}
            {{-- </li>
                <a href="agents">
                    <i class="pe-7s-bell"></i>
                    <p>Agents</p>
                </a>
            <li class="active-pro">
                <a href="upgrade.blade.php">
                    <i class="pe-7s-rocket"></i>
                    <p>Upgrade to PRO</p>
                </a>
            </li> --}}
        </ul>
    </div>
</div>