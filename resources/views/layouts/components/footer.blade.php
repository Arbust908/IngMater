<footer class="w-full bg-gris-700">
    <!-- {{ Route::currentRouteName() }} -->
    <section>
        <h4>Nuestros Clientes:</h4>
        <img src="" alt="logo1">
        <img src="" alt="logo2">
        <img src="" alt="logo3">
    </section>
    <section>
        <h4>Nuestro Newsletter</h4>
        <form action="" method="post">
            @csrf
            <input type="text" placeholder="mimail@mail.com">
            <button type="submit">Quiero suscribirme</button>
        </form>
    </section>
    <section>
        <h4>Argentina</h4>
        <ul>
            <li>Buenos Aires</li>
            <li>Rosario (Santa Fe)</li>
            <li>Bariloche (Río Nregro)</li>
        </ul>
    </section>
    <small> Copyright 2019 Ingmater </small>
</footer>
