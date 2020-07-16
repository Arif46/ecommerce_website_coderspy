@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <a href="{{ route('expense.create')}}" class="btn btn-rounded btn-info pull-right">{{__('Create Expense Item')}}</a>
        </div>
    </div>
    <br>

    <!-- Basic Data Tables -->
    <!--===================================================-->
    <div class="panel">
        <div class="panel-heading bord-btm clearfix pad-all h-100">
            <h3 class="panel-title pull-left pad-no">{{__('Expenses')}}</h3>

        </div>
        <div class="panel-body">
            <table class="table table-striped res-table mar-no" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>SL.</th>
                    <th>{{__('Date')}}</th>
                    <th>{{__('Category')}}</th>
                    <th>{{__('SubCategory')}}</th>
                    <th>{{__('Amount')}}</th>
                    <th width="10%">{{__('Action')}}</th>
                </tr>
                </thead>
                <tbody>
                @php($i=1)
                @foreach($expenses as $expense)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{@$expense->expense_date}}</td>
                        <td>{{@$expense->expense_category->name}}</td>
                        <td>{{@$expense->expense_subcategory->name}}</td>
                        <td>{{@$expense->amount}}</td>
                        <td>
                            <div class="btn-group dropdown">
                                <button class="btn btn-primary dropdown-toggle dropdown-toggle-icon" data-toggle="dropdown" type="button">
                                    {{__('Actions')}} <i class="dropdown-caret"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="{{route('expense.edit', $expense->id)}}">{{__('Edit')}}</a></li>
                                    <li><a onclick="confirm_modal('{{route('expense_delete', $expense->id)}}');">{{__('Delete')}}</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="clearfix">
                <div class="pull-right">
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')
    <script type="text/javascript">

    </script>
@endsection
