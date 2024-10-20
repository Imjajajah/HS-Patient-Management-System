


<div class="header">
    <div class="header-content">
        <nav class="navbar navbar-expand">
            <div class="collapse navbar-collapse justify-content-between">
                <div class="header-left"></div>

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
