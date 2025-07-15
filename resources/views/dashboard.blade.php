<x-layouts.app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-6 p-4">
        <!-- Hero Section -->
        <div class="hero bg-gradient-to-r from-primary to-secondary rounded-xl text-primary-content">
            <div class="hero-content text-center">
                <div class="max-w-md">
                    <h1 class="text-4xl font-bold">¡Bienvenido al Dashboard!</h1>
                    <p class="py-6 text-lg opacity-90">
                        Gestiona tu aplicación desde este panel de control centralizado
                    </p>
                    <button class="btn btn-accent btn-lg">
                        Comenzar
                    </button>
                </div>
            </div>
        </div>

        <!-- Stats Section -->
        <div class="stats stats-vertical lg:stats-horizontal shadow-lg w-full">
            <div class="stat">
                <div class="stat-figure text-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-8 h-8 stroke-current">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                    </svg>
                </div>
                <div class="stat-title">Total de Usuarios</div>
                <div class="stat-value text-primary">25.6K</div>
                <div class="stat-desc">21% más que el mes pasado</div>
            </div>

            <div class="stat">
                <div class="stat-figure text-secondary">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-8 h-8 stroke-current">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <div class="stat-title">Sesiones Activas</div>
                <div class="stat-value text-secondary">2.6K</div>
                <div class="stat-desc">5% más que ayer</div>
            </div>

            <div class="stat">
                <div class="stat-figure text-accent">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-8 h-8 stroke-current">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"></path>
                    </svg>
                </div>
                <div class="stat-title">Ingresos</div>
                <div class="stat-value text-accent">$89,400</div>
                <div class="stat-desc">12% más que el trimestre anterior</div>
            </div>
        </div>

        <!-- Cards Grid -->
        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
            <!-- Card 1: Actividad Reciente -->
            <div class="card bg-base-100 shadow-xl">
                <div class="card-body">
                    <div class="flex items-center justify-between">
                        <h2 class="card-title text-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                            Actividad Reciente
                        </h2>
                        <div class="badge badge-primary badge-sm">En vivo</div>
                    </div>
                    <p class="text-base-content/70">Últimas acciones realizadas en el sistema</p>
                    <div class="mt-4 space-y-2">
                        <div class="flex items-center gap-2">
                            <div class="w-2 h-2 bg-success rounded-full"></div>
                            <span class="text-sm">Usuario registrado</span>
                            <span class="text-xs text-base-content/50 ml-auto">hace 2 min</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <div class="w-2 h-2 bg-warning rounded-full"></div>
                            <span class="text-sm">Actualización del sistema</span>
                            <span class="text-xs text-base-content/50 ml-auto">hace 15 min</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <div class="w-2 h-2 bg-info rounded-full"></div>
                            <span class="text-sm">Backup completado</span>
                            <span class="text-xs text-base-content/50 ml-auto">hace 1 hora</span>
                        </div>
                    </div>
                    <div class="card-actions justify-end mt-4">
                        <button class="btn btn-primary btn-sm">Ver todo</button>
                    </div>
                </div>
            </div>

            <!-- Card 2: Configuración Rápida -->
            <div class="card bg-base-100 shadow-xl">
                <div class="card-body">
                    <h2 class="card-title text-secondary">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        Configuración Rápida
                    </h2>
                    <p class="text-base-content/70">Ajustes principales del sistema</p>
                    <div class="mt-4 space-y-3">
                        <div class="flex items-center justify-between">
                            <span class="text-sm">Notificaciones</span>
                            <input type="checkbox" class="toggle toggle-primary" checked />
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-sm">Modo oscuro</span>
                            <input type="checkbox" class="toggle toggle-secondary" />
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-sm">Backups automáticos</span>
                            <input type="checkbox" class="toggle toggle-accent" checked />
                        </div>
                    </div>
                    <div class="card-actions justify-end mt-4">
                        <button class="btn btn-secondary btn-sm">Configurar</button>
                    </div>
                </div>
            </div>

            <!-- Card 3: Rendimiento -->
            <div class="card bg-base-100 shadow-xl">
                <div class="card-body">
                    <h2 class="card-title text-accent">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                        </svg>
                        Rendimiento
                    </h2>
                    <p class="text-base-content/70">Métricas del sistema en tiempo real</p>
                    <div class="mt-4 space-y-3">
                        <div>
                            <div class="flex justify-between text-sm mb-1">
                                <span>CPU</span>
                                <span>65%</span>
                            </div>
                            <progress class="progress progress-success w-full" value="65" max="100"></progress>
                        </div>
                        <div>
                            <div class="flex justify-between text-sm mb-1">
                                <span>Memoria</span>
                                <span>78%</span>
                            </div>
                            <progress class="progress progress-warning w-full" value="78" max="100"></progress>
                        </div>
                        <div>
                            <div class="flex justify-between text-sm mb-1">
                                <span>Disco</span>
                                <span>45%</span>
                            </div>
                            <progress class="progress progress-info w-full" value="45" max="100"></progress>
                        </div>
                    </div>
                    <div class="card-actions justify-end mt-4">
                        <button class="btn btn-accent btn-sm">Detalles</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Section -->
        <div class="card bg-base-100 shadow-xl">
            <div class="card-body">
                <div class="flex items-center justify-between mb-4">
                    <h2 class="card-title text-2xl">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        Análisis y Reportes
                    </h2>
                    <div class="flex gap-2">
                        <div class="badge badge-outline">Últimos 30 días</div>
                        <div class="badge badge-primary">Actualizado</div>
                    </div>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
                    <div class="text-center">
                        <div class="text-2xl font-bold text-primary">1,234</div>
                        <div class="text-sm text-base-content/70">Visitas totales</div>
                    </div>
                    <div class="text-center">
                        <div class="text-2xl font-bold text-secondary">98.5%</div>
                        <div class="text-sm text-base-content/70">Tiempo de actividad</div>
                    </div>
                    <div class="text-center">
                        <div class="text-2xl font-bold text-accent">456</div>
                        <div class="text-sm text-base-content/70">Nuevos usuarios</div>
                    </div>
                    <div class="text-center">
                        <div class="text-2xl font-bold text-success">89%</div>
                        <div class="text-sm text-base-content/70">Satisfacción</div>
                    </div>
                </div>

                <div class="flex flex-wrap gap-2 justify-center">
                    <button class="btn btn-primary">Generar reporte</button>
                    <button class="btn btn-secondary">Exportar datos</button>
                    <button class="btn btn-accent">Configurar alertas</button>
                    <button class="btn btn-outline">Ver historial</button>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
