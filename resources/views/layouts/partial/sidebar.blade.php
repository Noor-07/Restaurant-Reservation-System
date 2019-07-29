<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Creative Tim
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class=" {{Request::is('admin/dashboard*')?'active':''}}">
            <a class="nav-link" href="{{route('admin.dashboard')}}">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="{{ Request::is('admin/category*') ? 'active': '' }}">
            <a class="nav-link" href="{{route('category.index')}}">
              
              <p>Category</p>
            </a>
          </li>
          
          <li class="{{ Request::is('admin/item*') ? 'active': '' }}">
            <a class="nav-link" href="{{route('item.index')}}">
              
              <p>item</p>
            </a>
          </li>

          <li class="{{ Request::is('admin/reservation*') ? 'active': '' }}">
            <a class="nav-link" href="{{route('reservation.index')}}">
              
              <p>Reservation</p>
            </a>
          </li>
         
          
          
          
        </ul>
      </div>
    </div>