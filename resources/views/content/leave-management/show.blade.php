@extends('layouts.app')

@section('template_title')
    {{ $leaveManagement->name ?? "{{ __('Show') Leave Management" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Leave Management</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('leave-managements.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Leave Date:</strong>
                            {{ $leaveManagement->leave_date }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
