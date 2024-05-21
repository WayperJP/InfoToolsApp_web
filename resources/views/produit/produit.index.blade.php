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
                                <th>Numero</th>
                                <th>Nom</th>
                                <th>Prix</th>
                                <th>Petite Description</th>
                                <th>Longue Description</th>
                                <th>Type</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($produit as $item)
                            <tr>
                                <td>{{ $item->numProduit }}</td>
                                <td>{{ $item->nomProduit }}</td>
                                <td>{{ $item->prixProduit }}</td>
                                <td>{{ $item->petiteDescriptionProduit }}</td>
                                <td>{{ $item->longueDescriptionProduit }}</td>
                                <td>{{ $item->typeProduit }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
