<div id="loading-screen" style="display: none;">
    <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
    </div>
    <p>Loading data...</p>
    <style>
        #loading-screen {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 9999;
            text-align: center;
        }

        .spinner {
            width: 40px;
            height: 40px;
            position: relative;
            margin: 30px auto;
        }

        .double-bounce1,
        .double-bounce2 {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            background-color: var(--color-05);
            opacity: 0.4;
            position: absolute;
            top: 0;
            left: 0;
            animation: bounce 2.0s infinite ease-in-out;
        }

        .double-bounce2 {
            animation-delay: -1.0s;
        }

        @keyframes bounce {

            0%,
            100% {
                transform: scale(0.0);
            }

            50% {
                transform: scale(1.0);
            }
        }
    </style>
</div>
