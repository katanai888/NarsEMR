<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NarsEMR - Pharmacy Discovery</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body { font-family: Arial, Helvetica, sans-serif !important; }
    </style>
</head>
<body class="bg-slate-900 text-white min-h-screen p-6 flex flex-col items-center justify-start">
    <div class="max-w-6xl w-full mx-auto">
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-12 w-full">
            <div class="flex flex-wrap gap-2 bg-slate-800 p-1.5 rounded-lg border border-slate-700">
                <a href="pila_dashboard.php" class="text-slate-400 hover:text-white px-4 py-2 text-sm font-medium">Queue Monitor</a>
                <a href="pharmacy_discovery.php" class="bg-purple-600 text-white px-4 py-2 rounded-md text-sm font-medium shadow flex items-center gap-1">Pharmacy Discovery 🔒</a>
                <a href="billing_calculator.php" class="text-slate-400 hover:text-white px-4 py-2 text-sm font-medium">Billing Calc</a>
                <a href="reseta_sms_share.php" class="text-slate-400 hover:text-white px-4 py-2 text-sm font-medium">Reseta Share</a>
            </div>
            <div class="bg-slate-800 p-1 rounded-lg border border-slate-700 flex space-x-1">
                <button onclick="setLang('en')" id="btn-en" class="px-3 py-1 rounded text-xs font-bold bg-purple-600 text-white">EN</button>
                <button onclick="setLang('tl')" id="btn-tl" class="px-3 py-1 rounded text-xs font-bold text-slate-400 hover:text-white">TL</button>
            </div>
        </div>

        <div class="w-full max-w-lg bg-slate-800/80 backdrop-blur-lg rounded-xl shadow-2xl border-2 border-purple-500/30 p-8 text-center mx-auto mt-12">
            <div class="w-16 h-16 bg-purple-500/10 text-purple-400 rounded-full flex items-center justify-center mx-auto mb-4 text-3xl">🔒</div>
            <h2 class="text-2xl font-bold text-white mb-1 tracking-tight">Pharmacy Discovery Platform</h2>
            <span class="inline-block text-xs font-semibold uppercase tracking-wider text-purple-400 bg-purple-500/10 px-3 py-1 rounded-full mb-5">Klinika Pro Feature</span>
            <p id="lock-desc" class="text-slate-300 text-sm leading-relaxed mb-8 px-2">This module is exclusive to Premium tier subscribers. To discover accredited partner pharmacies and check medicine availability in real-time, please access our partner platform network.</p>
            <div class="flex flex-col sm:flex-row gap-3 justify-center">
                <button onclick="window.location.href='https://botikawatch.ph';" id="btn-action" class="w-full sm:w-auto bg-purple-600 hover:bg-purple-700 text-white font-medium rounded-lg px-6 py-3 transition shadow-lg shadow-purple-600/30">Proceed to BotikaWatch.ph ➔</button>
                <a href="pila_dashboard.php" id="btn-back" class="w-full sm:w-auto bg-slate-700/80 hover:bg-slate-700 text-white font-medium rounded-lg px-6 py-3 transition border border-slate-600 text-center">Back to Dashboard</a>
            </div>
        </div>
    </div>

    <script>
        const content = {
            en: {
                desc: "This module is exclusive to Premium tier subscribers. To discover accredited partner pharmacies and check medicine availability in real-time, please access our partner platform network.",
                action: "Proceed to BotikaWatch.ph ➔",
                back: "Back to Dashboard"
            },
            tl: {
                desc: "Ang module na ito ay eksklusibo sa mga Premium tier subscribers. Upang maghanap ng mga accredited na botika at gamot real-time, gamitin ang aming partner network.",
                action: "Pumunta sa BotikaWatch.ph ➔",
                back: "Bumalik sa Dashboard"
            }
        };
        function setLang(lang) {
            document.getElementById('lock-desc').innerText = content[lang].desc;
            document.getElementById('btn-action').innerText = content[lang].action;
            document.getElementById('btn-back').innerText = content[lang].back;
            document.getElementById('btn-en').className = "px-3 py-1 rounded text-xs font-bold " + (lang === 'en' ? 'bg-purple-600 text-white' : 'text-slate-400 hover:text-white');
            document.getElementById('btn-tl').className = "px-3 py-1 rounded text-xs font-bold " + (lang === 'tl' ? 'bg-purple-600 text-white' : 'text-slate-400 hover:text-white');
        }
    </script>
</body>
</html>
