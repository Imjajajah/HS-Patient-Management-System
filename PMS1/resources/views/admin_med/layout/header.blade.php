<style>
    /* Main Navigation styling */
.main-navigation {
    background-color: #f4f4f4; /* Light background for the navigation */
    padding: 10px 20px; /* Padding around the navigation for spacing */
}

.nav-links {
    list-style: none; /* Remove bullet points */
    display: flex; /* Align the links horizontally */
    justify-content: flex-start; /* Align the items to the left */
    gap: 20px; /* Add space between the navigation items */
    margin: 0; /* Remove default margin */
    padding: 0; /* Remove default padding */
}

.nav-links li {
    position: relative; /* Required for dropdowns */
}

.nav-links a {
    text-decoration: none; /* Remove underline from links */
    color: #333; /* Text color */
    padding: 10px 15px; /* Add padding to make the clickable area larger */
    display: inline-flex; /* Ensure the icon and text are aligned */
    align-items: center; /* Vertically align the icon and text */
    border-radius: 5px; /* Slight rounding for aesthetics */
}

.nav-links a:hover {
    background-color: #e0e0e0; /* Background color on hover */
}

/* Dropdown menu */
.nav-links li ul.dropdown {
    display: none; /* Hide dropdown by default */
    position: absolute; /* Position dropdown relative to the parent */
    top: 100%; /* Align dropdown directly under the parent link */
    left: 0; /* Align dropdown to the left */
    background-color: #fff; /* White background for dropdown */
    list-style: none; /* Remove bullets from dropdown */
    padding: 0;
    margin: 0;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Add shadow for dropdown */
    z-index: 1000; /* Ensure dropdown appears above other elements */
}

.nav-links li ul.dropdown li {
    width: 200px; /* Set a fixed width for the dropdown items */
}

.nav-links li ul.dropdown a {
    padding: 10px 20px; /* Add padding to dropdown links */
    display: block; /* Make the dropdown links full-width */
}

.nav-links li ul.dropdown a:hover {
    background-color: #f0f0f0; /* Highlight dropdown item on hover */
}

/* Show dropdown on hover */
.nav-links li:hover ul.dropdown {
    display: block; /* Display dropdown when hovering over parent */
}

</style>


<div class="header">
    <div class="header-content">
        <nav class="navbar navbar-expand">
            <div class="collapse navbar-collapse justify-content-between">
                <!-- Left side (brand, logo, etc.) can go here -->
                <div class="header-left"></div>

                <!-- Right side (notifications, profile dropdown, etc.) -->
                <ul class="navbar-nav header-right">
                    <li class="nav-item dropdown notification_dropdown">
                        <a class="nav-link" href="#" role="button" data-toggle="dropdown" id="notificationToggle">
                            <i class="mdi mdi-bell"></i>
                            <div class="pulse-css"></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <ul class="list-unstyled" id="notification-list">
                                @foreach($notifications as $notification)
                                    <li class="media dropdown-item notification-item"
                                        id="notification-{{ $notification->notification_id }}"
                                        data-id="{{ $notification->notification_id }}">
                                        <span class="success"><i class="ti-check"></i></span>
                                        <div class="media-body">
                                            <p>
                                                <strong>{{ ucfirst($notification->notification_type) }}:</strong>
                                                {{ $notification->notification_message }}
                                            </p>
                                        </div>
                                        <span class="notify-time">{{ $notification->created_at->diffForHumans() }}</span>
                                    </li>
                                @endforeach
                            </ul>

                            <a class="all-notification" href="{{ route('notifications.allNotifications') }}">
                                See all notifications <i class="ti-arrow-right"></i>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown header-profile">
                        <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                            <i class="mdi mdi-account"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="./app-profile.html" class="dropdown-item">
                                <i class="icon-user"></i>
                                <span class="ml-2">Profile </span>
                            </a>
                            <a href="./email-inbox.html" class="dropdown-item">
                                <i class="icon-envelope-open"></i>
                                <span class="ml-2">Inbox </span>
                            </a>
                            <form action="/logout" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item block py-2 pr-5 pl-4 bg-transparent border-0">
                                    <i class="icon-key"></i>
                                    <span class="ml-2">Logout</span>
                                </button>
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- <nav class="main-navigation">
    <ul class="nav-links">
        <li><a href="{{ url('') }}"><i class="mdi mdi-home mdi-24px"></i> Home</a></li>
        <li><a href="calendar"><i class="mdi mdi-calendar mdi-24px"></i> Calendar</a></li>
        <li><a href="overall_records"><i class="icon icon-single-04"></i> Overview</a></li>
        <li>
            <a href="records"><i class="mdi mdi-folder-outline mdi-24px"></i> Records</a>
            <ul class="dropdown">
                <li><a href="/emergency-records">Emergency Patients</a></li>
                <li><a href="inpatient_records">In-Patients</a></li>
                <li><a href="javascript:void()">Out-Patients</a></li>
            </ul>
        </li>
        <li><a href="javascript:void()"><i class="mdi mdi-monitor mdi-24px"></i> Transactions</a></li>
    </ul>
</nav> -->
</div>


<script>
    // document.addEventListener('DOMContentLoaded', function() {
    //     // Get the notification items
    //     var successNotification = document.getElementById('successNotification');
    //     var errorNotification = document.getElementById('errorNotification');

    //     // Add click event listener for success notification
    //     if (successNotification) {
    //         successNotification.addEventListener('click', function() {
    //             successNotification.style.display = 'none';  // Hide the notification
    //         });
    //     }

    //     // Add click event listener for error notification
    //     if (errorNotification) {
    //         errorNotification.addEventListener('click', function() {
    //             errorNotification.style.display = 'none';  // Hide the notification
    //         });
    //     }
    // });
// AJAX request to mark a notification as read and remove it from the dropdown
document.querySelectorAll('.notification-item').forEach(item => {
        item.addEventListener('click', function () {
            const notificationId = this.getAttribute('data-id');
            fetch(`/notifications/read/${notificationId}`, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Content-Type': 'application/json',
                },
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    document.getElementById(`notification-${notificationId}`).remove();
                }
            })
            .catch(error => console.error('Error:', error));
        });
    });
</script>
