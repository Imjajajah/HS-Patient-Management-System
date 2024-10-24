@extends('admin_med.layout.index')

@section('med_content')
    <link rel="stylesheet" href="{{ asset('css/bed_dashboard.css') }}">
    <script src="{{ asset('js/bed_dashboard.js') }}" defer></script>

    <div class="content-body">
        <div class="container">
            <h1>Real-Time Bed Availability</h1>
            <div id="bed-grid" class="bed-grid">
                <!-- Dynamic content will be inserted here -->
            </div>
            <button id="update-status" class="update-status">Update Bed Status</button>
        </div>
    </div>
@endsection
