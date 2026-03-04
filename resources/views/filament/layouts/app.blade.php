<audio id="notif-sound" src="notif/notif.mp3" preload="auto"></audio>

<script>
    document.addEventListener('DOMContentLoaded', function() {

        Echo.private('App.Models.User.' + {{ auth()->id() }})
            .notification((notification) => {

                // play sound
                document.getElementById('notif-sound').play();

                // tampilkan toast
                alert(notification.title);

                // optional reload badge
                location.reload();
            });

    });
</script>
