@extends('layouts.app')
@section('content')
<!-- Basic Data Tables -->
<!--===================================================-->
<div class="panel">
    <div class="panel-body">
        <div class="row">
            <form action="{{route('get_expanses')}}" method="post">
                @csrf
                <div class="form-row">
                    <div class="col-md-4">
                        <select name="category" id="category" class="form-control">
                            <option value="">Select Category</option>
                            @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
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
<div class="panel">
    <div class="panel-heading bord-btm clearfix pad-all h-100">
        <h3 class="panel-title pull-left pad-no">{{__('Expenses')}}</h3>

    </div>
    <div class="panel-body">
        <div id="divPrint">
            <h4 class="text-center pt-4 pb-4">Expense Report</h4>
            <table class="table table-bordered" width="100%">
                <thead>
                    <tr>
                        <th style="text-align: center;">SL</th>
                        <th style="text-align: center;">Date</th>
                        <th style="text-align: center;">Expanse Item</th>
                        <th style="text-align: center;">Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $total= 0;
                    ?>
                    @foreach($expenses as $key=>$expense)
                    <?php $total += $expense->amount;?>
                    <tr class="text-center">
                        <td>{{$key+1}}</td>
                        <td>{{$expense->expense_date}}</td>
                        <td>{{$expense->expense_category->name}}</td>
                        <td>{{$expense->amount}}</td>
                    </tr>
                    @endforeach
                    <tr>
                        <td colspan="3" class="text-right">Total</td>
                        <td style="text-align: center;">{{ $total}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="clearfix">
            <div class="pull-right">
            </div>
        </div>
    </div>
</div>

@endsection
@section('script')
<script type="text/javascript">
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;
    }
</script>
@endsection