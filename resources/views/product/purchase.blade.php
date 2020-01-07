@extends('layout.app')
@section('content')


<!-- Content Row -->
<div class="container-fluid ">

  <div class="row ">

    <!-- main body start -->
    <div class="col-xl-9 col-lg-9 col-md-9   ">





      <div class="card mb-4 shadow">

        <div class="card-header py-3 bg-dark  text-light ">
        <nav class="navbar ">
                <a class="navbar-brand">Purchase New</a>
               <!-- <button class="btn btn-success purchaseProductCreateProduct" id="create-button">new Product</button> -->
            </nav>
                
        </div>
        <div class="card-body">
          <form id="purchaseProductInputForm">

            <div class="form-row align-items-center">
              <div class="col-auto">
              <input type="text" id="productCheckLink" size="10" value="{{route('product_check_api')}} " class="form-control  mb-2" hidden>
              <input type="text" id="productViewLink" size="10" value="{{route('product_view_api')}} " class="form-control  mb-2" hidden>
              </div>
              <div class="col-auto">
                <span class="text-dark  pl-2"> Product Id</span>
                <input type="text" name="product_id" id="purchaseProductInputId" size="10" value="" class="form-control  mb-2">
              </div>

              <div class="col-auto">
                <span class="text-dark  pl-2"> Product Name</span>
                <input type="text" name="name" id="purchaseProductInputName" size="20" value="" class="form-control  mb-2"  disabled="true" >
              </div>
              <div class="col-auto">

                <span class="text-dark pl-1"> Price</span>
                <input type="text" name="price" id="purchaseProductInputPrice" size="6" value=0 class="form-control  mb-2 " disabled="true">
              </div>
              <div class="col-auto">

                <span class="text-dark pl-1"> Quantity</span>
                <input type="text" name="quantity" id="purchaseProductInputQuantity" size="6" value=0 class="form-control  mb-2 " disabled="true">
              </div>



              <div class="col-auto">

                <span class="text-dark pl-1"> Total</span>
                <input type="text" name="total" id="purchaseProductInputTotal" size="10" value=0 class="form-control  mb-2 " disabled="true" >
              </div>



              <div class="col-auto">
                <button type="button" id="purchaseProductInputSubmit" class="btn btn-success mt-3" disabled="true">Submit</button>
              </div>

            </div>

          </form>
          <div id="purchaseProductError" class="text-danger "> Product Not Fount , Try again !!! </div>
          

          
        </div>
      </div>


      <!-- Begin Page Content -->





      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <b>Product list</b>

        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped table-bordered" id="purchaseProductTable" width="100%" cellspacing="0">
              <thead class="thead-dark">


                <tr>
                  <th>#</th>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Price</th>
                  <th>Quantity</th>
                  <th>Total</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tfoot class="thead-dark">
                <tr>
                  <th>#</th>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Price</th>
                  <th>Quantity</th>
                  <th>Total</th>
                  <th>Action</th>
                </tr>

              </tfoot>
              <tbody id="purchaseProductTableTbody" >
              </tbody>
            </table>

          </div>
        </div>

      </div>



    </div>

    <!-- Left Sidebar Start -->
    <div class="col-xl-3 col-lg-3 col-md-3   ">



      <!-- Supplier Area Start -->
      <div class="col-xl-12 col-md-12 mb-4  text-center  bg-dark p-3 ">
        <div class="card border-none   bg-dark  h-100 p-4">
          <h3 class="text-white">Supplier</h3>
          <div class="card-body">
            <div class="row no-gutters ">


              <form method="GET" id="purchasePageSupplierForm">
                @csrf
                <div class="form-row ">
                  <div class="col-auto">
                    <span class="text-light pl-2"> Supplier Phone</span>
                    <form method="post">


                    <input type="text" id="supplierViewLink" size="10" value="{{route('supplier_view_api')}} " class="form-control  mb-2" hidden>
                    <input type="text" id="supplierCheckLink" size="10" value="{{route('supplierscheck_api')}} " class="form-control  mb-2" hidden>
                      <input type="number" name="phone" id="purchasePageSupplierPhoneField" ">
                    <input type=" number" name="efsd" hidden ">
                  </form>
                  </div>
                </div>
              </form>

            </div>
            <div class=" text-samall text-danger" id="purchasePageAddSupplierError">
                  </div>

                  <div id="purchasePageSupplierView">
                    <div id="purchasePageSupplierName" class="text-light font-weight-bold"></div>
                    <div id="purchasePageSupplierPhone" class="text-light "></div>
                    <div id="purchasePageSupplieCompany" class="text-light "></div>
                    <div id="purchasePageSupplierDue" class="text-danger font-weight-bold"></div>
                  </div>

                  <form method="POST" action="{{ route('suppliers.store') }} " id="purchasePageAddSupplierForm">
                    @csrf
                    <div class="form-row a">
                      <div class="col-auto">

                        <input type="text" id="purchasePageAddSupplierFormName" name="name" placeholder="name" class="form-control mb-2">
                      </div>
                      <div class="col-auto">
                        <input type="text" id="purchasePageAddSupplierFormPhone" name="phone" class="form-control mb-2" hidden>
                      </div>
                      <div class="col-auto">
                        <input type="text" id="purchasePageAddSupplierFormAddress" name="address" placeholder="address" class="form-control mb-2">
                      </div>
                      <div class="col-auto">
                        <input type="text" id="purchasePageAddSupplierFormCompany" name="company" placeholder="company" class="form-control mb-2">
                      </div>

                      <div class="col-auto">
                        <button type="button" id="purchasePageAddSupplierButton" class="btn btn-primary mt-3">done</button>
                      </div>



                  </form>
                </div>

            </div>
          </div>
          <!-- Growth Card Example -->
        </div>
      
      


        <!-- sumit Area Start -->


