@extends('layouts.app')

@section('title', 'Un Motivo Speciale...')

@section('content')
    <h1>{{ $messaggio }}</h1>
    <p>Prossimo indizio tra...</p>
    <p id="timer"></p>
@endsection

@section('scripts')
<script>
    let durata = 5 * 60; // 5 minuti
    const countdownElement = document.getElementById('timer');

    const timerInterval = setInterval(() => {
        const minuti = Math.floor(durata / 60);
        let secondi = durata % 60;

        secondi = secondi < 10 ? '0' + secondi : secondi;
        countdownElement.textContent = `${minuti}:${secondi}`;

        if (--durata < 0) {
            clearInterval(timerInterval);
            window.location.href = '{{ $prossima_rotta }}';
        }
    }, 1000);
</script>
@endsection