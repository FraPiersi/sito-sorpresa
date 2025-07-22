@extends('layouts.app')

@section('title', 'La Sorpresa Sta Arrivando...')

@section('content')
    <h1 id="main-title">Una sorpresa speciale sta per arrivare... 🤫</h1>
    <p id="countdown-message">Aspetta solo un altro pochettino:</p>
    <p id="timer"></p>
@endsection

@section('scripts')
<script>
    // --- IMPOSTA LA DATA E ORA DELLA SORPRESA ---
    const targetDate = new Date();
    targetDate.setDate(targetDate.getDate());
    targetDate.setHours(19, 10, 0, 0);
    // -----------------------------------------

    const titleElement = document.getElementById('main-title');
    const messageElement = document.getElementById('countdown-message');
    const timerElement = document.getElementById('timer');

    const interval = setInterval(() => {
        const now = new Date().getTime();
        const distance = targetDate - now;

        if (distance < 0) {
            clearInterval(interval);
            startFinalCountdown();
            return;
        }

        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        timerElement.innerHTML = `${days}g ${hours}h ${minutes}m ${seconds}s`;
    }, 1000);

    function startFinalCountdown() {
        titleElement.textContent = "Ci siamo quasi!";
        messageElement.textContent = "La sorpresa sta per rivelarsi... e nel mentre vorrei ricordarti qualcosa che in questo brutto periodo spero possa farti forza!!";
        let duration = 5 * 60;

        const timerInterval = setInterval(() => {
            const minutes = Math.floor(duration / 60);
            let seconds = duration % 60;
            seconds = seconds < 10 ? '0' + seconds : seconds;
            timerElement.textContent = `${minutes}:${seconds}`;

            if (--duration < 0) {
                clearInterval(timerInterval);
                window.location.href = '/motivo-1';
            }
        }, 1000);
    }
</script>
@endsection