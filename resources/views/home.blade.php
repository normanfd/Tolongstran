@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-3">
			<div class="card">
                <img src="img/furnitur.png" class="card-img-top"  alt="Kursi">
                <div class="card-body">
					<h5 class="card-title">Furniture</h5>
					<p class="card-text">Cari meja-kursi-lemari atau furniture lainnya untuk keperluan acaramu? cari disini.</p>
					<a href="{{ route('furniture')}}" class="btn btn-primary">Go somewhere</a>
					
						
				</div>
			</div>
		</div>

		<div class="col-sm-3">
			<div class="card">
                <img class="card-img-top" src="img/kostum.png" alt="Card image cap">
                <div class="card-body">
					<h5 class="card-title">Kostum</h5>
					<p class="card-text">Cari kostum-topeng-aksesoris atau pernak-pernik bagus untuk acara kalian? cari disini.</p>
					<a href="{{ route ('kostum')}} " class="btn btn-primary">Go somewhere</a>
				</div>
			</div>
		</div>
		

		<div class="col-sm-3">
			<div class="card">
                <img class="card-img-top" src="img/musik.png" alt="Card image cap">
                <div class="card-body">
					<h5 class="card-title">Musik</h5>
<<<<<<< HEAD
					<p class="card-text">Cari alat musik seperti gitar, biola, dll untuk acara kalian? cari disini.</p>
=======
					<p class="card-text">Cari alat musik seperti gitar, biola atau alat musik lainnya untuk acara kalian? cari disini.</p>
>>>>>>> 99cdbb054ba5be306179fa5e2144c9cc56ea716f
					<a href="{{ route ('musik')}} " class="btn btn-primary">Go somewhere</a>
				</div>
			</div>
		</div>

		<div class="col-sm-3">
			<div class="card">
                <img class="card-img-top" src="img/elektronik.png" alt="Card image cap">
                <div class="card-body">
					<h5 class="card-title">Elektronik</h5>
					<p class="card-text">Cari alat elektronik seperti sound system, speaker, dll untuk acara kalian? cari disini.</p>
					<a href="{{ route ('elektronik')}} " class="btn btn-primary">Go somewhere</a>
				</div>
			</div>
		</div>

<br>
		

    </div>
    <br></br>
    <div class="row">
	<div class="col-sm-3">
			<div class="card">
                <img class="card-img-top" src="img/tenda.png" alt="Card image cap">
                <div class="card-body">
					<h5 class="card-title">Stand/Tenda</h5>
					<p class="card-text">Cari Tenda-Panggung-Terpal atau keperluan lapangan lainnya, bisa kamu cari disini.</p>
					<a href="{{ route ('tenda')}}" class="btn btn-primary">Go somewhere</a>
				</div>
			</div>
		</div>

    </div>
		
		
    </div>
    
</div>


@endsection
