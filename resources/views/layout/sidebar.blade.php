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
                    <p><i class="fas fa-columns"></i>Home</p>
                </a>
            </li>
            <li>
                <a href="Admin">
                    <i class="pe-7s-user"></i>
                    <p><i class="fas fa-user"></i>administrateurs</p>
                </a>
            </li>
            <li>
                <a href="compteurs">
                    <i class="pe-7s-note2"></i>
                    <p><i class="fas fa-user"></i>compteurs</p>
                </a>
            </li>
            <li>
                <a href="factures">
                    <i class="pe-7s-news-paper"></i>
                    <p><i class="fas fa-user"></i>facturation</p>
                </a>
            </li>
            <li>
                <a href="clients">
                    <i class="pe-7s-science"></i>
                    <p><i class="fas fa-user"></i>clients</p>
                </a>
            </li>
            <li>
                <a href="{{ route('villages.index')}}">
                    <i class="pe-1s-map-marker"></i>
                    <p>villages</p>
                </a>
            </li>
            <li>
                <a href="abonnements">
                    <i class="pe-7s-bell"></i>
                    <p>Abonnements</p>
                </a>
            </li>
                <a href="agents">
                    <i class="pe-7s-bell"></i>
                    <p>Agents</p>
                </a>
            <li class="active-pro">
                <a href="upgrade.blade.php">
                    <i class="pe-7s-rocket"></i>
                    <p>Upgrade to PRO</p>
                </a>
            </li>
        </ul>
    </div>
</div>