@extends('layouts.app')

@push('style')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background: gray; color:#f1f7fa; font-weight:bold;">
                    User details
                    <a href="{{ route('user.index') }}" class="btn btn-success btn-xs py-0 float-end">Back</a>
                </div>
                 <div class="card-body">                    
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="name" value="{{ $user->name }}" disabled>
                        </div>
                    </div>
            
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" name="email" value="{{ $user->email }}" disabled>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection