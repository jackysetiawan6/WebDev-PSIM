<style>
    #loading-screen {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 9999;
        text-align: center;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 30px;
        animation: blink 2s infinite;
        display: flex;
    }

    .animated {
        height: 100px;
    }

    @keyframes blink {

        0%,
        100% {
            opacity: 1;
        }

        50% {
            opacity: 0;
        }
    }
</style>


<div id="loading-screen" style="display: none;">
    <img src="{{ asset('logo.svg') }}" alt="PSIM" class="logo animated">
    <p>Loading data...</p>
</div>
