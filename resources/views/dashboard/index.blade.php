@extends('layouts.app')
@section('title')
    {{ __('messages.dashboard.dashboard') }}
@endsection
@section('page_css')
    {{--        <link rel="stylesheet" href="{{ asset('css/bootstrap-datetimepicker.css') }}">--}}
    {{--        <link rel="stylesheet" href="{{ asset('assets/css/daterangepicker.css') }}">--}}
@endsection
@section('css')
    {{--    <link rel="stylesheet" href="{{ asset('assets/css/detail-header.css') }}">--}}
@endsection
@section('content')
    <div class="container-fluid">
        <div class="d-flex flex-column">
            <div class="row">
                <div class="col-12 mb-4">
                    <div class="row">
                        @if($modules['Invoices'] == true)
                            {{-- Invoices Widget --}}
                            <div class="col-xxl-3 col-xl-4 col-sm-6 widget">
                                <a class="text-decoration-none" href="{{ route('invoices.index') }}">
                                    <div class="bg-primary shadow-md rounded-10 p-xxl-10 px-5 py-10 d-flex align-items-center justify-content-between my-sm-3 my-2">
                                        <div class="bg-cyan-300 widget-icon rounded-10 me-2 d-flex align-items-center justify-content-center">
                                            <i class="fa-solid fa-money-check fs-1-xl text-white"></i>
                                        </div>
                                        <div class="text-end text-white">
                                            <h2 class="fs-1-xxl fw-bolder text-white">{{getCurrencySymbol()}} 25,000</h2>
                                            <h3 class="mb-0 fs-5 fw-light">{{ __('messages.dashboard.total_invoices') }}</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endif
                        @if($modules['Bills'])
                            {{-- Bills Widget --}}
                            <div class="col-xxl-3 col-xl-4 col-sm-6 widget">
                                <a href="{{ route('bills.index') }}" class="text-decoration-none">
                                    <div class="bg-success shadow-md rounded-10 p-xxl-10 px-5 py-10 d-flex align-items-center justify-content-between my-sm-3 my-2">
                                        <div class="bg-green-300 widget-icon rounded-10 me-2  d-flex align-items-center justify-content-center">
                                            <i class="fa-solid fa-money-bill fs-1-xl text-white"></i>
                                        </div>
                                        <div class="text-end text-white">
                                            <h2 class="fs-1-xxl fw-bolder text-white">{{getCurrencySymbol()}} 15,500</h2>
                                            <h3 class="mb-0 fs-5 fw-light">{{ __('messages.dashboard.total_bills') }}</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endif
                        @if($modules['Payments'] == true)
                            {{-- Payments Widget --}}
                            <div class="col-xxl-3 col-xl-4 col-sm-6 widget">
                                <a href="{{ route('payments.index') }}" class="text-decoration-none">
                                    <div class="bg-info shadow-md rounded-10 p-xxl-10 px-5 py-10 d-flex align-items-center justify-content-between my-sm-3 my-2">
                                        <div class="bg-blue-300 widget-icon rounded-10 me-2 d-flex align-items-center justify-content-center">
                                            <i class="fa-solid fa-money-bill fs-1-xl text-white"></i>
                                        </div>
                                        <div class="text-end text-white">
                                            <h2 class="fs-1-xxl fw-bolder text-white">{{getCurrencySymbol()}} 18,750</h2>
                                            <h3 class="mb-0 fs-5 fw-light">{{ __('messages.dashboard.total_payments') }}</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endif
                        @if($modules['Advance Payments'] == true)
                            {{-- Advance Payments Widget --}}
                            <div class="col-xxl-3 col-xl-4 col-sm-6 widget">
                                <a href="{{ route('advanced-payments.index') }}" class="text-decoration-none">
                                    <div class="bg-warning shadow-md rounded-10 p-xxl-10 px-5 py-10 d-flex align-items-center justify-content-between my-sm-3 my-2">
                                        <div class="bg-yellow-300 widget-icon rounded-10 me-2 d-flex align-items-center justify-content-center">
                                            <i class="fa-solid fa-money-bill fs-1-xl text-white"></i>
                                        </div>
                                        <div class="text-end text-white">
                                            <h2 class="fs-1-xxl fw-bolder text-white">{{getCurrencySymbol()}} 8,200</h2>
                                            <h3 class="mb-0 fs-5 fw-light">{{ __('messages.dashboard.total_advance_payments') }}</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endif
                        @if($modules['Doctors'] == true)
                            {{-- Doctors Widget --}}
                            <div class="col-xxl-3 col-xl-4 col-sm-6 widget">
                                <a href="{{ route('doctors.index') }}" class="text-decoration-none">
                                    <div class="bg-secondary shadow-md rounded-10 p-xxl-10 px-5 py-10 d-flex align-items-center justify-content-between my-sm-3 my-2">
                                        <div class="bg-gray-600 widget-icon rounded-10 me-2 d-flex align-items-center justify-content-center">
                                            <i class="fa-solid fa-user fs-1-xl text-white"></i>
                                        </div>
                                        <div class="text-end text-white">
                                            <h2 class="fs-1-xxl fw-bolder text-white">24</h2>
                                            <h3 class="mb-0 fs-5 fw-light">{{ __('messages.dashboard.doctors') }}</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endif
                        @if($modules['Patients'] == true)
                            {{-- Patients Widget --}}
                            <div class="col-xxl-3 col-xl-4 col-sm-6 widget">
                                <a href="{{ route('patients.index') }}" class="text-decoration-none">
                                    <div class="bg-danger shadow-md rounded-10 p-xxl-10 px-5 py-10 d-flex align-items-center justify-content-between my-sm-3 my-2">
                                        <div class="bg-red-300 widget-icon rounded-10 me-2 d-flex align-items-center justify-content-center">
                                            <i class="fa-solid fa-user fs-1-xl text-white"></i>
                                        </div>
                                        <div class="text-end text-white">
                                            <h2 class="fs-1-xxl fw-bolder text-white">156</h2>
                                            <h3 class="mb-0 fs-5 fw-light">{{ __('messages.dashboard.patients') }}</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endif
                        @if($modules['Nurses'] == true)
                            {{-- Nurses Widget --}}
                            <div class="col-xxl-3 col-xl-4 col-sm-6 widget">
                                <a href="{{ route('nurses.index') }}" class="text-decoration-none">
                                    <div class="bg-secondary shadow-md rounded-10 p-xxl-10 px-5 py-10 d-flex align-items-center justify-content-between my-sm-3 my-2">
                                        <div class="bg-gray-700 widget-icon rounded-10 me-2  d-flex align-items-center justify-content-center">
                                            <i class="fa-solid fa-user-nurse fs-1-xl text-white"></i>
                                        </div>
                                        <div class="text-end text-white">
                                            <h2 class="fs-1-xxl fw-bolder text-white">18</h2>
                                            <h3 class="mb-0 fs-5 fw-light">{{ __('messages.nurses') }}</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endif
                        @if($modules['Beds'] == true)
                            {{-- Avaiable Beds Widget --}}
                            <div class="col-xxl-3 col-xl-4 col-sm-6 widget">
                                <a href="{{ route('beds.index') }}" class="text-decoration-none">
                                    <div class="bg-primary shadow-md rounded-10 p-xxl-10 me-2  px-5 py-10 d-flex align-items-center justify-content-between my-sm-3 my-2">
                                        <div class="bg-cyan-700 widget-icon rounded-10 d-flex align-items-center justify-content-center">
                                            <i class="fa-solid fa-bed fs-1-xl text-white"></i>
                                        </div>
                                        <div class="text-end text-white">
                                            <h2 class="fs-1-xxl fw-bolder text-white">45</h2>
                                            <h3 class="mb-0 fs-5 fw-light">{{ __('messages.dashboard.available_beds') }}</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col-xxl-7 col-12 mb-7 mb-xxl-0">
                    <div class="card">
                        <div class="card-header pb-0 px-10">
                            <h3 class="mb-0">
                                {{ __('messages.enquiries') }}
                            </h3>
                        </div>
                        <div class="card-body pt-7">
                            @if(true) {{-- Static condition for demo --}}
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th scope="col">{{ __('messages.enquiry.name') }}</th>
                                        <th scope="col">{{ __('messages.enquiry.email') }}</th>
                                        <th scope="col" class="text-center text-muted">{{ __('messages.common.created_on') }}</th>
                                    </tr>
                                    </thead>
                                    <tbody class="text-gray-600 fw-bold">
                                    {{-- Static Enquiries Data --}}
                                    <tr>
                                        <td>
                                            <a href="#" class="text-primary-800 text-decoration-none mb-1 fs-6">John Doe</a>
                                        </td>
                                        <td class="text-start">
                                            <span class="text-muted fw-bold d-block">john.doe@example.com</span>
                                        </td>
                                        <td class="text-center text-muted fw-bold">
                                            <span class="badge bg-light-info">15th Dec, 2023</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="#" class="text-primary-800 text-decoration-none mb-1 fs-6">Jane Smith</a>
                                        </td>
                                        <td class="text-start">
                                            <span class="text-muted fw-bold d-block">jane.smith@example.com</span>
                                        </td>
                                        <td class="text-center text-muted fw-bold">
                                            <span class="badge bg-light-info">14th Dec, 2023</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="#" class="text-primary-800 text-decoration-none mb-1 fs-6">Robert Johnson</a>
                                        </td>
                                        <td class="text-start">
                                            <span class="text-muted fw-bold d-block">robert.j@example.com</span>
                                        </td>
                                        <td class="text-center text-muted fw-bold">
                                            <span class="badge bg-light-info">13th Dec, 2023</span>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            @else
                                <h4 class="mb-0 text-center fs-2">{{ __('messages.dashboard.no_enquiries_yet') }}</h4>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-xxl-5 col-12">
                    <div class="card">
                        <div class="card-header pb-0 px-10">
                            <h3 class="mb-0">
                                {{ __('messages.dashboard.notice_boards') }}
                            </h3>
                        </div>
                        <div class="card-body pt-7 pb-2">
                            @if(true) {{-- Static condition for demo --}}
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th scope="col">{{ __('messages.dashboard.title') }}</th>
                                        <th scope="col" class="text-center">{{ __('messages.common.created_on') }}</th>
                                    </tr>
                                    </thead>
                                    <tbody class="text-gray-600 fw-bold">
                                    {{-- Static Notice Boards Data --}}
                                    <tr>
                                        <td>
                                            <a href="javascript:void(0)" data-id="1" class="text-decoration-none notice-board-view-btn">Hospital Maintenance Schedule</a>
                                        </td>
                                        <td class="text-center">
                                            <span class="badge bg-light-info">10th Dec, 2023</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="javascript:void(0)" data-id="2" class="text-decoration-none notice-board-view-btn">New COVID-19 Guidelines</a>
                                        </td>
                                        <td class="text-center">
                                            <span class="badge bg-light-info">8th Dec, 2023</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="javascript:void(0)" data-id="3" class="text-decoration-none notice-board-view-btn">Staff Meeting Announcement</a>
                                        </td>
                                        <td class="text-center">
                                            <span class="badge bg-light-info">5th Dec, 2023</span>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            @else
                                <h2 class="mb-0 text-center fs-2">No Notice Boards yet..</h2>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            {{Form::hidden('incomeExpenseReportUrl',route('income-expense-report'),['id'=>'dashboardIncomeExpenseReportUrl','class'=>'incomeExpenseReportUrl'])}}
            {{Form::hidden('currentCurrencyName',getCurrencySymbol(),['id'=>'dashboardCurrentCurrencyName','class'=>'currentCurrencyName'])}}
            {{Form::hidden('income_and_expense_reports',__('messages.dashboard.income_and_expense_reports'),['id'=>'dashboardIncome_and_expense_reports','class'=>'income_and_expense_reports'])}}
            {{Form::hidden('defaultAvatarImageUrl',asset('assets/img/avatar.png'),['id'=>'dashboardDefaultAvatarImageUrl','class'=>'defaultAvatarImageUrl'])}}
            {{Form::hidden('noticeBoardUrl',url('notice-boards'),['id'=>'dashboardNoticeBoardUrl','class'=>'noticeBoardUrl'])}}

        </div>
        @include('employees.notice_boards.show_modal')
    </div>
@endsection