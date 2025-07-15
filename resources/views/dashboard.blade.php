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
                    <x-lucide-heart class="inline-block w-8 h-8 stroke-current" />
                </div>
                <div class="stat-title">Total de Usuarios</div>
                <div class="stat-value text-primary">25.6K</div>
                <div class="stat-desc">21% más que el mes pasado</div>
            </div>

            <div class="stat">
                <div class="stat-figure text-secondary">
                    <x-lucide-zap class="inline-block w-8 h-8 stroke-current" />
                </div>
                <div class="stat-title">Sesiones Activas</div>
                <div class="stat-value text-secondary">2.6K</div>
                <div class="stat-desc">5% más que ayer</div>
            </div>

            <div class="stat">
                <div class="stat-figure text-accent">
                    <x-lucide-wallet class="inline-block w-8 h-8 stroke-current" />
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
                            <x-lucide-zap class="h-6 w-6" />
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
                        <x-lucide-settings class="h-6 w-6" />
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
                        <x-lucide-bar-chart-3 class="h-6 w-6" />
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
                        <x-lucide-bar-chart class="h-8 w-8" />
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
