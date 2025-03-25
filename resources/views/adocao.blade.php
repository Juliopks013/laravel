@extends('_partials/body')
    
    @section('conteudo')


    <div class="hero-section">
        <div class="container">
            <h1>Adote um Amigo</h1>
            <p>Encontre seu novo companheiro de quatro patas e dê a ele um lar cheio de amor.</p>
        </div>
    </div>

    <div class="container">
        <div class="filter-section">
            <h4>Filtrar animais</h4>
            <div class="row">
                <div class="col-md-3">
                    <select class="form-select">
                        <option selected>Tipo de animal</option>
                        <option>Cachorro</option>
                        <option>Gato</option>
                        <option>Coelho</option>
                        <option>Outros</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <select class="form-select">
                        <option selected>Sexo</option>
                        <option>Macho</option>
                        <option>Fêmea</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <select class="form-select">
                        <option selected>Idade</option>
                        <option>Filhote</option>
                        <option>Até 1 ano</option>
                        <option>1-3 anos</option>
                        <option>4+ anos</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <select class="form-select">
                        <option selected>Porte</option>
                        <option>Pequeno</option>
                        <option>Médio</option>
                        <option>Grande</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="animal-card">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRw01ldRfXe3ZYhiEU12hhdZ9PkyxiBVijt5w&s" alt="Cachorro">
                    <div class="card-body">
                        <h3>Rex</h3>
                        <div class="details">Macho • 2 anos • Porte médio</div>
                        <p class="card-text">Rex é um cachorro muito brincalhão e adora crianças. Está castrado.</p>
                        <button class="btn-adopt">Adotar</button>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="animal-card">
                    <img src="https://d1muf25xaso8hp.cloudfront.net/https://img.criativodahora.com.br/2024/02/criativo-65bc15f0bec45MDEvMDIvMjAyNCAxOWgwNg==.jpg?w=1000&h=&auto=compress&dpr=1&fit=max" alt="Gato">
                    <div class="card-body">
                        <h3>Luna</h3>
                        <div class="details">Fêmea • 1 ano • Porte pequeno</div>
                        <p class="card-text">Luna é uma gatinha tranquila que adora carinho e dormir no sol.</p>
                        <button class="btn-adopt">Adotar</button>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="animal-card">
                    <img src="https://i.pinimg.com/736x/c5/16/41/c51641b5d7046c478bca9b8ed8e42c4d.jpg" alt="Coelho">
                    <div class="card-body">
                        <h3>Bolinha</h3>
                        <div class="details">Macho • 6 meses • Porte pequeno</div>
                        <p class="card-text">Bolinha é um coelho muito dócil e curioso, perfeito para apartamentos.</p>
                        <button class="btn-adopt">Adotar</button>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="animal-card">
                    <img src="https://images.unsplash.com/photo-1552053831-71594a27632d?ixlib=rb-1.2.1&auto=format&fit=crop&w=612&q=80" alt="Cachorro">
                    <div class="card-body">
                        <h3>Thor</h3>
                        <div class="details">Macho • 3 anos • Porte grande</div>
                        <p class="card-text">Thor é um cachorro muito protetor, um verdadeiro companheiro.</p>
                        <button class="btn-adopt">Adotar</button>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="animal-card">
                    <img src="https://images.unsplash.com/photo-1514888286974-6c03e2ca1dba?ixlib=rb-1.2.1&auto=format&fit=crop&w=613&q=80" alt="Gato">
                    <div class="card-body">
                        <h3>Mingau</h3>
                        <div class="details">Macho • 2 anos • Porte médio</div>
                        <p class="card-text">Mingau é independente mas gosta de carinho no seu próprio tempo.</p>
                        <button class="btn-adopt">Adotar</button>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="animal-card">
                    <img src="https://images.unsplash.com/photo-1452570053594-1b985d6ea890?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="Cachorro">
                    <div class="card-body">
                        <h3>Mel</h3>
                        <div class="details">Fêmea • 4 meses • Porte pequeno</div>
                        <p class="card-text">Mel é uma filhote cheia de energia que vai trazer alegria para sua casa.</p>
                        <button class="btn-adopt">Adotar</button>
                    </div>
                </div>
            </div>
        </div>
        
        <nav aria-label="Page navigation" class="mt-4">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">Anterior</a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Próxima</a>
                </li>
            </ul>
        </nav>
    </div>
    
    <footer>
        <div class="container text-center">
            <p>© 2023 ChiquePets - Todos os direitos reservados</p>
            <p>Adote, não compre! 🐾</p>
        </div>
    </footer>

    @endsection
