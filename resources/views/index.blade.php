<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumnos</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-200">
    <div class="max-w-5xl mx-auto p-6 bg-white shadow-lg mt-10 rounded-lg">
        <h1 class="text-5xl font-bold text-center text-teal-700">Alumnos</h1>
        
        <div class="flex justify-between mt-4">
            <input type="text" placeholder="Matrícula" class="border p-2 rounded w-2/3" id="searchInput">
            <button class="bg-yellow-400 text-white px-4 py-2 rounded flex items-center">
                ✎ Registrar Alumno
            </button>
        </div>
        
        <div class="mt-4 bg-blue-100 p-2 rounded">
            <strong>Leyenda:</strong>
            <span class="bg-green-400 px-2 py-1 rounded text-white">Probabilidad de pasar arriba del 70%</span>
            <span class="bg-blue-400 px-2 py-1 rounded text-white">Probabilidad de pasar entre el 70% y el 30%</span>
            <span class="bg-red-400 px-2 py-1 rounded text-white">Probabilidad de pasar abajo del 30%</span>
            <span class="bg-yellow-400 px-2 py-1 rounded text-white">Menos de 7 materias inscritas</span>
        </div>

        <table class="w-full mt-4 border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-100">
                    <th class="border p-2">Matrícula</th>
                    <th class="border p-2">Nombre(s)</th>
                    <th class="border p-2">Apellido Paterno</th>
                    <th class="border p-2">Apellido Materno</th>
                    <th class="border p-2">Fecha de Nacimiento</th>
                    <th class="border p-2">Carrera</th>
                    <th class="border p-2">Cuatrimestre</th>
                    <th class="border p-2">Acciones</th>
                </tr>
            </thead>
            
        </table>
    </div>
</body>
</html>
