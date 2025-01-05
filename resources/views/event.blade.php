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
                        <th>Event ID</th>
                        <th>Incident ID</th>
                        <th>Event Timestamp</th>
                        <th>Source</th>
                        <th>Name</th>
                        <th>Remarks</th>
                        <th>Priority</th>
                        <th>Incident Owner</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($events as $event)
                        <tr>
                            <td>EV-{{ $event->event_id }}</td>
                            <td>{{ $event->incident_id ? 'INC-' + $event->incident_id : '-' }}</td>
                            <td>{{ $event->created_at }}</td>
                            <td>{{ $event->source->name }}</td>
                            <td>{{ $event->name }}</td>
                            <td>{{ $event->remarks }}</td>
                            <td>
                                <div class="rounded-pill d-flex align-items-center p-1 col-{{ $event->priority }}">
                                    <div class="prio-circle"></div>
                                    <p class="m-0">{{ ucfirst($event->priority) }}</p>
                                </div>
                            </td>
                            <td>{{ $event->incident_owner }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
