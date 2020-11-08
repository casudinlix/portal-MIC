@extends('layouts.master')
@section('title', 'Dashboard')
@section('parentPageTitle', 'App')
@section('css')
@endsection
@section('content')
<div class="row">
    <div class="col-xl-7">
    </div>
</div>

@endsection
@section('js')
@endsection
@section('modal')
@endsection
@section('script')
@endsection

--------------
@extends('layouts.fron.app')
@section('title', 'Dashboard')
@section('parentPageTitle', 'App')
@section('css')
@endsection
@section('content')
<div class="row">
    <div class="col-xl-7">
    </div>
</div>

@endsection
@section('js')
@endsection
@section('modal')
@endsection
@section('script')
@endsection



--------------
@php
DB::beginTransaction();
try {
DB::commit();
// all good
return response()->json(['status'=>'success']); }
catch(\Exception $e) {
DB::rollback();
return response()->json(['status'=>'error','msg'=>$e->getMessage()]);
}


// return datatables()->of(User::query())->toJson();
// return datatables()->of(DB::table('users'))->toJson();
// return datatables()->of(User::all())->toJson();

// return datatables()->eloquent(User::query())->toJson();
// return datatables()->query(DB::table('users'))->toJson();
// return datatables()->collection(User::all())->toJson();

// return datatables(User::query())->toJson();
// return datatables(DB::table('users'))->toJson();
// return datatables(User::all())->toJson();
@endphp