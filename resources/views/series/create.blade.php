<x-layout title=" Nova Série">
    <form action="/series/salvar" method="post">
        @csrf 
        <div class="mb-3">
            <label for="Nome" class="form-label">Nome:</label>
            <input type="text" id="nome" name="nome" class="fomr-control">
        </div>
        <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>
</x-layout>