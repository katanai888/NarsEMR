<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NarsEMR: Ngayong Araw</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body { font-family: Arial, Helvetica, sans-serif !important; }
    </style>
</head>
<body class="bg-slate-900 text-white min-h-screen p-6">
    <div class="max-w-6xl mx-auto">
        
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-6">
            <div class="flex flex-wrap gap-2 bg-slate-800 p-1.5 rounded-lg border border-slate-700">
                <a href="pila_dashboard.php" class="bg-purple-600 text-white px-4 py-2 rounded-md text-sm font-medium shadow">Queue Monitor</a>
                <a href="pharmacy_discovery.php" class="text-slate-400 hover:text-white px-4 py-2 text-sm font-medium flex items-center gap-1">Pharmacy Discovery 🔒</a>
                <a href="billing_calculator.php" class="text-slate-400 hover:text-white px-4 py-2 text-sm font-medium">Billing Calc</a>
                <a href="reseta_sms_share.php" class="text-slate-400 hover:text-white px-4 py-2 text-sm font-medium">Reseta Share</a>
            </div>
            <div class="bg-slate-800 p-1 rounded-lg border border-slate-700 flex space-x-1">
                <button onclick="setGlobalLang('en')" id="btn-en" class="px-3 py-1 rounded text-xs font-bold bg-purple-600 text-white">EN</button>
                <button onclick="setGlobalLang('tl')" id="btn-tl" class="px-3 py-1 rounded text-xs font-bold text-slate-400 hover:text-white">TL</button>
            </div>
        </div>

        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8 border-b border-slate-800 pb-6 gap-4">
            <div>
                <h1 id="main-title" class="text-3xl font-bold tracking-tight text-purple-400">NarsEMR: Ngayong Araw</h1>
                <p id="main-subtitle" class="text-sm text-slate-400 mt-1">Manage a shared waiting room and route patients to multiple doctors.</p>
            </div>
            <div class="bg-slate-800 border border-slate-700 rounded-xl px-4 py-3 text-right w-full md:w-auto">
                <span id="label-select-doc" class="block text-xs font-semibold uppercase tracking-wider text-slate-400 mb-1.5">Pumili ng Doktor:</span>
                <div class="flex gap-2 justify-end">
                    <button class="bg-purple-600 text-white px-3 py-1 rounded text-xs font-medium">Lahat ng Doktor</button>
                    <button class="bg-slate-700 hover:bg-slate-600 text-slate-300 px-3 py-1 rounded text-xs font-medium">Dr. Cruz</button>
                    <button class="bg-slate-700 hover:bg-slate-600 text-slate-300 px-3 py-1 rounded text-xs font-medium">Dr. Santos</button>
                </div>
            </div>
        </div>

        <div class="grid md:grid-cols-3 gap-6">
            <div class="bg-slate-800/50 border border-slate-700 rounded-xl p-4">
                <h3 id="col-title" class="text-xs font-bold uppercase tracking-wider text-slate-400 mb-3">With Doctor (4 active)</h3>
                <div class="space-y-3">
                    <div class="bg-slate-800 border border-purple-500/20 rounded-lg p-4">
                        <div class="flex justify-between items-start mb-2">
                            <h4 class="font-bold text-white text-base">Criselda Gomez</h4>
                            <span class="bg-purple-500/10 text-purple-400 text-[10px] font-bold uppercase tracking-wider px-2 py-0.5 rounded">PWD</span>
                        </div>
                        <span class="inline-block text-xs font-medium bg-purple-900/40 text-purple-300 px-2 py-1 rounded">Kay Dr. Cruz</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const langs = {
            en: {
                title: "NarsEMR: Today's Queue",
                subtitle: "Manage a shared waiting room and route patients to multiple doctors.",
                selectDoc: "Select Doctor:",
                col: "With Doctor (4 active)"
            },
            tl: {
                title: "NarsEMR: Ngayong Araw",
                subtitle: "Pamahalaan ang shared waiting room at i-ruta ang pasyente sa iba't ibang doktor.",
                selectDoc: "Pumili ng Doktor:",
                col: "Kasama ang Doktor (4 active)"
            }
        };
        function setGlobalLang(l) {
            document.getElementById('main-title').innerText = langs[l].title;
            document.getElementById('main-subtitle').innerText = langs[l].subtitle;
            document.getElementById('label-select-doc').innerText = langs[l].selectDoc;
            document.getElementById('col-title').innerText = langs[l].col;
            document.getElementById('btn-en').className = "px-3 py-1 rounded text-xs font-bold " + (l === 'en' ? 'bg-purple-600 text-white' : 'text-slate-400 hover:text-white');
            document.getElementById('btn-tl').className = "px-3 py-1 rounded text-xs font-bold " + (l === 'tl' ? 'bg-purple-600 text-white' : 'text-slate-400 hover:text-white');
        }
    </script>
</body>
</html>
