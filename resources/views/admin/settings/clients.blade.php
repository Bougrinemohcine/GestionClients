<x-layout>
    <div class="container mt-5">
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        <button class="btn btn-primary mb-2" data-toggle="modal" data-target="#createClientModal">Create Client</button>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Telephone</th>
                    <th>Website</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($clients as $client)
                    <tr>
                        <td>{{ $client->name }}</td>
                        <td>{{ $client->email }}</td>
                        <td>{{ $client->address }}</td>
                        <td>{{ $client->telephone }}</td>
                        <td>{{ $client->website ? $client->website : 'No website' }}</td>
                        <td>
                            <button class="btn btn-primary" onclick="editClient({{ $client->id }})" data-toggle="modal" data-target="#editClientModal">Edit</button>
                            <form action="{{ route('clients.destroy', $client->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

   <!-- Create Client Modal -->
<div class="modal fade" id="createClientModal" tabindex="-1" role="dialog" aria-labelledby="createClientModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('clients.store') }}" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="createClientModalLabel">Create Client</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="createClientName" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="createClientEmail" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <textarea name="address" id="createClientAddress" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="telephone">Telephone</label>
                        <input type="text" name="telephone" id="createClientTelephone" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="website">Website</label>
                        <input type="url" name="website" id="createClientWebsite" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Create Client</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit Client Modal -->
<div class="modal fade" id="editClientModal" tabindex="-1" role="dialog" aria-labelledby="editClientModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form id="editClientForm" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="editClientModalLabel">Edit Client</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="client_id" id="editClientId">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="editClientName" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="editClientEmail" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <textarea name="address" id="editClientAddress" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="telephone">Telephone</label>
                        <input type="text" name="telephone" id="editClientTelephone" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="website">Website</label>
                        <input type="url" name="website" id="editClientWebsite" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update Client</button>
                </div>
            </form>
        </div>
    </div>
</div>



<script>
    function editClient(id) {
        // Make an AJAX request to get the client data
        $.get(`/clients/${id}/edit`, function(client) {
            $('#editClientId').val(client.id);
            $('#editClientName').val(client.name);
            $('#editClientEmail').val(client.email);
            $('#editClientAddress').val(client.address);
            $('#editClientTelephone').val(client.telephone); // Include telephone
            $('#editClientWebsite').val(client.website); // Include website
            $('#editClientForm').attr('action', `/clients/${id}`);
        });
    }
</script>

</x-layout>
