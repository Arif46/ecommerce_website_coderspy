@extends('layouts.app')

@section('content')

<div class="col-lg-36">
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">{{__('Add Purchase')}}</h3>
        </div>

        <!--Horizontal Form-->
        <!--===================================================-->
        <form class="form-horizontal" action="{{ route('purchase.store') }}" method="POST" enctype="multipart/form-data">
             <div class="row">
                            <div class="col-sm-6">
                               <div class="form-group row">
                                    <label for="supplier_sss" class="col-sm-4 col-form-label" >                         Supplier <i class="text-danger">*</i>
                                    </label>
                                    <div class="col-sm-6">
                                        <select  class="form-control"> 
                                            <option value=" ">Select One</option>
                                            
                                            <option value="11">Osker</option>
                                            
                                            <option value="12">Lorence</option>
                                            
                                            <option value="3">Harper</option>
                                            
                                            <option value="4">Henry</option>
                                            
                                            <option value="5">James</option>
                                            
                                            <option value="6">Robert</option>
                                            
                                            <option value="7">David</option>
                                            
                                            <option value="8">Richard</option>
                                            
                                            <option value="9">Thomas</option>
                                            
                                            <option value="10">Daniel</option>
                                            
                                        </select>
                                    </div>
                                                                      <div class="col-sm-2">
                                        <a class="btn btn-success" title="Add New Supplier" href="https://saleserpnew.bdtask.com/saleserp_v9.5-demo/Csupplier"><i class="fa fa-user"></i></a>
                                    </div>
                                                                </div> 
                            </div>

                             <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="date" class="col-sm-4 col-form-label">Purchase Date                                        <i class="text-danger">*</i>
                                    </label>
                                    <div class="col-sm-8">
                                                                                <input type="text" required="" tabindex="2" class="form-control datepicker hasDatepicker" name="purchase_date" value="2020-07-07" id="date" aria-required="true">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                         <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="invoice_no" class="col-sm-4 col-form-label">  Invoice No                                        <i class="text-danger"></i>
                                    </label>
                                    <div class="col-sm-6">
                                        <input type="text" tabindex="3" class="form-control" name="chalan_no" placeholder="Invoice No" id="invoice_no">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                               <div class="form-group row">
                                    <label for="adress" class="col-sm-4 col-form-label">Details                                    </label>
                                    <div class="col-sm-8">
                                        <textarea class="form-control" tabindex="4" id="adress" name="purchase_details" placeholder=" Details" rows="1"></textarea>
                                    </div>
                                </div> 
                            </div>
                        </div>
                        <br>
                         <div class="row">
                              <div class="col-sm-6" id="payment_from_1">
                                <div class="form-group row">
                                    <label for="payment_type" class="col-sm-4 col-form-label">Payment Type <i class="text-danger">*</i></label>
                                    <div class="col-sm-6">
                                        <select name="paytype" class="form-control " required="" onchange="bank_paymet(this.value)" tabindex="-1" aria-hidden="true" aria-required="true">
                                            <option value="1">Cash Payment</option>
                                            <option value="2">Bank Payment</option>
                                          
                                        </select>

                                     
                                    </div>
                                 
                                </div>
                            </div>
                             <div class="col-sm-6" id="bank_div" style="display: none;">
                            <div class="form-group row">
                                <label for="bank" class="col-sm-4 col-form-label">Bank <i class="text-danger">*</i></label>
                                <div class="col-sm-8">
                                   <select name="bank_id" class="form-control bankpayment select2-hidden-accessible" id="bank_id" tabindex="-1" aria-hidden="true" style="width: 100%;">
                                        <option value="">Select Location</option>
                                                                                    <option value="CMSLVZIKKV">Demo Bank</option>
                                                                                    <option value="THM51333JI">Lorem Bank</option>
                                                                            </select>
                                 
                                </div>
                             
                            </div>
                        </div>
                        </div>

