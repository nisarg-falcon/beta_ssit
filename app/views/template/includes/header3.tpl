<header id="upper-header3">
        <nav class="navbar navbar-expand-lg navbar-light py-md-4 py-lg-0">
            <div class="container d-flex outer-nav">
            <button type="button" class="navbar-toggler navbar-dark flex-row p-md-2 p-lg-2 " data-toggle="collapse" data-target="#navbarSupportContent2" aria-controls="navbarSupportContent" aria-expanded="false">
                <span class="navbar-toggler-text">SKIP TO SECTION</span>&nbsp;    
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse inner-nav navbar-collapse " id="navbarSupportContent2">
            {if $data['navitems'] != null}
                <ul class="navbar-nav nav3 nav nav-fill">
                {foreach $data['navitems'] as $item}
                    <li class="nav-item nav3-item">
                        <a class="nav-link h6 my-0" href="#{$item[key($item)]}">{key($item)}</a>
                    </li>
                {/foreach}
                </ul>
            {/if}
                
                
            </div>
            </div>
        </nav>
</header>