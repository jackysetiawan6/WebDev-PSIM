@extends('layouts.app')

@section('title', 'Physical Security Incident Management')

@section('content')
    @include('animations.eyes')
    <div class="panel" style="display: none;">
        @include('components.panel')
        <div class="panel-bottom">
            <table class="datatable" id="datatable" style="width: 100%;">
                <thead>
                    <tr>
                        <th>Incident ID</th>
                        <th>Status</th>
                        <th>Source</th>
                        <th>Location</th>
                        <th>Created On</th>
                        <th>Modified On</th>
                        <th>Incident Owner</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($incidents as $incident)
                        <tr>
                            <td>INC-{{ $incident->incident_id }}</td>
                            <td>{{ $incident->status }}</td>
                            <td>{{ $incident->source->name }}</td>
                            <td>{{ $incident->location->name }}</td>
                            <td>{{ $incident->created_at }}</td>
                            <td>{{ $incident->updated_at }}</td>
                            <td>{{ $incident->incident_owner }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