<br>

            @csrf
            <div class="panel-body">

                <div class="form-group start_div">
                    <input name="active_status" type="hidden" value="1">
                  <div class="row">
                    <div class="col-sm-2">
                          <label>{{__('Item Information')}}</label>
                          <br>
                        <input type="number" placeholder="Product Information" id="itemInformation" name="item_Information" class="form-control {{ $errors->has('Item Information') ? ' is-invalid' : '' }}" required>
                        @if ($errors->has('title'))
                            <span class="invalid-feedback" role="alert">
                                <strong style="color: red">{{ $errors->first('Item Information') }}</strong>
                            </span>
                        @endif
                    </div>
                     <div class="col-sm-2">
                          <label>{{__('Stock/Qnt')}}</label>
                          <br>
                        <input type="number" placeholder="0.00" id="stock/Qnt" name="stock/Qnt" class="form-control {{ $errors->has('Stock/Qnt') ? ' is-invalid' : '' }}" required>
                        @if ($errors->has('title'))
                            <span class="invalid-feedback" role="alert">
                                <strong style="color: red">{{ $errors->first('Stock/Qnt') }}</strong>
                            </span>
                        @endif
                    </div>
                      
                       <div class="col-sm-2">
                          <label>{{__('Qnty')}}</label>
                          <br>
                        <input type="number" placeholder="0.00" id="qnty" name="qnty" class="form-control {{ $errors->has('Qnty') ? ' is-invalid' : '' }}" required>
                        @if ($errors->has('title'))
                            <span class="invalid-feedback" role="alert">
                                <strong style="color: red">{{ $errors->first('Qnty') }}</strong>
                            </span>
                        @endif
                    </div>

                      <div class="col-sm-2">
                          <label>{{__('Rate')}}</label>
                          <br>
                        <input type="number" placeholder="0.00" id="rate" name="rate" class="form-control {{ $errors->has('Rate') ? ' is-invalid' : '' }}" required>
                        @if ($errors->has('title'))
                            <span class="invalid-feedback" role="alert">
                                <strong style="color: red">{{ $errors->first('Rate') }}</strong>
                            </span>
                        @endif
                    </div>

                   
                    <div class="col-sm-2">
                         <label>{{__('Total')}}</label>
                         <br>
                        <input type="number" placeholder="0.00" id="total" name="total" class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}" required>
                        @if ($errors->has('title'))
                            <span class="invalid-feedback" role="alert">
                                <strong style="color: red">{{ $errors->first('Total') }}</strong>
                            </span>
                        @endif
                    </div>
                     
                    <div class="col-sm-2">
                         <label>{{__('Action')}}</label>
                         <br>
                        <button type="button" style="color:#fff!important;margin-top: 20px!important;" class="btn btn-sm btn-success " id="add_btn"> <i class="fa fa-plus"></i></button>
                        @if ($errors->has('title'))
                            <span class="invalid-feedback" role="alert">
                                <strong style="color: red">{{ $errors->first('title') }}</strong>
                            </span>
                        @endif
                    </div>
             
                </div>
                
               </div>
                
                 <div class="table-responsive">
                            <table class="table table-hover" id="purchaseTable">
                                <thead>
                                    
                                </thead>
                                <tbody id="addPurchaseItem">
                               
                                </tbody>
                                <tfoot>

                                    <tr>
                                        <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                        <td class="text-right" colspan="4"><b>Total:</b></td>
                                        <td class="text-right">
                                            <input type="text" id="Total" class="text-right form-control" name="total" value="0.00" readonly="readonly">
                                       
                                    </tr>
                                        <tr>
                                       <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>

                                        <td class="text-right" colspan="4"><b>Discount:</b></td>
                                        <td class="text-right">
                                            <input type="text" id="discount" class="text-right form-control discount" onkeyup="calculate_store(1)" name="discount" placeholder="0.00" value="">
                                        </td>
                                        <td> 

                                           </td>
                                    </tr>

                                        <tr>
                                     <th></th>
                                    <th></th>   
                                    <th></th>
                                    <th></th>
                                        <td class="text-right" colspan="4"><b>Grand Total:</b></td>
                                        <td class="text-right">
                                            <input type="text" id="grandTotal" class="text-right form-control" name="grand_total_price" value="0.00" readonly="readonly">
                                        </td>
                                        <td> </td>
                                    </tr>
                                         <tr>
                                        <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                        <td class="text-right" colspan="4"><b>Paid Amount:</b></td>
                                        <td class="text-right">
                                            <input type="text" id="paidAmount" class="text-right form-control" onkeyup="invoice_paidamount()" name="paid_amount" value="">
                                        </td>
                                        <td> </td>
                                    </tr>
                                    <tr>
                                        <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                        <td colspan="2" class="text-right">
                                             <input type="button" id="full_paid_tab" class="btn btn-warning" value="Full Paid" tabindex="16" onclick="full_paid()">
                                        </td>
                                        <td class="text-right" colspan="2"><b>Due Amount:</b></td>
                                        <td class="text-right">
                                            <input type="text" id="dueAmmount" class="text-right form-control" name="due_amount" value="0.00" readonly="readonly">
                                        </td>
                                        <td></td>
                                    </tr>
                                </tfoot>
                            </table>


               </div>
               <br>
             
               

              <div class="panel-footer text-right">
                <button class="btn btn-purple" type="submit">{{__('Save')}}</button>
            </div>
           
            </div>
           
        </form>
        <!--===================================================-->
        <!--End Horizontal Form-->

    </div>
</div>

   <script>
        let htmlString = `
                    <div class="row">
       
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <input type="number" class="form-control" placeholder="Product Information" name="item_Information[]" id="itemInformation" required>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <input type="number" class="form-control" placeholder="0.00" name="stock/Qnt" id="stock/Qnt" required>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <input type="number" class="form-control" placeholder="0.00" name="qnty" id="qnty" required>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <input type="number" class="form-control" placeholder="0.00" name="rate" id="rate" required>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <input type="number" class="form-control" placeholder="0.00" name="total" id="total" required>
                                </div>
                            </div>
                           
                            <div class="col-sm-2">
                                <button type="button" style="color:#fff!important;" class="btn btn-sm btn-danger remove_image"> <i class="fa fa-trash-o"></i></button>
                            </div>
                       
</div>

                        `;
         $('#add_btn').click(function() {
            $('.start_div').append(htmlString);
        });
        $(document).on ("click", ".remove_image", function () {
            $(this).parent().parent().remove();
        });
    </script>

@endsection
