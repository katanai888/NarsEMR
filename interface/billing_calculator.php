<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NarsEMR - Calculator</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body { font-family: Arial, Helvetica, sans-serif !important; }
    </style>
</head>
<body class="bg-slate-900 text-white min-h-screen p-6">
    <div class="max-w-6xl mx-auto">
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-6">
            <div class="flex flex-wrap gap-2 bg-slate-800 p-1.5 rounded-lg border border-slate-700">
                <a href="pila_dashboard.php" class="text-slate-400 hover:text-white px-4 py-2 text-sm font-medium">Queue Monitor</a>
                <a href="pharmacy_discovery.php" class="text-slate-400 hover:text-white px-4 py-2 text-sm font-medium flex items-center gap-1">Pharmacy Discovery 🔒</a>
                <a href="billing_calculator.php" class="bg-purple-600 text-white px-4 py-2 rounded-md text-sm font-medium shadow">Billing Calc</a>
                <a href="reseta_sms_share.php" class="text-slate-400 hover:text-white px-4 py-2 text-sm font-medium">Reseta Share</a>
            </div>
        </div>

        <div class="w-full max-w-md bg-slate-800 rounded-xl p-6 border border-slate-700 mx-auto mt-12">
            <h2 class="text-xl font-bold text-purple-400 mb-4">Senior / PWD Billing Calculator</h2>
            <div class="space-y-4">
                <div>
                    <label class="block text-xs uppercase tracking-wider text-slate-400 mb-1">Base Consultation Fee (PHP)</label>
                    <input type="number" value="500" class="w-full bg-slate-900 border border-slate-700 rounded p-2 text-white">
                </div>
                <div class="bg-slate-900 p-4 rounded border border-slate-700 text-sm space-y-2">
                    <div class="flex justify-between text-slate-400"><span>Vat Relief (12% Stripped):</span><span>-₱53.57</span></div>
                    <div class="flex justify-between text-slate-400"><span>Statutory Discount (20%):</span><span>-₱89.29</span></div>
                    <div class="flex justify-between text-white font-bold border-t border-slate-700 pt-2 mt-2"><span>Total Due:</span><span class="text-purple-400">₱357.14</span></div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
