@extends('admin.includes.layout', ['breadcrumb_title' => 'Menu List'])
@section('title', 'Menu List')
@section('header-area')
 <!-- iCheck for checkboxes and radio inputs -->
 <link rel="stylesheet" href="{{ asset('admin/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
 <link rel="stylesheet" href="{{asset('admin/assets/plugins/bootstrap-switch/css/bootstrap3/bootstrap-switch.css')}}">
  
@endsection
@section('main-content')
<style>
    
</style>
<div class="card">
    <div class="card-body">
        <table id="menuTable" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Parent</th>
                    <th>Active</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($menus as $menu)
                    @include('admin.menu.submenu', ['menu' => $menu, 'level' => 0])
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('script-area')
<!-- Bootstrap Switch -->
<script src="{{ asset('admin/assets/plugins/bootstrap-switch/js/bootstrap-switch.js')}}"></script>
<script>
     $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    })
</script>
@endsection