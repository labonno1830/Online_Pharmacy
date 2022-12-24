<div class="wrapper" id="navbar">
    <nav>
      <div class="nav-inner">
        <div class="nav_toggle" id="nav-toggle">
          <i class="fa-solid fa-chevron-right"></i>
        </div>
        <ul class="move">
          <a href="{{route('dashboard')}}" class="active">
            <span class="icon">
              <i class="fa-solid fa-house-medical"></i>
            </span>
            <span class="text">Dashboard</span>
          </a>
          <a href="{{route('add_category')}}" class="active">
            <span class="icon">
            <i class="fa-solid fa-list"></i>
            </span>
            <span class="text">Category</span>
          </a>
          <a href="{{route('add_doc_category')}}" class="active">
            <span class="icon">
            <i class="fa-solid fa-layer-group"></i>
            </span>
            <span class="text">Doctors Category</span>
          </a>
          <a href="{{route('add_medicine')}}" class="active">
            <span class="icon">
             <i class="fa-sharp fa-solid fa-tablets"></i>
            </span>
            <span class="text">Medicines</span>
          </a>
          <a href="{{route('customer')}}" class="active">
            <span class="icon">
              <i class="fa-solid fa-users"></i>
            </span>
            <span class="text">Customers</span>
          </a>
          <!-- <a href="{{route('product')}}" class="active">
            <span class="icon">
              <i class="fa-sharp fa-solid fa-tablets"></i>
            </span>
            <span class="text">Medicines</span>
          </a> -->
          <a href="{{route('order')}}" class="active">
            <span class="icon">
            <i class="fa-solid fa-address-book"></i>
            </span>
            <span class="text">Orders</span>
          </a>
         
          <a href="{{route('doctor')}}" class="active">
            <span class="icon">
            <i class="fa-solid fa-user-doctor"></i>
            </span>
            <span class="text">Doctors</span>
          </a>
          
          <a href="{{route('supplier')}}" class="active">
            <span class="icon">
            <i class="fa-solid fa-truck-ramp-box"></i>
            </span>
            <span class="text">Supplier</span>
          </a>
        </ul>
      </div>
      <div>
      <a href="{{route('adminprofile')}}" class="active">
        <span class="icon">
        <i class="fa-solid fa-user"></i>
        </span>
        <span class="text">Admin Profile</span>
      </a>
      <a href="{{route('logout')}}" class="active">
        <span class="icon">
           <i class="fas fa-sign-out-alt"></i>
        </span>
        <span class="text"> logout</span>
      </a>
      </div>
    </nav>
  </div>
  

           <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
           <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<script>
  const showMenu = (toggleId,navbarId,bodyId) => { 

    const toggle = document.getElementById(toggleId), 
     navbar= document.getElementById(navbarId),
     bodypadding = document.getElementById(bodyId)


    if(toggle && navbar){
      toggle.addEventListener
      ('click',() => { 
        navbar.classList.toggle
        ('show')
        toggle.classList.toggle
        ('rotate')
      })
    }

  }
  showMenu('nav-toggle','navbar','body')
</script>