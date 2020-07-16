@extends('layouts.app')

@section('content')

<div class="row">
    <div class="header-options">
        <div class="col-sm-12">
            <a href="{{ route('supplier.create')}}" class="btn btn-rounded btn-success pull-right">{{__('+ Add supplier')}}</a>
        </div>
    </div>
</div>


<!-- Basic Data Tables -->
<!--===================================================-->
<div class="panel">
    <div class="panel-heading bord-btm clearfix pad-all h-100">
        <h3 class="panel-title pull-left pad-no">{{__('Manage Supplier')}}</h3>
        <div class="pull-right clearfix">
            <form class="" id="sort_brands" action="{{ route('supplier.search') }}" method="POST">
                <div class="box-inline pad-rgt pull-left">
                    <div class="" style="min-width: 200px;">
                        <input type="text" class="form-control" required id="search" name="search" placeholder=" Type name & Enter">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="panel-body">
        <table class="table table-striped res-table mar-no" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>{{__('Id')}}</th>
                    <th>{{__('Name')}}</th>
                    <th>{{__('Contact Name')}}</th>
                    <th>{{__('Designation')}}</th>
                    <th>{{__('Address')}}</th>
                    <th>{{__('City')}}</th>
                    <th>{{__('Country')}}</th>
                    <th>{{__('Mobile No.')}}</th>
                   {{--  <th>{{__('Telephone No.')}}</th> --}}
                 {{--    <th>{{__('Fax No.')}}</th> --}}
                    <th>{{__('Email')}}</th>
                  {{--   <th>{{__('Trade License')}}</th>
                    <th>{{__('VAT Reg. No.')}}</th> --}}
                    {{-- <th>{{__('Created By')}}</th>
                    <th>{{__('Updated By')}}</th> --}}
                    <th>{{ __('Status') }}</th>
                    <th>{{__('Options')}}</th>
                </tr>
            </thead>
            <tbody>
                <?php  $i=1;?>
                @foreach($supplier as $key => $s)
                    <tr>
                        <td>{{@$s->id}}</td>
                        <td>{{@$s->supplier_name}}</td>
                        <td>{{@$s->contact_name}}</td>
                        <td>{{@$s->designation}}</td>
                        <td>{{@$s->address}}</td>
                        <td>{{@$s->city}}</td>
                        <td>{{@$s->country}}</td>
                        <td>{{@$s->mobile_number}}</td>
                      {{--   <td>{{@$s->telephone_number}}</td> --}}
                      {{--   <td>{{@$s->fax_number}}</td> --}}
                        <td>{{@$s->email}}</td>
                     {{--    <td>{{@$s->trade_license}}</td>
                        <td>{{@$s->vat_reg_no}}</td> --}}
                        {{-- <td>{{@$s->created_by}}</td>
                        <td>{{@$s->updated_by}}</td> --}}
                        <td>
                            @if ($s->status == '0')
                                <span class="badge badge-pill badge-danger" style="padding: 10px;">Deavtive</span>
                            @else
                                <span class="badge badge-pill badge-success" style="padding: 10px;">Active</span>
                            @endif
                        </td>
                        <td>
                            <div class="btn-group dropdown">
                                <button class="btn btn-primary dropdown-toggle dropdown-toggle-icon" data-toggle="dropdown" type="button">
                                    {{__('Actions')}} <i class="dropdown-caret"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="{{route('supplier.edit', encrypt(@$s->id))}}">{{__('Edit') }}</a></li>
                                    <li><a onclick="confirm_modal('{{route('supplier.destroy', @$s->id)}}');">{{__('Delete')}}</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                @endforeach
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
    </script>
@endsection
