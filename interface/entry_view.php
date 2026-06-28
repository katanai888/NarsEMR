<?php
// Commercial Freemium Entry Portal Mock for NarsEMR
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>NarsEMR - Piliin ang Iyong Plano</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body { font-family: Arial, Helvetica, sans-serif !important; }
    </style>
</head>
<body class="bg-slate-900 text-white min-h-screen flex flex-col items-center justify-center p-6">
    <div class="text-center mb-8">
        <h1 class="text-4xl font-bold tracking-tight text-purple-400">Nars<span class="text-white">EMR</span></h1>
        <p class="text-sm text-slate-400 mt-2">Premium Medical Software built for Pinoy Clinics</p>
    </div>

    <div class="grid md:grid-cols-2 gap-8 max-w-4xl w-full">
        <div class="bg-slate-800 rounded-xl shadow-2xl border border-slate-700 p-8 flex flex-col justify-between">
            <div>
                <span class="text-xs font-semibold uppercase tracking-wider text-slate-400 bg-slate-700/50 px-2.5 py-1 rounded">Solo Practitioner</span>
                <h2 class="text-2xl font-bold mt-4 text-white">Free Plan</h2>
                <p class="text-sm text-slate-400 mt-2">Perfect for independent, single-doctor provincial clinics.</p>
                <div class="text-3xl font-extrabold mt-4 text-white">₱0 <span class="text-sm font-normal text-slate-400">/ forever</span></div>
                
                <ul class="mt-6 space-y-3 text-sm text-slate-300">
                    <li class="flex items-center">
                        <svg class="w-4 h-4 mr-2 text-emerald-400 fill-current" viewBox="0 0 20 20"><path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                        Single Doctor Queue
                    </li>
                    <li class="flex items-center text-slate-500 line-through">
                        Multi-Doctor Queue Splitter
                    </li>
                    <li class="flex items-center text-slate-500 line-through">
                        Automated RA 9994 / RA 10754 Calculator
                    </li>
                </ul>
            </div>
            <button onclick="window.location.href='pila_dashboard.php';" class="w-full mt-8 bg-slate-700 hover:bg-slate-600 text-white font-medium rounded-lg py-3 transition">
                Gamitin ang Free Version
            </button>
        </div>

        <div class="bg-slate-800 rounded-xl shadow-2xl border-2 border-purple-500 p-8 flex flex-col justify-between relative overflow-hidden">
            <div class="absolute top-0 right-0 bg-purple-500 text-white text-xs font-bold px-3 py-1 uppercase tracking-wider transform translate-x-0 rounded-bl-lg">
                Sikat
            </div>
            <div>
                <span class="text-xs font-semibold uppercase tracking-wider text-purple-400 bg-purple-500/10 px-2.5 py-1 rounded">Shared Clinics</span>
                <h2 class="text-2xl font-bold mt-4 text-white">Klinika Pro</h2>
                <p class="text-sm text-slate-400 mt-2">Designed for busy multi-doctor practices and shared diagnostic hubs.</p>
                <div class="text-3xl font-extrabold mt-4 text-purple-400">₱1,499 <span class="text-sm font-normal text-slate-400">/ buwan</span></div>
                
                <ul class="mt-6 space-y-3 text-sm text-slate-300">
                    <li class="flex items-center">
                        <svg class="w-4 h-4 mr-2 text-purple-400 fill-current" viewBox="0 0 20 20"><path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                        <strong>Multi-Doctor Queue Splitter</strong>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 mr-2 text-purple-400 fill-current" viewBox="0 0 20 20"><path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                        <strong>Automatic Senior & PWD Calculator</strong>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 mr-2 text-purple-400 fill-current" viewBox="0 0 20 20"><path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                        Viber / Messenger Reseta Links
                    </li>
                </ul>
            </div>
            <button onclick="window.location.href='billing_calculator.php';" class="w-full mt-8 bg-purple-600 hover:bg-purple-700 text-white font-medium rounded-lg py-3 transition shadow-lg shadow-purple-600/20">
                Subukan ang Pro Features
            </button>
        </div>
    </div>
</body>
</html>
