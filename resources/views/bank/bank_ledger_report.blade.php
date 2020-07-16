@extends('layouts.app')

@section('content')

<!--===================================================-->
<div class="panel">
    <div class="panel-body">
        <div class="row">
            <form action="{{route('get_bank_ledger')}}" method="get">
                @csrf
                <div class="form-row">
                    <div class="col-md-4">
                        <select name="bank_id" id="bank_id" class="form-control">
                            <option value="">Select Bank</option>
                            @foreach($BankAccount as $bank_name)
                                <option value="{{$bank_name->id}}" <?php echo Request::get('bank_id') == $bank_name->id ? ' selected': ''; ?>>{{__($bank_name->bank_name)}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3">
                        <input type="date" class="form-control" name="start_date" placeholder="date" value="<?php echo date('Y-m-d'); ?>">
                    </div>
                    <div class="col-md-3">
                        <input type="date" class="form-control" name="end_date" placeholder="date" value="<?php echo date('Y-m-d'); ?>">
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-sm btn-success">Search</button>
                        <button class="btn btn-sm btn-danger" onclick="printDiv('divPrint')">Print</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Basic Data Tables -->
<!--===================================================-->
<div class="panel">
    <div class="panel-heading bord-btm clearfix pad-all h-100">
        <h3 class="panel-title pull-left pad-no">{{__('Bank Ledger Report')}}</h3>

        <div class="pull-right clearfix">
            <form class="" id="sort_brands" action="" method="GET">
                <div class="box-inline pad-rgt pull-left">
                    <div class="" style="min-width: 200px;">
                        <input type="text" class="form-control" id="search" name="search"@isset($sort_search) value="{{ $sort_search }}" @endisset placeholder=" Type name & Enter">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="panel-body" id="divPrint">
        <h4 class="text-center mt-5 mb-5">Bank Ledger</h4>
        <table class="table table-striped res-table mar-no " cellspacing="0" width="100%" id="myFrag">
            <thead>
                <tr>
                    <th>SL.</th>
                    <th>{{__('Date')}}</th>
                    <th>{{__('Bank Name')}}</th>
                    <th>{{__('Debit+')}}</th>
                    <th>{{__('Credit-')}}</th>
                </tr>
            </thead>
            <tbody>
                <?php  $i=1; ?>

                @if(@$ledgers)
                @forelse(@$ledgers as $key=>$ledger)

                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$ledger->date}}</td>
                    <td>{{$ledger->bankAccount->bank_name}}</td>
                    <td><?php echo $ledger->transaction_type == 0 ? $ledger->amount : 0.00; ?></td>
                    <td><?php echo $ledger->transaction_type == 1 ? $ledger->amount : 0.00; ?></td>
                </tr>
                @empty
                @endforelse
                @endif
            </tbody>
        </table>

    </div>
</div>

@endsection
@section('script')
    <script type="text/javascript">
        function sort_brands(el){
            $('#sort_brands').submit();
        }

        function printDiv(divName) {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
        }
    </script>
@endsection
