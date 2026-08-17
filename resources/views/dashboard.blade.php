<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100 font-sans text-slate-800 min-h-screen flex flex-col">

    <!-- Top Navigation Bar -->
    <header class="bg-white border-b border-slate-200 sticky top-0 z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">
            
            <!-- Brand Logo -->
            <div class="flex items-center space-x-3">
                <div class="h-9 w-9 rounded-xl bg-indigo-600 flex items-center justify-center text-white font-bold text-lg">
                    D
                </div>
                <span class="text-lg font-bold text-slate-900">ManagerPortal</span>
            </div>

            <!-- User Menu & Logout -->
            <div class="flex items-center space-x-4">
                <div class="text-right hidden sm:block">
                    <p class="text-sm font-semibold text-slate-900">{{ Auth::user()->name }}</p>
                    <p class="text-xs text-slate-500 capitalize">{{ Auth::user()->role }}</p>
                </div>
                
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="bg-slate-100 hover:bg-slate-200 text-slate-700 px-3.5 py-2 rounded-lg text-xs font-semibold transition">
                        Logout
                    </button>
                </form>
            </div>
        </div>
    </header>

    <!-- Main Content Area -->
    <main class="flex-1 max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8 py-8 space-y-6">

        <!-- Flash Message -->
        @if(session('message'))
            <div class="p-4 rounded-xl bg-emerald-50 border border-emerald-200 text-emerald-800 text-sm font-medium flex justify-between items-center">
                <span>{{ session('message') }}</span>
                <button onclick="this.parentElement.remove()" class="text-emerald-600 font-bold ml-4">&times;</button>
            </div>
        @endif

        <!-- Welcome Banner -->
        <div class="bg-gradient-to-r from-indigo-600 to-indigo-800 rounded-2xl p-6 sm:p-8 text-white shadow-lg flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
            <div>
                <h1 class="text-2xl sm:text-3xl font-bold">Welcome back, {{ Auth::user()->name }}!</h1>
                <p class="text-indigo-200 text-sm mt-1">Logged in as <span class="text-white font-medium capitalize">{{ Auth::user()->role }}</span> • {{ Auth::user()->email }}</p>
            </div>
            <span class="bg-white/20 backdrop-blur-md px-3 py-1.5 rounded-full text-xs font-semibold tracking-wider uppercase">
                Status: Active
            </span>
        </div>

        <!-- Metric Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm">
                <p class="text-xs font-bold text-slate-400 uppercase tracking-wider">Account Role</p>
                <p class="text-2xl font-extrabold text-slate-900 mt-2 capitalize">{{ Auth::user()->role }}</p>
                <p class="text-xs text-slate-500 mt-1">Assigned upon registration</p>
            </div>

            <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm">
                <p class="text-xs font-bold text-slate-400 uppercase tracking-wider">Email Status</p>
                <p class="text-2xl font-extrabold text-emerald-600 mt-2">Verified</p>
                <p class="text-xs text-slate-500 mt-1">{{ Auth::user()->email }}</p>
            </div>

            <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm">
                <p class="text-xs font-bold text-slate-400 uppercase tracking-wider">Member Since</p>
                <p class="text-2xl font-extrabold text-slate-900 mt-2">{{ Auth::user()->created_at->format('M d, Y') }}</p>
                <p class="text-xs text-slate-500 mt-1">{{ Auth::user()->created_at->diffForHumans() }}</p>
            </div>
        </div>

        <!-- Account Profile Details -->
        <div class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden">
            <div class="px-6 py-4 border-b border-slate-100 bg-slate-50/50">
                <h3 class="font-bold text-slate-900 text-base">Account Information</h3>
            </div>
            <div class="p-6 divide-y divide-slate-100">
                <div class="py-3 flex justify-between text-sm">
                    <span class="text-slate-500 font-medium">Full Name</span>
                    <span class="text-slate-900 font-semibold">{{ Auth::user()->name }}</span>
                </div>
                <div class="py-3 flex justify-between text-sm">
                    <span class="text-slate-500 font-medium">Email Address</span>
                    <span class="text-slate-900 font-semibold">{{ Auth::user()->email }}</span>
                </div>
                <div class="py-3 flex justify-between text-sm">
                    <span class="text-slate-500 font-medium">System Role</span>
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-semibold bg-indigo-50 text-indigo-700 capitalize">
                        {{ Auth::user()->role }}
                    </span>
                </div>
            </div>
        </div>

    </main>

</body>
</html>