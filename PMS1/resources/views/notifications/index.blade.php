
<div class="container">
    <h1>All Notifications</h1>
    <ul class="list-unstyled">
        @foreach($notifications as $notification)
            <li class="media">
                <div class="media-body">
                    <p><strong>{{ ucfirst($notification->notification_type) }}:</strong>
                        {{ $notification->notification_message }}
                    </p>
                    <p><strong>User:</strong> {{ $notification->users->name }} <br>
                        <strong>Role:</strong> {{ $notification->users->authorization->role_name }}</p> <!-- Assuming 'role' is an attribute of User -->
                </div>
                <span class="notify-time">{{ $notification->created_at->diffForHumans() }}</span>
            </li>
        @endforeach
    </ul>
</div>

