<!-- posts layouts is extending the main view -->
@extends('layouts.main', ['module' => 'posts'])

<!-- posts modules styles goes here -->
@push('styles')
<link href="{{ asset('assets/css/bootstrap-datetimepicker.css') }}" rel="stylesheet">
@endpush

<!-- posts modules scripts goes here -->
@push('scripts')
<script src="{{ asset('assets/js/moment.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap-datetimepicker.js') }}"></script>
@endpush
