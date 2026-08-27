@php
    $clientDocs = \App\Models\ClientDocument::where('user_id', $client->id)->get();
    $projectFiles = \App\Models\ProjectFile::leftJoin('projects', 'projects.id', '=', 'project_files.project_id')
        ->where('projects.client_id', $client->id)
        ->select('project_files.*')
        ->get();
    
    $totalVaultFiles = $clientDocs->count() + $projectFiles->count();
@endphp

<div class="row w-100 mx-0">
    <div class="col-md-12 px-0">
        <div class="card border-0 b-shadow-4 rounded-lg bg-white mb-4 w-100">
            <div class="card-header bg-white border-bottom-grey py-3 px-4 d-flex justify-content-between align-items-center flex-wrap">
                <div>
                    <h4 class="f-15 font-weight-bold text-darkest-grey mb-1">
                        <i class="fa fa-folder-open text-primary mr-2"></i>Files Vault & Digital Assets
                    </h4>
                    <p class="f-12 text-dark-grey mb-0">Central secure repository storing project files, digital assets, and attachments for {{ $client->name }}.</p>
                </div>
                <div class="mt-2 mt-sm-0">
                    <span class="badge badge-primary px-3 py-2 font-weight-bold f-12 rounded-pill shadow-xs" style="background-color: #2563EB;">
                        <i class="fa fa-file-archive mr-1"></i>Total Files: {{ $totalVaultFiles }}
                    </span>
                </div>
            </div>
            <div class="card-body p-4">
                @if($totalVaultFiles > 0)
                    <div class="row">
                        @foreach($clientDocs as $doc)
                            <div class="col-md-4 col-sm-6 mb-3">
                                <div class="card border rounded-lg p-3 h-100 file-card hover-shadow transition" style="border-color: #E2E8F0 !important;">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="p-2 bg-light-primary rounded text-primary mr-3 f-20 flex-shrink-0" style="width: 42px; height: 42px; display: flex; align-items: center; justify-content: center;">
                                            <i class="fa fa-file-pdf"></i>
                                        </div>
                                        <div class="text-truncate">
                                            <h5 class="f-14 font-weight-bold text-darkest-grey mb-0 text-truncate" title="{{ $doc->name }}">{{ $doc->name }}</h5>
                                            <span class="f-11 text-lightest-grey">Vault Asset • {{ $doc->created_at ? $doc->created_at->format('d M Y') : 'N/A' }}</span>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mt-2 pt-2 border-top">
                                        <span class="badge badge-light border text-dark-grey f-11 px-2 py-1">Vault Asset</span>
                                        <a href="{{ route('client-docs.download', $doc->id) }}" class="btn btn-xs btn-outline-primary rounded-pill px-3">
                                            <i class="fa fa-download mr-1"></i>Download
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        @foreach($projectFiles as $pfile)
                            <div class="col-md-4 col-sm-6 mb-3">
                                <div class="card border rounded-lg p-3 h-100 file-card hover-shadow transition" style="border-color: #E2E8F0 !important;">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="p-2 bg-light-info rounded text-info mr-3 f-20 flex-shrink-0" style="width: 42px; height: 42px; display: flex; align-items: center; justify-content: center;">
                                            <i class="fa fa-file-archive"></i>
                                        </div>
                                        <div class="text-truncate">
                                            <h5 class="f-14 font-weight-bold text-darkest-grey mb-0 text-truncate" title="{{ $pfile->filename }}">{{ $pfile->filename }}</h5>
                                            <span class="f-11 text-lightest-grey">Project File • {{ $pfile->created_at ? $pfile->created_at->format('d M Y') : 'N/A' }}</span>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mt-2 pt-2 border-top">
                                        <span class="badge badge-info border text-white f-11 px-2 py-1">Project Asset</span>
                                        <a href="{{ asset_url_local_s3('project-files/' . $pfile->project_id . '/' . $pfile->hashname) }}" target="_blank" class="btn btn-xs btn-outline-info rounded-pill px-3">
                                            <i class="fa fa-download mr-1"></i>Download
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="text-center py-5">
                        <div class="mb-3">
                            <i class="fa fa-folder-open text-lightest-grey" style="font-size: 48px;"></i>
                        </div>
                        <h5 class="f-15 font-weight-bold text-darkest-grey mb-1">Files Vault Repository Empty</h5>
                        <p class="f-13 text-dark-grey mb-0">No project files, digital assets, or media attachments stored for this client yet.</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
