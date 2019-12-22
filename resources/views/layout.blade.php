<!DOCTYPE html>
<html lang="en">
<head>
@include('template/head')
</head>
<body>
    <header>
    </header>

    <main>
        <section>
            <div class="container">
                @include($page_view)
            </div>
        </section>
    </main>
    
    <footer>
       @include('template/footer')
    </footer>
</body>
</html>