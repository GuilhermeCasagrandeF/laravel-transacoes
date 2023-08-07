<x-layout title="Login" >
    <form method="post">
        @csrf
        <div class="form-group">
            <label for="email" class="form-label"></label>
            <input type="email" name="email" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="password" class="form-label"></label>
            <input type="password" name="password" id="password" class="form-control">
        </div>
        <button class="btn btn-primary mt-3 mb-3">Login</button>
    </form>
</x-layout>
