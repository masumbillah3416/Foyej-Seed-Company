@extends('layout.app')
@section('content')





<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card mb-4 shadow">

        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> নতুন কাস্টমার যোগ করুন </h6>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('customers.store') }}">
                @csrf
                <div class="form-row align-items-center">
                    <div class="col-auto">
                        <span class="text-dark pl-2"> কাস্টমারের নাম </span>
                        <input type="text" name="name" class="form-control mb-2">
                    </div>
                    <div class="col-auto">

                        <span class="text-dark pl-2"> নাম্বার </span>
                        <input type="text" name="phone"  class="form-control mb-2" >
                    </div>
                    <div class="col-auto">

                        <span class="text-dark pl-2"> ঠিকানা </span>
                        <input type="text" name="address"  class="form-control mb-2">
                    </div>


                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mt-3"> সাবমিট </button>
                    </div>

                </div>

            </form>
        </div>
    </div>



    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3  bg-abasas-dark ">
        <nav class="navbar navbar-dark">
                <a class="navbar-brand text-light"> কাস্টমার তালিকা </a>
             </nav>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered" id="dataTable1" width="100%" cellspacing="0">
                    <thead class="bg-abasas-dark">


                        <tr>
                            <th>#</th>
                            <th> নাম </th>
                            <th> নাম্বার </th>
                            <th> ঠিকানা </th>
                            <th> বকেয়া </th>
                            <th> একশন </th>
                        </tr>
                    </thead>
                    <tfoot class="bg-abasas-dark">
                    <tr>
                            <th>#</th>
                            <th> নাম </th>
                            <th> নাম্বার </th>
                            <th> ঠিকানা </th>
                            <th> বকেয়া </th>
                            <th> একশন </th>
                        </tr>

                    </tfoot>
                    <tbody>

                        <?php $i = 1; ?>
                        @foreach ($customers as $customer)
                        <?php $id = $customer->id; ?>
                        <tr class="data-row">
                            <td class="iteration">{{$i++}}</td>
                            <td id="supplierName">{{$customer->name}}</td>
                            <td id="supplierPhone">{{$customer->phone}}</td>
                            <td id="supplierAddress">{{$customer->address}}</td>
                            <td id="supplierDue">{{$customer->due}}</td>




                            <td class="align-middle">
                                <button type="button" class="btn btn-success" id="edit-supplier-button" data-item-id={{$id}} value ={{$id}}> <i class="fa fa-edit" aria-hidden="false"> </i></button>


                                <form method="POST" action="{{ route('customers.destroy',  $customer->id )}} " id="delete-form-{{ $customer->id }}" style="display:none; ">
                                    {{csrf_field() }}
                                    {{ method_field("delete") }}
                                </form>




                                <button onclick="if(confirm('are you sure to delete this')){
				document.getElementById('delete-form-{{ $customer->id }}').submit();
			}
			else{
				event.preventDefault();
			}
			" class="btn btn-danger btn-sm btn-raised">
                                    <i class="fa fa-trash" aria-hidden="false">

                                    </i>
                                </button>
                                <button type="button" class="btn btn-success" > <a href="{{ route('customers.show',  $customer->id )}}"> <i class="fa fa-eye text-white" aria-hidden="false"> </i> </a></button>

                               

                            </td>

                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>


<!-- Attachment Modal -->
<div class="modal fade" id="supplier-edit-modal" tabindex="-1" role="dialog" aria-labelledby="supplier-edit-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="edit-modal-label ">কাস্টমার সংশোধন </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="attachment-body-content">
                <form id="edit-form" class="form-horizontal" method="POST" action="{{route('customersupdate')}}">
                    @csrf



                    <!-- id -->
                    <div class="form-group">
                        <label class="col-form-label" for="customerEditId"> নাম্বার </label>
                        <input type="number" name="id" class="form-control" id="customerEditId" required readonly>
                    </div>
                    <!-- /id -->
                    <!-- name -->
                    <div class="form-group">
                        <label class="col-form-label" for="editModalSupplierName"> নাম </label>
                        <input type="text" name="name" class="form-control" id="editModalSupplierName" required >
                    </div>
                    <!-- /name -->
                    
                    <!-- name -->
                    <div class="form-group">
                        <label class="col-form-label" for="editModalSupplierPhone"> নাম্বার </label>
                        <input type="text" name="phone" class="form-control" id="editModalSupplierPhone" required >
                    </div>
                    <!-- /name -->

                    <!-- Address -->
                    <div class="form-group">
                        <label class="col-form-label" for="editModalSupplierAddress"> ঠিকানা </label>
                        <input type="text" name="address" class="form-control" id="editModalSupplierAddress" required >
                    </div>
                    <!-- /Address -->

         

                    <div class="form-group">

                        <input type="submit" value=" সাবমিট " class="form-control btn btn-success">
                    </div>
                    <!-- /description -->
                



                </form>
            </div>

        </div>
    </div>
</div>
</div>
<!-- /Attachment Modal -->



@endsection