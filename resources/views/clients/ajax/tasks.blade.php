<div class="row w-100 mx-0">
    <div class="col-md-12 px-0">
        <div class="card border-0 b-shadow-4 rounded-lg bg-white mb-4 w-100">
            <div class="card-header bg-white border-bottom-grey py-3 px-4 d-flex justify-content-between align-items-center">
                <h4 class="f-15 font-weight-bold text-darkest-grey mb-0">
                    <i class="fa fa-tasks text-primary mr-2"></i>Client Tasks & Follow-ups
                </h4>
            </div>
            <div class="card-body p-4">
                @php
                    $tasks = \App\Models\Task::leftJoin('projects', 'projects.id', '=', 'tasks.project_id')
                        ->where('projects.client_id', $client->id)
                        ->select('tasks.*')
                        ->get();
                @endphp

                @if($tasks->count() > 0)
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead class="thead-light">
                                <tr>
                                    <th>Task #</th>
                                    <th>Task Name</th>
                                    <th>Due Date</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($tasks as $task)
                                    <tr>
                                        <td>#{{ $task->id }}</td>
                                        <td>{{ $task->heading }}</td>
                                        <td>{{ $task->due_date ? $task->due_date->format('d M Y') : 'N/A' }}</td>
                                        <td><span class="badge badge-info">{{ ucfirst($task->status) }}</span></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <div class="text-center py-4">
                        <i class="fa fa-check-circle text-success f-36 mb-2"></i>
                        <p class="f-14 text-dark-grey font-weight-bold mb-1">All Onboarding Tasks Complete</p>
                        <p class="f-12 text-lightest-grey">No pending tasks or action items associated with this client.</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