<div class="col-xl-12 col-md-12 mb-4  text-center  bg-dark p-3 ">
        <div class="card border-none   bg-dark  h-100 p-4">

          <div class="card-body">
            <div class="row no-gutters ">
              <div class="font-weight-blod">Total:</div>
            </div>
          </div>
          <!-- Growth Card Example -->
        </div>
      </div>

<!-- sumit Area End -->

+
      
      </div>
<!-- supplier area End  -->














    </div>
  </div>

  <!-- Content Row -->



  
<!-- Create new product -->
<div class="modal fade" id="create-modal" tabindex="-1" role="dialog" aria-labelledby="edit-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="edit-modal-label ">Add Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="attachment-body-content">

                <form method="POST" id="create-form" action="{{ route('products.store') }}">
                    @csrf


                    <div class="form-group">
                        <label for="productName">Product Name</label>
                        <input type="text" name="name" class="form-control" id="productName" placeholder="Enter product name">
                    </div>

                    <div class="form-group">
                        <label for="catagory_id">Procuct Category</label>
                        <select class="form-control form-control" name="category_id" id="catagory_id">
                            <option value="0" selected="selected">Select Category </option>
                            @foreach ($categories as $category)
                            <option value="{{$category->id}}"> {{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="product_type_id">Procuct Type</label>
                        <select class="form-control form-control" name="product_type_id" id="product_type_id">

                            <option value="0" selected="selected">Select Product Type</option>
                            @foreach ($productTypes as $productType)
                            <option value="{{$productType->id}}"> {{$productType->name}}</option>
                            @endforeach
                        </select>
                    </div>



                    <div class="form-group">
                        <label for="price">Sell Price</label>
                        <input type="number" name="price" class="form-control" id="price" placeholder="120">
                    </div>

                    <div class="form-group">
                        <label for="lowLimit">Low Limit</label>
                        <input type="number" name="low_limit" class="form-control" id="lowLimit" placeholder="Enter Lowest Limit">
                    </div>


                    <button type="button" class="btn btn-primary">Submit</button>



                </form>



            </div>

        </div>
    </div>
</div>
</div>
<!-- /Create new product-->

  @endsection