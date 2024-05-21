<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Fetch</h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Adresse</th>
                                <th>Ville</th>
                                <th>Code Postal</th>
                                <th>Mail</th>
                                <th>N° de Téléphone</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($produit as $item)
                            <tr>
                                <td>{{ $item->numCommerciaux }}</td>
                                <td>{{ $item->nomCommerciaux }}</td>
                                <td>{{ $item->prenomCommerciaux }}</td>
                                <td>{{ $item->adresseCommerciaux }}</td>
                                <td>{{ $item->villeCommerciaux }}</td>
                                <td>{{ $item->cpCommerciaux }}</td>
                                <td>{{ $item->mailCommerciaux }}</td>
                                <td>{{ $item->telCommerciaux }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
