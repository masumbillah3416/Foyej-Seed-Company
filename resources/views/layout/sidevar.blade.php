<!-- Sidebar -->
<ul class="navbar-nav    sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Divider -->




  <div class="card    mb-2 bg-abasas-dark">


    <!-- Nav Item - Dashboard -->
    <li class="nav-item active ">
      <a class="nav-link p-3 " href="{{ route('index') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>
    <hr class="sidebar-divider m-1 p-0 ">
    <!-- Product Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed  p-3 " href="#" data-toggle="collapse" data-target="#collapseProducts" aria-expanded="true" aria-controls="collapseProducts">
        <i class="fas fa-fw fa-cog  "></i>
        <span>Products</span>
      </a>
      <div id="collapseProducts" class="collapse" aria-labelledby="headingProducts" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">

          <a class="collapse-item" href="{{ route('products.index') }}">Products</a>
          <a class="collapse-item" href="{{ route('products.create') }}">Add New</a>
          <a class="collapse-item" href="{{ route('categories.store') }}">Categories</a>
          <a class="collapse-item" href="{{ route('product_type.index') }}">Type</a>
          <a class="collapse-item" href=" {{ route('order_return_product.index') }}">Return Product</a>
        </div>
      </div>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider m-1 p-0 ">

    <!--sell -->

    <li class="nav-item">
      <a class="nav-link collapsed  p-3 " href="#" data-toggle="collapse" data-target="#collapseSell" aria-expanded="true" aria-controls="collapseSell">
        <i class="fas fa-fw fa-cog"></i>
        <span>Sell</span>
      </a>
      <div id="collapseSell" class="collapse" aria-labelledby="headingSell" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">

          <a class="collapse-item" href="{{ route('orders.create') }}">Sell Now</a></a>
          <a class="collapse-item" href="{{ route('orders.index') }}">View All</a>

        </div>
      </div>
    </li>


  <!--sell -->
    <!-- Divider -->
    <hr class="sidebar-divider m-1 p-0 ">

<!--purchase -->
<li class="nav-item">
      <a class="nav-link collapsed  p-3 " href="#" data-toggle="collapse" data-target="#collapsePurchase" aria-expanded="true" aria-controls="collapsePurchase">
        <i class="fas fa-fw fa-cog"></i>
        <span>Purchase</span>
      </a>
      <div id="collapsePurchase" class="collapse" aria-labelledby="headingPurchase" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">

          <a class="collapse-item" href="{{ route('purchases.create') }}">Add New</a>
          <a class="collapse-item" href="{{ route('purchases.index') }}">View All</a>

        </div>
      </div>
    </li>


<!--purchase -->

  </div>
  <!-- ///////////////////////////////////////////////////////////////////////////////////// -->
  <div class="card  mb-2 bg-abasas-dark ">


    <!-- Nav Item - Dashboard -->
    <li class="nav-item  ">
      <a class="nav-link p-3 " href="{{ route('customers.index') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Customer</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider m-1 p-0 ">

    <!--supplier  Collapse Menu -->
    <li class="nav-item  ">
      <a class="nav-link p-3 " href="{{ route('suppliers.index') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Supplier</span></a>
    </li>



    <!-- Divider -->
    <hr class="sidebar-divider m-1 p-0 ">

    <!--Category  Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed  p-3 " href="#" data-toggle="collapse" data-target="#collapseStaff" aria-expanded="true" aria-controls="collapseStaff">
        <i class="fas fa-fw fa-cog"></i>
        <span>Staff</span>
      </a>
      <div id="collapseStaff" class="collapse" aria-labelledby="headingStaff" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <a class="collapse-item" href="{{route('staffs.index')}}">View All</a>
          <a class="collapse-item" href="{{{route('salaries.index')}}}">Salary</a>

        </div>
      </div>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider m-1 p-0 ">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item  ">
      <a class="nav-link p-3 " href="{{ route('barcode') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Barcode Print</span></a>
    </li>

  </div>
  <!-- ///////////////////////////////////////////////////////////////////////////////////// -->

  <div class="card  mb-2   bg-abasas-dark  ">


    <hr class="sidebar-divider m-1 p-0 ">

    <!-- Nav Item - Dashboard -->
  
    <li class="nav-item">
      <a class="nav-link collapsed  p-3 " href="#" data-toggle="collapse" data-target="#collapseExpenses" aria-expanded="true" aria-controls="collapseExpenses">
        <i class="fas fa-fw fa-cog"></i>
        <span>Expenses</span>
      </a>
      <div id="collapseExpenses" class="collapse" aria-labelledby="headingExpenses" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">

          <a class="collapse-item" href="{{ route('daily-expenses.index') }}">Daily</a>
          <a class="collapse-item" href="{{ route('expenses.index') }}">Monthly</a>
          <a class="collapse-item" href="{{ route('expenses.index') }}">Yearly</a>

        </div>
      </div>
    </li>

    <hr class="sidebar-divider m-1 p-0 ">

    <!-- Nav Item - Dashboard -->
  
    <li class="nav-item">
      <a class="nav-link collapsed  p-3 " href="#" data-toggle="collapse" data-target="#collapseReport" aria-expanded="true" aria-controls="collapseReport">
        <i class="fas fa-fw fa-cog"></i>
        <span>Report</span>
      </a>
      <div id="collapseReport" class="collapse" aria-labelledby="headingReport" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">

        <a class="collapse-item" href="{{ route('expenses.create') }}">Over All</a>
          <a class="collapse-item" href="{{ route('expenses.create') }}">Sale</a>
          <a class="collapse-item" href="{{ route('expenses.index') }}">Purchase</a>
          <a class="collapse-item" href="{{ route('expenses.index') }}">Profit</a>
          <a class="collapse-item" href="{{ route('expenses.index') }}">Expense</a>

        </div>
      </div>
    </li>
    
    <!-- Divider -->
    <hr class="sidebar-divider m-1 p-0 ">
    <!-- Nav Item - Dashboard -->
    <li class="nav-item  ">
      <a class="nav-link p-3 " href="{{ route('goals.index') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Goal</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider m-1 p-0 ">
    <!-- Nav Item - Dashboard -->
    <li class="nav-item  ">
      <a class="nav-link p-3 " href="index">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Logout</span></a>
    </li>
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center  d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
  </div>


</ul>
<!-- End of Sidebar -->