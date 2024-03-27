@extends('backend.layouts.app')
@section('content')
    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">contacts</a></li>
                            <li class="breadcrumb-item"><a href="{{route('contact.index')}}">View</a></li>
                            <li class="breadcrumb-item active">Invoice</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Invoice</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <!-- Invoice Logo-->
                        <div class="clearfix">
                            <div class="float-start mb-3">
                                <img src="{{ asset('image/logo.jpeg') }}" alt="dark logo" height="80">
                            </div>
                            <div class="float-end">
                                <h4 class="m-0 d-print-none">Invoice</h4>
                            </div>
                        </div>

                        <!-- Invoice Detail-->
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="float-left mt-3">
                                    <p><b>Hello, {{ $contact->name ?? '' }}</b></p>
                                    <p class="text-muted fs-13">
                                        We value your privacy and security. Your contact details
                                        are kept confidential and are solely used for communication purposes regarding your account and our services.
                                    </p>
                                </div>
                            </div><!-- end col -->
                            <div class="col-sm-4 offset-sm-2">
                                <div class="mt-3 float-sm-end">
                                    <p class="fs-13"><strong>Contact Date: </strong> &nbsp;&nbsp;&nbsp;
                                        {{ $contact->created_at->format('Y-m-d') }}</p>
                                    <p class="fs-13"><strong>Contact ID: </strong> <span
                                            class="float-end"><strong>#{{ $contact->id ?? '' }}</strong></span></p>
                                </div>
                            </div><!-- end col -->
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="table-responsive">
                                    <table class="table table-sm table-centered table-hover table-borderless mb-0 mt-3">
                                        <thead class="border-top border-bottom bg-light-subtle border-light">
                                            <tr>

                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Subject</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="">{{ $contact->id }}</td>
                                                <td>
                                                    <b>{{ $contact->name }}</b>
                                                </td>
                                                <td>{{ $contact->email }}</td>
                                                <td>{{ $contact->phone }}</td>
                                                <td>{{ $contact->subject }}</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div> <!-- end table-responsive-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                        <!-- Display Message -->
                        <div class="row mt-4">
                            <div class="col-12">
                                <h5>Message:</h5>
                                <p>{{ $contact->message }}</p>
                            </div>
                        </div>
                        <!-- end message -->

                        {{-- <div class="d-print-none mt-4">
                            <div class="text-center">
                                <a href="javascript:window.print()" class="btn btn-primary"><i class="ri-printer-line"></i>
                                    Print</a>
                                <a href="javascript: void(0);" class="btn btn-info">Submit</a>
                            </div>
                        </div> --}}
                        <!-- end buttons -->

                    </div> <!-- end card-body-->
                </div> <!-- end card -->
            </div> <!-- end col-->
        </div>
        <!-- end row -->

    </div> <!-- container -->
@endsection
