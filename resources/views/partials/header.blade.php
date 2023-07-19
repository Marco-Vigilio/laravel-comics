<header>
    <section>
        <div>
            <img src="../assets/img/dc-logo.png" alt="Logo DC">
        </div>
        <nav>
            <ul>
                <li v-for="element in navBarList">
                    <a v-bind:class="element.active ? 'active' : 'no_active'" href="#">
                        
                    </a>
                </li>
            </ul>
        </nav>
    </section>
</header>