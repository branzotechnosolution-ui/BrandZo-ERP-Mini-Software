<div class="row">
    <div class="col-md-12">
        <div class="card border-0 b-shadow-4 rounded-lg bg-white mb-4">
            <div class="card-header bg-white border-bottom-grey py-3 px-4 d-flex justify-content-between align-items-center">
                <h4 class="f-15 font-weight-bold text-darkest-grey mb-0">
                    <i class="fa fa-file-contract text-primary mr-2"></i>Client Contracts
                </h4>
            </div>
            <div class="card-body p-4">
                @php
                    $contracts = \App\Models\Contract::where('client_id', $client->id)->get();
                @endphp

                @if($contracts->count() > 0)
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead class="thead-light">
                                <tr>
                                    <th>Contract #</th>
                                    <th>Subject</th>
                                    <th>Amount</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($contracts as $contract)
                                    <tr>
                                        <td>#{{ $contract->id }}</td>
                                        <td>{{ $contract->subject }}</td>
                                        <td>₹{{ number_format($contract->amount, 2) }}</td>
                                        <td>{{ $contract->start_date ? $contract->start_date->format('d M Y') : 'N/A' }}</td>
                                        <td>{{ $contract->end_date ? $contract->end_date->format('d M Y') : 'N/A' }}</td>
                                        <td><span class="badge badge-success">Active</span></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <div class="text-center py-4">
                        <i class="fa fa-file-signature text-lightest-grey f-36 mb-2"></i>
                        <p class="f-14 text-dark-grey font-weight-bold mb-1">No Active Contracts Found</p>
                        <p class="f-12 text-lightest-grey">Master Service Agreement (MSA) & SLA document drafting in progress.</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
