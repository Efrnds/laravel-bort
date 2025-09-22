<!-- Styles / Scripts -->
@vite(['resources/css/app.css', 'resources/js/app.js'])

<div class="h-screen w-screen flex">
    <form id="somaForm" method="get"
        class="flex flex-col gap-4 w-fit border border-slate-200 shadow-md m-auto h-fit p-4 rounded-md ">
        <h1 class="text-2xl font-bold mb-4">Somar dois números</h1>
        <label for="valor1">Insira o valor 1</label>
        <input id="valor1" name="valor1" type="number"
            class="outline-slate-500 outline-2 rounded-sm focus:outline-slate-800 transition shadow-md p-1"
            value="{{ isset($valor1) ? $valor1 : '' }}">

        <label for="valor2">Insira o valor 2</label>
        <input id="valor2" name="valor2" type="number"
            class="outline-slate-500 outline-2 rounded-sm focus:outline-slate-800 transition shadow-md p-1"
            value="{{ isset($valor2) ? $valor2 : '' }}">

        <button type="submit"
            class="bg-blue-500 transition cursor-pointer py-1 font-bold rounded-md text-white hover:bg-blue-700 shadow-md">enviar</button>
    </form>
</div>

<script>
    document.getElementById('somaForm').addEventListener('submit', function (e) {
        e.preventDefault();
        const v1 = document.getElementById('valor1').value;
        const v2 = document.getElementById('valor2').value;
        window.location.href = `/soma/${v1}/${v2}`;
    });
</script>
