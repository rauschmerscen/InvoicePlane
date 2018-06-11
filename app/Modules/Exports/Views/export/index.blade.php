@extends('layouts.master')

@section('content')

    <section class="content-header">
        <h1>{{ trans('ip.export_data') }}</h1>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs" id="setting-tabs">
                        <li class="active"><a data-toggle="tab" href="#tab-clients">{{ trans('ip.clients') }}</a></li>
                        <li><a data-toggle="tab" href="#tab-quotes">{{ trans('ip.quotes') }}</a></li>
                        <li><a data-toggle="tab" href="#tab-quote-items">{{ trans('ip.quote_items') }}</a></li>
                        <li><a data-toggle="tab" href="#tab-invoices">{{ trans('ip.invoices') }}</a></li>
                        <li><a data-toggle="tab" href="#tab-invoice-items">{{ trans('ip.invoice_items') }}</a></li>
                        <li><a data-toggle="tab" href="#tab-payments">{{ trans('ip.payments') }}</a></li>
                        <li><a data-toggle="tab" href="#tab-expenses">{{ trans('ip.expenses') }}</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-clients" class="tab-pane active">
                            {!! Form::open(['route' => ['export.export', 'Clients'], 'id' => 'client-export-form', 'target' => '_blank']) !!}
                            <div class="form-group">
                                <label>{{ trans('ip.format') }}:</label>
                                {!! Form::select('writer', $writers, null, ['class' => 'form-control']) !!}
                            </div>
                            <button class="btn btn-primary"><i
                                        class="fa fa-download"></i> {{ trans('ip.export_clients') }}</button>
                            {!! Form::close() !!}
                        </div>
                        <div id="tab-quotes" class="tab-pane">
                            {!! Form::open(['route' => ['export.export', 'Quotes'], 'id' => 'quote-export-form', 'target' => '_blank']) !!}
                            <div class="form-group">
                                <label>{{ trans('ip.format') }}:</label>
                                {!! Form::select('writer', $writers, null, ['class' => 'form-control']) !!}
                            </div>
                            <button class="btn btn-primary"><i
                                        class="fa fa-download"></i> {{ trans('ip.export_quotes') }}</button>
                            {!! Form::close() !!}
                        </div>
                        <div id="tab-quote-items" class="tab-pane">
                            {!! Form::open(['route' => ['export.export', 'QuoteItems'], 'id' => 'quote-item-export-form', 'target' => '_blank']) !!}
                            <div class="form-group">
                                <label>{{ trans('ip.format') }}:</label>
                                {!! Form::select('writer', $writers, null, ['class' => 'form-control']) !!}
                            </div>
                            <button class="btn btn-primary"><i
                                        class="fa fa-download"></i> {{ trans('ip.export_quote_items') }}</button>
                            {!! Form::close() !!}
                        </div>
                        <div id="tab-invoices" class="tab-pane">
                            {!! Form::open(['route' => ['export.export', 'Invoices'], 'id' => 'invoice-export-form', 'target' => '_blank']) !!}
                            <div class="form-group">
                                <label>{{ trans('ip.format') }}:</label>
                                {!! Form::select('writer', $writers, null, ['class' => 'form-control']) !!}
                            </div>
                            <button class="btn btn-primary"><i
                                        class="fa fa-download"></i> {{ trans('ip.export_invoices') }}</button>
                            {!! Form::close() !!}
                        </div>
                        <div id="tab-invoice-items" class="tab-pane">
                            {!! Form::open(['route' => ['export.export', 'InvoiceItems'], 'id' => 'invoice-item-export-form', 'target' => '_blank']) !!}
                            <div class="form-group">
                                <label>{{ trans('ip.format') }}:</label>
                                {!! Form::select('writer', $writers, null, ['class' => 'form-control']) !!}
                            </div>
                            <button class="btn btn-primary"><i
                                        class="fa fa-download"></i> {{ trans('ip.export_invoice_items') }}</button>
                            {!! Form::close() !!}
                        </div>
                        <div id="tab-payments" class="tab-pane">
                            {!! Form::open(['route' => ['export.export', 'Payments'], 'id' => 'payment-export-form', 'target' => '_blank']) !!}
                            <div class="form-group">
                                <label>{{ trans('ip.format') }}:</label>
                                {!! Form::select('writer', $writers, null, ['class' => 'form-control']) !!}
                            </div>
                            <button class="btn btn-primary"><i
                                        class="fa fa-download"></i> {{ trans('ip.export_payments') }}</button>
                            {!! Form::close() !!}
                        </div>
                        <div id="tab-expenses" class="tab-pane">
                            {!! Form::open(['route' => ['export.export', 'Expenses'], 'id' => 'export-export-form', 'target' => '_blank']) !!}
                            <div class="form-group">
                                <label>{{ trans('ip.format') }}:</label>
                                {!! Form::select('writer', $writers, null, ['class' => 'form-control']) !!}
                            </div>
                            <button class="btn btn-primary"><i
                                        class="fa fa-download"></i> {{ trans('ip.export_expenses') }}</button>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop