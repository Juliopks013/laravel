    @extends('_partials/body')
    
    @section('conteudo')


    <div class="hero-section">
      <div class="container">
        <h1>Adote um Amigo</h1>
        <p>Encontre seu novo companheiro de quatro patas e dê a ele um lar cheio de amor.</p>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="animal-card">
            <img src="https://png.pngtree.com/thumb_back/fh260/background/20220610/pngtree-puppy-chihuahua-pet-white-white-background-photo-image_13861066.jpg" alt="Cachorro">
            <h3>Rex</h3>
            <p>Macho, 2 anos</p>
            <button class="btn-adopt">Adotar</button>
          </div>
        </div>
        <div class="col-md-4">
          <div class="animal-card">
            <img src="https://i.pinimg.com/236x/b2/ac/51/b2ac510bf195467c1a79293b3884cdc4.jpg" alt="Gato">
            <h3>Luna</h3>
            <p>Fêmea, 1 ano</p>
            <button class="btn-adopt">Adotar</button>
          </div>
        </div>
        <div class="col-md-4">
          <div class="animal-card">
            <img src="https://i.pinimg.com/736x/c5/16/41/c51641b5d7046c478bca9b8ed8e42c4d.jpg" alt="Coelho">
            <h3>Bolinha</h3>
            <p>Macho, 6 meses</p>
            <button class="btn-adopt">Adotar</button>
          </div>
        </div>
      </div>
    </div>

    @endsection
