@extends('admin.layouts.grid')
@section('title', $item->name)
@section('item_view', true)
@section('back', route('admin.items.index'))
@section('content')
    <div class="dashboard-tabs">
        @include('admin.items.includes.tabs-nav')
        <div class="dashboard-tabs-content">
            <div class="card">
                <div class="card-header p-3 border-bottom-small">
                    <form action="{{ request()->url() }}" method="GET">
                        <div class="row g-3">
                            <div class="col-12 col-lg-10">
                                <input type="text" name="search" class="form-control"
                                    placeholder="{{ translate('Search...') }}" value="{{ request('search') ?? '' }}">
                            </div>
                            <div class="col">
                                <button class="btn btn-primary w-100"><i class="fa fa-search"></i></button>
                            </div>
                            <div class="col">
                                <a href="{{ url()->current() }}"
                                    class="btn btn-secondary w-100">{{ translate('Reset') }}</a>
                            </div>
                        </div>
                    </form>
                </div>
                <div>
                    @if ($comments->count() > 0)
                        <div class="overflow-hidden">
                            <div class="table-custom-container">
                                <table class="table-custom table">
                                    <thead>
                                        <tr>
                                            <th>{{ translate('ID') }}</th>
                                            <th>{{ translate('Comment') }}</th>
                                            <th class="text-center">{{ translate('User') }}</th>
                                            <th class="text-center">{{ translate('Published Date') }}</th>
                                            <th class="text-center">{{ translate('Action') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($comments as $comment)
                                            <tr>
                                                <td>
                                                    <i class="fa-solid fa-hashtag"></i>
                                                    {{ $comment->id }}
                                                </td>
                                                <td>
                                                    <textarea rows="3" class="form-control" readonly>{{ $comment->replies->first()->body }}</textarea>
                                                </td>
                                                <td class="text-center">
                                                    <a href="{{ route('admin.members.users.edit', $comment->user->id) }}"
                                                        class="text-dark">
                                                        <i class="fa-regular fa-user me-1"></i>
                                                        {{ $comment->user->username }}
                                                    </a>
                                                </td>
                                                <td class="text-center">
                                                    {{ dateFormat($comment->created_at) }}
                                                </td>
                                                <td>
                                                    <div class="row g-3 row-cols-auto justify-content-center">
                                                        <div class="col">
                                                            <a href="{{ $comment->getLink() }}" target="_blank"
                                                                class="btn btn-outline-secondary">
                                                                <i class="fa-solid fa-up-right-from-square me-1"></i>
                                                                {{ translate('View') }}
                                                            </a>
                                                        </div>
                                                        <div class="col">
                                                            <form
                                                                action="{{ route('admin.items.comments.delete', [$item->id, $comment->id]) }}"
                                                                method="POST">
                                                                @csrf @method('DELETE')
                                                                <button class="btn btn-danger action-confirm"><i
                                                                        class="fa-regular fa-trash-can"></i></button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @else
                        @include('admin.partials.empty', ['empty_classes' => 'empty-lg'])
                    @endif
                </div>
            </div>
            {{ $comments->links() }}
        </div>
    </div>
@endsection
