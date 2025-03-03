<aside class="w-64 h-screen bg-gray-800 text-white fixed left-0 top-0 transform transition-transform duration-200 ease-in-out"
       x-data="{ open: true }"
       :class="{'translate-x-0': open, '-translate-x-full': !open}">
    <!-- Toggle Button -->
    <button @click="open = !open"
            class="absolute right-0 transform translate-x-full bg-gray-800 text-white p-2 rounded-tr rounded-br">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M4 6h16M4 12h16M4 18h16" />
        </svg>
    </button>

    <!-- Sidebar Content -->
    <div class="flex flex-col h-full">
        <!-- Logo -->
        <div class="p-4 text-xl font-bold border-b border-gray-700">
            SchoolManager
        </div>

        <!-- Navigation -->
        <nav class="flex-1 py-4 overflow-y-auto">
            <div class="px-4 space-y-2">

                @if(auth()->user()->role === 'admin')
                    <!-- Menu Administrateur -->
                    <a href="{{ route('admin.dashboard') }}" class="block px-4 py-2 rounded-lg hover:bg-gray-700 transition-colors duration-200">
                        <div class="flex items-center space-x-2">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                            <span>Tableau de bord</span>
                        </div>
                    </a>
                    <a href="{{ route('admin.users.index') }}" class="block px-4 py-2 rounded-lg hover:bg-gray-700 transition-colors duration-200">
                        <div class="flex items-center space-x-2">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                            </svg>
                            <span>Gestion des Utilisateurs</span>
                        </div>
                    </a>

                    <a href="{{ route('admin.classes.index') }}" class="block px-4 py-2 rounded-lg hover:bg-gray-700 transition-colors duration-200">
                        <div class="flex items-center space-x-2">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                            </svg>
                            <span>Gestion des Classes</span>
                        </div>
                    </a>

                    <a href="{{ route('admin.subjects.index') }}" class="block px-4 py-2 rounded-lg hover:bg-gray-700 transition-colors duration-200">
                        <div class="flex items-center space-x-2">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                            </svg>
                            <span>Gestion des Matières</span>
                        </div>
                    </a>

                    <a href="{{ route('admin.rooms.index') }}" class="block px-4 py-2 rounded-lg hover:bg-gray-700 transition-colors duration-200">
                        <div class="flex items-center space-x-2">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                            </svg>
                            <span>Gestion des Salles</span>
                        </div>
                    </a>

                    <a href="{{ route('admin.schedules.index') }}" class="block px-4 py-2 rounded-lg hover:bg-gray-700 transition-colors duration-200">
                        <div class="flex items-center space-x-2">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                            <span>Emplois du temps</span>
                        </div>
                    </a>

                @elseif(auth()->user()->role === 'teacher')
                    <!-- Menu Enseignant -->
                    <a href="{{ route('teacher.dashboard') }}" class="block px-4 py-2 rounded-lg hover:bg-gray-700 transition-colors duration-200">
                        <div class="flex items-center space-x-2">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                            <span>Tableau de bord</span>
                        </div>
                    </a>
                    <a href="{{ route('teacher.courses') }}" class="block px-4 py-2 rounded-lg hover:bg-gray-700 transition-colors duration-200">
                        <div class="flex items-center space-x-2">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                            </svg>
                            <span>Mes Cours</span>
                        </div>
                    </a>

                    <a href="{{ route('teacher.grades.index') }}" class="block px-4 py-2 rounded-lg hover:bg-gray-700 transition-colors duration-200">
                        <div class="flex items-center space-x-2">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>
                            </svg>
                            <span>Gestion des Notes</span>
                        </div>
                    </a>

                    <a href="{{ route('teacher.attendance.index') }}" class="block px-4 py-2 rounded-lg hover:bg-gray-700 transition-colors duration-200">
                        <div class="flex items-center space-x-2">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                            </svg>
                            <span>Gestion des Présences</span>
                        </div>
                    </a>

                @elseif(auth()->user()->role === 'student')
                    <!-- Menu Étudiant -->
                    <a href="{{ route('student.dashboard') }}" class="block px-4 py-2 rounded-lg hover:bg-gray-700 transition-colors duration-200">
                        <div class="flex items-center space-x-2">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                            <span>Tableau de bord</span>
                        </div>
                    </a>
                    <a href="{{ route('student.courses') }}" class="block px-4 py-2 rounded-lg hover:bg-gray-700 transition-colors duration-200">
                        <div class="flex items-center space-x-2">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                            </svg>
                            <span>Mes Cours</span>
                        </div>
                    </a>

                    <a href="{{ route('student.grades') }}" class="block px-4 py-2 rounded-lg hover:bg-gray-700 transition-colors duration-200">
                        <div class="flex items-center space-x-2">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>
                            </svg>
                            <span>Mes Notes</span>
                        </div>
                    </a>

                    <a href="{{ route('student.schedule') }}" class="block px-4 py-2 rounded-lg hover:bg-gray-700 transition-colors duration-200">
                        <div class="flex items-center space-x-2">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                            <span>Emploi du temps</span>
                        </div>
                    </a>

                @elseif(auth()->user()->role === 'parent')
                    <!-- Menu Parent -->
                    <a href="{{ route('parent.dashboard') }}" class="block px-4 py-2 rounded-lg hover:bg-gray-700 transition-colors duration-200">
                        <div class="flex items-center space-x-2">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                            <span>Tableau de bord</span>
                        </div>
                    </a>
                    <a href="{{ route('parent.children') }}" class="block px-4 py-2 rounded-lg hover:bg-gray-700 transition-colors duration-200">
                        <div class="flex items-center space-x-2">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                            <span>Mes Enfants</span>
                        </div>
                    </a>

                    <a href="{{ route('parent.grades') }}" class="block px-4 py-2 rounded-lg hover:bg-gray-700 transition-colors duration-200">
                        <div class="flex items-center space-x-2">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>
                            </svg>
                            <span>Notes</span>
                        </div>
                    </a>

                    <a href="{{ route('parent.attendance') }}" class="block px-4 py-2 rounded-lg hover:bg-gray-700 transition-colors duration-200">
                        <div class="flex items-center space-x-2">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                            </svg>
                            <span>Assiduité</span>
                        </div>
                    </a>

                    <a href="{{ route('parent.schedule') }}" class="block px-4 py-2 rounded-lg hover:bg-gray-700 transition-colors duration-200">
                        <div class="flex items-center space-x-2">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                            <span>Emploi du temps</span>
                        </div>
                    </a>
                @endif

                <!-- Section commune pour tous les utilisateurs -->
                <div class="pt-4 mt-4 border-t border-gray-700">
                    <a href="{{ route('profile.edit') }}" class="block px-4 py-2 rounded-lg hover:bg-gray-700 transition-colors duration-200">
                        <div class="flex items-center space-x-2">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                            <span>Mon Profil</span>
                        </div>
                    </a>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="w-full px-4 py-2 text-left rounded-lg hover:bg-gray-700 transition-colors duration-200">
                            <div class="flex items-center space-x-2">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                                </svg>
                                <span>Déconnexion</span>
                            </div>
                        </button>
                    </form>
                </div>
            </div>
        </nav>

        <!-- User Profile -->
        <div class="p-4 border-t border-gray-700">
            <div class="flex items-center space-x-3">
                <div class="w-10 h-10 rounded-full bg-gray-600 flex items-center justify-center">
                    <span class="text-lg font-medium">
                        {{ substr(auth()->user()->name ?? 'U', 0, 1) }}
                    </span>
                </div>
                <div class="flex-1">
                    <p class="text-sm font-medium">{{ auth()->user()->name ?? 'User' }}</p>
                    <p class="text-xs text-gray-400">{{ auth()->user()->email ?? 'email@example.com' }}</p>
                </div>
            </div>
        </div>
    </div>
</aside>
